<?php 
	require("header.php"); 
?>
<script type="text/javascript" charset="utf-8">
	function go(url) {
		window.location.href = url;
	}

	function confirm_del(url) {
		var r = confirm("Excluir o registro definitivamente?");
	    if (r) {
			$.ajax({
		        type: 'GET',
		        url: url,      
		        success: function(data){
					go("index.php");
		        },
		        error: function(){
		            alert('error_str');
		        }
		    });		
		}
	}
</script>
<?php 
	require( '../includes/conecta.php' );

    $sql="SELECT * FROM ccd ORDER BY id DESC";

	$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 

?>

<body>
	<?php require("menu.php"); ?>
	
	<p style="text-align:center">
		<a href="xls-ccds.php" target="_blank">Exportar Excel CCDs</a>
	</p>
   
    <div class="box"> 			
        <table border='1' align="center" width="1024" height="40" style="font-size: 10px;">
		    <tr align="center">
				<td align="center">id</td>        
				<td align="center">User ID</td>
		        <td align="center">Mês</td>
		        <td align="center">LatLng</td>
				<td align="center">Endereço</td>
				<td align="center">Tipo</td>
				
				<td align="center">total</td>
				<td align="center">baixa</td>
				<td align="center">media</td>
				<td align="center">alta</td>
				
				<td align="center">Causas</td>
				<td align="center">Aplicação</td>
				<td align="center">Culturas</td>
				<td align="center">Pesticidas</td>
				<td align="center">Abelhas</td>
				<td align="center">Areas</td>
				
				<td align="center">é o proprietario</td>
				<td align="center">Dados do Proprietário</td>
				<td align="center">Moeda</td>
				<td align="center">Prejuizo</td>
				<td align="center">Arquivo</td>
				<td align="center">Observações</td>
		        <td align="center">Referencia</td>
				<td align="center">Regra</td>
				<td align="center">X</td>
		    </tr>
			
  <?php while ( $row = mysql_fetch_assoc( $rs ) ) : ?>
	
	
	
	
    <tr align="center">
        <td align="center"><?php echo $row['id'] ; ?></td>
        <td align="center"><?php echo $row['user_id'] ; ?></td>
		<td align="center"><?php echo $row['mes'] ; ?></td>
        <td align="center"><?php echo $row['latlng'] ; ?></td>
        <td align="center"><?php echo $row['address'] ; ?></td>
        <td align="center"><?php echo $row['tipo'] ; ?></td>

        <td align="center"><?php echo $row['total'] ; ?></td>
		<td align="center"><?php echo $row['baixa'] ; ?></td>
		<td align="center"><?php echo $row['media'] ; ?></td>
		<td align="center"><?php echo $row['alta'] ; ?></td>

		<td align="center"><?php echo $row['causas'] ; ?></td>     
		<td align="center"><?php echo $row['aplicacao'] ; ?></td>
		<td align="center"><?php echo $row['culturas'] ; ?></td>
		<td align="center"><?php echo $row['pesticidas'] ; ?></td>
		<td align="center"><?php echo $row['abelhas'] ; ?></td>
		<td align="center"><?php echo $row['areas'] ; ?></td>
		<td align="center"><?php echo $row['prop'] ; ?></td>
		<td align="center"><?php echo $row['propdados'] ; ?></td>
		<td align="center"><?php echo $row['moeda'] ; ?></td>
		<td align="center"><?php echo $row['perdidos'] ; ?></td>
		<td align="center">
			<?php
				$arquivos = explode(",", $row['arquivo']);
				foreach ($arquivos as $value) {
			?>
				<a href="../uploads/<?php echo $value; ?>" target="_blank"><?php echo $value; ?></a>
				
			<?php
				}
			
			?>
			
			
		</td>
		<td align="center"><?php echo $row['obs'] ; ?></td>
		<td align="center"><?php echo $row['refer'] ; ?></td>
		<td align="center"><?php echo $row['regra'] ; ?></td>
		<td align="center"><a href="javascript: confirm_del('../functions/delete.php?id=<?php echo $row['id'] ; ?>')">DELETAR</a></td>

    </tr>   
    <?php endwhile; ?>

</table>    
            
    </div>
</body>
</html>