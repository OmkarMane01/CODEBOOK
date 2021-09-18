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
<title>Welcome-<?php echo $userRow['userName']; ?></title>
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
     .styleaa{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	word-spacing: 5cm;
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
}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
 <marquee>
 <strong><span class="style2"> Welcome <i><?php echo $userRow['userName']; ?></i> </span></strong>
 </marquee>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
<div align="center"><br /> 
  <img src="images/profile.jpg" width="150" height="150" />
  <br />
  <br />
 <a href="logout.php"> <input class="button" name="login" type="submit" value="Logout" size="15" /></a>
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
</div>
<h1 align="center" class="styleaa"> <a href="About.php">About</a>   <a href="T&C.php">Terms_&_Condtions</a>    <a href="Feedback.php">Feedback</a>    <a href="Help.php">Help</a></h1>
<div align="center"><br /> 
</div>
</body>
</html>
