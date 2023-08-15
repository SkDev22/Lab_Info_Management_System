<!D0CTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles/view_n3.css">
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
					<li><a href="#">LAB REPORTS</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="payment.php">PAYMENT PORTAL</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="about1.php">ABOUT US</a></li>
				</ul>
			</div>		
		</div>
	
	<!--- Section 2 - Form --->
	<div class="text">
		<h1>View Your Lab Report</h1>
		
		<div class="view-form">
			<form id="view-form" method="post" action="">
				<input name="name" type="text" class="form-c" placeholder="User Name" required>
				<br>
				<input name="reference number" type="numbers" class="form-c" placeholder="Reference Number" required>
				<br>
				<input name="password" type="password" class="form-c" placeholder="Password" required>
				<br>
				
				<button type="submit">View Report</button>
			</form>
		</div>
		
	</div>
	
	<!--- Section 3 - Footer --->
	<div class="footer">
		<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
		<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
	</div>
