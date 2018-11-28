<?php
	include '../portal/db/db.php';

	$q = "";

	if(isset($_REQUEST['q'])){
		$q = $_REQUEST['q'];
	}

	$emails = array(); $i = 0;
	$result = getResult("SELECT `email` from `users`");

	while($row = mysqli_fetch_assoc($result)){
		$emails[$i] = $row['email'];
		$i++;
	}

	foreach ($emails as $email) {
		if ($email == $q) {
			echo "Email already used in an account. Try another one.";
			return;
		}
	}
?>