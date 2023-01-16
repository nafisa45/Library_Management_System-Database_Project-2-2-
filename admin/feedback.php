<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <style type="text/css">
    	body
    	{
    		background-image: url("images/47.jpg");
    		
    	}
    	.wrapper
    	{
    		padding: 20px;
    		
    		margin: 30px auto;
    		width:900px;
    		height: 650px;
    		background-color: black;
    		opacity: .8;
    		color: white;
    	}
    	.form-control
    	{
    		height: 100px;
    		width: 100%;
    	}
    	.scroll
    	{
    		width: 100%;
    		height: 350px;
    		overflow: auto;
    	}

    </style>


</head>
<body>

	<div class="wrapper">
		<h4 >
			If you have any suggestions or questions please comment below
		</h4><br>

		<form style="" action="" method="post">
			<input class="form-control" type="text" name="comment" placeholder="Write what you want to say..."><br>
			<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width: 100px; height: 35px;">

		</form>

		<br>

	

	<div class="scroll">
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','Admin','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr>";
							echo "<td>"; echo $row['username']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				}
			}

			$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

				echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{

						echo "<tr>";
							
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
		?>
	</div>
</div>
	
</body>
</html>
