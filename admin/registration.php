<?php
	include "connection.php";
	include "navbar.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	
	<section style="height:710px;">
		<div class="reg_img">
			<br><br><br>
			<div class="box2">
				
				<h1 style="text-align: center; font-size: 27px; font-family: Lucida Console;">
					Admin Registration Form</h1><br>

					<form name="Registration" action="" method="post">
						<div class="login">
						<input class="form-control" type="text" name="first" placeholder="Enter Firstname" required=""><br>
						<input class="form-control" type="text" name="last" placeholder="Enter Lastname" required=""><br>
						<input class="form-control" type="text" name="username" placeholder="Enter Username" required=""><br>
						
						<input class="form-control" type="password" name="password" placeholder="Enter Password" required=""><br>
					
						<input class="form-control" type="text" name="email" placeholder="Enter Email" required=""><br>
						<input class="form-control" type="text" name="contact" placeholder="Enter Phone No" required=""><br>
						<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:#880808; width:80px; height:30px;">
						</div>
					</form>

					
			</div>
		
		</div>
		
	</section>

	<?php

	if(isset($_POST['submit']))
      {

      		 $count=0;

	        $sql="SELECT username from `admin`";
	        $res=mysqli_query($db,$sql);

	         while($row=mysqli_fetch_assoc($res))
        	{
                 if($row['username']==$_POST['username'])
             	 {
            			$count=$count+1;
          		 }
        	}

        	if($count==0)
        	{

			 mysqli_query($db,"INSERT INTO `admin` VALUES('','$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]',  '$_POST[email]', '$_POST[contact]', 'profile.png');");

		?>

		<script type="text/javascript">
			  alert("Registration successful");
		</script>

		<?php

		}

		 else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }




	  

	?>
</body>


