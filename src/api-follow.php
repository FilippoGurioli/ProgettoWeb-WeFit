<?php
require_once 'bootstrap.php';

$result["succesfulOperation"]=false;
if(isset($_SESSION["username"]) && isset($_SESSION["searchResult"]) && isset($_POST["action"])) {
	if ($_POST["action"] == "follow"){
		$dbh->follow($_SESSION["username"], $_SESSION["searchResult"]);
		$dbh->notification($_SESSION["searchResult"], "follow", $_SESSION["username"]);
	} else{
		$dbh->unfollow($_SESSION["username"], $_SESSION["searchResult"]);
	}
	$result["succesfulOperation"]=true;
}

header('Content-Type: application/json');
echo json_encode($result);
?>