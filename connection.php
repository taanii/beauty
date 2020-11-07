<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO details (Name, Email, Message)
VALUES ('$name', '$email', '$message')";

if($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: ".$sql . "<br>" . $conn->error;
}
header('location:contact.html');

$conn->close();
?>