<?php 


echo "<pre>";

$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$desc = $_POST['desc'];
$cat_id = $_POST['cat_id'];

$imageName = $_FILES['img']['name']; //1.jpg
$imageTemp = $_FILES['img']['tmp_name'];


if($_FILES['img']['error'] == 0 ) {

	$extension = ['jpg' ,'png' , 'gif' , 'jpeg'];
	// $newArr = explode('.', $imageName);
	// $ext = end($newArr);
	$ext = pathinfo($imageName , PATHINFO_EXTENSION);

	if(in_array($ext, $extension)){

		
		if($_FILES['img']['size'] < 2000000){
			$newName = md5(uniqid()) . "." . $ext;
			
			move_uploaded_file($imageTemp, "../images/$newName");



		} else {

			echo "file is too big";
		}

	} else {

		echo "must upload right extension";
	}


} else {

	echo "you must upload an image";
}

require 'connect.php';

$prod = "INSERT INTO products (name , price , sale , description , img , cat_id) VALUES ('$name', '$price' , '$sale' , '$desc' , '$newName', '$cat_id' )";

$query_pro = $conn -> query($prod);

if($query_pro) {
	header("location: ../products.php");
}else {

	echo $conn -> error ;
}

?>