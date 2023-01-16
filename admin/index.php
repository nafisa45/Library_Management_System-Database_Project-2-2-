<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSEDU Online Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

	<div class="wrapper">
		
	
		<header>
			<div class="logo">
				<img src="images/9.png">
				<h1 style="color: #880808;"><b> CSEDU ONLINE LIBRARY MANAGEMENT SYSTEM </b></h1>

				
			</div>

			<?php
				//echo $_SESSION['login_user'];   //username show korar code
				if(isset($_SESSION['login_user']))
				{
					//echo "Welcome ".$_SESSION['login_user'];
					?>
					<nav>
				
					<ul><b>
					<li>
						<a href="index.php">HOME</a>
					</li>

					<li>
						<a href="books.php">BOOKS</a>
					</li>

					<li>
						<a href="logout.php">LOGOUT</a>
					</li>

					
					

					<li>
						<a href="feedback.php">FEEDBACK</a>
					</li>

					

				</b>
				</ul>
			</nav>

			<?php

				}

				else
				{
					?>
						<nav>
						
						<ul><b>
							<li>
								<a href="index.php">HOME</a>
							</li>

							<li>
								<a href="books.php">BOOKS</a>
							</li>

							<li>
								<a href="admin_login.php">LOGIN</a>
							</li>

							

							<li>
								<a href="feedback.php">FEEDBACK</a>
							</li></b>
						</ul>
					</nav>


					<?php
				}
			
			?>
			

			
			
		</header>
		<section>
			<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br>
				<h1 style="text-align: center; font-size: 35px;">
					Welcome to CSEDU Library
					
				</h1><br>

				<h3 style="text-align: center; font-size: 30px;">
					<i>Admin Section</i>
				</h3><br><br><br>

				<h1 style="text-align: center; font-size: 25px;">
					Opens at: 09 AM
					
				</h1><br>

				<h1 style="text-align: center; font-size: 25px;">
					Closes at: 05 PM</h1><br>
				
			</div>
		</div>
			
		</section>
		<?php  

		include "footer.php";
	?>
<!--
		<footer>
			<p style="color:#880808; text-align:center;">
				<br><b>
				Email: &nbsp csedulibrary@gmail.com<br>
				Mobile:&nbsp 01874620144</b>
			</p>
			
		</footer>
	-->
	</div>

	
	
</body>
</html>