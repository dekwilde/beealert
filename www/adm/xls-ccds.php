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
array_push($data, array(
	'id',        
	'User ID',
	'Mês',
	'LatLng',
	'Endereço',
	'Tipo',

	'total',
	'baixa',
	'media',
	'alta',

	'Causas',
	'Aplicação',
	'Culturas',
	'Pesticidas',
	'Abelhas',
	'Areas',

	'é o proprietario',
	'Dados do Proprietário',
	'Moeda',
	'Prejuizo',
	'Arquivo',
	'Observações',
	'Referencia',
	'Regra',
	'Registro'

));

 
require("../includes/conecta.php");

$sql="SELECT * FROM ccd ORDER BY id DESC";


$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  );		
while($row = mysql_fetch_assoc( $rs )) {
	
	array_push($data, array(
		$row['id'],
		$row['user_id'],
		$row['mes'],
		$row['latlng'],
		$row['address'],
		$row['tipo'],

		$row['total'],
		$row['baixa'],
		$row['media'],
		$row['alta'],

		$row['causas'],     
		$row['aplicacao'],
		$row['culturas'],
		$row['pesticidas'],
		$row['abelhas'],
		$row['areas'],
		$row['prop'],
		$row['propdados'],
		$row['moeda'],
		$row['perdidos'],
		$row['arquivo'],
		$row['obs'],
		$row['refer'],
		$row['regra'],
		$row['registro']
	));
	

	
}


// generate file (constructor parameters are optional)
$xls = new Excel_XML('UTF-8', false, 'Bee Alert - CCDs');
$xls->addArray($data);
$xls->generateXML("beealert-ccds");

//echo "<script> window.location.href= 'home.php' </script>";


?>