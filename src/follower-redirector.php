<?php
    require_once 'bootstrap.php';

    $templateParams["titolo"] = "WeFit - Followers";
    $templateParams["nome"] = "board.php";
    $templateParams["css"] = array("dark-background", "navbar", "board");
    $templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/getFollowers.js","js/search.js");

    if ($_SESSION["page"] == "personal") {
        $_SESSION["page"] = "personalfollowers";
    } elseif ($_SESSION["page"] == "friend") {
        $_SESSION["page"] = "friendfollowers";
    }
    $navbarVisible = true;

    require 'template/base.php';
?>