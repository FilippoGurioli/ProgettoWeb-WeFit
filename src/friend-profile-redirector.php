<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Friend Profile";
$templateParams["nome"] = "friend-profile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "personal-profile");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js");
$navbarVisible = true;

require 'template/base.php';
?>