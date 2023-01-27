<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Friend Profile";
$templateParams["nome"] = "personalprofile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "personal-profile");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js");
$navbarVisible = true;
$isPersonalP = false;

require 'template/base.php';
?>