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
<title>FeedBack-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.over{
	color:#FFFFFF;}
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 17.10%;
}
.input{
	height:25px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
	width: 8cm;
	}
	.button{
	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:40%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	}
	.style9 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	
	color: #0000FF;
	}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
<table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">FeedBack</div></td>
 </tr> 
</table><br />
<h4><table height="184" align="center" bgcolor="#000000">
<tr><td width="254"><form action="Feedback1.php" method="post" autocomplete="off">
 	
Name:<br /><input class="input" type="text" name="name" placeholder="Enter Name." /></td></tr>
<tr><td>Email:<br /><input class="input" type="text" name="email" placeholder="Enter Email." /></td></tr>
<tr><td>Comment:<br />
  <textarea  rows="5" cols="50" name="comment" placeholder="Enter the your comment." >
  </textarea></td>
</tr>
<tr><td><div align="center"><br />
  <input class="button" type="submit" name="send" value="Send" /></form>
</div></td></tr>
<tr>
  <td><a href="seefeedback.php" class="style9">see the Feedback of All User....</a></td>
</tr>
</table></h4>
</body>
</html>
