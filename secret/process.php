<?php
$servername = "localhost";
$username = "root";
$password = "Shariffshask@99";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security
$username = $_POST['username'];
$password = $_POST['password'];


// Attempt login query execution
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // Login successful
  session_start();
  $_SESSION['username'] = $username;
  header("location: welcome.php");
} else {
  // Login failed
  echo "Incorrect username or password";
}

// Close connection
mysqli_close($conn);
?>
