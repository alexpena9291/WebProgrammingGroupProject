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
	
	$sql="SELECT * FROM user_courses where person_id = $userId";
	$result = mysqli_query($con,$sql);
	/*$row = mysqli_fetch_array($result);
	$course_name = $row["course_name"];
	$course_grade = $row["course_grade"];
	
	echo("$course_name $course_grade ");
	
	$sql="SELECT * FROM course_announcements";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	
	for($row in $result){
		echo("$row['announcement']");
	}
	*/
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
		//creating a table to display course name & grades
		echo "<table>
			<tr><th>Course Name</th><th>Course Grade</th></tr>
		";
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td> " . $row["course_name"]."</td> 
			<td>".$row["course_grade"]. "%</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	mysqli_close($con);

?>