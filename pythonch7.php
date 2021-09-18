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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch7.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch7-<?php echo $userRow['userName']; ?></title>
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
07.STRING.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Accessing Values in Strings:</strong></td>
 </tr>
 
 <tr><td>
Python does not support a character type; these are treated as strings of length one, thus
also considered a substring.<br />
To access substrings, use the square brackets for slicing along with the index or indices to
obtain your substring.<br /> For example-<br />
#!/usr/bin/python3<br />
var1 = 'Hello World!'<br />
var2 = "Python Programming"<br />
print ("var1[0]: ", var1[0])<br />
print ("var2[1:5]: ", var2[1:5])<br />
When the above code is executed, it produces the following result<br />
var1[0]: H<br />
var2[1:5]: ytho<br />
<span class="style5">Updating Strings:</span><br />
You can "update" an existing string by (re)assigning a variable to another string. The new
value can be related to its previous value or to a completely different string altogether.<br />
For example-<br />
#!/usr/bin/python3<br />
var1 = 'Hello World!'<br />
print ("Updated String :- ", var1[:6] + 'Python')<br />
When the above code is executed, it produces the following result-<br />
Updated String :- Hello Python<br />

<span class="style5">String capitalize() Method:</span><br />
It returns a copy of the string with only its first character capitalized.<br />
Syntax:<br />
str.capitalize()<br />
Example<br />
#!/usr/bin/python3<br />
str = "this is string example....wow!!!"<br />
print ("str.capitalize() : ", str.capitalize())<br />
Result<br />
str.capitalize() : This is string example....wow!!!<br />

<span class="style5">String center() Method:</span><br />
The method center() returns centered in a string of length width. Padding is done using
the specified fillchar. Default filler is a space.<br />
Syntax<br />
str.center(width[, fillchar])<br />
Parameters<br />
 width - This is the total width of the string.<br />
 fillchar - This is the filler character.<br />
Example<br />
The following example shows the usage of the center() method.<br />
#!/usr/bin/python3<br />
str = "this is string example....wow!!!"<br />
print ("str.center(40, 'a') : ", str.center(40, 'a'))<br />
Result<br />
<center>str.center(40, 'a') : aaaathis is string example....wow!!!aaaa</center><br />
<span class="style5">String count() Method:</span><br />
The count() method returns the number of occurrences of substring sub in the range
[start, end]. Optional arguments start and end are interpreted as in slice notation.<br />
Syntax<br />
str.count(sub, start= 0,end=len(string))<br />
 sub - This is the substring to be searched.<br />
 start - Search starts from this index. First character starts from 0 index. By default
search starts from 0 index.<br />
 end - Search ends from this index. First character starts from 0 index. By default
search ends at the last index.<br />
Example<br />
#!/usr/bin/python3<br />
str="this is string example....wow!!!"<br />
sub='i'<br />
print ("str.count('i') : ", str.count(sub))<br />
sub='exam'<br />
print ("str.count('exam', 10, 40) : ", str.count(sub,10,40))<br />
Result<br />
str.count('i') : 3<br />
str.count('exam', 4, 40) :<br />



<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>What is the output when following statement is executed ?</b><br />
>>>"a" + "bc"
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  a.<br>
<input type="Checkbox" name="g" value="b">  bc.<br>
<input type="Checkbox" name="g" value="c">  bca.<br>
<input type="Checkbox" name="g" value="d">  abc.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
