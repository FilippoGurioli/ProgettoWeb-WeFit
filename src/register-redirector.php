<?php
	require_once 'bootstrap.php';
		
	$templateParams["titolo"] = "WeFit - Register";
	$templateParams["nome"] = "register.php";
	$templateParams["css"] = array("light-background", "register-login", "register", "navbar");
	$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/register.js");
	
	require 'template/base.php';
?>