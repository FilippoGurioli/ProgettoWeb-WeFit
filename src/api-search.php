<?php
require_once 'bootstrap.php';

$result["successoRicerca"] = false;

if(isset($_POST["searched"])) {
  $search_result = $dbh->isPresent($_POST["searched"]);
  if(count($search_result)!=0 && $_SESSION["username"]!=$search_result[0]["Username"]) {
	  $result["successoRicerca"] = true;
	  $_SESSION["searchResult"] = $search_result[0]["Username"];
  }
}

header('Content-Type: application/json');
echo json_encode($result);
?>