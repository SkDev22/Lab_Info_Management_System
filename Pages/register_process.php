
<?php 
include 'config_regis.php';
?>
<?php
$name=$_POST['c_name']; 
$email=$_POST['C_email'];
$nic=$_POST['C_nic'];
$mobile=$_POST['C_mobile'];
$address=$_POST['C_add'];
$test=$_POST['C_test'];





$query ="INSERT INTO regis (`name`,`email`,`nic`,`mobile`,`address`,`test`)
VALUES('$name','$email','$nic','$mobile','$address','$test')";  

if($conn->query($query)===TRUE){
    //echo  "New recorded addded";
    
     header('location: '.'register.php');
}
else {
    echo "Error inserting records:".$conn->error;
}
?>


  