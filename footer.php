<?php wp_footer(); ?>

<?php

if(is_lang_en())
    require_once "en/footer-en.php";
else
    require_once "fr/footer-fr.php";
?>