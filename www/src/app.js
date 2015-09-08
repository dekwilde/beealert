var geocoder;
var map;
var lat, lng;
var iplat = 0, iplng = 0;
var mapPosition;
var marker, infowindow;
var latlng;
var addressMarker;
var arquivo_upload = []



function go(url) {
	window.location.href = url;
}


function confirm_del(url) {
	var r = confirm("Excluir o registro definitivamente?");
    if (r) {
		$.ajax({
	        type: 'GET',
	        url: url,      
	        success: function(data){
				go("home.php");
	        },
	        error: function(){
	            alert(error_str);
	        }
	    });		
	}
}




$(document).ready(function(){
	
	

////////////////////////////////////////////////////////////// FUNCTIONS ///////////////////////////////////////////////////////
function showPageLoadingMsg(th, txt) {
	$.mobile.loading( "show", {
	  text: txt,
	  textVisible: true,
	  theme: th,
	  html: ""
	});	
}

jQuery.fn.ForceNumericOnly =
function()
{
    return this.each(function()
    {
        $(this).keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (
                key == 8 || 
                key == 9 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};


$("#alert").hide();

$("#alert").click(function() {
	$(this).hide()
})

//reset type=date inputs to text
$( document ).bind( "mobileinit", function(){
  $.mobile.page.prototype.options.degradeInputs.date = true;
});

//Email
$("input[name='email']").focusout(function(){
	//var regex = new RegExp("^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]+(.){2}[a-zA-Z]{2,4})+$");
	var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(!$(this).val().match(regex)){
		$("#alert").show();
		$("#alert").html(error_email);
	    $(this).val("");
	    //$(this).focus();
	} else {
		$("#alert").hide();
	}
});


//Nome
$("input[name='nome']").focusout(function(){
    if(nomeComposto($(this).val())){
		$("#alert").show();
		$("#alert").html(error_nome);
        $(this).val("");
		//$(this).focus();
       //$("input[name='nome']").focus();
    } else {
		$("#alert").hide();
	}
});

//Senha Sign Confirm
$("#senhaconfirm").focusout(function(){
	
	confirm = $("#senhaconfirm").val();
	pass = $("#senhasign").val();	
	console.log(confirm +  " senha: " + pass)
	
	if(!confirm) {
		$("#alert").show();
		$("#alert").html(error_confirm);	
	} 
	else if(pass != confirm) {
		$("#alert").show();
		$("#alert").html(error_pass);
        $(".senhasign").val("");
		$(".senhaconfirm").val("");		
	} else {
		$("#alert").hide();
	}	
});



function nomeComposto(nome) {
    var qt = nome.split(' ');
    if(qt.length < 2) {
       var msg = "error";
       return msg;
    } else {
        var msg = null;
        return msg;
	}
}





////////////////////////////////////////////////// SIGN ////////////////////////////////////////////////////////////////

$( "#btSign" ).click(function() {

 	nome 	= $('#formSign #nome').val();
    email 	= $('#formSign #email').val();
	empresa = $('#formSign #empresa').val();
 	senha 	= $('#formSign #senhasign').val();
	confirm = $('#formSign #senhaconfirm').val();
    pais 	= $('#formSign #pais').val();
    estado 	= $('#formSign #estado').val();
    cidade 	= $('#formSign #cidade').val();
    cep 	= $('#formSign #cep').val();
    fone 	= $('#formSign #fone').val();
	celular	= $('#formSign #celular').val();
	
	escolaridade	= $('#formSign #escolaridade').val() || [];
	escolaridade 	= escolaridade.join( ", ");
	profissao 		= $("#formSign #profissao").val();

	atividade 	= $( "#formSign #atividade" ).val() || [];
	atividade 	= atividade.join( ", ");
	abelhas 	= $( "#formSign #abelhas" ).val() || [];
	abelhas 	= abelhas.join( ", ");
	exploracao 	= $( "#formSign #exploracao" ).val() || [];
	exploracao 	= exploracao.join( ", ");
	
	obs 	= $('#formSign #obs').val();	
	aceito = $("input[name='aceito']:checked").val();
	captcha	= $('#formSign #captcha').val();
	
	if(nome=='') {
		alert(error_nome);
		$("#formSign #nome").focus();
        return false;
    } 
	else if(email =='') {
		alert(null_email);
		$("#formSign #email").focus();
        return false;
    }
	else if(senha=='') {
		alert(null_senha);
		$("#formSign #senhasign").focus();
        return false;
    }  
	else if(confirm=='') {
		alert(error_confirm);
		$("#formSign #senhaconfirm").focus();
        return false;
    }   
	else if(pais =='') {
		alert(null_pais);
		$("#formSign #pais").focus();
		return false;
  	}
	else if(estado =='') {
		alert(null_estado);
		$("#formSign #estado").focus();
		return false;
  	}
	else if(cidade =='') {
		alert(null_cidade);
		$("#formSign #cidade").focus();
		return false;
  	}
	else if(cep =='') {
		alert(null_cep);
		$("#formSign #cep").focus();
		return false;
  	}

	else if(!escolaridade) {
		alert(null_escolaridade);
		$("#formSign #escolaridade").focus();
		return false;
  	}

	else if(!atividade) {
		alert(null_atividade);
		$("#formSign #atividade").focus();
		return false;
  	}
	else if(abelhas =='') {
		alert(null_abelhas);
		$("#formSign #abelhas").focus();
		return false;
  	}
	else if(exploracao =='') {
		alert(null_exploracao);
		$("#formSign #exploracao").focus();
		return false;
  	}
	else if (!aceito) {
		alert(null_aceito);  
		$("#formSign #aceito").focus();     
		return false;
	}
	else if(captcha == '') {
		alert("Por favor, preencha o campo de verificação");
		$("#formSign #captcha").focus();
        return false;
    }
	else {
		$.ajax({
	        type: 'POST',
	        url: 'functions/sign.php',
	        data: { 
				nome:nome,
			    email:email,
				empresa:empresa,
				senha: senha,
			    pais:pais,
			    estado:estado,
			    cidade:cidade,
			    cep:cep,
			    fone:fone,
				celular:celular,
				escolaridade:escolaridade,
				profissao:profissao,
			    atividade:atividade,
				abelhas:abelhas,
				exploracao:exploracao,
				obs:obs,
				captcha:captcha
			},
			dataType: 'json',
			async: true,
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            $.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.status == "success") {
		        	if(data.mode == "edit") {
						go("home.php");
					} else {
						$.mobile.navigate("#confirm");
					}
				} 
				if(data.status == "double") {
					alert(error_double);
				}
				if(data.status == "captcha") {
					alert("Verifique o código de verificação, lembre-se em utilizar também as letras Maiúsculas");
				}
	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }                         
});	


////////////////////////////////////////////////// RECOVER ////////////////////////////////////////////////////////////////

$( "#form-recover" ).submit(function() {

	un = $(this).find('#email').val();
	if(un=='') {
		alert("Preencha o email");
        return false;
    }     
	else {
		$.ajax({
	        type: 'POST',
	        url: 'functions/recover.php',
	        data: { email: un},
			dataType: 'json',
			async: true,
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            
				$.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.status == "sucess") {
		        	alert(status_recover);
				} else {
				 	alert(error_recover)					   
				}
				
	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }                         
});

////////////////////////////////////////////////// LOGIN ////////////////////////////////////////////////////////////////

//$( "#form-login" ).submit(function() { Login(); });	
$("#btLogin").click(function() { Login(); })

function Login() {
	un = $('#form-login #email').val();
    pw = $('#form-login #senha').val();
	if(un=='') {
		alert("Preencha o email");
        return false;
    }     
	else if(pw =='') {
		alert("Preencha a senha");
		return false;
  	}
	else {
		$.ajax({
	        type: 'POST',
	        url: 'functions/login.php',
	        data: { email: un, pass: pw},
			dataType: 'json',
			async: true,
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            
				$.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.id == "error") {
		        	alert(error_login);
				} else {
				 	login = true; 
					id = data.id;
					username = data.name;
					go("home.php");				   
				}
				
	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }
	
}




/////////////////////////////////////////////////////////////// 6 PASSO - Upload ///////////////////////////////////////////////////


$("#formCCD6 #btSubmit").click(function(e){
	   

	obs 		= $('#formCCD6 #obs').val();
	refer 		= $('#formCCD6 #refer').val();	

	console.log(arquivo_upload.toString());
	
	$.ajax({
        type: 'POST',
        url: 'functions/ccd.php?p=6',
		dataType: 'json',
		async: true,
		data:{
			obs:obs,
			refer:refer
           	
        },
		
        beforeSend: function() {
            showPageLoadingMsg("a", "Carregando");
        },
        complete: function() {
            $.mobile.loading( "hide" );
        },       
        success: function(data){
            if(data.status == "sucess") {
				$.mobile.navigate("#concluido");
			} else {
				alert(error_str);					   
			}

        },
        error: function(){
            alert(error_str);
        }
    });
})






/////////////////////////////////////////////////////////////// 5 PASSO - Dados Científicos ///////////////////////////////////////////////////


$("#formCCD5 #perdidos").ForceNumericOnly();
$("#formCCD5 #perdas").ForceNumericOnly();

$('#formCCD5 #perdas').mask("#.##0,00", {reverse: true, maxlength: false});
$('#formCCD5 #perdidos').mask("#.##0,00", {reverse: true, maxlength: false});



$("#formCCD5 #btSubmit").click(function(e){

	abelhas 	= $( "#formCCD5 #abelhas" ).val() || [];
	abelhas 	= abelhas.join( ", ");
	
 	areas 		= $('#formCCD5 #areas').val();
	
	prop 		= $("input[name='prop']:checked").val();
	propdados	= $('#formCCD5 #propdados').val();

	moeda 		= $("input[name='moeda']:checked").val();
	perdidos	= $('#formCCD5 #perdidos').val();
	   
	if(abelhas =='') {
		alert(null_abelhas);
		$("#formCCD5 #abelhas").focus();
		return false;
  	}
	else if(areas =='') {
		alert(null_areas);
		$("#formCCD5 #areas").focus();
		return false;
  	}
	else if(prop ==null) {
		alert(null_prop);
		$("#formCCD5 #prop").focus();
		return false;
  	}
	else {
        //send ajax to basedata
		$.ajax({
	        type: 'POST',
	        url: 'functions/ccd.php?p=5',
			dataType: 'json',
			async: true,
			data: {
				abelhas:abelhas,
				areas:areas,
				prop:prop,
				propdados:propdados,
				moeda:moeda,
				perdidos:perdidos
            },
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            $.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.status == "sucess") {
					$.mobile.navigate("#p6");
				} else {
					alert(error_str);					   
				}

	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }
})

	



/////////////////////////////////////////////////////////////// 4 PASSO - Dados Científicos ///////////////////////////////////////////////////


$("#formCCD4 #btSubmit").click(function(e){

	causas 		= $( "#formCCD4 #causas" ).val() || [];
	causas 		= causas.join( ", ");
	
	aplicacao 	= $("input[name='aplicacao']:checked").val();
	culturas 	= $('#formCCD4 #culturas').val();
	pesticidas 	= $('#formCCD4 #pesticidas').val();
	
	if(causas=='') {
		alert(null_causas);
		$("#formCCD4 #causas").focus();
        return false;
    }    

	else if(aplicacao==null) {
		alert(null_aplicacao);
		$("#formCCD4 #aplicacao").focus();
        return false;
    }
	else {
        //send ajax to basedata
		$.ajax({
	        type: 'POST',
	        url: 'functions/ccd.php?p=4',
			data: 
			{ 					
				causas:causas,
				aplicacao:aplicacao,
				culturas:culturas,
				pesticidas:pesticidas
			},
			dataType: 'json',
			async: true,
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            $.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.status == "sucess") {
					$.mobile.navigate("#p5");
				} else {
					alert(error_str);					   
				}

	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }
})

	

/////////////////////////////////////////////////////////////// 3 PASSO - SLIDERS CALCULATOR ///////////////////////////////////////////////////
$("#formCCD3 #total").bind('keyup change click', function (e) {
    if (! $(this).data("previousValue") || $(this).data("previousValue") != $(this).val())
   {       
        $(this).data("previousValue", $(this).val());
        
        var num = $(this).val();
        $("#formCCD3 #sliderBaixa").attr("max", num); 
        $("#formCCD3 #sliderBaixa").val(0);
        $("#formCCD3 #sliderBaixa").slider("refresh");
    
        $("#formCCD3 #sliderMedia").attr("max", num); 
        $("#formCCD3 #sliderMedia").val(0);
        $("#formCCD3 #sliderMedia").slider("refresh");
        
        $("#formCCD3 #sliderAlta").attr("max", num); 
        $("#formCCD3 #sliderAlta").val(0);
        $("#formCCD3 #sliderAlta").slider("refresh");

        // $("#formCCD3 #sliderTudo").attr("max", num); 
        // $("#formCCD3 #sliderTudo").val(0);
        // $("#formCCD3 #sliderTudo").slider("refresh");

		$('#formCCD3 #resultado').html("");
		$('#formCCD3 #pct').html("");
   }
        
});



$("#formCCD3 #sli").bind('mouseup keyup touchend', function(e) {
    var total = $("#formCCD3 #total").val();
    if(total) {
        var baixa = $("#formCCD3 #sliderBaixa").val();
        var media = $("#formCCD3 #sliderMedia").val();
        var alta  = $("#formCCD3 #sliderAlta").val();
		//var tudo  = $("#formCCD3 #sliderTudo").val();
        var maxBaixa = total - media - alta  //- tudo;
        var maxMedia = total - baixa - alta  //- tudo;
        var maxAlta  = total - baixa - media //- tudo;
		//var maxTudo  = total - baixa - media - alta;
    
        $("#formCCD3 #sliderBaixa").attr("max", maxBaixa);
        $("#formCCD3 #sliderBaixa").slider("refresh");

        $("#formCCD3 #sliderMedia").attr("max", maxMedia);
        $("#formCCD3 #sliderMedia").slider("refresh");
    
        $("#formCCD3 #sliderAlta").attr("max", maxAlta);
        $("#formCCD3 #sliderAlta").slider("refresh");

        // $("#formCCD3 #sliderTudo").attr("max", maxTudo);
        // $("#formCCD3 #sliderTudo").slider("refresh");
    
        var resultado = parseInt(baixa) + parseInt(media) + parseInt(alta) //+ parseInt(tudo);
		var pct		  = Math.round(parseInt(resultado)/parseInt(total) * 100) + "% do total";
        $('#formCCD3 #resultado').html(resultado);
		$('#formCCD3 #pct').html(pct);
    } else {
        alert(null_total);
        $("#formCCD3 #sliderBaixa").val(0);
        $("#formCCD3 #sliderBaixa").slider("refresh");    
        $("#formCCD3 #sliderMedia").val(0);
        $("#formCCD3 #sliderMedia").slider("refresh");
        $("#formCCD3 #sliderAlta").val(0);
        $("#formCCD3 #sliderAlta").slider("refresh");
        // $("#formCCD3 #sliderTudo").val(0);
        // $("#formCCD3 #sliderTudo").slider("refresh");
        $("#formCCD3 #total").focus();
    }
    
});



$("#formCCD3 #total").ForceNumericOnly();
$("#formCCD3 #sliderBaixa").ForceNumericOnly();
$("#formCCD3 #sliderMedia").ForceNumericOnly();
$("#formCCD3 #sliderAlta").ForceNumericOnly();

$("#formCCD3 #btSubmit").click(function(e){
    var total = $("#formCCD3 #total").val();
    var baixa = $("#formCCD3 #sliderBaixa").val();
    var media = $("#formCCD3 #sliderMedia").val();
    var alta  = $("#formCCD3 #sliderAlta").val();
	//var tudo  = $("#formCCD3 #sliderTudo").val();
    if(!total || baixa == 0 && media == 0 && alta == 0) {
        alert(null_slider);
        return false;
    } else {
        //send ajax to basedata
		$.ajax({
	        type: 'POST',
	        url: 'functions/ccd.php?p=3',
	        data: 
				{ 
					total:total, 
					baixa:baixa, 
					media:media, 
					alta:alta
					//tudo:tudo
				},
			dataType: 'json',
			async: true,
	        beforeSend: function() {
	            showPageLoadingMsg("a", "Carregando");
	        },
	        complete: function() {
	            $.mobile.loading( "hide" );
	        },       
	        success: function(data){
	            if(data.status == "sucess") {
					$.mobile.navigate("#p4");
				} else {
					alert(error_str);					   
				}

	        },
	        error: function(){
	            alert(error_str);
	        }
	    });
    }
})



////////////////////////////////////////////////////// 2 PASSO - MAP LOCALIZATION //////////////////////////////////////////////

$( "#p2" ).on( "pageshow", function( event, ui ) {
		
    setTimeout(function() {
        google.maps.event.trigger(map, "resize");
        map.setCenter(marker.getPosition());
		setTimeout(function(){infowindow.open(map,marker)}, 3000);     
    }, 500);

});

function initMap(status) {
	if(status == "sucess") {
		lat = mapPosition.coords.latitude;
		lng = mapPosition.coords.longitude;
	}
	geocoder = new google.maps.Geocoder();
	latlng = new google.maps.LatLng(lat, lng);
	var mapOptions = {
		zoom: 11,
		//minZoom: 17,
		//maxZoom: 18,
		center: latlng,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.HYBRID,
		mapTypeControl: false,
		streetViewControl: false,
		overviewMapControl: false
	}
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	initMarker();	
}

function initMarker() {
	marker = new google.maps.Marker({
		map: map,
		draggable: true,
		position: latlng
	});
	map.setCenter(marker.getPosition());
	
	google.maps.event.addListener(marker, 'dragend', function() {
		map.panTo(marker.getPosition());
		dragLatLng();
  	});  
    infowindow = new google.maps.InfoWindow({ 
			content: status_map,
			size: new google.maps.Size(30,100)
	});
  	
	google.maps.event.addListener(marker, 'click', function() {
    	infowindow.open(map,marker);
		map.panTo(marker.getPosition());
  	});      
}


function dragLatLng() {
  var input = marker.getPosition();
  geocoder.geocode({'latLng': input}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
		if (results[0]) {			
			map.setCenter(marker.getPosition());
			map.setZoom(17); 
			latlng 	= results[0].geometry.location;
			addressMarker = results[0].formatted_address;

	
			console.log("LatLng: " 	+ latlng);
			console.log("address: " + addressMarker);

			infowindow.setContent("<div style='color: black'>"+ addressMarker + "</div>");
			infowindow.open(map,marker);
		} else {
			
		}
    } else {
      alert("<div style='color: black'>" + error_marker + status + "</div>");
    }
  });
}

$("#formCCD2 #btAddress").click(function() {
    
	var address = $('#formCCD2 #address').val();
    console.log(address);
	if(address) {
    	geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            marker.setPosition(results[0].geometry.location);
		    map.setCenter(marker.getPosition());
			map.setZoom(17);
        
			latlng 	= results[0].geometry.location;
			addressMarker = results[0].formatted_address;

			console.log("LatLng: " 	+ latlng);
			console.log("address: " + addressMarker);
			
			infowindow.setContent(status_drag);
			infowindow.open(map,marker);
        } else {
            alert(error_map);
        }
    });
  } else {
      alert(null_map);
      $('#address').focus();
  }
});

$("#formCCD2 #btSubmit").click(function(e) {
	tipo 	= $("#formCCD2 input[name='tipo']:checked").val();
	regra 	= $("#formCCD2 input[name='regra']:checked").val();	
	if(!tipo) {
		alert(null_tipo);
	} 
	else if (!regra) {
		alert("Autorize o uso do público do local do seu apiário")
	}
	else if(addressMarker) {
	    var r = confirm(check_map);
	    if (r) {
	        //send ajax
			$.ajax({
		        type: 'POST',
		        url: 'functions/ccd.php?p=2',
		        data: 
					{ 
						latlng:latlng.toString(), 
						addressMarker:addressMarker,
						tipo:tipo,
						regra:regra 
					},
				dataType: 'json',
				async: true,
		        beforeSend: function() {
		            showPageLoadingMsg("a", "Carregando");
		        },
		        complete: function() {
		            $.mobile.loading( "hide" );
		        },       
		        success: function(data){
		            if(data.status == "sucess") {
						$.mobile.navigate("#p3");
					} else {
						alert(error_str);					   
					}

		        },
		        error: function(){
		            alert(error_drag + error_str);
		        }
		    });
	    } else {
	        return false;
	    }
	} else {
		alert(null_marker);
		return false;
	}
});

////////////////////////////////////////////////////// 1 PASSO - Date //////////////////////////////////////////////


function p1() {
  var mes = $('#formCCD1 #mes').val();
  if(mes) {
    //send ajax
	$.ajax({
        type: 'POST',
        url: 'functions/ccd.php?p=1',
        data: 
			{ 
				mes:mes 
			},
		dataType: 'json',
		async: true,
        beforeSend: function() {
            showPageLoadingMsg("a", "Carregando");
        },
        complete: function() {
            $.mobile.loading( "hide" );
        },       
        success: function(data){
            if(data.status == "sucess") {
				$.mobile.navigate("#p2");
			} else {
				alert(error_str);					   
			}

        },
        error: function(error){
            alert(error_str);
        }
    });

  } else {
      alert(error_mes);
      return false;
  }	
}

$("#formCCD1 #btSubmit").click(function() { p1(); })
//$( "#formCCD1" ).submit(function() { p1(); });

	

////////////////////////////////////////////////////// MAP CCD DATA VISUALIZATION //////////////////////////////////////////////


var ccd, pointarray, heatmap;
var heatMapData = [];
var markers = [];
var markerClusterer = null;


$( "#index" ).on( "pageshow", function( event) {
    //console.log(ui);

    setTimeout(function() {
        google.maps.event.trigger(ccd, "resize");    
    }, 500);

});


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
	  	zoom: 1,
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


	ccd = new google.maps.Map(document.getElementById('map-ccd'),
	    mapOptions);

	 //ccd.mapTypes.set('map_style', styledMap);
	 //ccd.setMapTypeId('map_style');



	downloadUrl("functions/location.php", function(data) {


		var array_data = JSON.parse(data.response);
		
		for (var i = 0; i < array_data.length; i++) { //loop through nodes getting info

			var str = array_data[i];
			var str0 = str.replace("(", "");
			var str1 = str0.replace(")", "");
			var str2 = str1.replace(";", ",");
			var arr = str2.split(",");
			var lat = arr[0];
			var lng = arr[1];
			var intensity = parseInt(arr[2]);

			var arrMark = str.split("; ");
			causas = arrMark[2];
			info_id = arrMark[3];
			console.log("causas " + causas);
			
			
			console.log(lat + " " + lng + " " + intensity);
			latlng = new google.maps.LatLng(lat, lng);
	 		var hObj = {
	  			location: latlng,
				weight: intensity
	 		}
			
			if(intensity == 0) {
				var str_ccd_info = ccd_incomplet;	
			} else {
				//var str_ccd_info = info_id + " - " + ccd_info_causas + "<br>" + causas + ".<br><br>" + ccd_info_intensity + intensity;
				var str_ccd_info = info_id + " - " + ccd_info_intensity + " " +intensity;
			}
			
			
			marker = new google.maps.Marker({
						position: latlng,
						title: str_ccd_info
					});
			
			// MARKER INFO WINDOW
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
			} else {
				lat = 0;
				lng = 0;
			}
			
			console.log("ipaddress " + lat +", " + lng);
			if($.mobile.activePage.attr("id") == "p1" || $.mobile.activePage.attr("id") == "p2" || $.mobile.activePage.attr("id") == "p3" || $.mobile.activePage.attr("id") == "p4"){
				initMap("error");
			}
			if($.mobile.activePage.attr("id") == "index"){
				initMapCCD("error");
			}
	   	});

	}, "jsonp");
	return true;	
}

function noLocation() {
	lat = 0;
	lng = 0;
	
	console.log("noaddress " + lat +", " + lng);
	if($.mobile.activePage.attr("id") == "p1" || $.mobile.activePage.attr("id") == "p2" || $.mobile.activePage.attr("id") == "p3" || $.mobile.activePage.attr("id") == "p4"){
		initMap("error");
	}
	if($.mobile.activePage.attr("id") == "index"){
		initMapCCD("error");
	}	
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


//google.maps.event.addDomListener(window, 'load', getLocation); //get GPS current position
//google.maps.event.addDomListener(window, 'load', ipLocation); // get IP current position
google.maps.event.addDomListener(window, 'load', noLocation); // get IP current position





}); //END FUNCTION
