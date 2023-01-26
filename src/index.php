<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "WeFit";
$templateParams["nome"] = "login-form.php";
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/login.js","js/search.js");
$templateParams["css"] = array(/*"create-post", "dark-background", */"light-background", "login", "navbar", /*"personal-profile", "post", "register",*/ "register-login"/*, "settings"*/);

require 'template/base.php';
?>