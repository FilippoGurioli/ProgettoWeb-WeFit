<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Profile";
$templateParams["nome"] = "personalprofile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "personal-profile");
//$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/profile.js");

require 'template/base.php';
?>