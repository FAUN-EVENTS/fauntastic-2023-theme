<?php

global $wp;

$en_match = "/en/";
$uri = $_SERVER["REQUEST_URI"];

if(substr($uri, 0, strlen($en_match)) === $en_match)
    require_once "home-en.php";
else
    require_once "home-fr.php";
?>