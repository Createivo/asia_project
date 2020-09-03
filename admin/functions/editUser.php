
<?php 

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$priv = $_POST['priv'];

	require 'connect.php';
	if(!empty($password)) {

		$pass = md5($_POST['password']);

		$update_pass = "UPDATE users SET password = '$pass' WHERE id = '$id' ";
		$query_pass = $conn -> query($update_pass);
		
	}

	$update_user = "UPDATE users SET name = '$username' , email = '$email' , address = '$address' , gender = '$gender' , priv = '$priv' WHERE id = '$id'";

	$query = $conn -> query($update_user);

	if($query) {
		header("location: ../users.php");
		exit();
	}

?>
