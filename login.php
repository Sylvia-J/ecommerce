<?php
session_start();
include("connection.php"); //Establishing connection with our database
 
$login_user = "";
$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
 
// To protect from MySQL injection
//$username = stripslashes($username);
//$password = stripslashes($password);
//$username = mysqli_real_escape_string($db, $username);
//$password = mysqli_real_escape_string($db, $password);
$dec_password = md5($password);
 
//Check username and password from database
$sql="SELECT * FROM users WHERE email='$email' and password='$dec_password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 

//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) == 1)
{
$_SESSION['email'] = $row["email"];// Initializing Session;

		
}else
{
$error = "Incorrect email or password.";
}
 
}
}
 
?>
