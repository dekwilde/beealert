<?php
session_start();
if ( !isset( $_SESSION['is_logado'] ) ) {
	header( 'location: login.php' );
	die;
}
?>

<html>
<head>
	<title>Sistema administrativo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>       
	<link rel="stylesheet" type="text/css" href="css/style.css" />        

</head>

		
