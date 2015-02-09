<?php
	session_start();  
	require( '../includes/conecta.php' );
	$data = array(); 
	$email = $_POST['email'];
	$pass 	= $_POST['pass'];

	$sql="SELECT * FROM user WHERE email='$email' AND senha='$pass'";
	$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 
	$row = mysql_fetch_assoc( $rs );
	$row_num = mysql_num_rows($rs);
	if($row_num == 1) { 
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['is_logado'] = 1; 
		$data['id']		= $row['id'];
		$data['name']	= $row['nome'];
	} else {
		$data['id'] 	= 'error';
	}
	echo json_encode($data);    	
?>