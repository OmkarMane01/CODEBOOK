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
if($_POST['g'] == "oop")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch2.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch1.php' </script>";
}
 
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch1-<?php echo $userRow['userName']; ?></title>
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
.input{
	height:25px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
	}
	.check{
	background:
	color: #FF0000;
	background-color: #FF0000;
}
</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Challenge</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">C++ Language</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>01.OVERVIEW,ENVIORNMENT SETUP</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">OVERVIEW</strong>:-</td>
 </tr>
 <tr><td>C++ was developed by <strong>Bjarne Stroustrup</strong> starting in <strong>1979</strong> at Bell Labs in Murray
Hill, New Jersey, as an enhancement to the C language and originally named C
with Classes but later it was <strong>renamed C++ in 1983</strong>.
<br />
C++ is a statically typed, compiled, general-purpose, case-sensitive, free-form
programming language that supports procedural, object-oriented, and generic
programming.<br />
C++ is regarded as a middle-level language, as it comprises a combination of
both high-level and low-level language features.<br />
C++ fully supports object-oriented programming, including the four pillars of
object-oriented development:<br />
Encapsulation.<br />
Data hiding.<br />Inheritance.<br />Polymorphism.<br />
<strong class="style2">Learning C++: </strong><br />
The most important thing while learning C++ is to focus on concepts.
The purpose of learning a programming language is to become a better
programmer; that is, to become more effective at designing and implementing
new systems and at maintaining old ones.
C++ supports a variety of programming styles. You can write in the style of
Fortran, C, Smalltalk, etc., in any language. Each style can achieve its aims
effectively while maintaining runtime and space efficiency.<br />
<strong class="style2">Use of C++:-</strong><br />
C++ is used by hundreds of thousands of programmers in essentially every
application domain.
C++ is being highly used to write device drivers and other software that rely on
direct manipulation of hardware under real-time constraints.
C++ is widely used for teaching and research because it is clean enough for
successful teaching of basic concepts.<br />
<strong class="style2">ENVIORNMENT SETUP:</strong><br />
<strong class="style2">Try it Option Online:</strong><br />
Try the following example using our online compiler option available at
http://www.compileonline.com/<br />
<strong class="style2">Local Environment Setup:</strong><br />
If you are still willing to set up your environment for C++, you need to have the
following two softwares on your computer.<br />
<strong class="style2">Text Editor:</strong><br />
This will be used to type your program. Examples of few editors include Windows
Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi.
Name and version of text editor can vary on different operating systems. For
example, Notepad will be used on Windows and vim or vi can be used on   Linux, well as UNIX.<br />
<strong class="style2">C++ Compiler:</strong><br />
This is an actual C++ compiler, which will be used to compile your source code
into final executable program.
Most C++ compilers don't care what extension you give to your source code, but
if you don't specify otherwise, many will use .cpp by default.
<br />
<span class="style5" >Extra References:</span><br />
<span class="style5" >Question:</span><br />
<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>c++ is a ______________programming language .</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="pop"> statically typed.<br>
<input type="Checkbox" name="g" value="non"> general-purpose.<br>
<input type="Checkbox" name="g" value="pop"> case-sensitive.<br>
<input type="Checkbox" name="g" value="oop"> All of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table><br />
</td> </tr><tr><td>
<div align="center">
<a href="c++ch1.php"><input class="button1" name="login2" type="submit" value="<<Previos"  /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index"  /></a>
 <a href="c++ch2.php"><input class="button3" name="go" type="submit" value="Next>>"  /></a>
</div>

 </tr>
 </table>
</body>
</html>

