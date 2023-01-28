<?php
	require_once 'bootstrap.php';

	//if (isset($_GET["person"])){
		if($_POST["person"] == "user"){
			$result=$dbh->getPostByAuthor($_SESSION["username"]);
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
		} elseif ($_POST["person"] == "home"){
			$result=$dbh->getPostByAuthor($_SESSION["username"]);
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
		}
	//}
	
	if(!isset($result)){
		$result["error"]= true;
	}
	
	header('Content-Type: application/json');
	echo json_encode($result);
?>