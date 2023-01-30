<?php
	require_once 'bootstrap.php';

    $result["commentOK"] = false;
    if (isset($_SESSION["username"]) && isset($_POST["post"]) && isset($_POST["text"]) && isset($_POST["user"])){
        $dbh->insertComment($_SESSION["username"], $_POST["post"], $_POST["text"]);
        if ($_POST["user"] != $_SESSION["username"]) {
            $dbh->notification($_POST["user"], "comment", $_SESSION["username"]);
        }
        $result["commentOK"] = true;
    }
	
	header('Content-Type: application/json');
	echo json_encode($result);
?>