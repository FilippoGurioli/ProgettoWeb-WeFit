<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Crea nuovo post";
$templateParams["nome"] = "createPost.php";
$templateParams["css"] = array("light-background", "create-post");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/create-post.js");

$navbarVisible = false;

require 'template/base.php';
?>