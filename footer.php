<?php wp_footer(); ?>

<?php

if(is_lang_en())
    require_once "footer-en.php";
else
    require_once "footer-fr.php";
?>