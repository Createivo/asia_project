<?php

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

require 'connect.php';

$checkUser = "SELECT * FROM users WHERE name = '$username' AND password = '$password' ";



$query  = $conn -> query($checkUser);

$row_user = $query -> fetch_assoc();

$id = $row_user['id'];


$numRows = $query -> num_rows;


if ($numRows > 0 ) {

	if($query) :

		$_SESSION['login_id'] = $id ; 

		header("location: ../index.php");
		exit();

	endif;

} else {

	header("location: ../login.php");
}