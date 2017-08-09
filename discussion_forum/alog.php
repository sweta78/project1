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
 
 $retval=mysql_query("select * from register where username=\"$username\"  ") or die("could not retrieve");
 $row=mysql_numrows($retval);

 //$y=1;
 
 if($row!=0)
	 {
		 
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 
		 $name = $sql['NAME'];
                 $c_mobileno = $sql['C_MOBILENO'];
		 $c_email = $sql['EMAIL'];
		 
		// session_start();
		// $_session['sess_user']=$username;
	}
	echo "
	
	
	<fieldset>
	<legend>
	<h2>Detail</h2>
	</legend>
	<hr>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	  <tr>
	 <td><b>Name : </b></td>
	 <td>$name</td>
</tr>
	 
	
	<br/>
	  <td><b>MOBILE NO :</b> $c_mobileno </td>
	 <td><b>E-MAIL ID : </b>$c_email</td>
	 </tr>
	 	 
	 
	 </table>
	 
	 </fieldset>
	 <br/>";
	 }
	 
		 

  ?>
 
 
 
 