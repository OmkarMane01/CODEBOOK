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
  echo"<script language='javascript' type='text/javascript'> location.href='javach5.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach4.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach4-<?php echo $userRow['userName']; ?></title>
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
    <tr><td class="style3"><div align="center">Java</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>04.DECISION MAKING. </strong></div></td>
 </tr>
 <tr>
   <td><span class="style5">If Statement in Java</span>:-</td>
 </tr>
 <tr><td>
 An if statement consists of a Boolean expression followed by one or more statements.<br />
Syntax:<br />
Following is the syntax of an if statement:<br />
if(Boolean_expression)<br />
{<br />
//Statements will execute if the Boolean expression is true<br />
}<br />
If the Boolean expression evaluates to true then the block of code inside the if statement will be executed. If not, the first set of code after the end of the if statement (after the closing curly brace) will be executed.<br />
<span class="style5">If-else Statement in Java:</span><br />
An if statement can be followed by an optional else statement, which executes when the Boolean expression is false.<br />
Syntax:<br />
Following is the syntax of an if...else statement:<br />
if(Boolean_expression){<br />
//Executes when the Boolean expression is true<br />
}else{<br />
//Executes when the Boolean expression is false<br />
}<br />
If the boolean expression evaluates to true, then the if block of code will be executed, otherwise else block of code will be executed.<br />
<span class="style5">The if...else if...else Statement:</span><br />
An if statement can be followed by an optional else if...else statement, which is very useful to test various conditions using single if...else if statement.<br />
When using if, else if, else statements there are a few points to keep in mind.<br />
1)An if can have zero or one else's and it must come after any else if's.<br />
 2)An if can have zero to many else if's and they must come before the else.<br />
 3)Once an else if succeeds, none of the remaining else if's or else's will be tested.<br />
Syntax:
Following is the syntax of an if...else statement:<br />
if(Boolean_expression 1){<br />
//Executes when the Boolean expression 1 is true<br />
}else if(Boolean_expression 2){<br />
//Executes when the Boolean expression 2 is true<br />
}else if(Boolean_expression 3){<br />
//Executes when the Boolean expression 3 is true<br />
}else {<br />
//Executes when the none of the above condition is true.<br />
}<br />
<span class="style5">Switch Statement in Java:</span><br />
A switch statement allows a variable to be tested for equality against a list of values.
 Each value is called a case, and the variable being switched on is checked for each case.<br />
Syntax<br />
The syntax of enhanced for loop is:<br />
switch(expression){<br />
case value :<br />
//Statements<br />
break; //optional<br />
case value :<br />
//Statements<br />
break; //optional<br />
//You can have any number of case statements.<br />
default : //Optional<br />
//Statements<br />
}<br />
The following rules apply to a switch statement:<br />
 1)The variable used in a switch statement can only be integers, convertable integers (byte, short, char), strings and enums.
 2)You can have any number of case statements within a switch. Each case is followed by the value to be compared to and a colon.<br />
 3)The value for a case must be the same data type as the variable in the switch and it must be a constant or a literal.<br />
 4)When the variable being switched on is equal to a case, the statements following that case will execute until a break statement 
is reached.<br />
 5)When a break statement is reached, the switch terminates, and the flow of control jumps to the next line following the switch statement.<br />
 Not every case needs to contain a break. If no break appears, the flow of control will fall through to subsequent cases until 
a break is reached.<br />
 6)A switch statement can have an optional default case, which must appear at the end of the switch. The default case can be used
 for performing a task when none of the cases is true. No break is needed in the default case.<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>What would be the output of the following codesnippet if variable a=10; ?</b><br />
if(a<=0)<br />
{<br />
if(a==0)<br />
{<br />
System.out.println("1");<br />
}<br />
else<br />
{<br />
System.out.println("2");
}}<br />
System.out.println("3");<br />
 
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  1 2.<br>
<input type="Checkbox" name="g" value="b">  2 3.<br>
<input type="Checkbox" name="g" value="c">  1 3.<br>
<input type="Checkbox" name="g" value="d">  3.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="javach3.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach5.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
