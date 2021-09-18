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
<title>Course-<?php echo $userRow['userName']; ?></title>
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
	width: 12%;
}
.style4{
	font-family: "Courier New", Courier, monospace;
	font-size: 24px;
	color: #FF0000;
	word-spacing: 8cm;
	font-weight: bold;
}
.style5{
	font-family: "Courier New", Courier, monospace;
	font-size: 24px;
	color: #FF0000;
	word-spacing: 6.50cm;
	font-weight: bold;
}
.style6{
	font-family: "Courier New", Courier, monospace;
	font-size: 24px;
	color: #FF0000;
	word-spacing: 3.5cm;
	font-weight: bold;
}

.style7{
color:#FF0000;}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK </h1>
 <h1 align="center" class="stylea"> <a href="home.php">Home</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a> </h1>
 <table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Course's</div></td>
 </tr> 
</table>
<br /> 
<br />
<table width="969" height="323" align="center" bgcolor="#000000">
 <tr><td width="820"><h1 align="center">Programming Languages Course's: </h1></td></tr>
 <tr><td class="style4"><h1><a  href="c++-index.php" class="style7">C++</a>    <a href="java-index.php" class="style7">Java</a>    <a href="csharp-index.php" class="style7">C#</a></h1> </td>
 </tr>
 <tr>
   <td class="style5"> <h1><a href="python-index.php" class="style7">Python</a> <a href="php-index.php" class="style7">Php</a>    <a href="html-index.php" class="style7">HTML</a>    <a href=".php" class="style7"></a></h1></td>
 </tr>
 <tr><td class="style6">    <h1>     <a href="mysql-index.php" class="style7">MySql</a></h1></td></tr>
 
 
</table>
 
       
</body>
</html>
 

