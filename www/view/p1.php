<div data-role="page" data-theme="f" data-control-title="1º Passo" id="p1" data-dom-cache="false">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            <?php echo $p1_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <form id="formCCD1" action="#" method="POST" data-ajax="false">
			<p style="font-size: small;">
				<?php echo $p1_desc; ?>
			</p>
			<label for="mes">
				<?php echo $p1_label_mes; ?><br>
				<span style="font-size:small; color:#f4b803"><?php echo $p1_span_mes; ?></span>
			</label>                
			<!-- <input name="mes" id="mes" type="month"  min="2013-01-01" value=""> -->
			
			<input name="mes" id="mes" type="text"  min="2013-01-01" value="<?php echo $row["mes"]; ?>" data-role="datebox" 
								data-options='{"mode":"calbox", "minYear": 2013, "beforeToday": true,  "useSetButton":true, "useInline": true, "useImmediate":true}'>

			<!-- <input type="submit" data-theme="b" data-icon="arrow-r" data-iconpos="right" value="Próximo"> -->
			<a id="btSubmit" data-role="button" data-transition="slide" data-theme="b"
            href="#" data-icon="arrow-r" data-iconpos="right">
                <?php echo $bt_next; ?>
            </a>
        </form>
    </div>
	<?php include("includes/tabbar.php");?>
</div>

