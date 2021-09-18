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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch6.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch5.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch5-<?php echo $userRow['userName']; ?></title>
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
05.LOOP TYPES.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">while Loop Statements:</strong></td>
 </tr>
 
 <tr><td>
A while loop statement in Python programming language repeatedly executes a target
statement as long as a given condition is true.<br />
Syntax:<br />
The syntax of a while loop in Python programming language is
while expression:<br />
statement(s)<br />
Here, statement(s) may be a single statement or a block of statements with uniform
indent. The condition may be any expression, and true is any non-zero value. The loop
iterates while the condition is true.<br />
Example<br />
#!/usr/bin/python3<br />
count = 0<br />
while (count < 5):<br />
print ('The count is:', count)<br />
count = count + 1<br />
print ("Good bye!")<br />
When the above code is executed, it produces the following result-
The count is: 0<br />
The count is: 1<br />
The count is: 2<br />
The count is: 3<br />
The count is: 4<br />
<span class="style5">for Loop Statements:</span><br />
The for statement in Python has the ability to iterate over the items of any sequence, such
as a list or a string.<br />
Syntax<br />
for iterating_var in sequence:<br />
statements(s)<br />
If a sequence contains an expression list, it is evaluated first. Then, the first item in the
sequence is assigned to the iterating variable iterating_var. <br />Next, the statements block is
executed. Each item in the list is assigned to iterating_var, and the statement(s) block is
executed until the entire sequence is exhausted.<br />
<span class="style5">Nested loops:</span><br />
Python programming language allows the use of one loop inside another loop. The
following section shows a few examples to illustrate the concept.
Nested loops:<br />
Python programming language allows the use of one loop inside another loop. The
following section shows a few examples to illustrate the concept.<br />
Syntax<br />
for iterating_var in sequence:<br />
for iterating_var in sequence:<br />
statements(s)<br />
statements(s)<br />
The syntax for a <span class="style2">nested while loop</span> statement in Python programming language is as
follows<br />
while
expression:<br />
while expression:<br />
statement(s)<br />
statement(s)<br />
A final note on loop nesting is that you can put any type of loop inside any other type of
loop.<br /> For example a for loop can be inside a while loop or vice versa.
Example<br />
The following program uses a <span class="style2">nested-for loop</span> to display multiplication tables from 1-10.<br />
#!/usr/bin/python3<br />
import sys<br />
Python 3
60
for i in range(1,11):<br />
for j in range(1,11):<br />
k=i*j<br />
print (k, end=' ')<br />
print()<br />
The print() function inner loop has end=' ' which appends a space instead of default
newline. Hence, the numbers will appear in one row.<br />
Last print() will be executed at the end of inner for loop.<br />
When the above code is executed, it produces the following result -<br />
1 2 3 4 5 6 7 8 9 10<br />
2 4 6 8 10 12 14 16 18 20<br />
3 6 9 12 15 18 21 24 27 30<br />
4 8 12 16 20 24 28 32 36 40<br />
5 10 15 20 25 30 35 40 45 50<br />
6 12 18 24 30 36 42 48 54 60<br />
7 14 21 28 35 42 49 56 63 70<br />
8 16 24 32 40 48 56 64 72 80<br />
9 18 27 36 45 54 63 72 81 90<br />
10 20 30 40 50 60 70 80 90 100<br />
<span class="style5">break statement:</span><br />
The break statement is used for premature termination of the current loop. After
abandoning the loop, execution at the next statement is resumed, just like the traditional
break statement in C.<br />
The most common use of break is when some external condition is triggered requiring a
hasty exit from a loop. The break statement can be used in both while and for loops.
If you are using nested loops, the break statement stops the execution of the innermost<br />
loop and starts executing the next line of the code after the block.
Syntax<br />
The syntax for a break statement in Python is as follows<br />break<br />
Example<br />
#!/usr/bin/python3<br />
for letter in 'Python': # First Example<br />
if letter == 'h':<br />
break<br />
print ('Current Letter :', letter)<br />
When the above code is executed, it produces the following result-<br />
Current Letter : P<br />
Current Letter : y<br />
Current Letter : t<br />
<span class="style5">continue Statement:</span><br />
The continue statement in Python returns the control to the beginning of the current loop.
When encountered, the loop starts next iteration without executing the remaining
statements in the current iteration.<br />
The continue statement can be used in both while and for loops.<br />
Syntax:<br />
continue<br />
Example:<br />
#!/usr/bin/python3<br />
for letter in 'Python': # First Example<br />
if letter == 'h':<br />
continue<br />
print ('Current Letter :', letter)<br />
When the above code is executed, it produces the following result-<br />
Current Letter : P<br />
Current Letter : y<br />
Current Letter : t<br />
Current Letter : o<br />
Current Letter : n<br />
<span class="style5">pass Statement:</span><br />
It is used when a statement is required syntactically but you do not want any command
or code to execute.<br />
The pass statement is a null operation; nothing happens when it executes. The
pass statement is also useful in places where your code will eventually go, but has not
been written yet i.e. in stubs).<br />
Syntax<br />
pass<br />
Example<br />
#!/usr/bin/python3<br />
for letter in 'Python':<br />
if letter == 'h':<br />
pass
print ('This is pass block')<br />
print ('Current Letter :', letter)<br />
print ("Good bye!")<br />
When the above code is executed, it produces the following result<br />
Current Letter : P<br />
Current Letter : y<br />
Current Letter : t<br />
This is pass block<br />
Current Letter : h<br />
Current Letter : o<br />
Current Letter : n<br />
Good bye!<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="324" align="center">
<td width="316">
<tr><td><form action="" method="POST">

<b>What do while loop do?</b><br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Repeat a code  given numbers of time.<br>
<input type="Checkbox" name="g" value="b">  Repeat a code until a condition is true.<br>
<input type="Checkbox" name="g" value="c">  Repeat a code  until a condition is false.<br>
<input type="Checkbox" name="g" value="d">  Repeat a code indefinitely.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch4.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch6.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
