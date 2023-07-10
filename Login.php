<?php
  include('login_code.php');
 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistic Login Page</title>
    
    <style>
        @import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body{
            margin: 0;
            padding: 0%;
           list-style: none;
           text-decoration: none;
   font-family: Verdana, Geneva, Tahoma, sans-serif;
   background:url(images/black.jpg) no-repeat;
   background-position: center;
   background-size: cover;
   height: 100vh;
   color:white;
}

.login{
    width: 280px;
    position: absolute;
    top: 25%;
    left: 45%;
    transform: translate(-50% -50%);
    color: white;
}
.login h1
{
    float: left;
    font-size: 40px;
    border-bottom: 6px solid whitesmoke;
    margin-bottom: 25px;
    padding: 10px 0;
}
.textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin:  8px,0;
    border: 1px solid white;
}
.textbox i{
    float: left;
    width: 22px;
    text-align: center;
}
.textbox input{
    border: none;
    outline: none;
    background: none;
    color: white;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
    
}
.btn{
    width: 100%;
    background: none;
    border: 2px solid #4caf50;
    color: white;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
.login p{
    text-align: center;
}
.login p a{
    text-decoration: none;
}
 </style>
 
</head>
<body>
  <form action="Login.php" method="post"> 
    <div class="login">
        <h1>login</h1>
        <div class="textbox">
            <i class="fa fa-user-circle" aria-hidden="true"></i>

           <input type="text" placeholder="username" name="name" value="" />
        </div>
        <div class="textbox">
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>

            <input type="password"  placeholder="Password" name="password" value="" />
        </div>

        <input class="btn" type="submit" name="login" value="Sign in" />
        <p>Not a Member? <a href="Register.php">Signup now</a></p>
       
    </div>
        
    </form>
	
	<?php
	  if(isset($_POST['login']))
	  {
	    $username = $_POST['name'];
		$password = $_POST['password'];
		
		$query = "select* from customer where username='$username' & password = '$password' ";
		
		$check = mysqli_query($conn, $query);
		if($check){
		  if(mysqli_num_rows($check)>0 )
		  {
		    echo"
			  <script>
			     alert('Login successfull!');
			        window.location.href = 'index.html';
			  </script>
			";
		  }
		  else
		  {
		    echo"
			  <script>
			     alert('You are not registerd!');
			        window.location.href = 'Register.php';
			  </script>
			";
		  }
		}
		else{
		  echo"
			  <script>
			     alert('An error occured!');
			        window.location.href = 'Login.php';
			  </script>
			";
		}
	  }
	  else{
	  }
	?>
	
</body>
</html>
