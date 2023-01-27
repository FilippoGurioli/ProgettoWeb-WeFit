<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Personal Profile";
$templateParams["nome"] = "profile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "profile");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js");
$templateParams["profile"] = array("username" => $dbh->getUserInfo($_SESSION["username"])[0]["Username"]);
$templateParams["profile"] = array_merge($templateParams["profile"], array("birthday" => $dbh->getUserInfo($_SESSION["username"])[0]["Birthday"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("weight" => $dbh->getUserInfo($_SESSION["username"])[0]["Weight"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("height" => $dbh->getUserInfo($_SESSION["username"])[0]["Height"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollower" => "60"));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollowed" => "69"));
$templateParams["profile"] = array_merge($templateParams["profile"], array("weightTarget" => "54"));
$templateParams["profile"] = array_merge($templateParams["profile"], array("time" => "2 mesi"));


$navbarVisible = true;
$isPersonalP = true;

require 'template/base.php';
?>