<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name   = $_POST['name'];
$email  = $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to='dumail.teknologyinformasi.its@gmail.com';

$sql = "INSERT INTO inbox (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From : ".$email. "\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= "Cc: " .$email. "\r\n"; //untuk cc lebih dari satu tinggal kasih koma

@mail($to,$subject,$message,$headers);



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
