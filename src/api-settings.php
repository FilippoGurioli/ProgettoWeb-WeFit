<?php
require_once 'bootstrap.php';

$result["successoModifica"] = false;

if(isset($_POST["username"])) {
	$dbh->updateUser($_POST["username"], $_SESSION["username"], "Username");
	$result["successoModifica"] = true;
}

if(isset($_POST["email"])) {
	$email = $dbh->getUserInfo($_SESSION["username"])[0]["Email"];
	$dbh->updateUser($_POST["email"], $email, "Email");
	$result["successoModifica"] = true;
}

header('Content-Type: application/json');
echo json_encode($result);
?>