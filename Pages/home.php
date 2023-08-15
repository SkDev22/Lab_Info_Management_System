<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="styles/welcome.css">
</head>
<body>
		<div class="banner">
			<div class="navbar">
			<a href="Homeenew.php"><img src="images/logo2.PNG" class="logo">
				<ul>
					<li><a href="Homeenew.php">HOME</a></li>
					<li><a href="#">REGISTER</a></li>
					<li><a href="#">LAB REPORTS</a></li>
					<li><a href="#">SERVICES</a></li>
					<li><a href="#">PAYMENT PORTAL</a></li>
					<li><a href="#">FEEDBACK</a></li>
					<li><a href="#">CONTACT US</a></li>
					<li><a href="#">ABOUT US</a></li>
				</ul>
			</div>		
		</div>
		
		<div class="text">
		<h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
		<h1>Your Reference ID is,  <?php echo $_SESSION['id']; ?></h1>
		<button class="button"><a href="Homeenew.php"><span>Get Started </a></span></button>
		
		</div>
		
		
		
		<!--- Section 3 - Footer --->
			<div class="footer">
				<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
				<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
			</div>
				
</body>
</html>

<?php 
}else{
     header("Location: indexx.php");
     exit();
}
 ?>