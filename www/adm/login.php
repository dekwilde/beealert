<?php
session_start();
header("Content-Type: text/html; charset=utf-8",true);

$usuario =  isset( $_POST['usuario'] ) ? $_POST['usuario'] : '' ;
$senha =  isset( $_POST['senha'] ) ? $_POST['senha'] : '' ;
$acao =  isset( $_POST['acao'] ) ? $_POST['acao'] : '' ;

$mensagem = '';

if ( $acao == 'Entrar' ) {
    
    if ( $usuario == 'beebeebee' && $senha = 'beebeebee' ) {
        $_SESSION['is_logado'] = 1;
        header( 'location: index.php' );
        die;
    } else {
        $mensagem = 'Usuario ou senha inválidos!';
    }
    
}

?>

<style type="text/css">
body {
	background-image:url(img/fundo.png);
	background-repeat: repeat-x;
	font-family:Tahoma, Geneva, sans-serif;
	color:#000;
}
.form{
	background-image:url(img/fundoform.png);
	border:none;
	color: #000
	}
.redondo{
	margin-left:auto;
	margin-right:auto;
	border-color: #d2d2d2;
	text-align:left;	
		
	box-shadow: 1px 1px 20px #ccc;
   -webkit-box-shadow: 1px 1px 20px #ccc;
   -moz-box-shadow: 1px 1px 20px #ccc; 
    width:350px;
}
</style>


<div style="width:100%; height:240;float:left; text-align:center; margin-top: 170px ">

<fieldset class="redondo" style="-moz-border-radius:10px; -webkit-border-radius:10px; border-radius: 10px;">
  <legend style="font-size:10px; text-align:right">SISTEMA ADMINISTRATIVO</legend>
<form  action='' method='post' style="width:350px; text-align: center;">
  <table width="347" border="0" align="center"  cellpadding="0" cellspacing="3">
    <tr>
    <td style="text-align: right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: right">Usuario:</td>
    <td><input name="usuario" type="text" class="form" id="usuario" value="" size="39" border="0" /></td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: right"><span style="text-align: right">Senha:</span></td>
    <td><input name="senha" type="text" class="form" id="senha" value="" size="39" border="0" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="acao" value="Entrar" id="acao" /></td>
  </tr>
</table>
</form>

</fieldset>
</div><br />

<div style="text-align:center; font-family:'Arial', Gadget, sans-serif; font-size:12px; color:#F00;">
<?php if($mensagem):?>
<?php echo $mensagem;?>
<?php endif;?>
</div>
<br />
</a></div>