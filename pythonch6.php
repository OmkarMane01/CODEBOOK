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
if($_POST['g'] == "d")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch7.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch6.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch6-<?php echo $userRow['userName']; ?></title>
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
}
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
06.NUMBERS.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Number abs() Method:</strong></td>
 </tr>
 
 <tr><td>
The abs() method returns the absolute value of x i.e. the positive distance between x and
zero.<br />
Syntax:<br />
Following is the syntax for abs() methodabs( x )<br />
x - This is a numeric expression.<br />
This method returns the absolute value of x.<br />
Example<br />
The following example shows the usage of the abs() method.<br />
#!/usr/bin/python3<br />
print ("abs(-45) : ", abs(-45))<br />
print ("abs(100.12) : ", abs(100.12))<br />
When we run the above program, it produces the following resultabs<br />(-45) : 45<br />
abs(100.12) : 100.12<br />
<span class="style5">Number exp() Method:</span><br />
The exp() method returns exponential of x: ex.<br />
Syntax<br />
Following is the syntax for the exp() method import
<br />
math.exp( x )<br />
Note: This function is not accessible directly. Therefore, we need to import the math
module and then we need to call this function using the math static object.<br />
X - This is a numeric expression.This method returns exponential of x: ex.<br />
Example<br />
The following example shows the usage of exp() method.<br />
#!/usr/bin/python3<br />
import math # This will import math module<br />
print ("math.exp(-45.17) : ", math.exp(-45.17))<br />
print ("math.exp(100.12) : ", math.exp(100.12))<br />
print ("math.exp(100.72) : ", math.exp(100.72))<br />
print ("math.exp(math.pi) : ", math.exp(math.pi))<br />
When we run the above program, it produces the following resultmath.<br />
exp(-45.17) : 2.4150062132629406e-20<br />
math.exp(100.12) : 3.0308436140742566e+43<br />
math.exp(100.72) : 5.522557130248187e+43<br />
math.exp(math.pi) : 23.140692632779267<br />
<span class="style5">Number fabs() Method:</span><br />
The fabs() method returns the absolute value of x. Although similar to the abs() function,
there are differences between the two functions.<br /> They are-
 abs() is a built in function whereas fabs() is defined in math module.<br />
 fabs() function works only on float and integer whereas abs() works with complex
number also.<br />
Syntax<br />
Following is the syntax for the fabs() methodimport<br />
math.fabs( x )<br />
Note: This function is not accessible directly, so we need to import the math module and
then we need to call this function using the math static object.<br />
Example<br />
The following example shows the usage of the fabs() method.<br />
#!/usr/bin/python3<br />
import math # This will import math module<br />
print ("math.fabs(-45.17) : ", math.fabs(-45.17))<br />
print ("math.fabs(100.12) : ", math.fabs(100.12))<br />
print ("math.fabs(100.72) : ", math.fabs(100.72))<br />
print ("math.fabs(math.pi) : ", math.fabs(math.pi))<br />
When we run the above program, it produces following resultmath.<br />
fabs(-45.17) : 45.17<br />
math.fabs(100) : 100.0<br />
math.fabs(100.72) : 100.72<br />
math.fabs(math.pi) : 3.141592653589793<br />
<span class="style5">Number log10() Method:</span><br />
The log10() method returns base-10 logarithm of x for x > 0.<br />
Syntax:<br />
Following is the syntax for log10() methodimport<br />
math
math.log10( x )<br />
Note: This function is not accessible directly, so we need to import the math module and
then we need to call this function using the math static object.<br />
Example<br />
The following example shows the usage of the log10() method.<br />
#!/usr/bin/python3<br />
import math # This will import math module<br />
print ("math.log10(100.12) : ", math.log10(100.12))<br />
print ("math.log10(100.72) : ", math.log10(100.72))<br />
print ("math.log10(119) : ", math.log10(119))<br />
print ("math.log10(math.pi) : ", math.log10(math.pi))<br />
When we run the above program, it produces the following resultmath.<br />
log10(100.12) : 2.0005208409361854<br />
math.log10(100.72) : 2.003115717099806<br />
math.log10(119) : 2.0755469613925306<br />
math.log10(math.pi) : 0.49714987269413385<br />
<span class="style5">Number max() Method:</span><br />
The max() method returns the largest of its arguments i.e. the value closest to positive
infinity.<br />
Syntax<br />
Following is the syntax for max() methodmax(
x, y, z, .... )<br />
Parameters<br />
 x - This is a numeric expression.<br />
 y - This is also a numeric expression.<br />
 z - This is also a numeric expression.<br />
 Example<br />
The following example shows the usage of the max() method.<br />
#!/usr/bin/python3<br />
print ("max(80, 100, 1000) : ", max(80, 100, 1000))<br />
print ("max(-20, 100, 400) : ", max(-20, 100, 400))<br />
print ("max(-80, -20, -10) : ", max(-80, -20, -10))<br />
When we run the above program, it produces the following result<br />max(
80, 100, 1000) : 1000<br />
max(-20, 100, 400) : 400<br />
max(-80, -20, -10) : -10<br />

<span class="style5">Number min() Method:</span><br />
The method min() returns the smallest of its arguments i.e. the value closest to negative
infinity.<br />
Syntax<br />
Following is the syntax for the min() methodmin( x, y, z, .... )<br />
Parameters<br />
x - This is a numeric expression.<br />
 y - This is also a numeric expression.<br />
 z - This is also a numeric expression.<br />
Example<br />
The following example shows the usage of the min() method.<br />
#!/usr/bin/python3<br />
print ("min(80, 100, 1000) : ", min(80, 100, 1000))<br />
print ("min(-20, 100, 400) : ", min(-20, 100, 400))<br />
print ("min(-80, -20, -10) : ", min(-80, -20, -10))<br />
print ("min(0, 100, -400) : ", min(0, 100, -400))<br />
When we run the above program, it produces the following result<br />min(
80, 100, 1000) : 80<br />
min(-20, 100, 400) : -20<br />
min(-80, -20, -10) : -80<br />
min(0, 100, -400) : -400<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>whis is not a number function in python ?</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  min().<br>
<input type="Checkbox" name="g" value="b">  max().<br>
<input type="Checkbox" name="g" value="c">  fabs().<br>
<input type="Checkbox" name="g" value="d">  log().<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch7.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
