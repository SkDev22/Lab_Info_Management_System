<?php

$servername = "localhost";
$username="root";
$password="";

$db="laboratory information";

// Create connection
$conn =new mysqli ($servername,$username,$password,$db);

// Check connection
if ($conn->connect_error) {
    die("connection failed.".$conn->connect_error);
}
echo "conected sucssesful";

?>
