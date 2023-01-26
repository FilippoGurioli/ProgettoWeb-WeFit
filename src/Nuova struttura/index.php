<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "WeFit";
$templateParams["nome"] = "register.php";
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/register.js");
<<<<<<< HEAD
$templateParams["css"] = array(/*"create-post", "dark-background", */"light-background", /*"login", */"navbar", /*"personal-profile", "post",*/ "register", "register-login"/*, "settings"*/);
=======
$templateParams["css"] = array("create-post", "dark-background", "light-background", "login", "navbar", "personal-profile", "post", "register", "register-login", "settings");
>>>>>>> 400e936fca3b44d3915aefa657abdaab76da994b

require 'template/base.php';
?>