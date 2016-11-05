<?php
	session_start();
	require( '../includes/conecta.php' );

	$mode =	$_SESSION['mode'];
	$user_id = $_SESSION['user_id'];
	
	/*
	//Check CAPTCHA
	$captcha = $_POST["captcha"];
	if($_SESSION['captcha']['code'] != $captcha) {
		$data['status'] = 'captcha';
		$data['captcha'] = $_SESSION['captcha']['code'];
		
		echo json_encode($data); 
		die;
	}
	*/
	
	
	
	$data = array();

	$nome		= $_POST["nome"];
	$email		= $_POST["email"];
	$empresa	= $_POST["empresa"];
	$senha		= $_POST["senha"];
	$pais		= $_POST["pais"];
	$estado 	= $_POST["estado"];
	$cidade		= $_POST["cidade"];
	$cep		= $_POST["cep"];
	$fone   	= $_POST["fone"];
	$celular	= $_POST["celular"];
	$escolaridade	= $_POST["escolaridade"];
	$profissao		= $_POST["profissao"];
	$obs   		= $_POST["obs"];
	$atividade  = $_POST["atividade"];
	$abelhas	= $_POST["abelhas"];
	$exploracao	= $_POST["exploracao"];

  
	if($mode == "edit") {
		$sql = "UPDATE user SET
							nome 		= '$nome',
							email 		= '$email',
							empresa 	= '$empresa',
							senha 		= '$senha',
							pais 		= '$pais',
							estado 		= '$estado',
							cidade 		= '$cidade',
							cep 		= '$cep',
							fone 		= '$fone',
							celular 	= '$celular',
							escolaridade 	= '$escolaridade',
							profissao 		= '$profissao',
							atividade 	= '$atividade',
							abelhas 	= '$abelhas',
							exploracao 	= '$exploracao',
							obs 		= '$obs'
							WHERE id = $user_id";	
	} else {
		
		//CHECK double email
		$check = "";
		$sql="SELECT * FROM user WHERE email='$email'";
		$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 
		$row = mysql_fetch_assoc( $rs );
		$row_num = mysql_num_rows($rs);
		if($row_num == 1) {
				$data['status'] = 'double';
				echo json_encode($data); 
				die;
		} else {
			$sql = "INSERT INTO user (

					nome,
					email,
					empresa,
					senha,
					pais,
					estado,
					cidade,
					cep,
					fone,
					celular,
					escolaridade,
					profissao,
					atividade,
					abelhas,
					exploracao,
					obs

			          ) VALUES (

					'$nome',
					'$email',
					'$empresa',
					'$senha',
					'$pais',
					'$estado',
					'$cidade',
					'$cep',
					'$fone',
					'$celular',
					'$escolaridade',
					'$profissao',
					'$atividade',
					'$abelhas',
					'$exploracao',
					'$obs'
			);";		
		}	
	}

	mysql_query( $sql, $conn ) or die("<script> console.log("+mysql_error()+") </script>");
	
	
	if($mode != "edit") { 
		$sql="SELECT * FROM user WHERE email='$email' AND senha='$pass'";
		$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 
		$row = mysql_fetch_assoc( $rs );
		$row_num = mysql_num_rows($rs);
		if($row_num == 1) { 
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['is_logado'] = 1;
		} else {
			$data['status'] 	= 'error';
		}
	}
	
	$data['status'] = 'success';
	$data['mode'] = $mode;
	echo json_encode($data);  
                     
?>

