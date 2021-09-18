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
  echo"<script language='javascript' type='text/javascript'> location.href='phpch3.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch2.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch2-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>02.VARIABLE,CONSTANTS,OPERATORS.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>VARIABLE:</strong></td>
 </tr>
 <tr><td>
 The main way to store information in the middle of a PHP program is by using a variable.
Here are the most important things to know about variables in PHP.<br />
 All variables in PHP are denoted with a leading dollar sign ($).<br />
 The value of a variable is the value of its most recent assignment.<br />
 Variables are assigned with the = operator, with the variable on the left-hand side
and the expression to be evaluated on the right.<br />
 Variables can, but do not need, to be declared before assignment.<br />
 Variables in PHP do not have intrinsic types - a variable does not know in advance
whether it will be used to store a number or a string of characters.<br />
 Variables used before they are assigned have default values.<br />
 PHP does a good job of automatically converting types from one to another when
necessary.<br />
 PHP variables are Perl-like.<br />
PHP has a total of eight data types which we use to construct our variables:<br />
 <strong>Integers:</strong> are whole numbers, without a decimal point, like 4195.<br />
 $int_var = 12345;<br />
$another_int = -12345 + 12345;<br />
 <strong>Doubles:</strong> are floating-point numbers, like 3.14159 or 49.1.<br />
 $many = 2.2888800;<br />
$many_2 = 2.2111200;<br />
 <strong>Booleans:</strong> have only two possible values either true or false.<br />
 if (TRUE)<br />
print("This will always print");<br />
else<br />
print("This will never print");<br />
 <strong>NULL:</strong> is a special type that only has one value: NULL.<br />
 $my_var = NULL;<br />
 <strong>Strings:</strong> are sequences of characters, like 'PHP supports string operations.<br />
 $string_1 = "This is a string in double quotes";<br />
$string_2 = "This is a somewhat longer, singly quoted string";<br />
 <strong>Arrays:</strong> are named and indexed collections of other values.<br />
 <strong>Objects:</strong> are instances of programmer-defined classes, which can package up both
other kinds of values and functions that are specific to the class.<br />
 <strong>Resources</strong>: are special variables that hold references to resources external to PHP
(such as database connections).<br />
The first five are simple types, and the next two (arrays and objects) are compound - the
compound types can package up other arbitrary values of arbitrary type, whereas the
simple types cannot.
<br />
<span class="style5">CONSTANTS:</span><br />
constant() function<br />
As indicated by the name, this function will return the value of the constant.
This is useful when you want to retrieve value of a constant, but you do not know its name,
i.e., it is stored in a variable or returned by a function.<br />
<
?php<br />
define("MINSIZE", 50);<br />
echo MINSIZE;<br />
echo constant("MINSIZE"); // same thing as the previous line<br />
?><br />
 <span class="style5">OPERATORS:</span><br />
 Simple answer can be given using expression 4 + 5 is equal to 9.
Here 4 and 5 are called operands and + is called operator. <br />PHP language supports following
type of operators.<br />
 Arithmetic Operators<br />
 Comparison Operators<br />
 Logical (or Relational) Operators<br />
 Assignment Operators<br />
 Conditional (or ternary) Operators<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>All variables in PHP are denoted with a leading .</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  dollar sign ($).<br>
<input type="Checkbox" name="g" value="b">  hash sign (#).<br>
<input type="Checkbox" name="g" value="c">  at sign (@).<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch3.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
