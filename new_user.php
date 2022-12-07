<?php 

session_start(); 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "schema";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

$fname = htmlspecialchars($_GET['fname']);
$lname = htmlspecialchars($_GET['lname']);
$password = htmlspecialchars($_GET['password']);
$email = htmlspecialchars($_GET['email']);
$role = htmlspecialchars($_GET['role']);

$sql = "INSERT INTO users(firstname, lastname, password, email, role) VALUES
        ('$fname', '$lname', '$password', '$email', '$role')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$fname.", ".$lname.", ".$password.", ".$email.", ".$role;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
