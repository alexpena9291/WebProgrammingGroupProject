<!DOCTYPE html>
<html>
	<head>
		<title>WhiteBoard Login</title>
		
		<meta charset="utf-8" />
		
		<link href="cssFiles/login.css" type="text/css" rel="stylesheet" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script src="processingFiles/login.js" type="text/javascript"></script>
	</head>

	<body>		
		<div id="top">
			<img src="images/logo.png" alt="Whiteboard" class="loginWhiteboard">
			<br>
		</div>
		
		<div id="login">
			<form method="POST">	
				<input type="text" placeholder="Username" name="username" id="username" required>

				<input type="password" placeholder="Password" name="password" id="password" required>
				
				<input type="button" value="Login" onclick="processUser($('#username').val(), $('#password').val())"/>
			</form>
		</div>
	</body>
</html>
		