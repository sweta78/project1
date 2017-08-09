<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$connection = mysql_connect("localhost","root","") or die ("could not connect to the server" );
mysql_select_db("proj",$connection) or die ("Could not connect to the database");
echo"
<body>

<div style='width : 100%; height: 100%; min-height: 1000px;min-width-1000px;min- padding : 12px 20px; border:1px;margin: 8px 0;background-color:#199a8b;'>
<center><h1 style ='background-color:#7beadf; font-family:verdana; color: powder-blue; text-decoration: underline;font-size: 50px;'>LOGIN</h1>
<br />
<form action='login1.php' method='post'>
<fieldset>
<br/><br/>
     <table>
	 <tr>
	 <td style ='font-family:verdana; color: powder-blue; width: 50%;'><b>Username : </b></td>
	 <td><input type ='text' name='username' autofocus/></td>
	 </tr>
	 <tr>
	 <td><br/></td>
	 </tr>
	 <tr>
	 <td style ='font-family:verdana; color: powder-blue; width: 50%;'><b>Password : </b></td>
	 <td><input type ='password' name='password'/></td>
	 </tr>
	 <tr>
	 <td><br/></td>
	 </tr>
	 <tr>
	 <td><input type='submit' value='Login' name='login'/></td>
	 </tr>
	 </table>
	 </fieldset>
</form>
<br/>
<h5 style ='font-family:verdana; color: powder-blue; width: 50%'>
   No Account ? <a href='reg1.html'>Register!</a>
</h5>
</div>
</center>
</body>
";
 ?>



