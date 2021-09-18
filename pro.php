  <?php
session_start();
include_once 'connection.php';
if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($_conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);

?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Profile-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.stylea{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	word-spacing: 4cm;
	}
	.button{
	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:15%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	}
	
	.over{
	color:#FFFFFF;}
.style2 {
	color: #FF00CC;
	font-size: 24px;
	word-spacing: 4cm;
}
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 11.80%;
}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
 <center><h1 class="stylea"> <a href="home.php">Home</a>   <a href="Course.php">Course's</a>    <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a> </h1></center>
 <table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Profile</div></td>
 </tr>
</table>
  <table width="969" height="114" align="center" bgcolor="#000000">
  <tr><td height="52"><div align="center">UserName:-<?php echo $userRow['userName']; ?></div></td>
  </tr>
   
  <tr><td height="52"><div align="center">UserEmail:-<?php echo $userRow['userEmail']; ?></div></td>
  </tr>
<tr><td height="52">  <div align="center"> <a href="logout.php"> <input class="button" name="login" type="submit" value="Logout" size="15" /></a></div></td></tr>
</table>
<br/></body>
</html>
 