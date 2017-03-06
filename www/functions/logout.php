<?php
	session_start();  
	$_SESSION['user_id'] = null;
	$_SESSION['is_logado'] = 0;  
	session_destroy(); //destroy the session
	header("location:../index.php"); //to redirect back to "index.php" after logging out
	exit();
?>