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
  echo"<script language='javascript' type='text/javascript'> location.href='phpch6.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch5.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch5-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>05.ARRAYS,STRINGS.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>Numeric Array</strong>:-</td>
 </tr>
 <tr><td>

These arrays can store numbers, strings and any object but their index will be represented
by numbers. By default, the array index starts from zero.<br />
Example<br />
The following example demonstrates how to create and access numeric arrays.
Here we have used array() function to create array. This function is explained in function
reference.<br />
<center><img  src="images/Numeric Arrayphp.jpg"/></center>

<span class="style5">Associative Arrays:</span><br />
The associative arrays are very similar to numeric arrays in term of functionality but they
are different in terms of their index. Associative array will have their index as string so
that you can establish a strong association between key and values.<br />
To store the salaries of employees in an array, a numerically indexed array would not be
the best choice. Instead, we could use the employees names as the keys in our associative
array, and the value would be their respective salary.<br />
<center><img  src="images/Associative Arraysphp.jpg"/></center>

<span class="style5">Multidimensional Arrays:</span><br />
A multi-dimensional array each element in the main array can also be an array. And each
element in the sub-array can be an array, and so on. Values in the multi-dimensional array
are accessed using multiple index.<br />
<center><img src="images/Multidimensional Arraysphp.jpg" width="355" height="395" />
</center>
<span class="style5">STRINGS:</span><br />
Singly quoted strings are treated almost literally, whereas doubly quoted strings replace
variables with their values as well as specially interpreting certain character sequences.<br />
<
?php<br />
$variable = "name";<br />
$literally = 'My $variable will not print!\\n';<br />
print($literally);<br />
$literally = "My $variable will print!\\n";<br />
print($literally);<br />
?><br />
There are no artificial limits on string length - within the bounds of available memory, you
ought to be able to make arbitrarily long strings.<br />
Strings that are delimited by double quotes (as in "this") are preprocessed in both the
following two ways by PHP:<br />
 Certain character sequences beginning with backslash (\) are replaced with special
characters<br />
 Variable names (starting with $) are replaced with string representations of their
values.<br />
The escape-sequence replacements are:<br />
 \n is replaced by the newline character<br />
 \r is replaced by the carriage-return character<br />
 \t is replaced by the tab character<br />
 \$ is replaced by the dollar sign itself ($)<br />
 \" is replaced by a single double-quote (")<br />
 \\ is replaced by a single backslash (\)<br />
String Concatenation Operator:<br />
To concatenate two string variables together, use the dot (.) operator:<br />
<
?php<br />
$string1="Hello World";<br />
$string2="1234";<br />
echo $string1 . " " . $string2;<br />
?><br />
This will produce the following result:<br />
Hello World 1234<br />
If you look at the code above, you see that we used the concatenation operator two times.
This is because we had to insert a third string.<br />
Between the two string variables we added a string with a single character, an empty
space, to separate the two variables.<br />
Using the strlen() function:<br />
The strlen() function is used to find the length of a string.<br />
Let's find the length of our string "Hello world!":<br />
<
?php<br />
echo strlen("Hello world!");
?><br />
This will produce the following result:<br />
12<br />
The length of a string is often used in loops or other functions, when it is important to
know when the string ends. (i.e. in a loop, we would want to stop the loop after the last
character in the string).<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />




<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> the array index starts from ______. ? <br />
   
</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  0.<br>
<input type="Checkbox" name="g" value="b">  1.<br>
<input type="Checkbox" name="g" value="c">  2.<br>
<input type="Checkbox" name="g" value="d">  3.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch4.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch6.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
