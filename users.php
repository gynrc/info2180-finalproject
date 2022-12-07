<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "schema";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM users");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" type="text/css" rel="stylesheet" />
	<script src="schema.js" type="text/javascript"></script>
    <title>Users</title>
</head>
<body>
    <div class="container">
        <header>
            <img src="dolphin.png" alt="picture of dolphin"/>
            <h3>Dolphin CRM</h1>
        </header>
        <div class="menu">
            <ul> 
                <li><a href="home.php">Home</a></li>
                <li><a href="new_contact.html">New Contact</a></li>
                <li><a href="users.html">Users</a></li>
                <hr>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <main>      
            <div class="heading-btn"> 
                <h2>Users</h2>
                <a href="new_user.html"><button id="add-user">Add User</button></a>
            </div>  
            <div class="users-list">
                <?php
                echo "<table>";
                echo "<thead>";
                  echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Role</th>";
                    echo "<th>Created</th>";
                  echo "</tr>";
                echo "</thead>";
                echo"<tbody>";
                foreach ($results as $row) {
                  echo "<tr>";
                    echo "<td> {$row['firstname']}" . " " . "{$row['lastname']} </td>";
                    echo "<td> {$row['email']} </td>";
                    echo "<td> {$row['role']} </td>";
                    echo "<td> {$row['created_at']} </td>";
                  echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>"; ?>
            </div>
        </main>
    </div>
</body>
</html>

