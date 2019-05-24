<?php

$conn = mysqli_connect('localhost', 'shizzy', 'pawel123', 'shizzy_pizza');

// connection check

if(!$conn){
	echo 'Connection error ' . mysqli_connect_error();
}


?>