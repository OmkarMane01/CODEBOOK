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
  echo"<script language='javascript' type='text/javascript'> location.href='phpch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch8-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>08.SESSION. </strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>Starting a PHP Session:</strong></td>
 </tr>
 <tr><td>

A PHP session is easily started by making a call to the session_start() function. This
function first checks if a session is already started and if none is started, then it starts one.
It is recommended to put the call to session_start() at the beginning of the page.
Session variables are stored in associative array called $_SESSION[]. These variables
can be accessed during lifetime of a session.<br />
The following example starts a session and then registers a variable called counter that
is incremented each time the page is visited during the session.
Make use of isset() function to check if session variable is already set or not.<br />
<center><img  src="images/start session.jpg" width="514" height="353"/>
</center>
<span class="style5">Destroying a PHP Session:</span><br />
A PHP session can be destroyed by session_destroy() function. This function does not
need any argument and a single call can destroy all the session variables. If you want to
destroy a single session variable, then you can use unset() function to unset a session
variable.<br />
<center><img src="images/des session.jpg" height="227" />
</center>

<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> Which function is used to set session ? . <br />
</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  session_destroy() .<br>
<input type="Checkbox" name="g" value="b">  session_start().<br>
<input type="Checkbox" name="g" value="c">  unset().<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
