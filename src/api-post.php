<?php
	require_once 'bootstrap.php';

	if (isset($_POST["person"])){
		if($_POST["person"] == "user"){
			$result=$dbh->getPostByAuthor($_SESSION["username"]);
			$image=$dbh->getUserInfo($_SESSION["username"])[0]["Photo"];
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Photo"] = $image;
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
		} elseif ($_POST["person"] == "home"){
			$friends=$dbh->getFollowing($_SESSION["username"]);
			$allPosts= array();
			for($j = 0; $j < count($friends); $j++) {
				$friendPosts=$dbh->getPostByAuthor($friends[$j]["User2"]);
				for($k = 0; $k < count($friendPosts); $k++) {
					array_push($allPosts,$friendPosts[$k]);
				}
				$result=$allPosts;
			}
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
		}
	}
	
	if(!isset($result)){
		$result["error"]= true;
	}
	
	header('Content-Type: application/json');
	echo json_encode($result);
?>