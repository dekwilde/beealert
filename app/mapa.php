<?php include("includes/lang.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bee Alert Mapa</title>
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=visualization"></script>
	<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer_compiled.js"></script>

	<link href="src/theme.css" rel="stylesheet">
	<?php require("includes/lang-js.php"); ?>
	<script src="src/mapa.js"></script>
	<link href="src/app.css" rel="stylesheet">
</head>
<body>
<div id="map-embed"></div>
</body>
</html>
