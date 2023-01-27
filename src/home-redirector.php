<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Home";
$templateParams["nome"] = "home.php";
$templateParams["css"] = array("dark-background", "navbar", "post");
//$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/home.js");

$navbarVisible = true;

require 'template/base.php';
?>