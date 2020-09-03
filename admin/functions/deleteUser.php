

<?php 


if(!isset($_GET['id'])){
	header("location: ../users.php");
	exit();
}


$id = $_GET['id'];

require 'connect.php';

$delete_user = "DELETE FROM users WHERE id = '$id'";

$user_query = $conn -> query($delete_user);

if($user_query) {
	header("location: ../users.php");
}


