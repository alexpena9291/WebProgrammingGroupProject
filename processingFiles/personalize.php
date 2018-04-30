<?php
	//echo '<script>alert("test");</script>';
	$userId = $_REQUEST["userId"];
	//echo '<script>alert('.$user.');alert('.$pass.');</script>';
	
	//the $user and $pass work correctly!!! <----------------------
		
	//$password = $_REQUEST["pass"];

	
	$servername = "localhost";
   	$username = "root";
   	$password = "";
	$dbname = "whiteboard";
	$conn = null;
	 //Get Login Info
	
	
	//Prevent SQL injection
	
	//$username = stripcslashes($username);
	//$password = stripcslashes($password);
	//$username = mysql_real_escape_string($username);
	//$password = mysql_real_escape_string($password);
	
	
	 $con = mysqli_connect($servername,$username,$password,$dbname);
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}
		
	mysqli_select_db($con,"whiteboard");
	
	$sql="SELECT * FROM person where person_id = $userId";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$firstName = $row["f_name"];
	$lastName = $row["l_name"];
	
	echo("$firstName $lastName ");

?>