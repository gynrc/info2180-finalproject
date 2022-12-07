<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "schema";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM contacts");
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
    <title>Home</title>
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
            <li><a href="users.php">Users</a></li>
            <hr>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <main>
    <div class="dash-div">
        <h2 class="dash-heading">Dashboard</h2>
        <a href="new_contact.html"><button id="add-contact">Add Contact</button></a>
    </div>
    <div class="filter-btn">
        <h3>Filter By:</h3>
        <button id="fltrAll">All</button>
        <button id="fltrSL">Sales Leads</button>
        <button id="fltrSupport">Support</button>
        <button id="fltrAssigned">Assigned to me</button>
    </div>
    <div class="home-list">
        <?php
            echo "<table>";
            echo "<thead>";
                echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Company</th>";
                echo "<th>Type</th>";
                echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo"<tbody>";
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td> {$row['firstname']}" . " " . "{$row['lastname']} </td>";
                echo "<td> {$row['email']} </td>";
                echo "<td> {$row['company']} </td>";
                echo "<td> {$row['type']} </td>";
                echo "<td><a href='contacts.html'>View</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>"; ?>
    </div> 
    </main>
    </div>
</body>
</html>