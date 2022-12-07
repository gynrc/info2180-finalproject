<?php 

session_start(); 
require_once 'schema.php';

if (isset($_POST['login'])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
} 

if (validInput($email, $password) !== false) {
    header("location: home.php");
    exit();
} else {
    header("location: home.php");
    exit();
}
