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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch3.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch2.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch2-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>02.PROGRAM STRUCTURE,BASIC SYNTAX.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Creating Hello World Program</strong>:-</td>
 </tr>
 <tr><td>Let us look at a simple code that prints the words "Hello World":<br />
using System;<br />
namespace HelloWorldApplication<br />
{<br />
class HelloWorld<br />
{<br />
static void Main(string[] args)<br />
{<br />
/* my first program in C# */<br />
Console.WriteLine("Hello World");<br />
Console.ReadKey();<br />
}
}
}<br />
<span class="style5">Let us look at the various parts of the given program:</span><br />
 The first line of the program using System; - the using keyword is used to include the System namespace in the program. A program generally has multiple using statements.<br />
 The next line has the namespace declaration. A namespace is a collection of classes. The HelloWorldApplication namespace contains the class HelloWorld.<br />
 The next line has a class declaration, the class HelloWorld contains the data and method definitions that your program uses. Classes generally contain multiple methods.
 Methods define the behavior of the class. However, the HelloWorld class has only one method Main.<br />
 The next line defines the Main method, which is the entry point for all C# programs. The Main method states what the class does when executed.<br />
 The next line /*...*/ is ignored by the compiler and it is put to add comments in the program.<br />
 The Main method specifies its behavior with the statement Console.WriteLine("Hello World");<br />
 WriteLine is a method of the Console class defined in the System namespace. This statement causes the message "Hello, World!" to be displayed on the screen.<br />
 The last line Console.ReadKey(); is for the VS.NET Users. This makes the program wait for a key press and it prevents the screen from running and closing quickly when the program is launched from Visual Studio .NET.<br />
It is worth to note the following points:<br />
 <span class="style5">C# is case sensitive</span>:<br />
 All statements and expression must end with a semicolon (;).<br />
 The program execution starts at the Main method.<br />
 Unlike Java, program file name could be different from the class name<br /> 
 <span class="style5">Identifiers:</span><br />
An identifier is a name used to identify a class, variable, function, or any other user-defined item. The basic rules for naming <br />classes in C# are as follows:<br />
 A name must begin with a letter that could be followed by a sequence of letters, digits (0 - 9), or underscore. The first character in an identifier cannot be a digit.<br />
 It must not contain any embedded space or symbol like ? - +! @ # % ^ & * ( ) [ ] { } . ; : " ' / and \. However, an underscore ( _ ) can be used.<br />
 
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>An identifier is a name used to identify____________ .
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  variable.<br>
<input type="Checkbox" name="g" value="b">  letters.<br>
<input type="Checkbox" name="g" value="c">  digits.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
 </td>
 </tr>
 <tr><td>
<div align="center">
<a href="csharpch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch3.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a> 
  
</div>

 </tr>
 </table>
</body>
</html>
