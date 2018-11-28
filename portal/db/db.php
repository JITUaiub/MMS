<?php
	function executeQuery($sql){
		$host = "localhost";
		$username = "root";
		$password = "root";
		$database = "mms";

		$connection = mysqli_connect($host, $username, $password, $database);
		mysqli_query($connection, $sql);
	}

	function getResult($sql){
		$host = "localhost";
		$username = "root";
		$password = "root";
		$database = "mms";
		
		$connection = mysqli_connect($host, $username, $password, $database);
		$result = mysqli_query($connection, $sql);
		return $result;
	}
?>