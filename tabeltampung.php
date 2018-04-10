<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tampung";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Departemen, SNMPTN, SBMPTN, Mandiri FROM kuota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Departemen</th><th>SNMPTN</th><th>SBMPTN</th><th>Mandiri</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Departemen"]."</td><<td>".$row["SNMPTN"]."</td><td>".$row["SBMPTN"]."</td><td>".$row["Mandiri"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<a href="http://localhost/teknologi-informasi/download.php" class="btn btn-default">Download Tabel</a>