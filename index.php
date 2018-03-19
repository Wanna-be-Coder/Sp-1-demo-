<?php

if(isset($_POST["submit"])){
include('connection.php');
$email = $_POST['email'];
$pass = $_POST['pass'];	
$sql="SELECT `id`,`POST` FROM `login_info` WHERE `email`= '$email' and `password`='$pass'";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if ($count > 0) {
  
  $_SESSION["username"] = $email;
  $_SESSION["password"] = $pass;
if($row['POST']=="admin"){header("location:admin.php");}
else if($row['POST']=="student"){header("location:student.php");}
else if($row['POST']=="tutor"){header("location:tutor.php");}
else if($row['POST']=="supervisor"){header("location:supervisor.php");}
else if($row['POST']=="guardian"){header("location:guardian.php");}
else{echo "User is not valid yet";}	
} else {
  echo "Wrong Username or Password";
}

}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="http://bootswatch.com/yeti/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  </head>
  <body>
	<center>
		<div class="login">
			<h1 class="loginheading">Login</h1>
			<form method="POST">
					<div>
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Type something to see validation...">
					</div>
					<div>
						<label>Password</label>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Don't type here to see validation...">
					</div>
				<button type="submit" name="submit" class="btn btn-default">Submit</button>
				<p class="loginbottomtext">Still don't have an account? <a href="register.php">Register</a></p>
			</form>
			<!-- ©©© COPYRIGHT ©©©--><p class="text-muted loginbottomtext">© SSN</p> 
		</div>
	</center>
  </body>
</html>