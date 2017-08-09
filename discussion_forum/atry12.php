<html>
<head>

<?php
session_start();
//$_SESSION['sess_user'] = $username;
?>
<style>
body {
	background-color:white;
	font-family: verdana,arial,sans-serif;
	font-size: small;
	color:blue;
	margin:0;
	padding:0;
}
#content {
	background:#FAFACF;
	margin:1px;
	padding:5px 2px 20px 5px;
	width:550px;
	height:100px;
	float:left;
	border-left:20px solid #E2E5B6;
}
#footer {
	clear:both;
	padding: 5px 5px;
	color: #FFFFFF;
	font-size:20px;
	font-weight: bold;
	padding-top:150px;
}
</style>
</head>
<body>
<center><h1>WELCOME <?php echo $_SESSION['sess_user'] ?> </h1></b> </center>
<br/>
<br/>
<div id="content">
<ul>
<li><a href='postq.php' target ='target'>POST A QUESTION</a></li>
<li><a href='posta.php' target ='target'>POST AN ANSWER</a></li>
<li><a href='viewq.php' target = 'target'>VIEW QUESTION</a></li>
<li><a href='viewa.php' target = 'target'>VIEW ANSWERS</a></li>
<li><a href='chpswd.php' target = 'target'>CHANGE PASSWORD</a></li>
</ul>
<br/>
</div>
<br/><br/>
<div id="footer">
<center><b><a href='logout.php' target='_top'>LOGOUT</a></b></center>
</div>
</body>
</html>

