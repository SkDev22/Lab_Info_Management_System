<?php

   $servername="localhost";
   $username="root";
   $password="";
   $database="laboratory information";
   
   $conn=new mysqli($servername, $username, $password, $database);

   if($conn->connect_error){
	   die("Connection Failed".$conn->connect_error);
   }
   
   $id = $_POST['idnum'];
   $name = $_POST['name'];
   $nic = $_POST['nic'];
   $test = $_POST['test'];
   $amount = $_POST['amount'];
   $email = $_POST['email'];
   $address = $_POST['aname'];
   
   $query = "INSERT INTO `payment`(`p_ID`,`p_name`,`p_NIC`,`test`,`amount`,`email`,`address`)
   VALUES ('$id','$name','$nic','$test','$amount','$email','$address')";
   
   if ($conn->query($query)===TRUE) {
	   //echo "New record added";
	   header('Location:' . 'paymentPortal.php');
	   
   }
   else {
	   echo "Error".$conn->error;
   }
   
   
 ?>