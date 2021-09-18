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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch13.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch12.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch12-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style5">12.POLYMORPHISM.</div></td>
 </tr>
 <tr>
   <td class="style5">POLYMORPHISM: 
 </tr></td>
 <tr><td>
The word polymorphism means having many forms. Typically, polymorphism<br />
occurs when there is a hierarchy of classes and they are related by inheritance.
C++ polymorphism means that a call to a member function will cause a different
function to be executed depending on the type of object that invokes the
function.<br />
Consider the following example where a base class has been derived by other
two classes:<br />
#include <iostream><br />
using namespace std;<br />
class Shape {<br />
protected:<br />
int width, height;<br />
public:<br />
Shape( int a=0, int b=0)<br />
{<br />
width = a;<br />
height = b;<br />
}<br />
int area()<br />
{<br />
cout << "Parent class area :" <<endl;<br />
return 0;<br />
}<br />
};<br />
class Rectangle: public Shape{<br />
public:<br />
Rectangle( int a=0, int b=0):Shape(a, b) { }<br />
int area ()<br />
{<br />
cout << "Rectangle class area :" <<endl;<br />
return (width * height);<br />
}
};<br />
class Triangle: public Shape{<br />
public:<br />
Triangle( int a=0, int b=0):Shape(a, b) { }<br />
int area ()<br />
{<br />
cout << "Triangle class area :" <<endl;<br />
return (width * height / 2);<br />
}
};<br />
// Main function for the program<br />
int main( )<br />
{<br />
Shape *shape;<br />
Rectangle rec(10,7);<br />
Triangle tri(10,5);<br />
// store the address of Rectangle<br />
shape = &rec;<br />
// call rectangle area.<br />
shape->area();<br />
// store the address of Triangle<br />
shape = &tri;<br />
// call triangle area.<br />
shape->area();<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Parent class area<br />
Parent class area<br />
<span class="style5">Virtual Function:</span><br />
A virtual function is a function in a base class that is declared using the
keyword virtual. Defining in a base class a virtual function, with another version
in a derived class, signals to the compiler that we don't want static linkage for
this function.<br />
What we do want is the selection of the function to be called at any given point
in the program to be based on the kind of object for which it is called. This sort
of operation is referred to as dynamic linkage, or late binding.<br />
<span class="style5">Pure Virtual Functions:</span><br />
It is possible that you want to include a virtual function in a base class so that it
may be redefined in a derived class to suit the objects of that class, but that
there is no meaningful definition you could give for the function in the base
class.<br />
We can change the virtual function area() in the base class to the following:<br />
class Shape {<br />
protected:<br />
int width, height;<br />
public:<br />
Shape( int a=0, int b=0)<br />
{<br />
width = a;<br />
height = b;<br />
}<br />
// pure virtual function<br />
virtual int area() = 0;<br />
};<br />
The = 0 tells the compiler that the function has no body and above virtual
function will be called pure virtual function.<br />
 
 
<span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> Compile time polymorphism in C++ language are</b><br> 
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> Operator overloading.<br>
<input type="Checkbox" name="g" value="b"> Function overloading.<br>
<input type="Checkbox" name="g" value="c"> Function overriding.<br>
<input type="Checkbox" name="g" value="d"> Operator overloading amn Function overloading.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
 <div align="center">
<a href="c++ch11.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch13.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
