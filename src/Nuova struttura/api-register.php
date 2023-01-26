<?php
require_once 'bootstrap.php';

$result["registration"] = false;

console.log(isset($_POST["username"]) && isset($_POST["dataDiNascita"]) && isset($_POST["email"]) && isset($_POST["heigth"]) && isset($_POST["weight"]) && isset($_POST["password"]));
if(isset($_POST["username"]) && isset($_POST["dataDiNascita"]) && isset($_POST["email"]) && isset($_POST["heigth"]) && isset($_POST["weight"]) && isset($_POST["password"])){
    $dbh->register($_POST["username"], $_POST["dataDiNascita"], $_POST["email"], $_POST["heigth"], $_POST["weight"], $_POST["password"]);
	$result["registration"] = true;
}

header('Content-Type: application/json');
echo json_encode($result);
?>