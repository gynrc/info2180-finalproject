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
    <title>Contact Details</title>
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
                <li><a href="logout">Logout</a></li>
            </ul>
        </div>
        <main>
            <div class="info">
                <img class="contact-img" src="uicon.png" alt="pic of icon"/>
                <h2>Mr. Michael Scott</h2>
                <p>Created on November 9, 2022 by David Wallace</p>
                <p>Updated on Novemeber 13, 2022</p>
            </div>
            <div class="btn">
                <button id="assign">Assign to me</button>
                <button id="switch">Switch to Sales Lead</button>
            </div>
            <div class="section" id="display-info">
                <div class="column">
                    <label for="email">Email</label>
                    <p>michael.scott@paper.co</p>
                    <!--<input type="email" id="email" name="email" placeholder="michael.scott@paper.com"/>--> 
                </div>
                <div class="column">
                    <label for="tel">Telephone</label>
                    <p>876-999-9999</p>
                    <!--<input type="tel" id="tel" name="tel" placeholder=""/>-->
                </div>
                <div class="column">
                    <label for="company">Company</label>
                    <p>The Paper Company</p>
                    <!--<input type="text" id="company" name="company" placeholder=""/>-->
                </div>
                <div class="column">
                    <label for="assigned">Assigned To</label>
                    <p>Jen Levinson</p>
                    <!--<input type="text" id="assigned" name="assigned" placeholder=""/>-->
                </div>
            </div>
            <div class="section" id="note-section">
                <h4>Notes</h4>
                <hr>
                <h4>Jane Doe</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
                    Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
                    eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
                    luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
                    Vivamus in laoreet justo, nec commodo elit.</p>
                <p class="date">November 10, 2022 at 4pm</p>
                <h4>John Doe</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
                    Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
                    eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
                    luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
                    Vivamus in laoreet justo, nec commodo elit.</p>
                <p class="date">November 10, 2022 at 4pm</p>
                <h4>John Doe</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec laoreet nisl. 
                    Mauris in mi efficitur, lobortis nibh ut, lobortis nisl. Curabitur volutpat nisi diam, 
                    eget tincidunt nibh accumsan ut. Nullam euismod ornare quam ut consectetur. Integer 
                    luctus purus metus, aliquam cursus erat elementum non. In et dui in diam porttitor vestibulum. 
                    Vivamus in laoreet justo, nec commodo elit.</p>
                <p class="date">November 10, 2022 at 4pm</p>
                <h4>Add a note about Michael</h4>
                <textarea id="text" name="text">Enter details here...</textarea>
                <button id="add-note">Add Note</button>
            </div>
        </main> 
    </div>
    
</body>
</html>