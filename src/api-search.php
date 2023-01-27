<?php
require_once 'bootstrap.php';

$result["successoRicerca"] = false;

if(isset($_POST["searched"])) {
  $search_result = $dbh->isPresent($_POST["searched"]);
  if(count($search_result)!=0) {
	  $result["successoRicerca"] = true;
  }
}

header('Content-Type: application/json');
echo json_encode($result);
?>