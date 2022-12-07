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

$title = htmlspecialchars($_GET['title']); 
$fname = htmlspecialchars($_GET['fname']);
$lname = htmlspecialchars($_GET['lname']);
$email = htmlspecialchars($_GET['email']);
$tel = htmlspecialchars($_GET['tel']);
$company = htmlspecialchars($_GET['company']);
$type = htmlspecialchars($_GET['type']);
$assigned = htmlspecialchars($_GET['assigned']);

$sql = "INSERT INTO users(title, firstname, lastname, email, telephone, company, type, assigned_to) VALUES
        ('$title', '$fname', '$lname', '$email', '$tel', '$company', '$type' '$assigned')";

if ($conn->query($sql) === TRUE) {
	echo "ADDED: ".$title.", ".$fname.", ".$lname.", ".$email.", ".$tel.", ".$company.", ".$type.", ".$assigned;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

