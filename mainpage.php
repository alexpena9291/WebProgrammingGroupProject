<?php
include("HTMLReusables/top.html");
include("HTMLReusables/sideBar.html");
include("HTMLPages/home.html");
?>
<script>
	var locationW = String(window.location);
	var first = locationW.indexOf("=");
	var last = locationW.indexOf("#");
	var userId;
	//alert(locationW.substring((first + 1), locationW.length));
	//alert(first + ":" + last);
	if(last != -1){
	userId = locationW.substring((first + 1), last);
	} else {
	userId = locationW.substring((first + 1), locationW.length);
	}
	
	//alert(userId);
	personalize(userId);
	personalizeCourses(userId);
	personalizeGrades(userId);
	
	function personalize(personalId) {
		var xhttp;    
		
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			$userInfo = this.responseText;
			console.log("User info is " + $userInfo);
			$("#userNameP").html(this.responseText);
			
			}
		};
		xhttp.open("GET", "processingFiles/personalize.php?userId="+ personalId, true);
		xhttp.send();
	}

	//personalize courses and grades for the home tab
	var isHome = locationW.indexOf("#home");
	console.log("Index is at home!");
	if(isHome != -1){
		console.log("Going home!");
		personalizeCourses(userId, "#courseListHome");
		personalizeGrades(userId, "#gradesListHome");
		document.getElementById("homeDiv").style.display = "block";
		document.getElementById("coursesDiv").style.display = "none";
		document.getElementById("gradesDiv").style.display = "none";
		document.getElementById("userDiv").style.display = "none";
	}
	
	//personalize the courses tab
	var isCourse = locationW.indexOf("#courses");
	console.log("Index is at courses!");
	if(isCourse != -1){
		console.log("Going courses!");
		personalizeCourses(userId, "#courseList");
		document.getElementById("coursesDiv").style.display = "block";
		document.getElementById("homeDiv").style.display = "none";
		document.getElementById("gradesDiv").style.display = "none";
		document.getElementById("userDiv").style.display = "none";
	}
	
	//personalize the grades tab
	var isGrades = locationW.indexOf("#grades");
	console.log("Index is at grades!");
	if(isGrades != -1){
		console.log("Going grades!");
		personalizeGrades(userId, "#gradesList");
		document.getElementById("gradesDiv").style.display = "block";
		document.getElementById("homeDiv").style.display = "none";
		document.getElementById("coursesDiv").style.display = "none";
		document.getElementById("userDiv").style.display = "none";
	}
	
	//personalize the users tab
	var isUsers = locationW.indexOf("#userdirectory");
	console.log("Index is at userdirectory!");
	if(isUsers != -1){
		console.log("Going userdirectory!");
		personalizeUsers();
		document.getElementById("userDiv").style.display = "block";
		document.getElementById("homeDiv").style.display = "none";
		document.getElementById("coursesDiv").style.display = "none";
		document.getElementById("gradesDiv").style.display = "none";
	}
	
	function personalizeUsers() {
		var xhttp;    
		
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//console.log(this.responseText);
			$("#userdirectory").html(this.responseText);
			
			}
		};
		xhttp.open("GET", "processingFiles/personalizeUsers.php", true);
		xhttp.send();
	}
 		
	function personalizeCourses(personalId, location) {
		var xhttp;    
		
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//console.log(this.responseText);
			$(location).html(this.responseText);
			
			}
		};
		xhttp.open("GET", "processingFiles/personalizeCourses.php?userId="+ personalId, true);
		xhttp.send();
	}
	
	function personalizeGrades(personalId, location) {
		var xhttp;    
		
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//console.log(this.responseText);
			$(location).html(this.responseText);
			
			}
		};
		xhttp.open("GET", "processingFiles/personalizeGrades.php?userId="+ personalId, true);
		xhttp.send();
	}
	
</script>

