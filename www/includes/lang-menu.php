<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" class="ui-btn-inner">
    <input id="pt_lang" name="lang" value="pt" type="radio" onClick="go('functions/lang.php?lang=br');" <?php if($lang == "br" || $lang == "") { echo "checked"; } ?> >
    <label for="pt_lang">
        <img src="img/pt.png" border="0" />
    </label>

    <input id="us_lang" name="lang" value="us" type="radio" onClick="go('functions/lang.php?lang=us');" <?php if($lang == "us") { echo "checked"; } ?>>
    <label for="us_lang">
        <img src="img/us.png" border="0" />
    </label>
    
    <input id="es_lang" name="lang" value="es" type="radio" onClick="go('functions/lang.php?lang=es');" <?php if($lang == "es") { echo "checked"; } ?>>
    <label for="es_lang">
        <img src="img/es.png" border="0" />
    </label>
</fieldset>