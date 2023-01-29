<?php
	require_once 'bootstrap.php';
		
	$_SESSION["page"] = "notifications";
	$templateParams["titolo"] = "WeFit - Notifiche";
    $templateParams["nome"] = "notifications.php";
	$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/notifications.js");
	$templateParams["css"] = array("dark-background", "navbar", "notifications");
	
	$navbarVisible = true;
	require 'template/base.php';
?>