<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "schema";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function validInput($email, $password) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email) || empty($password)) {
        $result = true; //error present
    } else {
        $result = false;
    } return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if($_GET['filter'] == "all") {
        $stmt = $conn->query("SELECT * FROM contacts");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        show($results);
    }

    if($_GET['filter'] == "sl") {
        $stmt = $conn->query("SELECT * FROM contacts WHERE type = 'Sales Lead'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        show($results);
    }

    if($_GET['filter'] == "support") {
        $stmt = $conn->query("SELECT * FROM contacts WHERE type = 'Support'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        show($results);
    }

    if($_GET['filter'] == "assigned") {
        $stmt = $conn->query("SELECT * FROM contacts WHERE 'assigned_to = :id'");
        $stmt->bindValue(':id', $_SESSION['id']);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        show($results);
    }
}

function show($results) {
    foreach ($results as $row) {
        echo "<tr>";
            echo "<td> {$row['firstname']}" . " " . "{$row['lastname']} </td>";
            echo "<td> {$row['email']} </td>";
            echo "<td> {$row['company']} </td>";
            echo "<td> {$row['type']} </td>";
            echo "<td><a href='contacts.html'>View</a></td>";
        echo "</tr>";
    }
}