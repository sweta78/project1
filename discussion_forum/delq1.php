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
$qid=$_POST['qid'];
$sql1="DELETE FROM question WHERE question_id='$qid' ";
$retval = mysql_query($sql1) or die(mysql_error());

if($retval)
{
 echo "<b><br/><br/>THE QUESTION HAS BEEN DELETED.</b>";
 


}


?>

