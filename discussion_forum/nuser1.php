<?php
error_reporting(E_ALL ^ E_DEPRECATED);
define('dbhost','localhost');
define('dbname','proj');
define('dbuser','root');
define('dbpass','');

$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());

function out_error($error)
{
 echo "<br>";
 return '<ol><li>'.implode('</li><br><li>',$error).'</li></ol>';
}
	 
function reg()
{
		
 $name = $_POST['name']; 
 $username = $_POST['username'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 
 $c_address1 = $_POST['c_address1'];
 $c_address2 = $_POST['c_address2'];
 $c_city = $_POST['c_city'];
 $c_state = $_POST['c_state'];
 $c_pincode = $_POST['c_pincode'];
 $c_mobileno = $_POST['c_mobileno'];
 $email = $_POST['email'];
 
 		
 
  if(1 === preg_match('/\d/',$name) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN NAME.";
 }
  
   if(1 === preg_match('/\d/',$c_city) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN CONTACT ADDRESS'S CITY.";
 }
 
  if(1 === preg_match('/\d/',$c_state) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN CONTACT ADDRESS'S STATE.";
 }
 
 
 if(1 === preg_match('/\D/',$c_mobileno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN MOBILE NO.";
 }
 
 if(1 === preg_match('/\D/',$c_pincode) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN PINCODE.";
 }
 
  if(1 === preg_match('/\s/',$username) )
 {
  $error[]="USERNAME MUST NOT CONTAIN SPACE.";
 }
if(strlen($_POST['password'])<6)
 {
  $error[]="PASSWORD MUST BE AT LEAST 6 CHARACTERS LONG.";
 }
 
  if($_POST['password']!=$_POST['cpassword'])
 {
	 $error[]="PASSWORDS DO NOT MATCH";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='reg1.html'><b><center><h2> REGISTER NOW </a>WITH PROPER VALUES :-)</h2></center></b>";
}
 else
 {

 $sql1="INSERT INTO register(NAME,USERNAME,PASSWORD,C_ADDRESS1,C_ADDRESS2,C_CITY,C_STATE,C_PINCODE,C_MOBILENO,EMAIL) VALUES('$name','$username','$password','$c_address1','$c_address2','$c_city','$c_state','$c_pincode','$c_mobileno','$email')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 
if($retval)
 {
	echo "YOU ARE NOW A REGISTERED USER.";
	echo "<a href = 'login.php'><b><center><h2>LOGIN NOW</h2></center></b></a>";
 }
}	



} 

 if(!empty($_POST['username']))
 {

  $sql1 = mysql_query("SELECT * FROM register where USERNAME='$_POST[username]' AND PASSWORD='$_POST[password]' ")or die(mysql_error());
 $row= mysql_numrows($sql1) ;



  if($row)
  {
	  echo "YOU HAVE ALREADY REGISTERED";
  }
  else
  {
	// echo"func calling";
	 reg();
	  
  }
 }


?>