<?php

// load library
require 'php-excel.class.php';



session_start();
if ( !isset( $_SESSION['is_logado'] ) ) {
	header( 'location: index.php' );
	die;
}

// create a simple 2-dimensional array
$data = array();
array_push($data, array('id', 'nome', 'email', 'senha', 'Pais', 'estado', 'cidade', 'cep', 'telefone', 'celular', 'Atividade', 'Abelhas', 'Exploração', 'Observações'));



 
require("../includes/conecta.php");

$sql="SELECT * FROM user ORDER BY id DESC";


$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  );		
while($row = mysql_fetch_assoc( $rs )) {

	
	array_push($data, array(
		$row['id'],
		$row['nome'],
		$row['email'],
		$row['senha'],
		$row['pais'],
		$row['estado'],
		$row['cidade'],
		$row['cep'],
		$row['fone'],
		$row['celular'],
		$row['atividade'],
		$row['abelhas'],  
		$row['exploracao'],
		$row['obs']
	));
	
	
	
}



// generate file (constructor parameters are optional)
$xls = new Excel_XML('UTF-8', false, 'Bee Alert - users');
$xls->addArray($data);
$xls->generateXML("beealert-users");




?>