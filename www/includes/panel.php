<div data-role="panel" id="panel" data-position="left" data-display="overlay"
data-theme="a">
    <ul data-role="listview" data-divider-theme="b" data-inset="false">
		
		<?php
		session_start();
		if($_SESSION['user_id']) {?>
		<li data-theme="f">
            <a href="functions/logout.php" data-ajax="false" data-transition="slide">
                <?php echo $menu_sair; ?>
            </a>
        </li>
        <li data-theme="">
            <a href="#" onClick="go('home.php')" data-transition="slide">
                <?php echo $menu_home; ?>
            </a>
        </li>
        <li data-theme="a">
            <a href="#" onClick="go('index.php?mode=edit#sign')"  data-transition="slide">
                <?php echo $menu_perfil; ?>
            </a>
        </li>
		<?php } ?>
		<li data-theme="a">
            <a href="index.php#sobre"  data-transition="slide" data-ajax="false">
                <?php echo $sobre; ?>
            </a>
        </li>
		<li data-theme="a">
            <a href="index.php#polinizadores"  data-transition="slide" data-ajax="false">
                Projeto<br>Polinizadores<br>do Brasil
            </a>
        </li>
		<li data-theme="a">
            <a href="index.php#fazer" data-ajax="false" data-transition="slide">
                Em caso de<br>Contaminação
            </a>
        </li>
		<li data-theme="a">
            <a href="index.php#tutorial" data-ajax="false"  data-transition="slide">
                Tutorial
            </a>
        </li>
        <li data-role="list-divider" role="heading">
            <?php echo $menu_lang; ?>
        </li>
       <li data-theme="a">
            <a href="functions/lang.php?lang=br" id="br" data-transition="slide" data-ajax="false">
                Português
            </a>
        </li>
        <li data-theme="a">
            <a href="functions/lang.php?lang=us" id="us" data-transition="slide"  data-ajax="false">
                English
            </a>
        </li>
        <li data-theme="a">
            <a href="functions/lang.php?lang=es" id="us" data-transition="slide"  data-ajax="false">
                Espanhol
            </a>
        </li>
    </ul>
</div>