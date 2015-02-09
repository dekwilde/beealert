<?php
  include( 'includes/conecta.php' );
?>
<?php 
	$sql ="SELECT * FROM ccd ORDER BY id ASC";	
	$rs = mysql_query( $sql, $conn ) or die( "Nao foi possível adicionar a  base de dados! Erro: " . mysql_error() );
	$count = 0;
	while($row = mysql_fetch_assoc( $rs )) {
		$latlng = $row["latlng"];
		$baixa = $row["baixa"];
		$media = $row["media"];
		$alta = $row["alta"];
		$intensidade = $baixa + $media + $alta;
		if($latlng) {
			$count = $count + $intensidade;
		}
	}    
	echo $count;           
?>

