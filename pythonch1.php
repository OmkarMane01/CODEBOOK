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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch2.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch1.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch1-<?php echo $userRow['userName']; ?></title>
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
	width: 11.55%;
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
    <tr><td class="style3"><div align="center">python</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>
01.OVERVIWE,ENVIORNMENT SETUP.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">OVERVIWE:</strong></td>
 </tr>
 
 <tr><td>
<span class="style5">History of Python:</span><br />
Python was developed by Guido van Rossum in the late eighties and early nineties at the
National Research Institute for Mathematics and Computer Science in the Netherlands.<br />
Python is derived from many other languages, including ABC, Modula-3, C, C++,
Algol-68, SmallTalk, and Unix shell and other scripting languages.<br />
 Python is copyrighted. Like Perl, Python source code is now available under the
GNU General Public License (GPL).<br />
 Python is now maintained by a core development team at the institute, although
Guido van Rossum still holds a vital role in directing its progress.<br />
 Python 1.0 was released in November 1994. In 2000, Python 2.0 was released.
Python 2.7.11 is the latest edition of Python 2.<br />
 Meanwhile, Python 3.0 was released in 2008. Python 3 is not backward compatible
with Python 2. The emphasis in Python 3 had been on the removal of duplicate
programming constructs and modules so that "There should be one -- and
preferably only one -- obvious way to do it." Python 3.5.1 is the latest version of
Python 3.<br />
<span class="style5">Python Features:</span><br />
 Easy-to-learn: Python has few keywords, simple structure, and a clearly defined
syntax. This allows a student to pick up the language quickly.<br />
 Easy-to-read: Python code is more clearly defined and visible to the eyes.<br />
 Easy-to-maintain: Python's source code is fairly easy-to-maintain.<br />
 A broad standard library: Python's bulk of the library is very portable and crossplatform
compatible on UNIX, Windows, and Macintosh.<br />
 Interactive Mode: Python has support for an interactive mode, which allows
interactive testing and debugging of snippets of code.<br />
 Portable: Python can run on a wide variety of hardware platforms and has the
same interface on all platforms.<br />
 Extendable: You can add low-level modules to the Python interpreter. These
modules enable programmers to add to or customize their tools to be more
efficient.<br />
 Databases: Python provides interfaces to all major commercial databases.<br />
 GUI Programming: Python supports GUI applications that can be created and
ported to many system calls, libraries and windows systems, such as Windows MFC,
Macintosh, and the X Window system of Unix.<br />
 Scalable: Python provides a better structure and support for large programs than
shell scripting.
Apart from the above-mentioned features, Python has a big list of good features. A few
are listed below-<br />
 It supports functional and structured programming methods as well as OOP.<br />
 It can be used as a scripting language or can be compiled to byte-code for building
large applications.<br />
 It provides very high-level dynamic data types and supports dynamic type
checking.<br />
 It supports automatic garbage collection.<br />
 It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java.<br />
 <span class="style5">Local Environment Setup:</span><br />
Open a terminal window and type "python" to find out if it is already installed and which
version is installed.<br />
Getting Python
Windows platform<br />
Binaries of latest version of Python 3 (Python 3.5.1) are available on this download page
The following different installation options are available.<br />
 Windows x86-64 embeddable zip file<br />
 Windows x86-64 executable installer<br />
 Windows x86-64 web-based installer<br />
 Windows x86 embeddable zip file<br />
 Windows x86 executable installer<br />
 Windows x86 web-based installer<br />
Note:In order to install Python 3.5.1, minimum OS requirements are Windows 7 with SP1.
For versions 3.0 to 3.4.x, Windows XP is acceptable.<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Python was developed by __________.</b><br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> William R. Stanek .<br>
<input type="Checkbox" name="g" value="b">  Guido van Rossum.<br>
<input type="Checkbox" name="g" value="c">  Behrouz Forouzan.<br>
<input type="Checkbox" name="g" value="d">  Tom Archer.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="pythonch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch2.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
