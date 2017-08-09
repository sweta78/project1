
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

<form  method="post" action="viewa1.php">

     	 <tr>
     <td>ENTER QUESTION ID : </td>
	 <td><input type="number" name="qid"></td>
	 </tr>
	 
	 
	 </table>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>
