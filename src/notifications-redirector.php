<?php
	require_once 'bootstrap.php';
		
	$templateParams["titolo"] = "WeFit - Notifiche";
    $templateParams["nome"] = "notifications.php";
	$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js");//,"js/notifications.js");
	//$templateParams["css"] = array("light-background", "register-login", "login");
	
	$navbarVisible = true;
	require 'template/base.php';
?>