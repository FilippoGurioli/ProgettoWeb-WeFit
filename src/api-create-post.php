<?php
require_once 'bootstrap.php';

$result["error"] = true;

if(isset($_POST["comment"]) && isset($_POST["images"]) && isset($_POST["exercises"]) && isset($_POST["weight"])) {
	$dbh->createPost($_POST["comment"], $_POST["images"], $_POST["exercises"], $_POST["weight"]);
	$result["error"] = false;
}

header('Content-Type: application/json');
echo json_encode($result);
?>