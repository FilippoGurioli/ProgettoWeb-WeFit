<?php
require_once 'bootstrap.php';

$result["logineseguito"] = false;

if(isset($_POST["username"]) && isset($_POST["password"])) {
  $login_result = $dbh->checkLogin($_POST["username"], $_POST["password"]);
  if(count($login_result)!=0) {
	  $result["logineseguito"] = true;
  }
}

header('Content-Type: application/json');
echo json_encode($result);
?>