<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "imthi";
$lastname = "shamim";
$email = "imthishamim@gmail.com";
$stmt->execute();

$firstname = "coder";
$lastname = "imthi";
$email = "imtiyazshamim2@gmail.com";
$stmt->execute();

$firstname = "shamim";
$lastname = "Imtiyaz";
$email = "imtiyazshamim@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>