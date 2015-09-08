var geocoder;
var map;
var lat, lng;
var iplat = 0, iplng = 0;
var mapPosition;
var marker, infowindow;
var latlng;
var addressMarker;



$(document).ready(function(){
	
	
	

	////////////////////////////////////////////////////// MAP CCD DATA VISUALIZATION //////////////////////////////////////////////


	var ccd, pointarray, heatmap;
	var heatMapData = [];
	var markers = [];
	var markerClusterer = null;


	function initMapCCD(status) {
		if(status == "sucess") {
			lat = mapPosition.coords.latitude;
			lng = mapPosition.coords.longitude;
		}

		latlng = new google.maps.LatLng(lat, lng);
		// Create an array of styles.
		var styles = [

		  {
		    stylers: [
		      { hue: "#ffcb08" },
			  { saturation: 100 },
			  { lightness: -20 },
			  { gamma: 2.01 }
		    ]
		  },{
		    featureType: "landscape.natural",
		    elementType: "geometry",
		    stylers: [
		      { lightness: -100 },
			  { saturation: 60 }
		    ]
		  },{
		    featureType: "road",
		    elementType: "labels",
		    stylers: [
		      { visibility: "simplified" }
		    ]
		  }

		];
		var styledMap = new google.maps.StyledMapType(styles,
		    {name: "Styled Map"});


		var mapOptions = {
		  	zoom: 3,
		  	center: latlng,		
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeControlOptions: {
				      mapTypeIds: [google.maps.MapTypeId.SATELLITE, 'map_style']
			},
			mapTypeId: google.maps.MapTypeId.HYBRID,
			mapTypeControl: false,
			streetViewControl: false,
			overviewMapControl: false,
			scrollwheel: false,
			disableDoubleClickZoom: true,
			draggable: true

		};


		ccd = new google.maps.Map(document.getElementById('map-embed'),
		    mapOptions);

		 //ccd.mapTypes.set('map_style', styledMap);
		 //ccd.setMapTypeId('map_style');



		downloadUrl("functions/location_iframe.php", function(data) {


			var array_data = JSON.parse(data.response);

			for (var i = 0; i < array_data.length; i++) { //loop through nodes getting info

				var str = array_data[i];
				var str0 = str.replace("(", "");
				var str1 = str0.replace(")", "");
				var arr = str1.split(",");
				var lat = arr[0];
				var lng = arr[1];
				var intensity = parseInt(arr[2]);
				console.log(lat + " " + lng + " " + intensity);
				latlng = new google.maps.LatLng(lat, lng);
		 		var hObj = {
		  			location: latlng,
					weight: intensity
		 		}
		
				if(intensity == 0) {
					var str_ccd_info = ccd_incomplet;	
				} else {
					var str_ccd_info =  ccd_info_intensity + " " + intensity;
				}
				marker = new google.maps.Marker({
							position: latlng,
							title: str_ccd_info
						});

				google.maps.event.addListener(marker, 'click', function() {

					var infoIntensity = new google.maps.InfoWindow({ 
							content: "<div style='color: black'>" + this.getTitle() + "</div>",
							size: new google.maps.Size(30,100)
					});

			    	infoIntensity.open(ccd,this);
					ccd.panTo(this.getPosition());
			  	});

				markers.push(marker);
		 		heatMapData.push(hObj); //push object onto array
		 	}

			heatmap = new google.maps.visualization.HeatmapLayer({
				data: heatMapData,
				dissipating: false,
				radius: 1,
				map: ccd
			});

			markerClusterer = new MarkerClusterer(ccd, markers, {
	          maxZoom: null,
	          gridSize: null,
	          styles: null
	        });
		});


	}

	function downloadUrl(url, callback) {
	  var request = window.ActiveXObject ?
	      new ActiveXObject('Microsoft.XMLHTTP') :
	      new XMLHttpRequest;

	  request.onreadystatechange = function() {
	    if (request.readyState == 4) {
	      request.onreadystatechange = doNothing;
	      callback(request, request.status);
	    }
	  };

	  request.open('GET', url, true);
	  request.send(null);
	}


	function doNothing() {} 




	////////////////////////////////////////////////////////////// INIT MAPS ///////////////////////////////////////////////////////

	function getLocation() {
	    if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(success, error);
	    } else {
	  		error('not supported');
		}
	}
	function ipLocation() {
		
		geocoder = new google.maps.Geocoder();
		$.get("http://ipinfo.io", function(response) {
			address = response.city + ", " + response.region + ", " + response.country;
			console.log(address);
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {  
					iplat 	= results[0].geometry.location.lat();
					iplng	= results[0].geometry.location.lng();
					lat = iplat;
					lng = iplng;
					console.log("ipaddress " + lat +", " + lng);
					initMapCCD("error");
				} else {
					lat = 0;
					lng = 0;
					initMapCCD("error");
				}
		   	});

		}, "jsonp");
		return true;
	}
	
	function noLocation() {
		lat = 0;
		lng = 0;
		
		setTimeout(function() {initMapCCD("error");}, 3000);
		return true;
	}
	

	function success(position) {
		mapPosition = position;

		if($.mobile.activePage.attr("id") == "p1" || $.mobile.activePage.attr("id") == "p2" || $.mobile.activePage.attr("id") == "p3" || $.mobile.activePage.attr("id") == "p4"){
			initMap("sucess");
		}
		if($.mobile.activePage.attr("id") == "index"){
			initMapCCD("sucess");
		}
	}
	function error(msg) {
		console.log(msg);
		ipLocation();
	}


	//google.maps.event.addDomListener(window, 'load', getLocation); //get current Position
	google.maps.event.addDomListener(window, 'load', noLocation); // without current position




}); //END FUNCTION
