<div>
    <a href="#forget" data-rel="popup" data-position-to="window" data-transition="pop">
        <?php echo $forget_link; ?>
    </a>
	<div data-role="popup" id="forget" data-theme="a" class="ui-corner-all">
	    <form id="form-recover" action="#forget" method="POST" data-ajax="true">
	        <div style="padding:10px 20px;">
	            <h3><?php echo $forget_tit; ?></h3>
				<p><?php echo $forget_desc; ?></p>
	            <label for="un" class="ui-hidden-accessible">Email:</label>
	            <input type="text" name="email" id="email" value="" placeholder="john@host.com" data-theme="a">
	            <button type="submit" data-icon="arrow-d"  data-theme="b" data-iconpos="bottom" ><?php echo $forget_bt; ?></button>
	        </div>
	    </form>
	</div>
</div>