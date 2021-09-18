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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch6a.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch5.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch5-<?php echo $userRow['userName']; ?></title>
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
	width: 23%;
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
    <tr><td class="style3"><div align="center">C++ Language</div></td>
   </tr>
</table><br />   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>05.DECISION-MAKING STATEMENTS</strong>.</div></td>
 </tr><tr><td class="style2"><strong>DECISION-MAKING STATEMENTS:</strong></td> </tr>
<tr><td>Decision making structures require that the programmer specify one or more
conditions to be evaluated or tested by the program, along with a statement or
statements to be executed if the condition is determined to be true, and
optionally, other statements to be executed if the condition is determined to be
false.<br />
C++ programming language provides following types of decision making statements:<br />
<span class="style2">If Statement:</span><br />
An if statement consists of a boolean expression followed by one or more statements.<br />
Syntax:<br />
The syntax of an if statement in C++ is:<br />
if(boolean_expression)<br />
{<br />
// statement(s) will execute if the boolean expression is true<br />
}<br />
If the boolean expression evaluates to true, then the block of code inside the if
statement will be executed. If boolean expression evaluates to false, then the
first set of code after the end of the if statement (after the closing curly brace)
will be executed.<br />
<span class="style2">if…else Statement:</span><br />
An if statement can be followed by an optional else statement, which executes when the boolean expression is false.<br />
Syntax:<br />
The syntax of an if...else statement in C++ is:<br />
if(boolean_expression)<br />
{<br />
// statement(s) will execute if the boolean expression is true<br />
}<br />
else<br />
{<br />
// statement(s) will execute if the boolean expression is false<br />
}<br />
If the boolean expression evaluates to true, then the if block of code will be
executed, otherwise else block of code will be executed.<br />

<span class="style2">if...else if...else Statement:</span><br />
An if statement can be followed by an optional else if...else statement, which is
very usefull to test various conditions using single if...else if statement.<br />
When using if , else if , else statements there are few points to keep in mind.<br />
1.An if can have zero or one else's and it must come after any else if's. <br />
2.An if can have zero to many else if's and they must come before the else.<br />
3.Once an else if succeeds, none of he remaining else if's or else's will be tested.<br />
Syntax<br />
The syntax of an if...else if...else statement in C++ is:<br />
if(boolean_expression 1)<br />
{<br />
// Executes when the boolean expression 1 is true<br />
}<br />
else if( boolean_expression 2)<br />
{<br />
// Executes when the boolean expression 2 is true<br />
}<br />
else if( boolean_expression 3)<br />
{<br />
// Executes when the boolean expression 3 is true<br />
}<br />
else<br />
{<br />
// executes when the none of the above condition is true.<br />
 <span class="style2">Switch Statement:</span><br />
A switch statement allows a variable to be tested for equality against a list of
values. Each value is called a case, and the variable being switched on is
checked for each case.<br />
Syntax:<br />
The syntax for a switch statement in C++ is as follows:<br />
switch(expression){<br />
case constant-expression :<br />
statement(s);<br />
break; //optional<br />
case constant-expression :<br />
statement(s);<br />
break; //optional<br />
// you can have any number of case statements.<br />
default : //Optional<br />
statement(s);<br />
}<br />
The following rules apply to a switch statement:<br />
 The expression used in a switch statement must have an integral or
enumerated type, or be of a class type in which the class has a single
conversion function to an integral or enumerated type.<br />
 You can have any number of case statements within a switch. Each case is
followed by the value to be compared to and a colon.<br />
 The constant-expression for a case must be the same data type as the
variable in the switch, and it must be a constant or a literal.<br />
 When the variable being switched on is equal to a case, the statements
following that case will execute until a break statement is reached.<br />
 When a break statement is reached, the switch terminates, and the flow
of control jumps to the next line following the switch statement.<br />
 Not every case needs to contain a break. If no break appears, the flow of
control will fall through to subsequent cases until a break is reached.<br />
 A switch statement can have an optional default case, which must
appear at the end of the switch. The default case can be used for
performing a task when none of the cases is true. No break is needed in
the default case.<br />
   <span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />

<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> What is the output of this program ?.</b><br />
#include < iostrem.h ><br />
void main()<br />
{int a = 50;<br />
int b = 20;<br />
if ( a > b )<br />
{<br />
cout << " a is greater than b" << endl ;<br />
}<br />
else<br />
{<br />
cout << " a is not greater than b" << endl ;
}}<br /></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> error.<br>
<input type="Checkbox" name="g" value="b">   a is not greater than b.<br>
<input type="Checkbox" name="g" value="c"> a is greater than b.<br>
<input type="Checkbox" name="g" value="d"> Non of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 
 
 
 
 <div align="center">
<a href="c++ch4.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch6a.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
