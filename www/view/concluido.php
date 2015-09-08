<div data-role="page" data-control-title="Cadastro CCD - Concluido" id="concluido">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="notext" class="ui-btn-left">
        </a>
        <h3>
            <?php echo $concluido_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <div data-controltype="textblock">
            <p style="text-align:center; color:#f4b803">
            	<?php echo $concluido_desc; ?>
            </p>
        </div>
		<a data-role="button" data-theme="b" data-icon="facebook-square" data-iconpos="right" href="https://www.facebook.com/sharer/sharer.php?u=http://www.semabelhasemalimento.com.br/beealert/" data-ajax="false" target="_blank">
		 	<?php echo $concluido_bt_facebook; ?>
		</a>
		<a data-role="button"  data-icon="check" data-iconpos="right" href="#polinizadores" data-ajax="false" target="_blank">
		 	Conheça o Projeto Polinizadores do Brasil
		</a>
		<a data-role="button"  data-icon="check" data-iconpos="right" href="#fazer" data-ajax="false" target="_blank">
		 	Procedimento em caso de Ocorrencias de Contaminação
		</a>
        <a data-role="button" data-direction="reverse" data-transition="flow"
        data-theme="a" href="#" onClick="go('ccd.php?mode=new')" data-icon="plus" data-iconpos="right">
            <?php echo $concluido_bt_new; ?>
        </a>
        <a data-role="button" data-direction="reverse" data-transition="flow"
        data-theme="a" href="home.php" data-icon="home" data-iconpos="right">
            <?php echo $concluido_bt_home; ?>
        </a>
        <a data-role="button" data-direction="reverse" data-transition="flow"
        data-theme="a" href="http://www.semabelhasemalimento.com.br" data-ajax="false" data-icon="check" data-iconpos="right">
            <?php echo $concluido_bt_link; ?><br><spam style="font-size:small"><?php echo $concluido_bt_link_span; ?></spam>
        </a>
		<p style="text-align:center; font-size:small">
			<?php echo $concluido_email; ?><br> 
			<a href="mailto:beealert@semabelhasemalimento.com.br">beealert@semabelhasemalimento.com.br</a>
		</p>
    </div>
</div>

