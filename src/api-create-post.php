<?php
require_once 'bootstrap.php';

$result["error"] = true;

if(isset($_POST["comment"]) && isset($_POST["images"]) && isset($_POST["exercises"]) && isset($_POST["weight"])) {

	$i = 0;
	$imagesName = array();
	foreach($_POST["images"] as $img) {
		$estensione = substr($img, 11, 3);
		if ($estensione == "jpe") {
			$estensione = "jpg";
		}
		$encodedTxt = substr($img, 22);
		array_push($imagesName, ($dbh->nextImageId() + $i).".".$estensione);
		$myfile = fopen("./upload/".$imagesName[$i], "w") or die("Unable to open file!");
		fwrite($myfile, base64_decode($encodedTxt));
		fclose($myfile);
		$i++;
	}

	$dbh->createPost($_POST["comment"], $imagesName, $_POST["exercises"], $_POST["weight"]);
	$result["error"] = false;
}

header('Content-Type: application/json');
echo json_encode($result);
?>
