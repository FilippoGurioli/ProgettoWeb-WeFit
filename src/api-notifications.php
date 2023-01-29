<?php 
    require_once 'bootstrap.php';

    if (isset($_SESSION["page"])) {
        $notifications = $dbh->getNotifications($_SESSION["username"]);
        for($i = 0; $i < count($notifications); $i++) {
            $result[$i]["Photo"] = $dbh->getUserInfo($notifications[$i]["Author"])[0]["Photo"];
            $result[$i]["Author"] = $notifications[$i]["Author"];
            $result[$i]["Type"] = $notifications[$i]["Type"];
        }
    }

    header('Content-Type: application/json');
	echo json_encode($result);
?>