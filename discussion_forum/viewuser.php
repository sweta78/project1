
<html>
<title>POST A QUESTION</title>

<center>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
?>
<h1>VIEW USER'S PROFILE</h1>
</center>
<hr>
<hr>
<body>
<table border="0" width="100%" height="50%">

<form  method="post" action="viewuser1.php">

     	 <tr>
     <td>ENTER USERNAME : </td>
	 <td><input type="text" name="uname"></td>
	 </tr>
	 
	 
	 </table>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>
