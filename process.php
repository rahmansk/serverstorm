<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "Shariffshask@99";
$dbname = "mydatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database for the user
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Check if a user was found
if (mysqli_num_rows($result) > 0) {
	echo "Login successful!";
} else {
	echo "Invalid username or password.";
}

// Close the database connection
mysqli_close($conn);
?>
