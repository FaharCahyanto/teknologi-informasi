<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM inbox";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email " . $row["email"]. " - Subject " . $row["subject"]. "<br>" . " - Message " . $row["message"]. "<br>". " - Time ". $row["reg_date"]. "<br>";
    }
    
} else {
    echo "0 results";
}
$conn->close();
?>