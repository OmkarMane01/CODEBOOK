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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch10.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch10.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch10-<?php echo $userRow['userName']; ?></title>
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
}
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
 <tr><td width="942"><div align="center" class="style2"><strong>
10.POLYMORPHISM.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Static Polymorphism:</strong></td>
 </tr>
 
 <tr><td>
The mechanism of linking a function with an object during compile time is called early binding. It is also called static binding. C# provides two techniques to implement static polymorphism.<br />
You can have multiple definitions for the same function name in the same scope. The definition of the function must differ from each other by the types and/or the number of arguments in the argument list. You cannot overload function declarations that differ only by return type.<br />
The following example shows using function print() to print different data types:<br />
using System;<br />
namespace PolymorphismApplication<br />
{<br />
class Printdata<br />
{<br />
void print(int i)<br />
{<br />
Console.WriteLine("Printing int: {0}", i );<br />
}<br />
void print(double f)<br />
{<br />
Console.WriteLine("Printing float: {0}" , f);<br />
}<br />
void print(string s)<br />
{<br />
Console.WriteLine("Printing string: {0}", s);<br />
}<br />
static void Main(string[] args)<br />
{<br />
Printdata p = new Printdata();<br />
// Call print to print integer<br />
p.print(5);<br />
// Call print to print float<br />
p.print(500.263);<br />
// Call print to print string<br />
p.print("Hello C++");<br />
Console.ReadKey();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Printing int: 5<br />
Printing float: 500.263<br />
Printing string: Hello C++<br />
<span class="style5">Dynamic Polymorphism:</span><br />
C# allows you to create abstract classes that are used to provide partial class implementation of an interface. Implementation is completed when a derived class inherits from it. Abstract classes contain abstract methods, which are implemented by the derived class. The derived classes have more specialized functionality.<br />
Here are the rules about abstract classes:<br />
 You cannot create an instance of an abstract class<br />
 You cannot declare an abstract method outside an abstract class<br />
 When a class is declared sealed, it cannot be inherited, abstract classes cannot be declared sealed.<br />
The following program demonstrates an abstract class:<br />
using System;<br />
namespace PolymorphismApplication<br />
{<br />
abstract class Shape<br />
{<br />
public abstract int area();<br />
}<br />
class Rectangle: Shape<br />
{<br />
private int length;<br />
private int width;<br />
public Rectangle( int a=0, int b=0)<br />
{<br />
length = a;<br />
width = b;<br />
}<br />
public override int area ()<br />
{<br />
Console.WriteLine("Rectangle class area :");<br />
return (width * length);<br />
166
}
}<br />
class RectangleTester<br />
{<br />
static void Main(string[] args)<br />
{<br />
Rectangle r = new Rectangle(10, 7);<br />
double a = r.area();<br />
Console.WriteLine("Area: {0}",a);<br />
Console.ReadKey();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Rectangle class area :<br />
Area: 70<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>The capability of an object in Csharp to take number of different forms and hence disply behavior as according is know as:</b><br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Encapsulation.<br>
<input type="Checkbox" name="g" value="b">  polymorphism.<br>
<input type="Checkbox" name="g" value="c">  Abstraction.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="csharpch9.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch10.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
