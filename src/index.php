<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "WeFit - Login";
$templateParams["nome"] = "login.php";
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/login.js");
$templateParams["css"] = array("light-background", "register-login", "login");

$navbarVisible = false;

require 'template/base.php';
?>