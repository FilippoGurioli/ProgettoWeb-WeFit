<?php
	require_once 'bootstrap.php';
		
	$templateParams["titolo"] = "WeFit - Settings";
	$templateParams["nome"] = "settings.php";
	//$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/settings.js");
	$templateParams["css"] = array("light-background", "settings");
	$navbarVisible = false;
	
	require 'template/base.php';
?>