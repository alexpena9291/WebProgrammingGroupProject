<!DOCTYPE html>
	<html>
		<head>
		<title>
		
		</title>
		<link href="cssFiles/loginCss.css" type="text/css" rel="stylesheet" />
		</head>
	
		<body>
		<script>
		function showCustomer(username,password) {
				var xhttp;    
				if (str == "") {
					document.getElementById("txtHint").innerHTML = "";
					return;
				}
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					$("#infoPane").html(this.responseText);
					}
				};
			xhttp.open("GET", "zoo-basic-info.php?username="+ username + "&password=" + password, true);
			xhttp.send();
			}
		
		</script>
		</body>
	<html>
	