<?php
require "connection.php";

$id = $_GET["user_id"];

$query = "DELETE FROM users WHERE user_id = $id";
if ($conn->query($query)===TRUE){
		
		
		echo "<script type=\"text/javascript\">window.alert('Account deleted successfully.');
window.location.href = 'home.php';</script>";
	}else{
		print "Failed 1<br/>" . $conn->error;
	}
?>
