<?php
	//echo '<script>alert("test");</script>';
	$user = $_REQUEST["user"];
	$pass = $_REQUEST["pass"];
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
	
	$sql="SELECT * FROM person where username = '$user' and password = '$pass'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['username'] == $user && $row['password'] == $pass){
		//echo $row['person_id'];
		echo $row['person_id'];
	} else {
		echo"failed";
	}
?>