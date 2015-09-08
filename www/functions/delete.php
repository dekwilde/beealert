<?php
include( '../includes/session_start.php' );
require( '../includes/conecta.php' );


$id = $_GET["id"];
if(!$id) {
	$id = $_SESSION['ccd_id'];	
}

$sql = "DELETE FROM ccd WHERE id = $id";        
mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 
die;

?>