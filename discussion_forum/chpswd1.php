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
	 

		
 
 $opswd = $_POST['opswd'];
 $npswd = $_POST['npswd'];
 $cnpswd = $_POST['cnpswd'];
 
 
 
if(strlen($_POST['npswd'])<6)
 {
  $error[]="PASSWORD MUST BE AT LEAST 6 CHARACTERS LONG.";
 }
 
  if($_POST['npswd']!=$_POST['cnpswd'])
 {
	 $error[]="PASSWORDS DO NOT MATCH";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='chpswd.php'><b><center><h2> UPDATE PASSWORD</a> :-)</h2></center></b>";
}
 else
 {
	
 $sql1="update register set PASSWORD='$npswd' where PASSWORD='$opswd' ";
 $retval = mysql_query($sql1) or die(mysql_error());
  
 
if($retval)
 {
	echo "
        <br/>
        <br/>
        <center><strong>YOUR PASSWORD HAS BEEN CHANGED <br/> ";
	echo "LOGOUT AND THEN AGAIN LOGIN WITH NEW PASSWORD <strong></center>";
	
	echo"
	 <center>
	 <b>
	<a href='logout.php'>LOGOUT</a></b></center>
	
	";
 }
}	



 

 


?>