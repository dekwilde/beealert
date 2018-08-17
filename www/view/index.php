<div data-role="page" data-control-title="index" id="index" data-theme="a">
	<?php include("includes/panel.php");?>
	<div data-theme="a" data-role="header" data-position="fixed" style="text-align:center">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="notext">
        </a>
		
		<img src="img/beealert-branco.png" border="0" height="38px" style="margin:2px 0px" />
		<div class="ui-btn-right" id="menu-lang"><?php require("includes/lang-menu.php"); ?></div>
    </div>
    <div data-role="content">
		<h3 style="text-align:center; margin-top:0px" ><?php echo $chamada; ?></h3>
		<p style="font-size: small; text-align:center;">
			<?php echo $index_mapa; ?>
		</p>
		
		<ul data-role="listview" data-divider-theme="a" data-count-theme="b" data-inset="true">
            <li data-role="list-divider" role="heading">
                <?php echo $index_total; ?> <span class="ui-li-count"><?php include("functions/count.php"); ?></span>
            </li>
            <li data-role="list-divider" role="heading">
                <?php echo $index_casos; ?> <span class="ui-li-count"><?php include("functions/casos.php"); ?></span>
            </li>
        </ul>
		
		<div id="map-ccd" data-controltype="htmlblock"></div>
		<p style="font-size: small;">
			<?php echo $index_desc; ?>	
		</p>
        <div class="ui-grid-a ui-responsive" style="text-align:center">
            <div class="ui-block-a">	

		        <div data-role="collapsible-set" data-theme="b" data-content-theme="a" data-collapsed-icon="false" data-expanded-icon="false" style="text-align:center">
		            <div data-role="collapsible" data-collapsed="false">
						<h4><?php echo $index_cadastro; ?></h4>
						<br><br>
						<div style="width:100%; float:left; margin-top:5px"></div>
						<a data-role="button" data-theme="b" href="#sign" onclick="trackView('/sign')" data-icon="action" data-iconpos="right" data-inline="true">
				            <?php echo $index_bt_cadastro_tit; ?>
							<span style="font-size:small; color:white;"><?php echo $index_bt_cadastro_desc; ?></span>
				        </a>
						<br><br><br><br>
		            </div>
		        </div>
					
            </div>
            <div class="ui-block-b">
				<div data-role="collapsible-set" data-theme="b" data-content-theme="a" data-collapsed-icon="false" data-expanded-icon="false" style="text-align:center">
		            <div data-role="collapsible" data-collapsed="false">
						<h4><?php echo $index_login; ?></h4>
						<form id="form-login" action="#" data-theme="c" method="POST" data-ajax="true" onSubmit="return false;">         
							<div data-role="fieldcontain" data-controltype="textinput">
				                <label for="email">
				                    Email
				                </label>
				                <input name="email" id="email" placeholder="" value="" type="email" style="background-color: white;" >
				            </div>
				            <div data-role="fieldcontain" data-controltype="textinput">
				                <label for="senha">
				                    <?php echo $index_login_pass; ?>
				                </label>
				                <input name="senha" id="senha" placeholder="" value="" type="password" style="background-color: white;">
				            </div>
							<!--<input id="btLogin" type="submit" data-theme="b" data-icon="arrow-r" data-iconpos="right" data-inline="true" value="Entrar">-->
							<a id="btLogin" data-role="button" data-transition="slide" data-theme="b" data-inline="true"
				            href="#" data-icon="arrow-r" data-iconpos="right">
				                <?php echo $index_login_bt; ?>
				            </a>
				        </form>
						<?php include("view/recover.php");?>
					</div>
				</div>
            </div>
        </div>

		<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:10px; margin-bottom:10px;">

        <div class="ui-grid-a ui-responsive" style="text-align:center">
            <div class="ui-block-a">
				<div data-role="collapsible-set" data-theme="a" data-content-theme="a" data-collapsed-icon="false" data-expanded-icon="false" style="text-align:center">
		            <div data-role="collapsible" data-collapsed="false">
						<?php if($lang == "br") {?>
						<p style="font-size: small; text-align:center;">
							Não tem e-mail? Não deixe de participar!		
						</p>
						<p style="text-align:center;">
							<a data-role="button" data-transition="slide" data-theme="a" data-inline="true"
				        	data-icon="arrow-d" data-iconpos="right" data-ajax="false" target="_blank" href="../uploads/QUESTIONARIO-BEEALERT.docx">Formulário Impresso</a>
						</p>
						<?php } ?>
					</div>
				</div>
			</div>
			
			<div class="ui-block-b">
				<div class="ui-grid-a ui-responsive">
		            <div class="ui-block-a" style="text-align:right; font-size:12px">
						Medalha de Prata no concurso
						de Inovação Apícola do
						XI Congresso Latinoamericano 
						de Apicultura
					</div>
					<div class="ui-block-b" style="padding-left:10px;">
						<img src="img/media/medalha.png" style="width:70px" />
						<img src="img/media/adotado.png" style="width:70px" />
					</div>
				</div>
			</div>
		
		</div>
		
    </div>
</div>