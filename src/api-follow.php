<?php
require_once 'bootstrap.php';

$result["succesfullFollow"]=false;
if(isset($_SESSION["username"]) && isset($_SESSION["searchResult"])) {
    $dbh->follow($_SESSION["username"], $_SESSION["searchResult"]);
	$result["succesfullFollow"]=true;
}

header('Content-Type: application/json');
echo json_encode($result);
?>