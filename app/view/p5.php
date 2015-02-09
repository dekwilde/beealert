<div data-role="page" data-control-title="5º Passo" id="p5">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            5º <?php echo $p4_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <form id="formCCD5" action="functions/ccd.php?p=5" method="POST" data-ajax="true" onSubmit="return false;" enctype="multipart/form-data">


            <div data-role="fieldcontain" data-controltype="selectmenu">
                <label for="abelhas">
                	<?php echo $p4_abelhas; ?>
                </label>
                <select id="abelhas" name="abelhas" data-native-menu="false" multiple="multiple" data-icon="bars" data-iconpos="left">
                    <option><?php echo $bt_select; ?></option>
					<option value="apis" <?php selectBox($row["abelhas"], "apis"); ?>>
                        <?php echo $p4_abelhas_apis; ?>
                    </option>
                    <option value="meliponineos" <?php selectBox($row["abelhas"], "meliponineos"); ?>>
                        <?php echo $p4_abelhas_meliponineos; ?>
                    </option>
                    <option value="mamangava" <?php selectBox($row["abelhas"], "mamangava"); ?>>
                        <?php echo $p4_abelhas_mamangava; ?>
                    </option>
                    <option value="solitarias" <?php selectBox($row["abelhas"], "solitarias"); ?>>
                        <?php echo $p4_abelhas_solitarias; ?>
                    </option>
                </select>
            </div>


                <label for="areas">
                    <?php echo $p4_area_label; ?>
                </label>
                <textarea name="areas" id="areas" placeholder="<?php echo $p4_area_holder; ?>"><?php echo $row['areas']; ?></textarea>
 
			
			<hr class="hr">
            
	        <div class="ui-grid-a ui-responsive">
	            <div class="ui-block-a">
			        <div id="prop" data-role="fieldcontain" data-controltype="radiobuttons">
			            <fieldset data-role="controlgroup" data-type="horizontal" class="full-legend">
			                <legend>
			                    <?php echo $p4_prop; ?>
			                </legend>
			                <input id="radio3" name="prop" value="nao" type="radio" <?php if($row['prop'] == "nao") { echo 'checked'; } ?>>
			                <label for="radio3">
			                    <?php echo $opt_nao; ?>
			                </label>
			                <input id="radio4" name="prop" value="sim" type="radio" <?php if($row['prop'] == "sim") { echo 'checked'; } ?>>
			                <label for="radio4">
			                    <?php echo $opt_sim; ?>
			                </label>
			            </fieldset>
			        </div>
	            </div>
	            <div class="ui-block-b">
		            <label for="propdados">
		                <?php echo $p4_propdados_label; ?>
		            </label>
		            <textarea name="propdados" id="propdados" placeholder="<?php echo $p4_propdados_holder; ?>"><?php echo $row['propdados']; ?></textarea>
	            </div>
	        </div>


			<hr class="hr">
			
			
			<legend class="full-label">
                <?php echo $p4_prejuizo_label; ?>
            </legend>
	        <div class="ui-grid-a ui-responsive">
	            <div class="ui-block-a">
	                <div id="moeda" data-role="fieldcontain" data-controltype="radiobuttons">
	                    <fieldset data-role="controlgroup" data-type="horizontal">
	                        <input id="radio1" name="moeda" value="real" type="radio" <?php if($row["moeda"] == "real") { echo "checked";} ?>>
	                        <label for="radio1">
	                            R$
	                        </label>
	                        <input id="radio2" name="moeda" value="dolar" type="radio" <?php if($row["moeda"] == "dolar") { echo "checked";} ?>>
	                        <label for="radio2">
	                            US$
	                        </label>
	                    </fieldset>
	                </div>
					<input name="perdidos" id="perdidos" placeholder="<?php echo $p4_prejuizo_holder; ?>" value="<?php echo $row['perdidos']; ?>" type="tel">
	            </div>
	            <div class="ui-block-b">
	            	
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


