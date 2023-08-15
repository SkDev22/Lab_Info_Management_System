<?php

   $servername="localhost";
   $username="root";
   $password="";
   $database="laboratory information";
   
   $conn=new mysqli($servername, $username, $password, $database);

   if($conn->connect_error){
	   die("Connection Failed".$conn->connect_error);
   }
   
   $uName = $_POST['name'];
   $feed = $_POST['feedDesc'];
   
   $query = "INSERT INTO `feedback`(`u_name`,`feedback`)
   VALUES ('$uName','$feed')";
   
   if ($conn->query($query)===TRUE) {
	   //echo "New record added";
	   header('Location:' . 'feedback.php');
   }
   else {
	   echo "Error".$conn->error;
   }
   
   
 ?>