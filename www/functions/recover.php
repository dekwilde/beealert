<?php
$data = array(); 
$to = $_POST['email'];

require( '../includes/conecta.php' );

$sql ="SELECT * FROM user WHERE email ='" . $to . "'";
$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  ); 
$row = mysql_fetch_assoc( $rs );
$row_num = mysql_num_rows($rs);
if($row_num == 1) { 
	$senha = $row['senha'];
	$data['status'] = 'sucess';
	
	require("../includes/email_header.php");

	$message = "<table width='720' border='0' align='center' cellpadding='0' cellspacing='0'>
	  <tr><td><img src='$linktop' width='720' height='50'></td></tr>
	  <tr>
	    <td height='300' align='center' bgcolor='#FFF'>
	    	<font color='#000' face='Arial'>
	        	<p>Sua senha foi recuperada!</p>
				<p>Obrigado.</p>
	            <p>Email: <strong>$to</strong></p>
	            <p>Senha: <strong>$senha</strong></p>
	        </font>
	    </td>
	  </tr>
	  <tr><td><img src='$linkbotton' width='720' height='50'></td></tr>
	</table>
	";

	mail($to, $subject, $message, $headers);
	
	
} else {
	$data['status'] 	= 'error';
}


echo json_encode($data);



?>
