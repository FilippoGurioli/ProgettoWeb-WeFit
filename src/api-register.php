<?php
require_once 'bootstrap.php';

$result["error"] = true;

if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["birthday"]) && isset($_POST["email"]) && isset($_POST["height"]) && isset($_POST["weight"])) {
    $result["error"] = $dbh->register($_POST["username"], $_POST["birthday"], $_POST["email"], $_POST["height"], $_POST["weight"], $_POST["password"]);
}

header('Content-Type: application/json');
echo json_encode($result);
?>