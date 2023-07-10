 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artistic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//create table
$sql = "CREATE TABLE customer (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(40),
lastname VARCHAR(40) ,
email VARCHAR(50),
phone bigint(30),
dob date,
gender char(10),
username varchar(100),
password varchar(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table customer created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);
?> 