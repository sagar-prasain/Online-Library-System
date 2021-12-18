<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Western Sydney Community Library
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="style.css">

<style type="text/css">
	nav
	{
		float: left;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
     .sec_img
{
	height: 630px; 
    width:100%;
	margin-top: 0px;
	background-image: url("images/bushfire.jpg") no-repeat;
}
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image:url("images/bks.jpg") no-repeat;
  background-size:cover;
  background-size: contain;
}

</style>
</head>


<body>
	<div class="wrapper">
	<header>
		<div class="logo">
			<img src="images/9.png">
			<h1 style="color: black;">Western Sydney Community Library</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
                                
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
                                <li><a href="admin_login.php">ADMIN</a></li>
								<li><a href="student_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
            
		<div class="sec_img" >
            <br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px; color:White;">Your Help Means a Lot, Support Bushfire Victims</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Make a Difference</h1><br>
                <h1><a href="https://www.redcross.org.au/places/branch/151/sydney-nsw" style="text-align: center;font-size: 20px; color:Red;">Visit NSW REDCROSS to donate</a></h1><br>
				
			</div>
		</div>
		</section>
                
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>