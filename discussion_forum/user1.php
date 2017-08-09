<?php
error_reporting(E_ALL ^ E_DEPRECATED);
define('dbhost','localhost');
define('dbname','exam');
define('dbuser','root');
define('dbpass','');

$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());
	 
		
 $name = $_POST['name']; 
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $c_address1 = $_POST['c_address1'];
 $c_address2 = $_POST['c_address2'];
 $c_city = $_POST['c_city'];
 $c_state = $_POST['c_state'];
 $c_pincode = $_POST['c_pincode'];
 $c_mobileno = $_POST['c_mobileno'];
 $email = $_POST['email'];
 		


 $sql1="INSERT INTO register(NAME,USERNAME,PASSWORD,C_ADDRESS1,C_ADDRESS2,C_CITY,C_STATE,C_PINCODE,C_MOBILENO,EMAIL) VALUES('$name','$username','$password','$c_address1','$c_address2','$c_city','$c_state','$c_pincode','$c_mobileno','$email')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 
if($retval)
 {
	echo "YOU ARE NOW A REGISTERED USER.";
	
 }

	

?>