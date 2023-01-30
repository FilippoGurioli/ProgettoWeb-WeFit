<?php
	require_once 'bootstrap.php';

	if (isset($_SESSION["page"])){
		if($_SESSION["page"] == "personal"){
			$result=$dbh->getPostByAuthor($_SESSION["username"]);
			$image=$dbh->getUserInfo($_SESSION["username"])[0]["Photo"];
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Photo"] = $image;
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
			$result = array_reverse($result);
		} elseif ($_SESSION["page"] == "home"){
			$result = $dbh->getHomePost();
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Photo"] = $dbh->getUserInfo($result[$i]["User"])[0]["Photo"];
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
		} else {
			$result=$dbh->getPostByAuthor($_SESSION["searchResult"]);
			$image=$dbh->getUserInfo($_SESSION["searchResult"])[0]["Photo"];
			for($i = 0; $i < count($result); $i++){
				$result[$i]["Photo"] = $image;
				$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
				$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
			}
			$result = array_reverse($result);
		}
	}
	
	if(!isset($result)){
		$result["error"]= true;
	}
	
	header('Content-Type: application/json');
	echo json_encode($result);
	
	function orderPosts($postToOrder){
		$temp=$postToOrder[0]["Id"];
		for ($p = 1; $p < count($postToOrder); $p++){
			if($postToOrder[$p]["Id"] > temp){
				
			}
		}
		
		return usort($postToOrder, "cmp");
	}

	
?>