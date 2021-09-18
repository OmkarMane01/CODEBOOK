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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch11.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch10.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch10-<?php echo $userRow['userName']; ?></title>
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
    <tr><td class="style3"><div align="center">C++ Language</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style5">10.INHERITANCE.</div></td>
 </tr>
 <tr><td class="style5">Base & Derived Classes:</tr></td>
 <tr><td>
 A class can be derived from more than one classes, which means it can inherit
data and functions from multiple base classes. To define a derived class, we use
a class derivation list to specify the base class(es). A class derivation list names
one or more base classes and has the form:<br />
class derived-class: access-specifier base-class;<br />
Where access-specifier is one of public, protected, or private, and base-class
is the name of a previously defined class. If the access-specifier is not used,
then it is private by default.<br />
Consider a base class Shape and its derived class Rectangle as follows:<br />
#include <iostream><br />
using namespace std;<br />
// Base class<br />
class Shape<br />
{<br />
public:<br />
void setWidth(int w)<br />
{<br />
width = w;<br />
}<br />
void setHeight(int h)<br />
{<br />
height = h;<br />
}<br />
protected:<br />
int width;<br />
int height;<br />
};<br />
// Derived class<br />
class Rectangle: public Shape<br />
{<br />
public:<br />
int getArea()<br />
{<br />
return (width * height);<br />
}<br />
};<br />
int main(void)<br />
{<br />
Rectangle Rect;<br />
Rect.setWidth(5);<br />
Rect.setHeight(7);<br />
// Print the area of the object<br />.
cout << "Total area: " << Rect.getArea() << endl;<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Total area: 35<br />
<span class="style5">Type of Inheritance:</span><br/>
When deriving a class from a base class, the base class may be inherited
through public, protected or private inheritance. The type of inheritance is
specified by the access-specifier as explained above.<br/>
We hardly use protected or private inheritance, but public inheritance is
commonly used. While using different type of inheritance, following rules are
applied:<br/>
 <span class="style5">Public Inheritance:</span> When deriving a class from a public base
class, public members of the base class become public members of the
derived class and protected members of the base class
become protected members of the derived class. A base
class's private members are never accessible directly from a derived
class, but can be accessed through calls to
the public and protected members of the base class.<br/>
 <span class="style5">Protected Inheritance: </span>When deriving from a protected base
class, public and protected members of the base class
become protected members of the derived class.<br/>
 <span class="style5">Private Inheritance:</span> When deriving from a private base
class, public and protected members of the base class
become private members of the derived class.<br/>
Multiple Inheritance:<br/>
A C++ class can inherit members from more than one class and here is the
extended syntax:<br/>
class derived-class: access baseA, access baseB....;<br/>
Where access is one of public, protected, or private and would be given for
every base class and they will be separated by comma as shown above. Let us
try the following example:<br/>
#include <iostream><br/>
using namespace std;<br/>
// Base class Shape<br/>
class Shape<br/>
{<br/>
public:<br/>
void setWidth(int w)<br/>
{<br/>
width = w;<br/>
}<br/>
void setHeight(int h)<br/>
{<br/>
height = h;<br/>
}<br/>
protected:<br/>
int width;<br/>
int height;<br/>
};<br/>
// Base class PaintCost<br/>
class PaintCost<br/>
{<br/>
public:<br/>
int getCost(int area)<br/>
{<br/>
return area * 70;<br/>
}<br/>
};<br/>
// Derived class<br/>
class Rectangle: public Shape, public PaintCost<br/>
{<br/>
public:<br/>
int getArea()<br/>
{<br/>
return (width * height);<br/>
}<br/>
};<br/>
int main(void)<br/>
{<br/>
Rectangle Rect;<br/>
int area;<br/>
Rect.setWidth(5);<br/>
Rect.setHeight(7);<br/>
area = Rect.getArea();<br/>
// Print the area of the objectv.
cout << "Total area: " << Rect.getArea() << endl;<br/>
// Print the total cost of painting<br/>
cout << "Total paint cost: $" << Rect.getCost(area) << endl;<br/>
return 0;<br/>
}<br/>
When the above code is compiled and executed, it produces the following result:<br/>``
Total area: 35<br/>
Total paint cost: $2450<br/>

<span class="style2" ><strong>Extra References:</span></strong><br />
<span class="style2" ><strong>Question:</strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> If the derived class is struct, then default visibility mode is ________.</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> public.<br>
<input type="Checkbox" name="g" value="b"> protected.<br>
<input type="Checkbox" name="g" value="c"> private.<br>
<input type="Checkbox" name="g" value="d"> struct cant inherit class.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
<br />
 <div align="center">
<a href="c++ch9.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch11.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
