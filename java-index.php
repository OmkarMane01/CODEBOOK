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
<title>java Index-<?php echo $userRow['userName']; ?></title>
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
	width: 7.50%;
}
.style2{
	color: #FF0000;
}
</style>
</head>
<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">java</div></td>
   </tr>
   </table>
  <br />
</div>
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center">INDEX</div></td></tr>
 <tr>
   <td><a href="javach1.php" class="over">01.OVERVIEW,ENVIORNMENT SETUP.</a></td>
 </tr>
 <tr>
   <td><a href="javach2.php" class="over">02.BASIC SYNTAX.</a></td>
 </tr>
 <tr>
   <td><a href="javach3.php" class="over">03.DATA TYPES,VARIABLE .</a></td>
 </tr>
 <tr>
   <td><a href="javach4.php" class="over">04.DECISION MACKING.</a></td>
 </tr>
 <tr><td><a href="javach5.php" class="over">05.LOOP TYPES.</a></td></tr>
 <tr>
   <td><a href="javach6.php" class="over">06.ARRAY.</a></td>
 </tr>
 <tr>
   <td><a href="javach7.php" class="over">07.CLASSES AND OBJECTS.</a></td>
 </tr>
 <tr>
   <td><a href="javach8.php" class="over">08.STRING CLASSES. </a></td>
 </tr>
 <tr>
   <td><a href="javach9.php" class="over">09.FILE AND I/O.</a></td>
 </tr>
 
 
 
   
 <tr><td><div class="style2"><a href="javatest.php" class="over">FINAL TEST.</a></div></td></tr>
 
</table>

</body>
</html>
