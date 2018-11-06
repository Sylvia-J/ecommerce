<?php
	require ('connection.php');
?>

<!DOCTYPE>
	<html>

		<head><title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		</head>
		
		<body style="background-image: url('background-1.jpg'); background-size: 100%">
		<div align="center" style="margin:450px;margin-top: 130px;padding-bottom:300px ">
		<form class="form-signin" action="" method="POST"style="padding-top:50px">
		 <h1 class="h3 mb-3 font-weight-normal"><b>Please log in!</b></h1>
			<input type="text" name="username" placeholder="Username" required autofocus />
			<br /><br />
			<input type="password" name="password" placeholder="Password" required />
			<br /><br />
			<input type="submit" name="Login" value="Login" class="btn btn-primary" />
		</form>
		</div>
		</body>
	</html>	