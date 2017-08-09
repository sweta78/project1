<html>
<title>POST ANSWER </title>

<center>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
?>
<h1>POST ANSWER </h1>
</center>
<hr>
<hr>
<body>
<table border="0" width="100%" height="50%">

<form  method="post" action="posta1.php">

      <tr>
     <td>USERNAME : </td>
	 <td><?php echo $_SESSION['sess_user'] ?></td>
	 </tr>
	 
        <tr>
     <td>QUESTION ID : </td>
	 <td><input type ='number' name='qid'/></td>
	 </tr>

	 <tr>
     <td>ENTER ANSWER : </td>
	 <td><textarea rows="3" cols="60" name="ans" ></textarea></td>
	 </tr>
	 
	 
	 </table>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>
