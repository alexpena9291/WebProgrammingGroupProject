function processUser(username,pass) {
console.log("Username: " + username + " Pass: " + pass);
	var xhttp;    
	if (username == "" || pass == "") {
		alert("Please Fill All Fields");
		return;
	}
	
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		console.log(this.readyState);
		console.log(this.responseText);
		console.log(this.status);
	if (this.readyState == 4 && this.status == 200) {
		console.log("this is the responsetext");
		console.log(this.responseText);
		if(this.responseText == "failed"){
			alert("Incorrect User/Pass");
		} else {
			$userId = this.responseText;
			//alert("Working!");
			//alert($userId);
			window.location.href = "mainpage.php?id=" + $userId;
		}
		}
	};
	xhttp.open("GET", "processingFiles/validateUser.php?user="+ username + "&pass=" + pass, true);
	xhttp.send();
}