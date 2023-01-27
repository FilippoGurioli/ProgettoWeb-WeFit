<?php
	require_once 'bootstrap.php';

	$result=$dbh->getPostByAuthor($_SESSION["username"]);
	for($i = 0; $i < count($result); $i++){
		$result[$i]["Images"] = $dbh->getPostImages($result[$i]["Id"]);
		$result[$i]["Comments"] = $dbh->getPostComments($result[$i]["Id"]);
	}
	
	header('Content-Type: application/json');
	echo json_encode($result);
?>