<link href="src/upload/css/style.css" rel="stylesheet" />
<script src="src/upload/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="src/upload/js/jquery.ui.widget.js"></script>
<script src="src/upload/js/jquery.iframe-transport.js"></script>
<script src="src/upload/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="src/upload/js/script.js"></script>

<div data-role="page" data-control-title="6º Passo" id="p6">
	<?php include("includes/panel.php");?>
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-controltype="panelbutton" data-role="button" href="#panel" data-icon="bars"
        data-iconpos="left">
			<?php echo $menu; ?>
        </a>
        <h3>
            6º <?php echo $p4_header; ?>
        </h3>
    </div>
    <div data-role="content">
		<label for="arquivo">
		    <?php echo $p4_arquivo_label; ?><br>
			<span style="font-size:small; color:#f4b803" class="t-yellow"><?php echo $p4_arquivo_span; ?></span>
		</label>
	
		<form id="upload" method="post" action="functions/upload.php" enctype="multipart/form-data">

			
			<div id="drop">
				Arraste aqui
				<a data-role="button" data-theme="b" data-icon="arrow-d" data-iconpos="bottom">Selecionar</a>
				<input type="file"  name="upl"  id="upl" <?php $android = stripos($_SERVER['HTTP_USER_AGENT'],"Android"); if(!$android) { echo "multiple"; }
				?> />
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>
	
	
        <form id="formCCD6" action="functions/ccd.php?p=6" method="POST" data-ajax="true" onSubmit="return false;" enctype="multipart/form-data">			
	
			<div data-role="fieldcontain" data-controltype="textarea">
                <label for="obs">
                    <?php echo $p4_obs; ?>
                </label>
                <textarea name="obs" id="obs" placeholder=""><?php echo $row['obs']; ?></textarea>
            </div>

            
            <label for="refer">
            	<?php echo $p4_refer; ?>
            </label>
            <textarea name="refer" id="refer" placeholder=""><?php echo $row['refer']; ?></textarea>

			<hr class="hr">


            <div class="ui-grid-a ui-responsive">
                <div class="ui-block-a">    
                    <a data-role="button" data-transition="slide" data-theme="b"
                href="#" href="javascript:history.back(1)" data-rel="back" data-icon="arrow-l" data-iconpos="left">
                        <?php echo $bt_prev; ?>
                    </a>
                </div>
                <div class="ui-block-b">
		            <a  id="btSubmit" data-role="button" data-transition="pop" data-theme="b" href="#"
		            data-icon="check" data-iconpos="right">
		                <?php echo $p4_bt; ?>
		            </a>
                </div>
            </div>


            
			<!-- <input type="submit" data-theme="a" data-icon="arrow-d" data-iconpos="bottom" value="Submit"> -->
        </form>
    </div>
	<?php include("includes/tabbar.php");?>
</div>


