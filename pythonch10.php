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
if($_POST['g'] == "a")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch10.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch10.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch10-<?php echo $userRow['userName']; ?></title>
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
	width: 11.55%;
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
	.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
    <tr><td class="style3"><div align="center">python</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>
10.DATE & TIME.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Getting current time:</strong></td>
 </tr>
 
 <tr><td>
 



To translate a time instant from seconds since the epoch floating-point value into a timetuple,
pass the floating-point value to a function (e.g., localtime) that returns a time-tuple
with all valid nine items.<br />
#!/usr/bin/python3<br />
import time<br />
localtime = time.localtime(time.time())<br />
print ("Local current time :", localtime)<br />
This would produce the following result, which could be formatted in any other presentable
form-<br />
Local current time : time.struct_time(tm_year=2016, tm_mon=2, tm_mday=15,<br />
tm_hour=9, tm_min=29, tm_sec=2, tm_wday=0, tm_yday=46, tm_isdst=0)<br />
<span class="style5">Getting formatted time:</span><br />
You can format any time as per your requirement, but a simple method to get time in a
readable format is asctime() -<br />
#!/usr/bin/python3<br />
import time<br />
localtime = time.asctime( time.localtime(time.time()) )<br />
print ("Local current time :", localtime)<br />
This would produce the following result-<br />
Local current time : Mon Feb 15 09:34:03 2016<br />
<span class="style5">Getting calendar for a month:</span><br />
The calendar module gives a wide range of methods to play with yearly and monthly
calendars. Here, we print a calendar for a given month ( Jan 2008 ).<br />
#!/usr/bin/python3<br />
import calendar<br />
cal = calendar.month(2016, 2)<br />
print ("Here is the calendar:")<br />
print (cal)<br />
This would produce the following result-<br />
Here is the calendar:<br />
February 2016<br />
Mo Tu We Th Fr Sa Su<br />
1 2 3 4 5 6 7<br />
8 9 10 11 12 13 14<br />
15 16 17 18 19 20 21<br />
22 23 24 25 26 27 28<br />
29<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>The calendar module gives a wide range of methods to play with ______________ calendars.
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  yearly and monthly.<br>
<input type="Checkbox" name="g" value="b">  monthly.<br>
<input type="Checkbox" name="g" value="c">  yearly.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />

<div align="center">
<a href="pythonch9.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch10.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
