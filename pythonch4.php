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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch5.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch4.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch4-<?php echo $userRow['userName']; ?></title>
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
04.DECISION MACKING.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">IF Statement:</strong></td>
 </tr>
 
 <tr><td>
The IF statement is similar to that of other languages. The if statement contains a logical
expression using which the data is compared and a decision is made based on the result
of the comparison.<br />
Syntax<br />
if expression:<br />
statement(s)<br />
If the boolean expression evaluates to TRUE, then the block of statement(s) inside the if
statement is executed. In Python, statements in a block are uniformly indented after the
: symbol. If boolean expression evaluates to FALSE, then the first set of code after the
end of block is executed<br />
Example<br />
#!/usr/bin/python3<br />
var1 = 100<br />
if var1:<br />
print ("1 - Got a true expression value")<br />
print (var1)<br />
var2 = 0<br />
if var2:<br />
print ("2 - Got a true expression value")<br />
print (var2)<br />
print ("Good bye!")<br />
When the above code is executed, it produces the following result -<br />
1 - Got a true expression value<br />
100<br />
Good bye!<br />
<span class="style5">IF...ELIF...ELSE Statements:</span><br />
An else statement can be combined with an if statement. An else statement contains a
block of code that executes if the conditional expression in the if statement resolves to 0
or a FALSE value.<br />
The else statement is an optional statement and there could be at the most only
one else statement following if.<br />
Syntax<br />
The syntax of the if...else statement is :<br />
if<br />
expression:<br />
statement(s)<br />
else:<br />
statement(s)<br />
<span class="style5">The elif Statement:</span><br />
The elif statement allows you to check multiple expressions for TRUE and execute a block
of code as soon as one of the conditions evaluates to TRUE.<br />
Similar to the else, the elif statement is optional. However, unlike else, for which there
can be at the most one statement, there can be an arbitrary number of elif statements
following an if.<br />
Syntax<br />
if expression1:<br />
statement(s)<br />
elif expression2:<br /><br />
statement(s)<br />
elif expression3:<br />
statement(s)<br />
else:<br />
statement(s)<br />
Core Python does not provide switch or case statements as in other languages, but we can
use if..elif...statements to simulate switch case as follows-<br />
Example<br />
#!/usr/bin/python3<br />
amount=int(input("Enter amount: "))<br />
if amount<1000:<br />
discount=amount*0.05<br /><br />
print ("Discount",discount)<br />
elif amount<5000:<br />
discount=amount*0.10<br />
print ("Discount",discount)<br />
else:<br />
discount=amount*0.15<br />
print ("Discount",discount)<br />
print ("Net payable:",amount-discount)<br />
When the above code is executed, it produces the following resultPython<br />

Enter amount: 600<br />
Discount 30.0<br />
Net payable: 570.0<br />
Enter amount: 3000<br />
Discount 300.0<br />
Net payable: 2700.0<br />
Enter amount: 6000<br />
Discount 900.0<br />
Net payable: 5100.0<br />
<span class="style5">Nested IF Statements:</span><br />
There may be a situation when you want to check for another condition after a condition
resolves to true. In such a situation, you can use the nested if construct.<br />
In a nested if construct, you can have an if...elif...else construct inside another
if...elif...else construct.<br />
Syntax<br />
The syntax of the nested if...elif...else construct may beif<br />
expression1:<br />
statement(s)<br />
if expression2:<br />
statement(s)<br />
elif expression3:<br />
statement(s)<br />
else<br />
statement(s)<br />
elif expression4:<br />
statement(s)<br />
else:<br />
statement(s)<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>What is  output ?</b><br />
num=3<br />
if num >= 0:<br />
  print("positive")<br />
 else<br />
   print("negative")<br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  positive.<br>
<input type="Checkbox" name="g" value="b">  negative.<br>
<input type="Checkbox" name="g" value="c">  error.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch5.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
