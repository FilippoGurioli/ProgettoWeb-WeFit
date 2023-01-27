<?php
	require_once 'bootstrap.php';
		
	$templateParams["titolo"] = "WeFit - Login";
    $templateParams["nome"] = "login.php";
	$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/login.js");
	$templateParams["css"] = array("light-background", "register-login", "login", "navbar");
	
	require 'template/base.php';
?>