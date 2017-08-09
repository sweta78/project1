<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 $login=$_SERVER['HTTP_REFERER'];
 
 if((!$username) or (!$password))
  {
   header("Location:$login");
   exit();
  }
  //session_start();
  $_SESSION['sess_user'] = $username;
  $conn=@mysql_connect("localhost","root","")
        or die("cannot connect");
  $db1=@mysql_select_db("proj",$conn) or die("cannot connect");
 
 $retval=mysql_query("select * from register where username=\"$username\"  and password=\"$password\" ") or die("could not retrieve");
 $row=mysql_numrows($retval);

 //$y=1;
 
 if($row!=0)
	 {
               
        if($username!="tech_admin")
         {
		echo"<frameset cols=30%,70%> 
              <frame name='try' src='atry12.php'>
              <frame name='target' src='log.php'>
              </frameset>";

	/*while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 
		 $name = $sql['NAME'];
                 $c_mobileno = $sql['C_MOBILENO'];
		 $c_email = $sql['EMAIL'];
		 
		// session_start();
		// $_session['sess_user']=$username;
	}*/
}
else
{

  echo"<frameset cols=30%,70%> 
              <frame name='try' src='aatry12.php'>
              <frame name='target' src='alog.php'>
              </frameset>";

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

}
	
echo"
	 <center>
	 <b>
	<a href='logout.php'>LOGOUT</a></b></center>
	
	";
	 }
	 
		 

 else
 {
	 echo('<p><p><center><h1>PLEASE REGISTER</h1></center></p></p>
	 <p><center><a href="reg1.html">REGISTER NOW</a></center>');
 }
 ?>
 
 
 
 