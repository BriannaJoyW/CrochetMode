<?php
include "connect.php";
$username= $_POST['username'];
$first_name= $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$createdate = date("Y-m-d");
$sql = "INSERT INTO 'User' ('username', 'FirstName', 'LastName', 'email', 'password', 'favorite', 'createDate') VALUES ('$username','$first_name', '$last_name', '$email', '$password', 'Volleyball', '$createdate')";

//insert in database
$result = mysqli_query($conn, $sql);
?>