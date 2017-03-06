<?php
  include( 'includes/conecta.php' );
?>
<?php 
	$sql ="SELECT id FROM ccd";	
	$rs = mysql_query( $sql, $conn ) or die( "Nao foi possível adicionar a  base de dados! Erro: " . mysql_error() );
	$casos = mysql_num_rows($rs);
	echo $casos;           
?>

