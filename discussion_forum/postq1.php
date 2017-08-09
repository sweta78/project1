<?php
error_reporting(E_ALL ^ E_DEPRECATED);
define('dbhost','localhost');
define('dbname','proj');
define('dbuser','root');
define('dbpass','');

session_start();
$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());

$username=$_SESSION['sess_user'];
$ques=$_POST['que'];
$sql1="INSERT INTO question(username,question) VALUES('$username','$ques')";
$retval = mysql_query($sql1) or die(mysql_error());

if($retval)
{
 echo "YOUR QUESTION HAS BEEN POSTED.";
 $retval1=mysql_query("select * from question where username= \"$username\" " ) or die("could not retrieve");
 $row1=mysql_numrows($retval1);
if($row1!=0)
	 {
		 
      while($sql=mysql_fetch_array($retval1, MYSQL_ASSOC)) 
	{
		 
                 $qid=$sql['question_id'];
		 $uname = $sql['username'];
                 $ques = $sql['question'];
	}
	echo "
	
	
	<fieldset>
	<legend>
	<h2>QUESTIONS</h2>
	</legend>
	<hr>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	  <tr>
	 <td>USERNAME : </td>
	 <td>$uname</td>
</tr>
	 
	
	<br/>
	 <tr>
        <td>QUESTION ID :</td>
	 <td>$qid </td>
	 </tr>
	 
	 <tr>
	 <td>QUESTION :</td>
         <td>$ques </td>
	 </tr>
	 	 
	 
	 </table>
	 
	 </fieldset>
<a href='log.php'>BACK</a>
 	 <br/>";
	 }

}


?>

