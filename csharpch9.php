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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch10.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch9.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch9-<?php echo $userRow['userName']; ?></title>
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
09.INHERITANCE.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Base and Derived Classes:</strong></td>
 </tr>
 
 <tr><td>
A class can be derived from more than one class or interface, which means that it can inherit data and functions from multiple base classes or interfaces.<br />
The syntax used in C# for creating derived classes is as follows:<br />
acess-specifier class  base_class<br />
{<br />
...<br />
}<br />
class  derived_class  :  base_class<br />
{<br />
...<br />
}<br />
<span class="style5">Initializing Base Class:</span><br />
The derived class inherits the base class member variables and member methods. Therefore the super class object should be created before the subclass is created. You can give instructions for superclass initialization in the member initialization list.<br />
The following program demonstrates this:<br />
using System;<br />
namespace RectangleApplication<br />
{<br />
class Rectangle<br />
{<br />
//member variables<br />
protected double length;<br />
protected double width;<br />
public Rectangle(double l, double w)<br />
{<br />
length = l;<br />
width = w;<br />
}<br />
public double GetArea(){<br />
return length * width;<br />
}<br />
public void Display()<br />
{<br />
Console.WriteLine("Length: {0}", length);<br />
Console.WriteLine("Width: {0}", width);<br />
Console.WriteLine("Area: {0}", GetArea());<br />
}<br />
}//end class Rectangle<br />
class Tabletop : Rectangle<br />
{<br />
private double cost;<br />
public Tabletop(double l, double w) : base(l, w)<br />
{ }<br />
public double GetCost()<br />
{<br />
double cost;<br />
cost = GetArea() * 70;<br />
return cost;<br />
}<br />
public void Display()<br />
{<br />
base.Display();<br />
Console.WriteLine("Cost: {0}", GetCost());<br />
}
}<br />
class ExecuteRectangle<br />
{<br />

static void Main(string[] args)<br />
{<br />
Tabletop t = new Tabletop(4.5, 7.5);<br />
t.Display();<br />
Console.ReadLine();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Length: 4.5<br />
Width: 7.5<br />
Area: 33.75<br />
Cost: 2362.5<br />
<span class="style5">Multiple Inheritance in C#</span><br />
C# does not support multiple inheritance. However, you can use interfaces to implement multiple inheritance. The following program demonstrates this:<br />
using System;<br />
namespace InheritanceApplication<br />
{<br />
class Shape<br />
{<br />
public void setWidth(int w)<br />
{<br />
width = w;<br />
}<br />
public void setHeight(int h)<br />
{<br /><br />
height = h;<br />
}<br />
protected int width;<br />
protected int height;<br />
}<br />
// Base class PaintCost
public interface PaintCost<br />
{<br />
int getCost(int area);<br />
}<br />
// Derived class
class Rectangle : Shape, PaintCost<br />
{<br />
public int getArea()<br />
{<br />
return (width * height);<br />
}<br />
public int getCost(int area)<br />
{<br />
return area * 70;<br />
}
}<br />
class RectangleTester<br />
{<br />
static void Main(string[] args)<br />
{<br />
Rectangle Rect = new Rectangle();<br />
int area;<br />
Rect.setWidth(5);<br />
Rect.setHeight(7);<br />
area = Rect.getArea();<br />
// Print the area of the object.<br />
Console.WriteLine("Total area: {0}", Rect.getArea());<br />
Console.WriteLine("Total paint cost: ${0}" , Rect.getCost(area));<br />
Console.ReadKey();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Total area: 35<br />
Total paint cost: $2450<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of the following can be facilitated by the Inheritance mechanism ?  <b/><br />
1. Use the existing functionality of base class.<br />
2. Override the existing functionality of base class.<br />
3. Implement new functionality in the derived class.<br />
4. Implement containership.
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  1,2,3.<br>
<input type="Checkbox" name="g" value="b">  3,4.<br>
<input type="Checkbox" name="g" value="c">  2,4.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="csharpch8.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch10.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
