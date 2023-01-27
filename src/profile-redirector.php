<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Profile";
$templateParams["nome"] = "profile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "profile");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js");
$navbarVisible = true;
$isPersonalP = true;

require 'template/base.php';
?>