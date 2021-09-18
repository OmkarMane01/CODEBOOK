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

if (isset($_POST['go']))
{ 
if($_POST['g'] == "b")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch2.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch1.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch1-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
.style2{
	color: #FF0000;
}
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
.button1 {	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:15%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.button2 {	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:15%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.button3 {	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:15%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style5 {color: #FF0000; font-weight: bold; }
</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr>
      <td class="style3"><div align="center">php</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>01.OVERVIEW,ENVIORNMENT SETUP</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>OVERVIEW</strong>:-</td>
 </tr>
 <tr><td>PHP started out as a small open source project that evolved as more and more people
found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back
in 1994.<br />
 PHP is a recursive acronym for "PHP: Hypertext Preprocessor".<br />
 PHP is a server side scripting language that is embedded in HTML. It is used to<br />
manage dynamic content, databases, session tracking, even build entire ecommerce
sites.<br />
 It is integrated with a number of popular databases, including MySQL, PostgreSQL,
Oracle, Sybase, Informix, and Microsoft SQL Server.<br />
Common Uses of PHP<br />
PHP performs system functions, i.e. from files on a system it can create, open, read, write,
and close them. The other uses of PHP are:<br />
 PHP can handle forms, i.e. gather data from files, save data to a file, thru email
you can send data, return data to the user.<br />
 You add, delete, modify elements within your database thru PHP.<br />
Access cookies variables and set cookies.<br />
 Using PHP, you can restrict users to access some pages of your website.<br />
 It can encrypt data.<br />
 <span class="style5">Environment Setup:</span><br />
 In order to develop and run PHP Web pages, three vital components need to be installed
on your computer system.<br />
Web Server - PHP will work with virtually all Web Server software, including Microsoft's
Internet Information Server (IIS) but then most often used is freely available Apache
Server. Download Apache for free here: http://httpd.apache.org/download.cgi<br />
Database - PHP will work with virtually all database software, including Oracle and Sybase
but most commonly used is freely available MySQL database. Download MySQL for free
here: http://www.mysql.com/downloads/index.html<br />
PHP Parser - In order to process PHP script instructions, a parser must be installed to
generate HTML output that can be sent to the Web Browser. This tutorial will guide you
how to install PHP parser on your computer.<br />
 
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>PHP is a ______________ scripting language that is embedded in HTML.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  server & Client side.<br>
<input type="Checkbox" name="g" value="b">  server side.<br>
<input type="Checkbox" name="g" value="c">  Client Side.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href=""><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch2.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
