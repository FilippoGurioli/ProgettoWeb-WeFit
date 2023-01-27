<?php
require_once 'bootstrap.php';

$result["successoModifica"] = false;

if(isset($_POST["searched"])) {
  $search_result = $dbh->isPresent($_POST["searched"]);
  if(count($search_result)!=0 && $_SESSION["username"]!=$search_result[0]["Username"]) {
	  $uInformations = $dbh->getUserInfo($search_result[0]["Username"]);
	  $result["successoRicerca"] = true;
	  $result["Username"] = $uInformations[0]["Username"];
	  $result["Email"] = $uInformations[0]["Email"];
	  $result["Password"] = $uInformations[0]["Password"];
	  $result["Birthday"] = $uInformations[0]["Birthday"];
	  $result["Height"] = $uInformations[0]["Height"];
	  $result["Weight"] = $uInformations[0]["Weight"];
	  $result["Photo"] = $uInformations[0]["Photo"];
  }
}

header('Content-Type: application/json');
echo json_encode($result);
?>