<?php
	include "connection.php";
	include "navbar.php";
	
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<section style="height:710px;">
		<div class="log_img">
			<br><br><br>
			<div class="box1">
				
				<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">
					Admin Login Form</h1><br><br><br>

					<form name="login" action="" method="post">
						<div class="login">
						<input class="form-control" type="text" name="username" placeholder="Enter Username" required=""><br>
						<input class="form-control" type="password" name="password" placeholder="Enter Password" required=""><br>
						<input class="btn btn-default" type="submit" name="submit" value="Login" style="color:#880808; width:70px; height:30px;">
						</div>
					</form>

					<p style="color:white; padding-left:15px;">
						<br><br>
						<a style="color:white;" href="update_password.php">Forgot Password</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						New to the Library?&nbsp&nbsp<a style="color:white;" href="registration.php">Sign Up</a>
					</p>

			</div>
		
		</div>
		
	</section>

	<!-- 
	<footer>
		
		<p style="color:red; text-align:center;">
				<br>
				<b>
				Email: &nbsp csedulibrary@gmail.com<br>
				Mobile:&nbsp 01874620144
			</b>
			</p>
			
	</footer>
-->

 <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 

              <!--
              
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>  

          -->  
        <?php
      }
      else
      {
      	//-----------------------------------if username and password matches-----------------------------
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>

	
</body>
</html>