<div data-role="page" data-control-title="Sobre" id="sobre">
    <div data-theme="a" data-role="header" data-position="fixed">
        <a data-role="button" href="#index" data-icon="back" data-iconpos="notext"
        class="ui-btn-left">
        </a>
        <h3>
            <?php echo $sobre_header; ?>
        </h3>
    </div>
    <div data-role="content">
        <div data-controltype="textblock">
			<h2><?php echo $sobre_tit; ?></h2>
			<p style="text-align:justify;">
				<?php echo $sobre_desc; ?>
				<a href='mailto:beealert@semabelhasemalimento.com.br'>beealert@semabelhasemalimento.com.br</a>
			</p>
			<p><?php echo $sobre_dev; ?><a href="http://www.6p.com.br/"> 6P Marketing & Propaganda</a>
			
			
			<ul data-role="listview" data-inset="true" >
				<li class="ui-field-contain" data-theme="c">
					<div class="ui-grid-a ui-responsive">
			            <div class="ui-block-a">
							<h4>Iniciativa:</h4>
							<div class="ui-grid-a ui-responsive">
					            <div class="ui-block-a">
									<img src="img/logos/cetapis.png" style="height:25px">
								</div>
								<div class="ui-block-b" style="text-align:center">
									<img src="img/logos/6p.png" style="height:50px">
								</div>
							</div>
			            </div>
			            <div class="ui-block-b">
							<h4>Apoio:</h4>
							<div class="ui-grid-c ui-responsive">
								<div class="ui-block-a">
									<img src="img/logos/cba.png" style="height:35px"><br><br>
									<img src="img/logos/usp.png" style="height:30px">
								</div>
						        <div class="ui-block-b" style="text-align:center">
									<img src="img/logos/abemel.png" style="height:50px">
								</div>
						        <div class="ui-block-c">
									<img src="img/logos/filapi.png" style="height:45px">
								</div>
								<div class="ui-block-d" style="text-align:right">
									<img src="img/logos/apimondia.png" style="height:50px">
								</div>
							</div>
			            </div>
			        </div>
				</li>
			</ul>
			
			
			<hr class="hr">
			
			
            <h2><?php echo $sobre_embed_tit; ?></h2>
			<p><?php echo $sobre_embed_desc; ?></p>
			
			

			
			<ul data-role="listview" data-inset="true" >
				<li class="ui-field-contain" data-theme="c">
					<div data-role="fieldcontain" data-controltype="textarea" data-theme="c">
			            <label for="textarea1">
			                <?php echo $sobre_embed_copy; ?>
			            </label>
			            <code id="textarea1">
							&lt;iframe src=&quot;http://www.semabelhasemalimento.com.br/beealert&quot;<br>
							width=&quot;320px&quot; height=&quot;480px&quot;
							frameborder=&quot;no&quot;&gt;&lt;/iframe&gt;
						</code>
			        </div>
				</li>
			</ul>
			
			<hr class="hr">
			
			<h2><?php echo $sobre_sup_tit; ?></h2>
			<?php echo $sobre_desc_tit; ?>
        </div>
    </div>
</div>

