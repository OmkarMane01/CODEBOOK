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
if (isset($_POST['go'])){
if($_POST['g'] == "a")
{
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch3.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch2.php' </script>";
}}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch2-<?php echo $userRow['userName']; ?></title>
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
	.style4{
	word-spacing: 1cm;
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
}
.style6 {color: #FF0000; font-weight: bold; }
</style>
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
 <tr><td width="942"><div align="center" class="style2">02.BASIC SYNTAX,COMMENTS.</div></td>
 </tr>
 <tr>
   <td><span class="style2">BASIC SYNTAX</span>:-</td>
 </tr>
 <tr><td>When we consider a C++ program, it can be defined as a collection of objects
that communicate via invoking each other's methods. Let us now briefly look
into what a class, object, methods, and instant variables mean.<br />
Object - Objects have states and behaviors. Example: A dog has states -
color, name, breed as well as behaviors - wagging, barking, and eating.
An object is an instance of a class.<br />
Class - A class can be defined as a template/blueprint that describes the
behaviors/states that object of its type support.<br />
Methods - A method is basically a behavior. A class can contain many
methods. It is in methods where the logics are written, data is
manipulated and all the actions are executed.<br />
Instant Variables - Each object has its unique set of instant variables.
An object's state is created by the values assigned to these instant
variables.<br />
<strong class="style2">C++ Program Structure:</strong><br />
Let us look at a simple code that would print the words Hello World.<br />
#include <iostream><br />
using namespace std;<br />
// main() is where program execution begins.<br />
int main()<br />
{<br />
cout << "Hello World"; // prints Hello World<br />
return 0;<br />
}<br />
Let us look at the various parts of the above program:<br />
1. The C++ language defines several headers, which contain information
that is either necessary or useful to your program. For this program, the
header <iostream> is needed<br />
2. The line using namespace std; tells the compiler to use the std
namespace. Namespaces are a relatively recent addition to C++.<br />
3. The next line ‘// main() is where program execution begins.’ is a
single-line comment available in C++. Single-line comments begin with //
and stop at the end of the line.<br />
4. The line int main() is the main function where program execution begins.<br />
5. The next line cout << "This is my first C++ program."; causes the
message "This is my first C++ program" to be displayed on the screen.
6. The next line return 0; terminates main() function and causes it to return
the value 0 to the calling process.<br />
<strong class="style2">C++ Identifiers:</strong><br />
A C++ identifier is a name used to identify a variable, function, class, module, or
any other user-defined item. An identifier starts with a letter A to Z or a to z or
an underscore (_) followed by zero or more letters, underscores, and digits (0 to
9).<br />
C++ does not allow punctuation characters such as @, $, and % within
identifiers. C++ is a case-sensitive programming language.
Thus, Manpower and manpower are two different identifiers in C++.<br />
<strong class="style2">C++ Keywords:</strong><br />
The following list shows the reserved words in C++. These reserved words may
not be used as constant or variable or any other identifier names.<br />
<p class="style4">asm else new this
auto enum operator throw
bool explicit private true
break export protected try
case extern public typedef
catch false register typeid
char float reinterpret_cast typename
class for return union
const friend short unsigned
const_cast goto signed using
continue if sizeof virtual
default inline static void
delete int static_cast volatile
do long struct wchar_t
double mutable switch while
dynamic_cast namespace template</p>
<strong class="style2">COMMENTSC++:</strong><br />
Program comments are explanatory statements that you can include in the C++
code. These comments help anyone reading the source code. All programming
languages allow for some form of comments.
C++ supports single-line and multi-line comments. All characters available
inside any comment are ignored by C++ compiler.<br />
For example:<br />
#include <iostream><br />
/* Program to print hello on screen(multi-line comment). */<br />
using namespace std;<br />
main()<br />
{<br />
cout << "Hello World"; // prints Hello World(single-line)<br />
return 0;<br />
}<strong><br />
<span class="style2" >Extra References:</span></strong><br />
<span class="style6" >Question:</span><br />
<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> Which is  reserved keywords words in C++ ?.</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> This.<br>
<input type="Checkbox" name="g" value="b"> And.<br>
<input type="Checkbox" name="g" value="c"> Or.<br>
<input type="Checkbox" name="g" value="d"> Non of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>







 


<br /></td></tr><tr><td><div align="center">
<a href="c++ch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch3.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a> 
  
</div>

 </tr>
 </table>
</body>
</html>
