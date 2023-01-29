<?php
	require_once 'bootstrap.php';

    $result["getFollowers"] = false;
	if (isset($_SESSION["page"]) && $_SESSION["page"] == "followers"){
		$result["allFollowers"] = $dbh->getFollowers($_SESSION["username"]);
        for($i = 0; $i < count($result["allFollowers"]); $i++){
            $result["allFollowers"][$i]["Photo"] = $dbh->getUserInfo($result["allFollowers"][$i]["User2"])[0]["Photo"];
        }
        $result["getFollowers"] = true;
	}

	header('Content-Type: application/json');
	echo json_encode($result);	
?>