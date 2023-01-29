<?php
    require_once 'bootstrap.php';

    $templateParams["titolo"] = "WeFit - Followers";
    $templateParams["nome"] = "board.php";
    $templateParams["css"] = array("dark-background", "navbar", "get-followers");
    $templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/getFollowers.js");

    $_SESSION["page"] = "followers";
    $navbarVisible = true;

    require 'template/base.php';
?>