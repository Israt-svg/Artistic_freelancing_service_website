<?php
// Create connection
$conn = mysqli_connect('localhost','root','', 'Artistic');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $name = $_POST['username'];
  $password = $_POST['password'];

$sql = "INSERT INTO customer (firstname, lastname, email, phone, dob,gender,username,password)
VALUES ('$firstname','$lastname','$email','$phone','$dob','$gender','$name','$password')";

if (mysqli_query($conn, $sql)) {
   echo"
			  <script>
			     alert('New Record Created Succesfully!');
			        window.location.href = 'Login.php';
			  </script>
			";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>