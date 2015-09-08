<div data-role="page" data-control-title="3º Passo" id="p3">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            <?php echo $p3_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <form id="formCCD3" action="functions/ccd.php?p=3" method="POST" data-ajax="true" onSubmit="return false;">
                <label for="total">
                    <?php echo $p3_label_total; ?>
                </label>
                <input data-theme="g" name="total" id="total" placeholder="99" value="<?php echo $row["total"]; ?>" type="tel">

            <div data-controltype="textblock">
				<p style="font-size: normal; color:#bb0000; text-align:center" data-mce-style="font-size: small;">
                	<?php echo $p3_desc; ?>
                </p>
            </div>
            <!-- end textblock -->
			<div id="sli" class="ui-grid-b ui-responsive fi">
                <div class="ui-block-a">
                    <ul data-role="listview" data-divider-theme="a" data-inset="true">
                        <li data-role="list-divider" role="heading" class="c">
                            <?php echo $p3_list_baixa; ?>
                        </li>
                    </ul>
                    <div data-role="fieldcontain" data-controltype="slider">
                        <label for="sliderBaixa" class="full-label">
                           <?php echo $p3_label_baixa; ?> 
                        </label>
                        <input data-theme="g" id="sliderBaixa" type="range" name="baixa" value="<?php if ($mode == "edit") { echo $row["baixa"]; } else { echo "0"; }  ?>" min="0" max="50" data-highlight="false">
                    </div>
                </div>



                <div class="ui-block-b">
                    <ul data-role="listview" data-divider-theme="a" data-inset="true">
                        <li data-role="list-divider" role="heading" class="c">
                            <?php echo $p3_list_media; ?>
                        </li>
                    </ul>
                    <div data-role="fieldcontain" data-controltype="slider">
                        <label for="sliderMedia" class="full-label">
                            <?php echo $p3_label_media; ?>
                        </label>
                        <input data-theme="g" id="sliderMedia" type="range" name="media" value="<?php if ($mode == "edit") { echo $row["media"]; } else { echo "0"; }  ?>" min="0" max="30" data-highlight="false">
                    </div>
                </div>


                <div class="ui-block-c">
                    <ul data-role="listview" data-divider-theme="a" data-inset="true">
                        <li data-role="list-divider" role="heading" class="c">
                            <?php echo $p3_list_alta; ?>
                        </li>
                    </ul>
                    <div data-role="fieldcontain" data-controltype="slider">
                        <label for="sliderAlta"  class="full-label">
                            <?php echo $p3_label_alta; ?>
                        </label>
                        <input data-theme="g" id="sliderAlta" type="range" name="alta" value="<?php if ($mode == "edit") { echo $row["alta"]; } else { echo "0"; }  ?>" min="0" max="25" data-highlight="false">
                    </div>
                </div>


<!--                 
				<div class="ui-block-d">
                    <ul data-role="listview" data-divider-theme="a" data-inset="true">
                        <li data-role="list-divider" role="heading" class="c">
                            100% de Perda
                        </li>
                    </ul>
                    <div data-role="fieldcontain" data-controltype="slider">
                        <label for="sliderTudo"  class="full-label">
                            Quantidade de colmeias com perda total das abelhas.
                        </label>
                        <input data-theme="g" id="sliderTudo" type="range" name="tudo" value="<?php //if ($mode == "edit") { echo $row["tudo"]; } else { echo "0"; }  ?>" min="0" max="25" data-highlight="false">
                    </div>
                </div>
-->

            </div>

            <ul data-role="listview" data-divider-theme="a" data-inset="true">
                <li data-role="list-divider" role="heading">
                    <span id="resultado"></span> <?php echo $p3_List_resultado; ?> <span class="ui-li-count ui-body-b" id="pct"></span>
                </li>
            </ul>

            <a id="btSubmit" data-role="button" data-transition="slide" data-theme="b"
            href="#" data-icon="arrow-r" data-iconpos="right">
                <?php echo $bt_next; ?>
            </a>
			<!-- <input type="submit" data-theme="a" data-icon="arrow-d" data-iconpos="bottom" value="Submit"> -->
        </form>
    </div>
	<?php include("includes/tabbar.php");?>
</div>

