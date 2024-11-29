<?php

$host_name='localhost';
$user_name='root';
$password='';
$database='brandstory';

$con=mysqli_connect($host_name,$user_name,$password,$database);

if (!$con) {
	die(mysqli_error($con));
}

?>