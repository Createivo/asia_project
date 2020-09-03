<?php


// if(isset($_POST['submit'])){
// 	echo "<pre>";

// 	print_r($_POST);
// } else {
// 	echo "404";
// }

if($_SERVER['REQUEST_METHOD'] != "POST"){

	
	header('location: ../users.php');
	exit();

}



$name = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$priv = $_POST['priv'];


require "connect.php";

$user_insert = "INSERT INTO userss (name,password,address,email,gender,priv) VALUES ('$name', '$password' ,'$address' , '$email' , '$gender' , '$priv')";

$insert_query = $conn -> query($user_insert);

// mysqli_query($conn , $user_insert);

if($insert_query) {
	header("location: ../users.php");
} else {
	echo $conn -> error;
}





