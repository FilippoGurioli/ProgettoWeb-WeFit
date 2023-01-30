<?php
	require_once 'bootstrap.php';

    $result["getFollowers"] = false;
    if (isset($_SESSION["page"])) {
        if ($_SESSION["page"] == "personalfollowers"){
            $result["allFollowers"] = $dbh->getFollowers($_SESSION["username"]);
            for($i = 0; $i < count($result["allFollowers"]); $i++){
                $result["allFollowers"][$i]["Photo"] = $dbh->getUserInfo($result["allFollowers"][$i]["User2"])[0]["Photo"];
            }
            $result["getFollowers"] = true;
        } elseif ($_SESSION["page"] == "friendfollowers") {
            $result["allFollowers"] = $dbh->getFollowers($_SESSION["searchResult"]);
            for($i = 0; $i < count($result["allFollowers"]); $i++){
                $result["allFollowers"][$i]["Photo"] = $dbh->getUserInfo($result["allFollowers"][$i]["User2"])[0]["Photo"];
            }
            $result["getFollowers"] = true;
        } elseif ($_SESSION["page"] == "personalfollowed") {
            $result["allFollowers"] = $dbh->getFollowed($_SESSION["username"]);
            for($i = 0; $i < count($result["allFollowers"]); $i++){
                $result["allFollowers"][$i]["Photo"] = $dbh->getUserInfo($result["allFollowers"][$i]["User2"])[0]["Photo"];
            }
            $result["getFollowers"] = true;
        } elseif ($_SESSION["page"] == "friendfollowed") {
            $result["allFollowers"] = $dbh->getFollowed($_SESSION["searchResult"]);
            for($i = 0; $i < count($result["allFollowers"]); $i++){
                $result["allFollowers"][$i]["Photo"] = $dbh->getUserInfo($result["allFollowers"][$i]["User2"])[0]["Photo"];
            }
            $result["getFollowers"] = true;
        }
    }

	header('Content-Type: application/json');
	echo json_encode($result);	
?>