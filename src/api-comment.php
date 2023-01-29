<?php
	require_once 'bootstrap.php';

    $result["commentOK"] = false;
    if (isset($_SESSION["username"]) && isset($_POST["post"]) && isset($_POST["text"])){
        $dbh->insertComment($_SESSION["username"], $_POST["post"], $_POST["text"]);
        $result["commentOK"] = true;
    }
	
	header('Content-Type: application/json');
	echo json_encode($result);
?>