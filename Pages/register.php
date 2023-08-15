<!D0CTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="styles/register4.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>

		<!--- Section 1 - Background cover --->
		<section class="first">
		<div class="banner">
			<div class="navbar">
			<a href="Homeenew.php"><img src="images/11.PNG" class="logo">
				<ul>
					<li><a href="Homeenew.php">HOME</a></li>
					<li><a href="#">REGISTER</a></li>
					<li><a href="view_n.php">LAB REPORTS</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="payment.php">PAYMENT PORTAL</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="about1.php">ABOUT US</a></li>
				</ul>
			</div>
			
			<h1 style="color:#FFFFFF" class="topic">Registration Form</h1>
		
			<div class="reg-form">
		
				<form id="reg-form" method="post" action="register_process.php">
					<input id="fname" name="c_name" type="text" class="form-c" placeholder="User Name" required>
					<br>
					<input id="email" name="C_email" class="form-c" placeholder="E-mail" required>
					<br>
					<input id="nic" name="C_nic" class="form-c" placeholder="NIC Number" required>
					<br>
					<input id="mobile" name="C_mobile" name="phonenumber" type="text" class="form-c" placeholder="Phone Number" required>
					<br>
					<input id="add" name="C_add" name="address" type="text" class="form-c" placeholder="Address" required>
					<br>
					<input id="test" name="C_test" name="testtype" type="text" class="form-c" placeholder="Test type" required>
					<br>
					<input id="consultname" name="C_consultname" name="consultantname" type="text" class="form-c" placeholder="Consultant name" required>
					<br>
					<input id="consult" name="C_consult" name="consultancy" type="text" class="form-c" placeholder="Consultancy" required>
					<br></br>
					<br></br>
					
					<button type="submit" onclick="myFunction()">Register</button>

					
				</form>
			
			</div>
		</section>
	
			<!--- Section 4 - Footer --->
		<section class="footer">
			<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
			<P class="create">Created by <b><a href=" " class="link">SLIIT KGL_01</a><b></p>
		</section>
	</body>
	
</html>