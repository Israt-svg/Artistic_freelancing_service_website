 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

// Create database
/* $sql = "CREATE DATABASE Artistic";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  //echo "Error creating database: " . mysqli_error($conn);
}
*/
mysqli_close($conn);
?> 