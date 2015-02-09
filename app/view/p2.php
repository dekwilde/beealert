<div data-role="page" data-control-title="2º Passo" data-theme="a"
id="p2">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            <?php echo $p2_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <?php if($mode == "edit") { ?>
			<h4><?php echo $p2_block; ?></h4>
			<a data-role="button" data-transition="slide" data-theme="b"
            href="#p3" data-icon="arrow-r" data-iconpos="right">
                <?php echo $bt_next; ?>
            </a>
		<?php } else { ?>
		<p style="font-size:small;"><?php echo $p2_desc; ?></p>
		<form id="formCCD2" action="functions/ccd.php?p=2" method="POST" data-ajax="true" onSubmit="return false;">
            <div class="ui-grid-a ui-responsive">
                <div class="ui-block-a">
                    <div data-role="fieldcontain" data-controltype="searchinput">
                        <label for="address">
                            <?php echo $p2_label_search; ?>
                        </label>
                        <input name="localizar" id="address" placeholder="<?php echo $p2_holder_search; ?>" value=""
                        type="search" data-mini="false">
                    </div>
                </div>
                <div class="ui-block-b">
                    <a id="btAddress" data-role="button" data-inline="true" data-theme="b"
                    href="#" data-icon="search" data-iconpos="right">
                        <?php echo $p2_bt_search; ?>
                    </a>
                </div>
            </div>
            <div id="map-canvas" data-controltype="htmlblock">
            </div>
			<hr style="height:1px; background-color:rgba(0,0,0,.15); border:0; margin-top:30px; margin-bottom:30px;">
	        <div id="tipo" data-role="fieldcontain" data-controltype="radiobuttons">
	            <fieldset data-role="controlgroup" data-type="vertical">
	                <legend>
	                    <?php echo $p2_tipo_legend; ?>
	                </legend>
	                <input id="apiariofixo" name="tipo" value="fixo" type="radio" <?php if($row['tipo'] == "fixo") { echo 'checked'; } ?>>
	                <label for="apiariofixo">
	                    <?php echo $p2_tipo_label_fixo; ?>
	                </label>
	                <input id="apiariomovel" name="tipo" value="movel" type="radio" <?php if($row['tipo'] == "movel") { echo 'checked'; } ?>>
	                <label for="apiariomovel">
	                    <?php echo $p2_tipo_label_movel; ?>
	                </label>
	            </fieldset>
	        </div>
	
	        <div id="regra" data-role="fieldcontain" data-controltype="radiobuttons">
	            <fieldset data-role="controlgroup" data-type="horizontal">
	                <legend>
	                    Você autoriza que o local de seu apiário seja mostrado no mapa da campanha? 
	                </legend>
	                <input id="apiariofixo" name="regra" value="sim" type="radio" <?php if($row['regra'] == "sim") { echo 'checked'; } ?>>
	                <label for="apiariofixo">
	                    Sim
	                </label>
	                <input id="apiariomovel" name="regra" value="nao" type="radio" <?php if($row['regra'] == "nao") { echo 'checked'; } ?>>
	                <label for="apiariomovel">
	                    Não
	                </label>
	            </fieldset>
	        </div>
	
			<a id="btSubmit" data-role="button" data-transition="slide" data-theme="b"
            href="#" data-icon="arrow-r" data-iconpos="right">
                <?php echo $bt_next; ?>
            </a>
			<!-- <input type="submit" data-theme="a" data-icon="arrow-d" data-iconpos="bottom" value="Submit"> -->
        </form>
		<?php } ?>
    </div>
	<?php include("includes/tabbar.php");?>
</div>


