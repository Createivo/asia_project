<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'asia');

$conn = new mysqli(HOST, USER, PASSWORD, DBNAME);

$conn -> set_charset('utf8');


function dd($content , $die = false) {
		if($die) {
			die(var_dump($content));
		} else {
			var_dump($content);
		}
	}


// $conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME);


// if($conn -> connect_error){
// 	echo $conn -> connect_error;
// }
// if($conn) {

// }





