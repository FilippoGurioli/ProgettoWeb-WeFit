<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "WeFit";
$templateParams["nome"] = "register.php";
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/register.js");
$templateParams["css"] = array(/*"create-post", "dark-background", */"light-background", /*"login", */"navbar", /*"personal-profile", "post",*/ "register", "register-login"/*, "settings"*/);

require 'template/base.php';
?>