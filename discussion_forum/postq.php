
<html>
<title>POST A QUESTION</title>

<center>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
?>
<h1>POST A QUESTION</h1>
</center>
<hr>
<hr>
<body>
<table border="0" width="100%" height="50%">

<form  method="post" action="postq1.php">

      <tr>
     <td>USERNAME : </td>
	 <td><?php echo $_SESSION['sess_user'] ?></td>
	 </tr>
	 
	 <tr>
     <td>ENTER QUESTION : </td>
	 <td><textarea rows="3" cols="60" name="que" ></textarea></td>
	 </tr>
	 
	 
	 </table>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>
