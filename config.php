<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'login-register';

$connection = mysqli_connect($server, $user, $pass, $database);

if(!$connection) {
	die("<script>alert('Connection failed')</script>");
}