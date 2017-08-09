<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
/* $username=$_POST['username'];
 $password=$_POST['password'];
 $login=$_SERVER['HTTP_REFERER'];
 
 if((!$username) or (!$password))
  {
   header("Location:$login");
   exit();
  }
  //session_start();
  $_SESSION['sess_user'] = $username;*/
$username =$_SESSION['sess_user'];
  $conn=@mysql_connect("localhost","root","")
        or die("cannot connect");
  $db1=@mysql_select_db("proj",$conn) or die("cannot connect");
 
 $retval=mysql_query("select * from question  ") or die("could not retrieve");
 $row=mysql_numrows($retval);

 //$y=1;
 
 if($row!=0)
	 {
		 
		while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 
		 echo "<p>QUESTION ID :{$sql['question_id']} <br> ". "QUESTION: {$sql['question']} <br> ";
	}
	
	 }
	 
else
echo "NO QUESTION THERE.."		 


 ?>
 
 
 
 