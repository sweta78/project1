<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
 $username=$_POST['uname'];
 /*$password=$_POST['password'];
 $login=$_SERVER['HTTP_REFERER'];
 
 if((!$username) or (!$password))
  {
   header("Location:$login");
   exit();
  }
  //session_start();
  $_SESSION['sess_user'] = $username;*/
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
                 $c_address1 = $sql['C_ADDRESS1'];
		 $c_address2 = $sql['C_ADDRESS2'];
		 $c_city = $sql['C_CITY'];
		 $c_state = $sql['C_STATE'];
		 $c_pincode = $sql['C_PINCODE'];
		 $c_mobileno = $sql['C_MOBILENO'];
		 $c_email = $sql['EMAIL'];
		 
		// session_start();
		// $_session['sess_user']=$username;
	}
	echo "
	
	
	<fieldset>
	<legend>
	<h2>Personal Detail</h2>
	</legend>
	<hr>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	  <tr>
	 <td><b>Name : </b></td>
	 <td>$name</td>
</tr>
	 
	
	<br/>
	 <tr>
<td><b>Contact address :</b></td>
	 <td>$c_address1 </td>
	 <td>$c_address2</td>
	 </tr>
	 
	
	 
	 <tr>
	 <td>$c_city </td>
	 <td>$c_state</td>
	 </tr>
	 
	 <tr>
	 <td><b>PINCODE : </b>$c_pincode </td>
	 <td><b>MOBILE NO : </b>$c_mobileno </td>
	 <td><b>E-MAIL ID : </b>$c_email</td>
	 </tr>
	 	 
	 
	 </table>
	 
	 </fieldset>
	 <br/>";
	 }
	 
		 

 else
 {
	 echo "<p><p><center><h1>USER DOESN'T EXIST</h1></center></p></p>";
 }
 ?>
 
 
 
 