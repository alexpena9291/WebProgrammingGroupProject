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
				password varchar(20) DEFAULT NULL
			);
		";
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec($people);
		}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
	
	
	$sql = file_get_contents('database.sql');
	$conn->exec($sql);
?>