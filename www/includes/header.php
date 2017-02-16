<?php require("lang.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  	<meta name="apple-mobile-web-app-capable" content="yes">
  	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="img/logo.png"/>

	<meta name="description" content="<?php echo $descricao; ?>"/>
  	<meta name="keywords" content="georeferenciamento, sumiço de abelhas, colapso das abelhas, cetapis, abelhas, beealert, geolocator, bee alert, beelaert geolocator, bee alert geolocator, desaparecimento, ocorrências, desaparecimento das abelhas, ccd bee, bee no food, bee or not to bee"/>
    <meta name="author" content="Agência 6P"/>
    <meta name="copyright" content="Agência 6P"/>
    
    <meta property="og:url" content="http://www.semabelhasemalimento.com.br/beealert/">
    <meta property="og:title" content="Bee Alert Geolocator">
    <meta property="og:image" content="http://www.semabelhasemalimento.com.br/beealert/img/logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:description" content="<?php echo $descricao; ?>">
 	
 	<meta property="twitter:title" content="Bee Alert Geolocator">
    <meta property="twitter:image" content="http://www.semabelhasemalimento.com.br/beealert/img/logo.png">
    <meta property="twitter:description" content="<?php echo $descricao; ?>">


	<title>Bee Alert Geolocator</title>

		
	<link href="src/codiqa.ext.css" rel="stylesheet">
	<link rel="stylesheet" href="src/jquery/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	<script src="src/jquery/jquery.mask.js"></script>
	<script src="src/codiqa.ext.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=visualization"></script>
	<script type="text/javascript" src="src/markerclusterer/markerclusterer.js"></script>
	
	
	
	


	<link rel="stylesheet" type="text/css" href="http://cdn.jtsage.com/datebox/latest/jqm-datebox.min.css">
	<script type="text/javascript" src="http://cdn.jtsage.com/datebox/latest/jqm-datebox.core.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.calbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.datebox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.flipbox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.slidebox.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jqm-datebox.mode.customflip.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/i18n/jquery.mobile.datebox.i18n.pt-BR.utf8.js"></script>


	<script src="cordova.js"></script>

	<script src="src/tracker.js"></script>
	<link href="src/theme.css" rel="stylesheet">
	<?php require("lang-js.php"); ?>
	
	
	
	<script src="src/app.js"></script>
	<link href="src/app.css" rel="stylesheet">
</head>
<?php
	function selectBox($data, $value) {
		$os = explode(", ", $data);
		if(in_array($value, $os, true)) {
			echo "selected";
		}
	
	}
?>




