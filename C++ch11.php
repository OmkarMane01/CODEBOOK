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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch12.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch11.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch11-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style5">11.OVERLOADING (OPERATOR &FUNCTION).</div></td>
 </tr>
 <tr>
   <td class="style5">Function Overloading in C++:
 </tr></td>
 <tr><td>
 You can have multiple definitions for the same function name in the same scope.
The definition of the function must differ from each other by the types and/or
the number of arguments in the argument list. You cannot overload function
declarations that differ only by return type.<br />
Following is the example where same function print() is being used to print
different data types:<br />
#include <iostream><br />
using namespace std;<br />
class printData<br />
{<br />
public:<br />
void print(int i) {<br />
cout << "Printing int: " << i << endl;<br />
}<br />
void print(double f) {<br />
cout << "Printing float: " << f << endl;<br />
}<br />
void print(char* c) {<br />
cout << "Printing character: " << c << endl;<br />
}};<br />
int main(void)<br />
{<br />
printData pd;<br />
// Call print to print integer
pd.print(5);<br />
// Call print to print float
pd.print(500.263);<br />
// Call print to print character
pd.print("Hello C++");<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Printing int: 5<br />
Printing float: 500.263<br />
Printing character: Hello C++<br />
<span class="style5">Operators Overloading in C++:</span><br />
You can redefine or overload most of the built-in operators available in C++.
Thus, a programmer can use operators with user-defined types as well.
Overloaded operators are functions with special names the keyword operator
followed by the symbol for the operator being defined. Like any other function,
an overloaded operator has a return type and a parameter list.<br />
Box operator+(const Box&);<br />
Declares the addition operator that can be used to add two Box objects and
returns final Box object. Most overloaded operators may be defined as ordinary
non-member functions or as class member functions. <br />In case we define above
function as non-member function of a class then we would have to pass two
arguments for each operand as follows:<br />
Box operator+(const Box&, const Box&);<br />
Following is the example to show the concept of operator over loading using a
member function. Here an object is passed as an argument whose properties will
be accessed using this object, the object which will call this operator can be
accessed using this operator as explained below:<br />
#include <iostream><br />
using namespace std;<br />
class Box<br />
{<br />
public:<br />
double getVolume(void)v
{<br />
return length * breadth * height;<br />
}<br />
void setLength( double len )<br />
{<br />
length = len;<br />
}<br />
void setBreadth( double bre )<br />
{<br />
breadth = bre;<br />
}<br />
void setHeight( double hei )<br />
{<br />
height = hei;<br />
}<br />
// Overload + operator to add two Box objects.<br />
Box operator+(const Box& b)<br />
{<br />
Box box;<br />
box.length = this->length + b.length;<br />
box.breadth = this->breadth + b.breadth;<br />
box.height = this->height + b.height;<br />
return box;<br />
}<br />
private:<br />
double length; // Length of a box<br />
double breadth; // Breadth of a box<br />
double height; // Height of a box<br />
};<br />
// Main function for the program<br />
int main( )<br />
{<br />
Box Box1; // Declare Box1 of type Box<br />
Box Box2; // Declare Box2 of type Box<br />
Box Box3; // Declare Box3 of type Box<br />
double volume = 0.0; // Store the volume of a box here<br />
// box 1 specification<br />
Box1.setLength(6.0);<br />
Box1.setBreadth(7.0);<br />
Box1.setHeight(5.0);<br />
// box 2 specification<br />
Box2.setLength(12.0);<br />
Box2.setBreadth(13.0);<br />
Box2.setHeight(10.0);<br />
// volume of box 1<br />
volume = Box1.getVolume();<br />
cout << "Volume of Box1 : " << volume <<endl;<br />
// volume of box 2<br />
volume = Box2.getVolume();<br />
C++
200
cout << "Volume of Box2 : " << volume <<endl;<br />
// Add two object as follows:<br />
Box3 = Box1 + Box2;<br />
// volume of box 3<br />
volume = Box3.getVolume();<br />
cout << "Volume of Box3 : " << volume <<endl;<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Volume of Box1 : 210<br />
Volume of Box2 : 1560<br />
Volume of Box3 : 5400<br />


<span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> In case of operator overloading, operator function must be ________.</b><br>
1.Static member function.
2.Non-Static member function.
3.Friend function.
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> only 2.<br>
<input type="Checkbox" name="g" value="b"> only 1,3.<br>
<input type="Checkbox" name="g" value="c"> only 2,3.<br>
<input type="Checkbox" name="g" value="d"> All 1,2,3.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
<br />
 <div align="center">
<a href="c++ch10.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch12.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
