<?php
	session_start();
	if ( !isset( $_SESSION['is_logado'] ) ) {
		header( 'location: index.php' );
		die;
	}	
?>