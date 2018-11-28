
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<?php require("includes/lang.php"); ?>
	
	<title>Bee Alert Mapa</title>
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcIU7eugABQnOuGKlGI9ZWGO5q2P07Igs&sensor=false&libraries=visualization"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer_compiled.js"></script>
	
	

	<link href="src/theme.css" rel="stylesheet">
	<script src="src/mapa.js"></script>
	
	<link href="src/app.css" rel="stylesheet">
</head>
<body>
<div id="map-embed"></div>
<h1 id="mapa-tit"><?php echo $chamada; ?></h1>
<div id="mapa-count"><?php echo $index_total; ?> <span id="mapa-countnum"><?php include("functions/count.php"); ?></span></div>
</body>
</html>
