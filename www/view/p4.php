


<div data-role="page" data-control-title="4º Passo" id="p4">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            4º <?php echo $p4_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <form id="formCCD4" action="functions/ccd.php?p=4" method="POST" data-ajax="true" onSubmit="return false;" enctype="multipart/form-data">


                <label for="causas">
                    <?php echo $p4_causas; ?>
                </label>
                <select id="causas" name="causas" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                    <option><?php echo $bt_select; ?></option>
					<option value="acaros" <?php selectBox($row["causas"], 'acaros'); ?> >
                        <?php echo $p4_causas_acaros; ?>
                    </option>
                    <option value="doencas" <?php selectBox($row["causas"], 'doencas'); ?> >
                        <?php echo $p4_causas_doencas; ?>
                    </option>
                    <option value="manejo" <?php selectBox($row["causas"], 'manejo'); ?> >
                        <?php echo $p4_causas_manejo; ?>
                    </option>
                    <option value="defensivos" <?php selectBox($row["causas"], 'defensivos'); ?> >
                        <?php echo $p4_causas_defensivos; ?>
                    </option>
                    <option value="outros" <?php selectBox($row["causas"], 'outros'); ?> >
                        <?php echo $p4_causas_outros; ?>
                    </option>
                </select>




			<!-- <hr class="hr"> -->
			<p style="text-align:center;"><?php echo $p4_mencao; ?></p>
	        <div class="ui-grid-b ui-responsive">
	            <div class="ui-block-a">
			        <div id="aplicacao" data-role="fieldcontain" data-controltype="radiobuttons">
			            <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" class="full-legend">
			                <legend class="full-label">
			                   <?php echo $p4_aplicacao; ?>
			                </legend>
			                <input id="radioaplicacao1" name="aplicacao" value="nao" type="radio" <?php if($row['aplicacao'] == "nao") { echo 'checked'; } ?>>
			                <label for="radioaplicacao1">
			                    <?php echo $opt_nao; ?>
			                </label>
			                <input id="radioaplicacao2" name="aplicacao" value="sim" type="radio" <?php if($row['aplicacao'] == "sim") { echo 'checked'; } ?>>
			                <label for="radioaplicacao2">
			                    <?php echo $opt_sim; ?>
			                </label>
			            </fieldset>
			        </div>
	            </div>
	            <div class="ui-block-b">
		            <div data-role="fieldcontain" data-controltype="textinput">
		                <label for="culturas" class="full-label">
		                    <br>
							<?php echo $p4_culturas; ?>
		                </label>
		                <input name="culturas" id="culturas" placeholder=""
		                value="<?php echo $row['culturas']; ?>" type="text">
		            </div>
	            </div>
	            <div class="ui-block-c">
		            <div data-role="fieldcontain" data-controltype="textinput">
		                <label for="pesticidas" class="full-label">
		                   	<br>
							<?php echo $p4_pesticidas_label; ?>
		                </label>
		                <input name="pesticidas" id="pesticidas" placeholder="<?php echo $p4_pesticidas_holder; ?>"
		                value="<?php echo $row['pesticidas']; ?>" type="text">
		            </div>
	            </div>
	        </div>

			<hr class="hr">
            <a id="btSubmit" data-role="button" data-transition="slide" data-theme="b"
            href="#" data-icon="arrow-r" data-iconpos="right">
                <?php echo $bt_next; ?>
            </a>
			<!-- <input type="submit" data-theme="a" data-icon="arrow-d" data-iconpos="bottom" value="Submit"> -->
        </form>
    </div>
	<?php include("includes/tabbar.php");?>
</div>


