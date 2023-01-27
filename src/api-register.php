<?php
require_once 'bootstrap.php';

$result["registrazioneCompletata"] = false;

if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["birthday"]) && isset($_POST["email"]) && isset($_POST["height"]) && isset($_POST["weight"])) {
    $register_result = $dbh->register($_POST["username"], $_POST["birthday"], $_POST["email"], $_POST["height"], $_POST["weight"], $_POST["password"]);
    if(count($register_result)!=0) {
		$result["registrazioneCompletata"] = true;
    }
}

header('Content-Type: application/json');
echo json_encode($result);
?>