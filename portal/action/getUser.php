<?php
	include '../portal/db/db.php';

	function getUser($loggedUser){
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
			$tmp['name'] = $row['name'];
			$tmp['email'] = $row['email'];
			$tmp['password'] = $row['password'];
			$tmp['manager'] = $row['manager'];
			$tmp['status'] = $row['status'];
			$users[$i] = $tmp;
			$i++;
		}

		for ($i=0; $i < count($users); $i++) { 
			if ($users[$i]['email'] == $loggedUser) {
				return $users[$i];
			}
		}
		
	}
?>