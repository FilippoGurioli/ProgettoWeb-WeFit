<?php
require_once 'bootstrap.php';

$_SESSION["page"] = "friend";
$templateParams["titolo"] = "WeFit - Profilo";
$templateParams["nome"] = "profile.php";
$templateParams["css"] = array("dark-background", "navbar", "post", "profile", "board");
$templateParams["js"] = array("https://unpkg.com/axios/dist/axios.min.js","js/search.js","js/follow.js","js/post.js");
$templateParams["profile"] = array("username" => $_SESSION["searchResult"]);
$templateParams["profile"] = array_merge($templateParams["profile"], array("birthday" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Birthday"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("weight" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Weight"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("height" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Height"]));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollower" => count($dbh->getFollowers($_SESSION["searchResult"]))));
$templateParams["profile"] = array_merge($templateParams["profile"], array("numFollowed" => count($dbh->getFollowed($_SESSION["searchResult"]))));
$tmp = array("weightTarget" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["WeightTarget"]);
if ($tmp["weightTarget"] === null) {
    $templateParams["profile"] = array_merge($templateParams["profile"], array("weightTarget" => "ND"));
    $templateParams["profile"] = array_merge($templateParams["profile"], array("time" => "ND"));
} else {
    $templateParams["profile"] = array_merge($templateParams["profile"], $tmp);
    $templateParams["profile"] = array_merge($templateParams["profile"], array("time" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Time"]));
}
$templateParams["profile"] = array_merge($templateParams["profile"], array("profilePic" => $dbh->getUserInfo($_SESSION["searchResult"])[0]["Photo"]));

$templateParams["profile"] = array_merge($templateParams["profile"], array("friend" => (count($dbh->isFollowing($_SESSION["username"], $_SESSION["searchResult"])) != 0)));

$navbarVisible = true;
$isPersonalP = false;

require 'template/base.php';
?>