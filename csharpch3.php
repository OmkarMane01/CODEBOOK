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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch4.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch3.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch3-<?php echo $userRow['userName']; ?></title>
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
}</style>
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
 <tr><td width="942"><div align="center" class="style2"><strong>03.VARIABLE.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">VARIABLE:</strong></td>
 </tr>
 
 <tr><td>
Defining Variables:<br />
Syntax for variable definition in C# is:<br />
 data_type variable_list;<br />
Here, data_type must be a valid C# data type including char, int, float, double, or any user-defined data type, and variable_list may consist of one or more identifier names separated by commas.<br />
Some valid variable definitions are shown here:<br />
int i, j, k;<br />
char c, ch;<br />
float f, salary;<br />
<span class="style5">Initializing Variables:</span><br />
Variables are initialized (assigned a value) with an equal sign followed by a constant expression.<br /> The general form of initialization is:<br />
variable_name = value;<br />
Variables can be initialized in their declaration. The initializer consists of an equal sign followed by a constant expression as:<br />
data_type  variable_name = value;<br />
Some examples are:<br />
int d = 3, f = 5; /* initializing d and f. */<br />
byte z = 22; /* initializes z. */<br />
double pi = 3.14159; /* declares an approximation of pi. */<br />
char x = 'x'; /* the variable x has the value 'x'. */<br />
It is a good programming practice to initialize variables properly, otherwise sometimes program may produce unexpected result.<br />
The following example uses various types of variables:<br />
using System;<br />
namespace VariableDefinition<br />
{<br />
class Program<br />
{<br />
static void Main(string[] args)<br />
{<br />
short a;<br />
int b ;<br />
double c;<br />
/* actual initialization */<br />
a = 10;<br />
b = 20;<br />
c = a + b;<br />
Console.WriteLine("a = {0}, b = {1}, c = {2}", a, b, c);<br />
Console.ReadLine();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
a = 10, b = 20, c = 30<br />
 <span class="style5">Accepting Values from User:</span><br /> 
 The Console class in the System namespace provides a function ReadLine() for accepting input from the user and store it into a variable.<br />
For example,<br />
int num;<br />
num = Convert.ToInt32(Console.ReadLine()); <br />The function Convert.ToInt32() <br />converts the data entered by the user to int data type, because Console.ReadLine() accepts the data in string format.<br />
 <span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>int a,b;<br />
a=(b=10) + 5:<br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  b = 10, a = 5.<br>
<input type="Checkbox" name="g" value="b">  b = 15, a = 5.<br>
<input type="Checkbox" name="g" value="c">  a = 15, b = 10.<br>
<input type="Checkbox" name="g" value="d">  a = 10, b = 10.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="csharpch2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch4.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
