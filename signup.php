<?php
	require "connection.php";
?>
<!DOCTYPE>
	<html>
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>iSoko- Sign Up</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			
			<!-- Font Icon -->
			<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

			<!-- Main css -->
			<link rel="stylesheet" href="css/style.css">
		</head>
		
		<body>
		
			<a id="1234567"></a>
			
			<div class="main" id="transparent" style="padding-top:100px; padding-left:450px; padding-right:450px; padding-bottom:150px;padding-top:140px">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                     <form action="processes.php" method="POST">
								  <h1 class="h3 mb-3 font-weight-normal"><b>Sign Up Now!</b></h1>
								  <label for="fname" >First Name</label>
								  <input type="text" id="fname" class="form-control" placeholder="Enter first name" name="fname" style="width:400px" required autofocus />
								 <label for="lastname" >Last Name</label>
								  <input type="text" id="lastname" class="form-control" placeholder="Enter last name" name="lastname" style="width:400px" required />
								  <label for="email" >Email address</label>
								  <input type="email" id="email" class="form-control" placeholder="Enter email address" name="email" style="width:400px" required />
								  <label for="phone" >Phone Number</label>
								  <input type="number" id="phone" class="form-control" placeholder="Enter phone number e.g. 07xxxxxxxx" name="phone" style="width:400px" min="0700000000" max="0799999999" required />
                  <label for="password">Password</label>
								  <input type="password" id="password" class="form-control" placeholder="Enter password" name="password" style="width:400px" required />
                  <div>Already a member? 
								  <a color="#3333ff" href="../../../Example/index.php">Log In Here</a>
						      </div>
                       
                  </body>
                  </html>
