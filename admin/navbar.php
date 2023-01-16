<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<header style="height:80px;">
		<div class="logo">
				
				<h1 style="color: #880808; font-size: 20px; word-spacing:1px; line-height: 80px; margin-top: 20px;"> <b>CSEDU ONLINE LIBRARY </b></h1>
				
			</div>

	<nav>
			<ul class="nav navbar-nav"><b>
					<li>
						<a href="index.php">HOME</a>
					</li>

					<li>
						<a href="books.php">BOOKS</a>
					</li>

					

					<li>
						<a href="feedback.php">FEEDBACK</a>
					</li>
				</b>
				</ul>


			<?php
            if(isset($_SESSION['login_user']))
            {
            	
            		
            	
            	//echo "Welcome ".$_SESSION['login_user'];
            	?>

            	 <ul class="nav navbar-nav"><b>&nbsp
                  <li><a href="profile.php">PROFILE</a></li>
                  <li><a href="fine.php">FINE</a></li>
                  

                </ul>
            	<ul class="nav navbar-nav"><b>
            		<li>
            			<div style="color:#030002;">
            	
            		 <?php
                        echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['pic']."'>";

                        echo $_SESSION['login_user']; 
                      ?>
            		
            	</div>


            			
            		</li>

            		<li>
						<a href="student.php">
							STUDENT-INFORMATION
						</a>


					</li>

					
            	<li>
						<a href="logout.php">LOGOUT</a>
					</li>

					

				</b></ul>
					<?php
				}
				else
				{
					?><ul class="nav navbar-nav"><b>
					<li>
						<a href="admin_login.php">LOGIN</a>
					</li>
					

					<li>
						<a href="registration.php">REGISTRATION</a>
					</li>
				</b></ul>
				
					<?php
				}

          ?>
				
				
			</nav>
			</header>
	
</body>
</html>