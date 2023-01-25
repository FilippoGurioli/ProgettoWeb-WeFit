<?php
	require_once 'bootstrap.php';
	
	if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dataDiNascita"]) && isset($_POST["altezza"]) && isset($_POST["peso"])){
		$dbh->register($_POST['username'], $_POST['dataDiNascita'], $_POST['email'], $_POST['altezza'], $_POST['peso'], $_POST['password']);
	}
	
	require 'template/register-form.php';
?>