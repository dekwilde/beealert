<?php
  include( '../includes/session_start.php' );
  include( '../includes/conecta.php' );
?>
<?php 
	$data 		= array();
	$step 		= $_GET["p"];
	$mode 		= $_SESSION['mode'];
	$id 		= $_SESSION['ccd_id'];
	$user_id 	= $_SESSION['user_id'];
	
	
	$mes 		= $_POST["mes"];
	
	$latlng 	= $_POST["latlng"];
	$address 	= $_POST["addressMarker"];
	$tipo	 	= $_POST["tipo"];
	$regra	 	= $_POST["regra"];
	
	$total 		= $_POST["total"];
	$baixa 		= $_POST["baixa"];
	$media 		= $_POST["media"];
	$alta 		= $_POST["alta"];
	//$tudo 		= $_POST["tudo"];
	
	$causas 		= $_POST["causas"];
	
	$pesticidas 	= $_POST["pesticidas"];
	$aplicacao 		= $_POST["aplicacao"];
	$culturas 		= $_POST["culturas"];
		
	$abelhas 		= $_POST["abelhas"];
	$areas 			= $_POST["areas"];

	$prop 			= $_POST["prop"];
	$propdados 		= $_POST["propdados"];
	
	$moeda 			= $_POST["moeda"];
	$perdidos 		= $_POST["perdidos"];
	$perdas 		= $_POST["perdas"];
	
	$obs			= $_POST["obs"];
	$refer			= $_POST["refer"];
	if(isset($_SESSION["arquivo_upload"])) {
		$arquivo	= implode(",",$_SESSION["arquivo_upload"]);	
	} else {
		$arquivo = "";
	}
	
	
	
	if($step == "1") { 
		if($mode == "new") {
			$sql = "INSERT INTO ccd (				
					user_id,
					mes
			          ) VALUES (
					$user_id,
					'$mes'
			);";
		} else {
			$sql = "UPDATE ccd SET
								mes = '$mes'
								WHERE user_id = $user_id AND id = $id";
		}	
	}
	
	if($step == "2") { 
		$sql = "UPDATE ccd SET
							latlng 	= '$latlng',
							address	= '$address',
							tipo	= '$tipo',
							regra	= '$regra'
							WHERE user_id = $user_id AND id = $id";	
	}
	
	if($step == "3") { 
		$sql = "UPDATE ccd SET
							total 	= '$total',
							baixa 	= '$baixa',
							media 	= '$media',
							alta 	= '$alta'
							WHERE user_id = $user_id AND id = $id";	
	}
	
	if($step == "4") { 		
		$sql = "UPDATE ccd SET
							causas 		= '$causas',
							aplicacao 	= '$aplicacao',
							culturas 	= '$culturas',
							pesticidas 	= '$pesticidas'
							WHERE user_id = $user_id AND id = $id";	
	}
	
	if($step == "5") { 

		$sql = "UPDATE ccd SET
							abelhas 	= '$abelhas',
							areas 		= '$areas',
							prop		= '$prop',
							propdados	= '$propdados',
							moeda 		= '$moeda',
							perdidos 	= '$perdidos'
							WHERE user_id = $user_id AND id = $id";	
	}
	
	if($step == "6") { 
		

		$sql = "UPDATE ccd SET
							arquivo 	= '$arquivo',
							obs 		= '$obs',
							refer 		= '$refer'
							WHERE user_id = $user_id AND id = $id";	
	}

	
	mysql_query( $sql, $conn ) or die( "Nao foi possível adicionar a  base de dados! Erro: " . mysql_error() );
	
	// definindo qual é a ID
	if($mode == "new" && $step == "1") {
		$id = mysql_insert_id();
		$_SESSION['ccd_id'] = $id;
	}
	
	// enviando dados para o js
	$data['id'] = $id;
	$data['status'] = 'sucess';
	echo json_encode($data);
                       
?>

