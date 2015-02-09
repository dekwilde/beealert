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
            <a href="#sobre"  data-transition="slide">
                <?php echo $sobre; ?>
            </a>
        </li>
		<li data-theme="a">
            <a href="#polinizadores"  data-transition="slide">
                Polinizadores do Brasil
            </a>
        </li>
		<li data-theme="a">
            <a href="#fazer"  data-transition="slide">
                Procedimento
            </a>
        </li>
		<li data-theme="a">
            <a href="#tutorial"  data-transition="slide">
                Tutorial
            </a>
        </li>
        <li data-role="list-divider" role="heading">
            <?php echo $menu_lang; ?>
        </li>
        <li data-theme="a" style="height:40px;">
            <?php require("lang-menu.php"); ?>
        </li>
    </ul>
</div>