<?php 
	require("header.php"); 
?>
<?php 
	require( '../includes/conecta.php' );

    $sql="SELECT * FROM user ORDER BY id DESC";

	$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 

?>

<body>
	<?php require("menu.php"); ?>
	
	<p style="text-align:center">
		<a href="xls-users.php" target="_blank">Exportar Excel Usuários</a>
	</p>
   
    <div class="box"> 			
        <table border='1' align="center" width="1024" height="40" style="font-size: 10px;">
		    <tr align="center">
				<td align="center">id</td>        
				<td align="center">nome</td>
				<td align="center">email</td>
				<td align="center">empresa</td>
				<td align="center">senha</td>
		        <td align="center">Pais</td>
				<td align="center">estado</td>
		        <td align="center">cidade</td>
				<td align="center">cep</td>
				<td align="center">telefone</td>
				<td align="center">celular</td>
				<td align="center">Atividade</td>
				<td align="center">Abelhas</td>
				<td align="center">Exploração</td>
				<td align="center">Observações</td>
		    </tr>
			
  <?php while ( $row = mysql_fetch_assoc( $rs ) ) : ?>
    <tr align="center">
        <td align="center"><?php echo $row['id'] ; ?></td>
        <td align="center"><?php echo $row['nome'] ; ?></td>
		<td align="center"><?php echo $row['email'] ; ?></td>
		<td align="center"><?php echo $row['empresa'] ; ?></td>
		<td align="center"><?php echo $row['senha'] ; ?></td>
		<td align="center"><?php echo $row['pais'] ; ?></td>
        <td align="center"><?php echo $row['estado'] ; ?></td>
        <td align="center"><?php echo $row['cidade'] ; ?></td>
        <td align="center"><?php echo $row['cep'] ; ?></td>
		<td align="center"><?php echo $row['fone'] ; ?></td>
		<td align="center"><?php echo $row['celular'] ; ?></td>
		<td align="center"><?php echo $row['atividade'] ; ?></td>
		<td align="center"><?php echo $row['abelhas'] ; ?></td>     
		<td align="center"><?php echo $row['exploracao'] ; ?></td>
		<td align="center"><?php echo $row['obs'] ; ?></td>
    </tr>   
    <?php endwhile; ?>

</table>    
            
    </div>
</body>
</html>