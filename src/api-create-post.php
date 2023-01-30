<?php
require_once 'bootstrap.php';

$result["error"] = true;

if(isset($_POST["comment"]) && isset($_POST["images"]) && isset($_POST["exercises"]) && isset($_POST["weight"])) {

	$i = 0;
	$imagesName = array();
	if ($_POST["images"][0] != "") {
		foreach($_POST["images"] as $img) {
			$extension = substr($img, 11, 3);
			if ($extension == "jpe") {
				$extension = "jpg";
			}
			$encodedTxt = substr($img, 22);
			array_push($imagesName, ($dbh->nextImageId() + $i).".".$extension);
			$myfile = fopen("./upload/".$imagesName[$i++], "w") or die("Unable to open file!");
			fwrite($myfile, base64_decode($encodedTxt));
			fclose($myfile);
		}
	}

	$dbh->createPost($_POST["comment"], $imagesName, $_POST["exercises"], $_POST["weight"]);
	$followers = $dbh->getFollowers($_SESSION["username"]);
	foreach ($followers as $f) {
		$dbh->notification($f, "post", $_SESSION["username"]);
	}
	$result["error"] = false;
}

header('Content-Type: application/json');
echo json_encode($result);
?>
