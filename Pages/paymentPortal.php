<!D0CTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles/payment.css">
		<meta name="paymentport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body>
		<!--- Section 1 - Background cover --->
		<div class="banner">
			<div class="navbar">
			<a href="Homeenew.php"><img src="Images/11.PNG" class="logo">
				<ul>
					<li><a href="Homeenew.php">HOME</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="view_n.php">LAB REPORTS</a></li>
					<li><a href="services.php">SERVICES</a></li>
					<li><a href="#">PAYMENT PORTAL</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="about1.php">ABOUT US</a></li>
				</ul>
			</div>		
		</div>
	
	<!--- Section 2 - Form --->
	<div class="text">
		<h1>Payment</h1>
		
		<div class="payment-form">
			<form id="payment-form" method="post" action="">
			
			 <br>
			<center><h3>Amount (LKR)</h3>
			<span id="result"></span></center>

		    <script>
			    document.getElementById("result").innerHTML=localStorage.getItem("textvalue");
			</script>
			<br>
			
			<hr style="border-top: 2px solid #fff" class="form-c">
			
			<br><label style="font-size:20px">Card Type</label><br><br>
					<input type="radio" id="payType" name="payType" value="card">
					<img src="images/visa.jpeg" alt="Visa Card" width="50px" height="30px" border="0.5px solid #000000">&nbsp &nbsp &nbsp
					<input type="radio" id="payType" name="payType" value="card">
					<img src="images/master.png" alt="Master card" width="50px" height="30px" border="0.5px solid #000000">&nbsp &nbsp &nbsp
					<input type="radio" id="payType" name="payType" value="card">
					<img src="images/disc.jpeg" alt="Discover" width="50px" height="30px" border="o.5px solid #000000">&nbsp &nbsp &nbsp
					<input type="radio" id="payType" name="payType" value="card">
					<img src="images/amer.jpeg" alt="American Express" width="50px" height="30px" border="0.5px solid #000000">
			
			<br><br>
			
			<input name="cardNo" type="text" class="form-c" placeholder="Card Number" required>
			<br><br>
		    <input name="expiry" type="date" class="form-c" placeholder="Expiration" required>    
			<br><br>
			<input name="cvc" type="text" class="form-c" placeholder="cvc" required>
			<br><br><br><br><br><br><br>
			
			<hr style="border-top: 1px solid #fff" class="form-c">
			
			<input type="checkbox" class="form-a" name="privacyP" value="accept" required>
				<label for="privacy">Save my card details for faster peyments.<br>&nbsp &nbsp &nbsp &nbsp I agree to Privacy policy terms and Condtions.</label><br><br><br><br>
			
			

			
			<button type="submit">Submit</button>
			</form>
		</div>
		
	</div>
	
	<!--- Section 3 - Footer --->
	<div class="footer">
		<p class="privacy">CEYLON MED LABORATORY | PRIVACY POLICY</p>
		<P class="create">Created by <b><a href="" class="link">SLIIT KGL_01</a><b></p>
	</div>

    </body>
</html>	