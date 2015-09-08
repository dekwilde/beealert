<?php
	session_start();  

	session_start();
	session_destroy();
	$_SESSION = array();
	
	@header('Location: '. '../index.php');   
	
?>