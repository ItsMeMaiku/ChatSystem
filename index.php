<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<center>
	<div id="LoginDiv" class="container">
		<form class="form-horizontal" method="post" action="UserLogin.php">
			<h2>Login Form</h2>
			<table class="text-center">
				<tr>
					<td><br>Email:<br><input class="form-control" type="Email" name="UserMailLogin" placeholder="Enter your Email" required></td>
				</tr>
				<tr>
					<td><br>Password:<br><input class="form-control" type="Password" name="UserPasswordLogin" placeholder="Enter your Password" required></td>
				</tr>
				<tr>
					<td><br><button type="submit" class="btn btn-default">Login</button></td>
				</tr>
				<?php
					if(isset($_GET['error'])){
				?>
				<script>
					alert("Wrong Email or Password");
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