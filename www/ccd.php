<?php include("includes/session_start.php");?>
<?php
	$mode = $_GET["mode"];
	$id = $_GET["id"];
	$_SESSION['ccd_id'] = $id;
	$_SESSION['mode'] = $mode;
	
	if($mode == "edit") {
		include("includes/conecta.php");
		$sql ="SELECT * FROM ccd WHERE id = $id";
		$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  );		
		$row = mysql_fetch_assoc( $rs );

	}	
?>
<?php include("includes/header.php");?>
<body>
<?php require("view/p1.php");?>
<?php require("view/p2.php");?>
<?php require("view/p3.php");?>
<?php require("view/p4.php");?>
<?php require("view/p5.php");?>
<?php require("view/p6.php");?>
<?php require("view/concluido.php");?>

</body>
</html>
