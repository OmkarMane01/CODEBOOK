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
if($_POST['g'] == "c")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch7.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch6.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch6-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>06.GET & POST METHOD.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>GET Method:</strong></td>
 </tr>
 <tr><td>
The GET method sends the encoded user information appended to the page request. The
page and the encoded information are separated by the ? character.<br />
http://www.test.com/index.htm?name1=value1&name2=value2<br />
 The GET method produces a long string that appears in your server logs, in the
browser's Location: box.<br />
 The GET method is restricted to send up to 1024 characters only.<br />
 Never use GET method if you have password or other sensitive information to be sent
to the server.<br />
 GET can't be used to send binary data, like images or word documents, to the server.<br />
 The data sent by GET method can be accessed using QUERY_STRING environment
variable.<br />
 The PHP provides $_GET associative array to access all the sent information using
GET method.<br />
the following example by putting the source code in test.php script.<br />
<center><img  src="images/Get method in php.jpg"/></center>
<span class="style5">The POST Method:</span><br />
The POST method transfers information via HTTP headers. The information is encoded as
described in case of GET method and put into a header called QUERY_STRING.<br />
 The POST method does not have any restriction on data size to be sent<br />.
 The POST method can be used to send ASCII as well as binary data.<br />
 The data sent by POST method goes through HTTP header so security depends on
HTTP protocol. By using Secure HTTP you can make sure that your information is
secure.<br />
 The PHP provides $_POST associative array to access all the sent information
using POST method.<br />
the following example by putting the source code in test.php script.<br />
<center><img  src="images/post method php.jpg"/></center>

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />




<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> The GET method is restricted to send up to characters only. <br />
</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  4785.<br>
<input type="Checkbox" name="g" value="b">  2012.<br>
<input type="Checkbox" name="g" value="c">  1024.<br>
<input type="Checkbox" name="g" value="d">  4578.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch7.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
