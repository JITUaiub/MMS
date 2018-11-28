<?php
	include '../portal/db/db.php';

	$email = "";
	$pass = "";

	if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['password'];
	}

	$users = array(); $i = 0;
	$result = getResult("SELECT * from `users`");

	while($row = mysqli_fetch_assoc($result)){
		$tmp = array();
		$tmp['email'] = $row['email'];
		$tmp['password'] = $row['password'];
		$tmp['status'] = $row['status'];
		$users[$i] = $tmp;
		$i++;
	}

	for ($i=0; $i < count($users); $i++) { 
		if ($users[$i]['email'] == $email && $users[$i]['password'] == $pass) {
			if ($users[$i]['status'] == "i") {
				header("location: ../portal/activation.php");
				return;
			}else{
				session_start();
				$_SESSION['loggedUser'] = $users[$i]['email'];
				header("location: ../portal/dashboard.php");
				return;
			}
		}
	}

	header("location: ../login.php?m=0");
?>