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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch4.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch3.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch3-<?php echo $userRow['userName']; ?></title>
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
03.VARIABLE.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Assigning Values to Variables:</strong></td>
 </tr>
 
 <tr><td>
Python variables do not need explicit declaration to reserve memory space. The declaration
happens automatically when you assign a value to a variable. The equal sign (=) is used
to assign values to variables.<br />
The operand to the left of the = operator is the name of the variable and the operand to
the right of the = operator is the value stored in the variable.<br /> For example-
#!/usr/bin/python3<br />
counter = 100 # An integer assignment<br />
miles = 1000.0 # A floating point<br />
name = "John" # A string<br />
print (counter)<br />
print (miles)<br />
print (name)<br />
Here, 100, 1000.0 and "John" are the values assigned to counter, miles, and
name variables, respectively. <br />This produces the following result -<br />
100<br />
1000.0<br />
John<br />
<span class="style5">Multiple Assignment:</span><br />
Python allows you to assign a single value to several variables simultaneously.<br />
For example<br />
a= b = c = 1<br />
Here, an integer object is created with the value 1, and all the three variables are assigned
to the same memory location. You can also assign multiple objects to multiple variables.<br />
For examplea,<br />
b, c = 1, 2, "john"<br />
Here, two integer objects with values 1 and 2 are assigned to the variables a and b
respectively, and one string object with the value "john" is assigned to the variable c.<br />
<span class="style5">Python Dictionary:</span><br />
Python's dictionaries are kind of hash-table type. They work like associative arrays or
hashes found in Perl and consist of key-value pairs. A dictionary key can be almost any
Python type, but are usually numbers or strings. Values, on the other hand, can be any
arbitrary Python object.<br />

Dictionaries are enclosed by curly braces ({ }) and values can be assigned and accessed
using square braces ([]).<br /> For example-<br />
#!/usr/bin/python3<br />
dict = {}<br />
dict['one'] = "This is one"<br />
dict[2] = "This is two"<br />
tinydict = {'name': 'john','code':6734, 'dept': 'sales'}<br />
print (dict['one']) # Prints value for 'one' key<br />
print (dict[2]) # Prints value for 2 key<br />
print (tinydict) # Prints complete dictionary<br />
print (tinydict.keys()) # Prints all the keys<br />
print (tinydict.values()) # Prints all the values<br />
This produces the following result-<br />
This is one<br />
This is two<br />
{'dept': 'sales', 'code': 6734, 'name': 'john'}<br />
['dept', 'code', 'name']<br />
['sales', 6734, 'john']<br />
Dictionaries have no concept of order among the elements. It is incorrect to say that the
elements are "out of order"; they are simply unordered.<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which  of the following is invalid?</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  _a = 1.<br>
<input type="Checkbox" name="g" value="b">  __a = 1.<br>
<input type="Checkbox" name="g" value="c">  _str__ = 1.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch4.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
