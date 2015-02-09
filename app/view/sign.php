<?php
	session_start();
	include("includes/captcha/simple-php-captcha.php");
	$_SESSION['captcha'] = simple_php_captcha();
	
	
	$mode = $_GET["mode"];

	
	if($mode == "edit") {
		include("includes/session_start.php");
		$id = $_SESSION['user_id'];
		$_SESSION['mode'] = $mode;
		
		include("includes/conecta.php");
		$sql ="SELECT * FROM user WHERE id = $id";
		$rs = mysql_query( $sql, $conn ) or die( 'Ocorreu um erro. Erro: ' . mysql_error()  );		
		$row = mysql_fetch_assoc( $rs );
?>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("#pais").val("<?php echo $row['pais']; ?>").selectmenu("refresh", true);
	})
</script>
<?php
	}	
?>
<div data-role="page" data-control-title="Cadastro" id="sign">
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-role="button" data-direction="reverse" data-rel="back" data-transition="slide"
        href="#" data-icon="back" data-iconpos="notext" class="ui-btn-left">
        </a>
        <h3>
            <?php echo $sign_header; ?>
        </h3>
    </div>
    <div data-role="content">
		
		<h4 style="text-align:center; color:#ffcc00;"><?php echo $sign_tit; ?></h4>
		<p>
			<?php echo $sign_desc; ?><br>
			<strong style="color:#bb0000"><?php echo $sign_info; ?></strong>
		</p>
			
		<div style="text-align:center;"><a data-role="button" data-mini="true" data-icon="delete" data-iconpos="right" data-iconshadow="true" data-theme="d" id="alert"></a></div>
		
        <form id="formSign" action="" method="POST" data-ajax="true">
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="nome">
                    <?php echo $sign_nome_label; ?>
                </label>
                <input name="nome" id="nome" placeholder="<?php echo $sign_nome_holder; ?>" value="<?php echo $row['nome']; ?>" type="text">
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="email">
                    *Email
                </label>
                <input name="email" id="email" placeholder="john@host.com" value="<?php echo $row['email']; ?>"
                type="text">
            </div>
            
                <label for="empresa">
					<?php echo $sign_empresa_label; ?>
                </label>
                <input name="empresa" id="empresa" placeholder="" value="<?php echo $row['empresa']; ?>"
                type="text">
            
	        <div class="ui-grid-a ui-responsive">
	            <div class="ui-block-a" style="padding:10px">
				    <label for="senha">
	                    <?php echo $sign_pass_label; ?>
	                </label>
	                <input name="senhasign" id="senhasign" placeholder="" value="<?php echo $row['senha']; ?>"
	                type="password">	
	            </div>
	            <div class="ui-block-b" style="padding:10px">
				    <label for="senha">
	                    <?php echo $sign_confirm_label; ?>
	                </label>
	                <input name="senhaconfirm" id="senhaconfirm" placeholder="" value="<?php echo $row['senha']; ?>"
	                type="password">	
	            </div>
	        </div>
	
			<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:30px; margin-bottom:30px;">
            
			<div data-role="fieldcontain" data-controltype="selectmenu">
                <label for="pais">
                    <?php echo $sign_pais; ?>
                </label>
				<?php require("includes/select_country.php"); ?>
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="estado">
                    <?php echo $sign_estado; ?>
                </label>
                <input name="estado" id="estado" placeholder="" value="<?php echo $row['estado']; ?>" type="text">
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="cidade">
                    <?php echo $sign_cidade; ?>
                </label>
                <input name="cidade" id="cidade" placeholder="" value="<?php echo $row['cidade']; ?>" type="text">
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="cep">
                    <?php echo $sign_cep; ?>
                </label>
                <input name="cep" id="cep" placeholder="" value="<?php echo $row['cep']; ?>" type="text">
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="fone">
                    <?php echo $sign_fone_label; ?>
                </label>
                <input name="fone" id="fone" placeholder="<?php echo $sign_fone_holder; ?>" value="<?php echo $row['fone']; ?>" type="text">
            </div>
            <div data-role="fieldcontain" data-controltype="textinput">
                <label for="celular">
                    <?php echo $sign_cel_label; ?>
                </label>
                <input name="celular" id="celular" placeholder="<?php echo $sign_cel_holder; ?>" value="<?php echo $row['celular']; ?>" type="text">
            </div>

			<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:15px; margin-bottom:15px;">

			<label for="escolaridade">
                *Escolaridade
            </label>
            <select id="escolaridade" name="escolaridade" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                <option><?php echo $bt_select; ?></option>
				<option value="doutorado" <?php selectBox($row["escolaridade"], 'doutorado'); ?>>
                    Doutorado
                </option>
                <option value="pos" <?php selectBox($row["escolaridade"], 'pos'); ?>>
                    Pós Graduação
                </option>
				<option value="completo" <?php selectBox($row["escolaridade"], 'completo'); ?>>
                    Superior Completo
                </option>
				<option value="incompleto" <?php selectBox($row["escolaridade"], 'incompleto'); ?>>
                    Superior Incompleto
                </option>
				<option value="medio" <?php selectBox($row["escolaridade"], 'medio'); ?>>
                    Ensino Médio
                </option>
				<option value="fundamental" <?php selectBox($row["escolaridade"], 'fundamental'); ?>>
                    Ensino Fundamental
                </option>
            </select>


			<div data-role="fieldcontain" data-controltype="textinput">
                <label for="profissao">
                    Profissão
                </label>
                <input name="profissao" id="profissao" placeholder="" value="<?php echo $row['profissao']; ?>" type="text">
            </div>

			<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:30px; margin-bottom:30px;">

                <label for="atividade">
                    <?php echo $sign_atividade_label; ?> 
                </label>
                <select id="atividade" name="atividade" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                    <option><?php echo $bt_select; ?></option>
					<option value="profissional" <?php selectBox($row["atividade"], 'profissional'); ?>>
                        <?php echo $sign_atividade_profissional; ?>
                    </option>
                    <option value="hobby" <?php selectBox($row["atividade"], 'hobby'); ?>>
                        <?php echo $sign_atividade_hobby; ?>
                    </option>
					<option value="pesquisador" <?php selectBox($row["atividade"], 'pesquisador'); ?>>
                        <?php echo $sign_atividade_pesquisador; ?>
                    </option>
					<option value="organizacao" <?php selectBox($row["atividade"], 'organizacao'); ?>>
                        <?php echo $sign_atividade_organizacao; ?>
                    </option>
                </select>




                <label for="abelhas">
                    <?php echo $sign_abelhas_label; ?> 
                </label>
                <select id="abelhas" name="abelhas" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                    <option><?php echo $bt_select; ?></option>
					<option value="apis" <?php selectBox($row["abelhas"], 'apis'); ?>>
                        <?php echo $sign_abelhas_apis; ?>
                    </option>
                    <option value="meliponineos" <?php selectBox($row["abelhas"], 'meliponineos'); ?>>
                        <?php echo $sign_abelhas_meliponineos; ?>
                    </option>
                    <option value="mamangavas" <?php selectBox($row["abelhas"], 'mamangavas'); ?>>
                        <?php echo $sign_abelhas_mamangavas; ?>
                    </option>
					<option value="solitarias" <?php selectBox($row["abelhas"], 'solitarias'); ?>>
                        <?php echo $sign_abelhas_solitarias; ?>
                    </option>
                </select>




                <label for="exploracao">
                    <?php echo $sign_exploracao_label; ?>
                </label>
                <select id="exploracao" name="exploracao" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                    <option><?php echo $bt_select; ?></option>
					<option value="mel" <?php selectBox($row["exploracao"], 'mel'); ?>>
                        <?php echo $sign_exploracao_mel; ?>
                    </option>
                    <option value="geleia" <?php selectBox($row["exploracao"], 'geleia'); ?>>
                        <?php echo $sign_exploracao_geleia; ?>
                    </option>
                    <option value="polem" <?php selectBox($row["exploracao"], 'polem'); ?>>
                        <?php echo $sign_exploracao_polem; ?>
                    </option>
                    <option value="propolis" <?php selectBox($row["exploracao"], 'propolis'); ?>>
                        <?php echo $sign_exploracao_propolis; ?>
                    </option>
                    <option value="rainhas" <?php selectBox($row["exploracao"], 'rainhas'); ?>>
                        <?php echo $sign_exploracao_rainhas; ?>
                    </option>
                    <option value="enxames" <?php selectBox($row["exploracao"], 'enxames'); ?>>
                        <?php echo $sign_exploracao_enxames; ?>
                    </option>
                    <option value="aluguel" <?php selectBox($row["exploracao"], 'aluguel'); ?>>
                        <?php echo $sign_exploracao_aluguel; ?>
                    </option>
                    <option value="pesquisa" <?php selectBox($row["exploracao"], 'pesquisa'); ?>>
                        <?php echo $sign_exploracao_pesquisa; ?>
                    </option>
                </select>





            <!-- <div data-role="fieldcontain" data-controltype="textarea">
                <label for="obs">
                    OBS ou outras informações
                </label>
                <textarea name="obs" id="obs" placeholder=""><?php //echo $row['obs']; ?></textarea>
            </div> -->


			<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:30px; margin-bottom:30px;">

            <div id="termos" data-role="fieldcontain" data-controltype="checkboxes">
                <fieldset data-role="controlgroup" data-type="horizontal">
                    <legend>
                        <?php echo $sign_aceito_label; ?>
                    </legend>
                    <input id="aceito" name="aceito" value="aceito" type="checkbox" data-inline="true">
                    <label for="aceito">
                        <?php echo $sign_aceito_bt; ?>
                    </label>
                </fieldset>
            </div>
			
			<div data-role="fieldcontain" data-controltype="textinput">
				<label for="captcha">
	                Preencha o que está escrito na imagem
					<?php
						echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
					?>
	            </label>

				<input name="captcha" id="captcha" placeholder="" value="" type="text">
			</div>
			
			

            <a id="btSign" data-role="button" data-transition="pop" data-theme="e"
            href="#" data-icon="check" data-iconpos="bottom">
                <?php if($mode == "edit") { echo $sign_atualizar; } else { echo $sign_cadastrar; } ?>
            </a>
			<!-- <input type="submit" value="submit"> -->
        </form>
    </div>
</div>

