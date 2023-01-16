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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<body>

	<div class="wrapper">
		
	
		<header>
			<div class="logo">
				<img src="images/9.png">
				<h4 style="color: #880808;"><b>  CSEDU ONLINE LIBRARY MANAGEMENT SYSTEM </b></h4>

				
			</div>

			

			
						<nav>
						
						<ul><b>
							<li><i>
								<a href="admin/index.php">ADMIN</a>
							</i>
							</li>

							<li><i>
								<a href="student/index.php">STUDENT</a>
							</i>
							</li>

							
						</ul>
					</nav>


			

			
			
		</header>
		
		<section>
			
			<div class="w3-content w3-section" style="max-width:2000px, orientation:center">
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <img class="mySlides" src="images/900.jpg" style="width:1400px, height=1000px">
  <img class="mySlides" src="images/901.jpg" style="width:1400px, height=1000px ">
  <img class="mySlides" src="images/902.jpg" style="width:1400px, height=1000px ">
  <img class="mySlides" src="images/903.jpg" style="width:1400px, height=1000px ">
  <img class="mySlides" src="images/905.jpg" style="width:1400px, height=1000px ">
</div><br><br><br>





<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	
			
		</div>
			
		</section>
		
		

		<!--<footer>
			
				<h1 style="color: #880808; font-size: 30px;"><b> Welcome to the world of knowledge </a></i></b></h1>
			
		</footer>
	-->




	</div>

	
	
</body>
</html>