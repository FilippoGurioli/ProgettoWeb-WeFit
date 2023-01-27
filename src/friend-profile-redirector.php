<?php
require_once 'bootstrap.php';

$templateParams["titolo"] = "WeFit - Friend Profile";
$templateParams["nome"] = "profile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "profile");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js");
$templateParams["profile"] = array("username" => $_SESSION["searchResult"]);
$templateParams["profile"] = array_merge($templateParams["profile"], array("birthday" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Birthday"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("weight" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Weight"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("height" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Height"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollower" => "60"));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollowed" => "69"));
$tmp = array("weightTarget" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["WeightTarget"]);
if ($tmp["weightTarget"] === null) {
    $templateParams["profile"] = array_merge($templateParams["profile"], array("weightTarget" => "ND"));
    $templateParams["profile"] = array_merge($templateParams["profile"], array("time" => "ND"));
} else {
    $templateParams["profile"] = array_merge($templateParams["profile"], $tmp);
    $templateParams["profile"] = array_merge($templateParams["profile"], array("time" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Time"]));
}
$templateParams["profile"] = array_merge($templateParams["profile"], array("profilePic" => $dbh->getUserInfo($_SESSION["username"])[0]["Photo"]));

$navbarVisible = true;
$isPersonalP = false;

require 'template/base.php';
?>