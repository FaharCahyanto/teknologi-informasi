<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE inbox ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,`name` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `subject` VARCHAR(50) NOT NULL , `message` VARCHAR(300) NOT NULL , reg_date TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Table inbox created successfully" ;
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>