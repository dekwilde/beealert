<?php
  include( '../includes/conecta.php' );
?>
<?php 
	$data = array();

	$sql ="SELECT * FROM ccd WHERE regra='sim' ORDER BY id ASC";
	
	$rs = mysql_query( $sql, $conn ) or die( "Nao foi possível adicionar a  base de dados! Erro: " . mysql_error() );

	while($row = mysql_fetch_assoc( $rs )) {
		$latlng = $row["latlng"];
		$baixa = $row["baixa"];
		$media = $row["media"];
		$alta = $row["alta"];
		$causas = $row["causas"];
		$id = $row["id"];
		$intensidade = $baixa + $media + $alta;
		if($latlng) {
			array_push($data, $latlng. "; " . $intensidade . "; " . $causas . "; " . $id);
		}
	}    
	
	echo json_encode($data);           
?>

