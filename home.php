<?php

global $wp;

if(is_lang_en())
    require_once "en/home-en.php";
else
    require_once "fr/home-fr.php";
