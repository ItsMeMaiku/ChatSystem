<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	<div id="SignUp Div" class="container">
		<form method="post" action="InsertUser.php">
			<h2>Sign Up Form</h2>
			<table class="text-center">
				<tr>
					<td><br>Username:<br><input class="form-control" type="text" name="UserName" placeholder="Enter your Username" required></td>
				</tr>
				<tr>
					<td><br>Email:<br><input class="form-control" type="email" name="UserMail" placeholder="Enter your Email" required></td>
				</tr>
				<tr>
					<td><br>Password:<br><input class="form-control" type="password" name="UserPassword" placeholder="Enter your Password" required></td>
				</tr>
				<tr>
					<td><br><input type="submit" class="btn btn-default" value="SignUp"></td>
				</tr>
				<?php
					if(isset($_GET['Success'])){
				?>
				<script>
					alert("User Registered");
				</script>
				<?php
					}
				?>
			</table>
		</form>
	</div>
</center>
</body>
</html>