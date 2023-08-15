<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="laboratory information";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $name=$data['name'];
        $subject=$data['subject'];
        
        $phone=$data['phone'];
		$email=$data['email'];
        $message=$data['message'];
        $q="insert into contact_us set name='$name', subject='$subject', phone='$phone', email='$email', message='$message'";
		 return $this->mysqli->query($q);
	   }
	 }
?>