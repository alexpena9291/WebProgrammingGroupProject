<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//				-= Creates the DB "whiteboard" =-
	$dbname = "whiteboard";

	$sql = "CREATE DATABASE IF NOT EXISTS whiteboard";
	try {
		$conn = new PDO("mysql:host=$servername;", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// use exec() because no results are returned
		$conn->exec($sql);
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}

	$conn = null;
	
	
	//				-= Creates the DB tables =-
	
	$people = "
	USE whiteboard;
	DROP TABLE IF EXISTS person;
	CREATE TABLE person(
				person_id int(10) NOT NULL,
				f_name varchar(15) default NULL, 
				l_name varchar(15) default NULL,    
				phone varchar(12) default NULL,
				email varchar(25) default NULL,
				username varchar(20) DEFAULT NULL,
				password varchar(20) DEFAULT NULL,
				PRIMARY KEY (person_id)
			);
		";
		
	$user_courses = "
	USE whiteboard;
	DROP TABLE IF EXISTS user_courses;
	CREATE TABLE user_courses(
				person_id int(10) NOT NULL,
				course_id int(10) NOT NULL,
				course_name varchar(50) default NULL, 
				course_grade int(3) NOT NULL,
				instructor varchar(30) NOT NULL,
				website varchar(50) default NULL,
				PRIMARY KEY (course_id),
				FOREIGN KEY (Person_id) REFERENCES Person(Person_id)
			);
		";
		
	$course_announcements = "
	USE whiteboard;
	DROP TABLE IF EXISTS course_announcements;
	CREATE TABLE course_announcements(
				course_id int(10) NOT NULL,
				announcement varchar(100) default NULL,
				FOREIGN KEY (course_id) REFERENCES User_courses(course_id)
			);
		";
		
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec($people);
		$conn->exec($user_courses);
		$conn->exec($course_announcements);
		}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	
	
	$sql = file_get_contents('database.sql');
	$conn->exec($sql);
?>