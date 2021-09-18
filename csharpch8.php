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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch8-<?php echo $userRow['userName']; ?></title>
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
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="Post.php">Post</a>    <a href="Chall.php">Challenge</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">C#</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>
08.CLASSES.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Defining a Class:</strong></td>
 </tr>
 
 <tr><td>
A class definition starts with the keyword class followed by the class name; and the class body enclosed by a pair of curly braces.<br />
 Following is the general form of a class definition:<br />
access specifier    class class_name<br />
{<br />
// member variables<br />
access specifier    return type variable1;<br />
access specifier    return type variable2;<br />
access specifier    return type variableN;<br />
// member methods<br />
access specifier    return type  method1(parameter_list)<br />
{<br />
// method body<br />
}<br />
access specifier    return type   method2(parameter_list)<br />
{<br />
// method body<br />
}<br />
access specifier    return type  methodN(parameter_list)<br />
{<br />
// method body<br />
}<br />
}<br />
Note:<br />
Access specifiers specify the access rules for the members as well as the class itself. If not mentioned, then the default access specifier for a class type is internal. Default access for the members is private.<br />
 Data type specifies the type of variable, and return type specifies the data type of the data the method returns, if any.<br />
 To access the class members, you use the dot (.) operator.<br />
 The dot operator links the name of an object with the name of a member.<br />

 <span class="style5">C# Constructors:</span><br />
A class constructor is a special member function of a class that is executed whenever we create new objects of that class.<br />
A constructor has exactly the same name as that of the class and it does not have any return type. <br />Following example explains the concept of constructor:<br />
using System;<br />
namespace LineApplication<br />
{<br />
class Line<br />
{<br />
private double length; // Length of a line<br />
public Line()<br />
{<br />
Console.WriteLine("Object is being created");<br />
}<br />
public void setLength( double len )<br />
{<br />
length = len;<br />
}<br />
public double getLength()<br />
{<br />
return length;<br />
}<br />
static void Main(string[] args)<br />
{<br />
Line line = new Line();<br />
// set line length<br />
line.setLength(6.0);<br />
Console.WriteLine("Length of line : {0}", line.getLength());<br />
Console.ReadKey();<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Object is being created<br />
Length of line : 6<br />
<span class="style5">C# Destructors:</span><br />
A destructor is a special member function of a class that is executed whenever an object of its class goes out of scope. A destructor has exactly the same name as that of the class with a prefixed tilde (~) and it can neither return a value nor can it take any parameters.<br />
Destructor can be very useful for releasing memory resources before exiting the program.<br /> Destructors cannot be inherited or overloaded.<br />
Following example explains the concept of destructor:<br />
using System;<br />
namespace LineApplication<br />
{<br />
class Line<br />
{<br />
private double length; // Length of a line<br />
public Line() // constructor<br />
{<br />
Console.WriteLine("Object is being created");<br />
}<br />
~Line() //destructor<br />
{<br />
Console.WriteLine("Object is being deleted");<br />
}<br />
public void setLength( double len )<br />
{<br />
length = len;<br />
}<br />
public double getLength()<br />

{<br />
return length;<br />
}<br />
static void Main(string[] args)<br />
{<br />
Line line = new Line();<br />
// set line length<br />
line.setLength(6.0);<br />
Console.WriteLine("Length of line : {0}", line.getLength());<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Object is being created<br />
Length of line : 6<br />
Object is being deleted<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of the following is used to define the
   menber of a class externally?
   
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  :.<br>
<input type="Checkbox" name="g" value="b">  ::.<br>
<input type="Checkbox" name="g" value="c">  #.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />

<div align="center">
<a href="csharpch7.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
