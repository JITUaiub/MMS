<?php
	include '../portal/db/db.php';

	$name = "";
	$email = "";
	$pass = "";
	$conPass = "";

	if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['password']) && isset($_REQUEST['conPassword'])){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['password'];
		$conPass = $_REQUEST['conPassword'];
	}

	if($name != "" && $email != "" && $pass != "" && $conPass != ""){
		executeQuery("INSERT INTO `users` (`id`, `name`, `email`, `password`, `manager`, `status`) VALUES (NULL, '".$name."', '".$email."', '".$pass."', 'i', 'i')");
		header("location: ../registration.php?m=1");
	}else{
		header("location: ../registration.php?m=0");
	}
?>