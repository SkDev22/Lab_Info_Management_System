<!D0CTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles/view_n2.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>
		<!--- Section 1 - Background cover --->
		<div class="banner">
			<div class="navbar">
			<a href="Homeenew.php"><img src="Images/l1.PNG" class="logo">
				<ul>
					<li><a href="Homeenew.php">HOME</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="view_n.php">LAB REPORTS</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="payment.php">PAYMENT PORTAL</a></li>
					<li><a href="#">FEEDBACK</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="about1.php">ABOUT US</a></li>
				</ul>
			</div>		
		</div>
	
	<!--- Section 2 - Form --->
	<div class="text">
		<h1>What Do You Think About Us</h1>
		
		<div class="view-form">
			<form id="view-form" method="post" action="feed.php">
				<input name="name" type="text" class="form-c" placeholder="User Name" required>
				<br>
				
				<textarea name="feedDesc" class="form-c" placeholder="Feedback"></textarea>
				<br>
				
				
				<br>
				
				<button type="submit">Submit</button>
			</form>
		</div>
		
	</div>
	
	<!--- Section 3 - Footer --->
	<div class="footer">
		<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
		<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
	</div>
