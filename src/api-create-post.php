<?php
require_once 'bootstrap.php';

$result["error"] = true;

if(isset($_POST["comment"]) && isset($_POST["images"]) && isset($_POST["exercises"]) && isset($_POST["weight"])) {

	$txt = $_POST["images"][0];
	$estensione = substr($txt, 11, 3);
	$encodedTxt = substr($txt, 22);
	$myfile = fopen("./upload/newfile.".$estensione, "w") or die("Unable to open file!");
	fwrite($myfile, base64_decode($encodedTxt));
	fclose($myfile);

	$dbh->createPost($_POST["comment"], $_POST["images"], $_POST["exercises"], $_POST["weight"]);
	$result["error"] = false;
}

header('Content-Type: application/json');
echo json_encode($result);
?>
