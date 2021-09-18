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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch7.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch6.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch6-<?php echo $userRow['userName']; ?></title>
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
	width: 5.25%;
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
    <tr><td class="style3"><div align="center">C#</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>06.LOOPS.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">While Loop:</strong></td>
 </tr>
 
 <tr><td>A while loop statement in C# repeatedly executes a target statement as long as a given condition is true.<br />
Syntax:<br />
The syntax of a while loop in C# is:<br />
while(condition)<br />
{<br />
statement(s);<br />
}<br />
Here, statement(s) may be a single statement or a block of statements. The condition may be any expression, and true is any non-zero value. The loop iterates while the condition is true.<br />
<span class="style5">For Loop: </span><br />
A for loop is a repetition control structure that allows you to efficiently write a loop that needs to execute a specific number of times.<br />
Syntax<br />
The syntax of a for loop in C# is:<br />
for ( init; condition; increment )<br />
{<br />

statement(s);<br />
}<br />
Here is the flow of control in a for loop:<br />
1. The init step is executed first, and only once. This step allows you to declare and initialize any loop control variables. You are not required to put a statement here, as long as a semicolon appears.<br />
2. Next, the condition is evaluated. If it is true, the body of the loop is executed. If it is false, the body of the loop does not execute and flow of control jumps to the next statement just after the for loop.<br />
3. After the body of the for loop executes, the flow of control jumps back up to the increment statement. This statement allows you to update any loop control variables. This statement can be left blank, as long as a semicolon appears after the condition.<br />
4. The condition is now evaluated again. If it is true, the loop executes and the process repeats itself (body of loop, then increment step, and then again testing for a condition). After the condition becomes false, the for loop terminates.<br />
<span class="style5">Do...While Loop:</span><br />
Unlike for and while loops, which test the loop condition at the start of the loop, the do...while loop checks its condition at the end of the loop.<br />
A do...while loop is similar to a while loop, except that a do...while loop is guaranteed to execute at least one time.<br />
Syntax<br />
The syntax of a do...while loop in C# is:<br />
do<br />
{<br />
statement(s);<br />
}while( condition );<br />
Notice that the conditional expression appears at the end of the loop, so the statement(s) in the loop execute once before the condition is tested.<br />
If the condition is true, the flow of control jumps back up to do, and the statement(s) in the loop execute again. This process repeats until the given condition becomes false.<br />
<span class="style5">Nested Loops:</span><br />
C# allows to use one loop inside another loop. Following section shows few examples to illustrate the concept.<br />
Syntax<br />
The syntax for a nested for loop statement in C# is as follows:<br />
for ( init; condition; increment )<br />
{<br />
for ( init; condition; increment )<br />
{<br />
statement(s);<br />
}<br />
statement(s);<br />
}<br />
The syntax for a nested while loop statement in C# is as follows:<br />
while(condition)<br />
{<br />
while(condition)<br />
{<br />
statement(s);<br />
}<br />
statement(s);<br />
}<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>static void main(string [] args)<br />
   { <br />
    int i,j;<br />
	for(i =1; i<=3; i++)<br />
	{<br />
	 j=1;
	  while(i%j==2)<br />
	  {<br />
	  j++;<br />
	  }<br />
	 Console.WriteLine(i+ "" +j);<br />
     }<br />
   } Console.ReadLine();<br />
}<br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  11 21 31.<br>
<input type="Checkbox" name="g" value="b">   1 12 13 1.<br>
<input type="Checkbox" name="g" value="c">  1 1 2 1 3 1.<br>
<input type="Checkbox" name="g" value="d">  11 21 13.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />

<div align="center">
<a href="csharpch5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch7.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
