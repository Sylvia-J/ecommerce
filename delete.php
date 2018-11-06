<?php
require "connection.php";

$id = $_GET["user_id"];

$query = "DELETE FROM users WHERE user_id = $id";
?>
