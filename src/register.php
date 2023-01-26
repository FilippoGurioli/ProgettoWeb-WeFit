<?php
	require_once 'bootstrap.php';
		
	$templateParams["titolo"] = "Blog TW - Register";
	$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/register.js");
	
	require 'template/register.php';
?>