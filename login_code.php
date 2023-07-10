 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db="artistic";
// Create connection
$conn = mysqli_connect ($servername, $username, $password) or die('Database Error');
mysqli_select_db($conn, $db);

// Check connection
if ($conn -> connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
mysqli_close($conn);
?> 