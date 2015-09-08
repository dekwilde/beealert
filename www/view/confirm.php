<div data-role="page" data-control-title="Confirmação" id="confirm">
    <div data-theme="a" data-role="header" data-position="fixed">
        <h3>
            <?php echo $confirm_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <div data-controltype="textblock">
            <p style="text-align: center;">
                <span style="font-size: small;">
                    <b>
                        <?php echo $confirm_tit; ?>
                    </b>
                </span>
            </p>
            <p style="text-align: center; font-size: small;">
				<?php echo $confirm_desc; ?>
            </p>
        </div>
        <a data-role="button" data-transition="slideup" data-theme="b" href="javascript:go('home.php')"
        data-icon="arrow-d" data-iconpos="bottom">
            <?php echo $confirm_bt; ?>
        </a>
    </div>
</div>


