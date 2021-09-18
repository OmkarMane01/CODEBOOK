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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch2.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharch1.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch1-<?php echo $userRow['userName']; ?></title>
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
	background:
	color: #FF0000;
	background-color: #FF0000;
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
 <tr><td width="942"><div align="center" class="style2"><strong>01.OVERVIEW,ENVIORNMENT SETUP</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">OVERVIEW</strong>:-</td>
 </tr>
 <tr><td>
C# is a modern, general-purpose, object-oriented programming language developed by Microsoft and approved by European Computer Manufacturers Association (ECMA) and International Standards Organization (ISO).<br />
C# was developed by Anders Hejlsberg and his team during the development of .Net Framework.<br />
C# is designed for Common Language Infrastructure (CLI), which consists of the executable code and runtime environment that allows use of various high-level languages on different computer platforms and architectures.<br />
The following reasons make C# a widely used professional language:<br />
 It is a modern, general-purpose programming language<br />
 It is object oriented.<br />
 It is component oriented.<br />
 It is easy to learn.<br />
 It is a tructured language.<br />
 It produces efficient programs.<br />
 It can be compiled on a variety of computer platforms.<br />
 It is a part of .Net Framework.<br />
 <span class="style5">ENVIRONMENT</span>:<br />
 Integrated Development Environment (IDE) for C#<br />
Microsoft provides the following development tools for C# programming:<br />
Visual Studio 2010 (VS)<br />
 Visual C# 2010 Express (VCE)<br />
 Visual Web Developer<br />
The last two are freely available from Microsoft official website. Using these tools, you can write all kinds of C# programs from simple command-line applications to more complex applications. You can also write C# source code files using a basic text editor like Notepad, and compile the code into assemblies using the command-line compiler, which is again a part of the .NET Framework.<br />
Visual C# Express and Visual Web Developer Express edition are trimmed down versions of Visual Studio and has the same appearance. They retain most features of Visual Studio. In this tutorial, we have used Visual C# 2010 Express.<br />
You can download it from Microsoft Visual Studio. It gets installed automatically on your machine.<br />
Note: You need an active internet connection for installing the express edition.<br />
 
 <span class="style5" >Extra References:</span><br />
<span class="style5" >Question:</span><br />
<table width="319" align="center">
<td width="311">
<tr><td><form action="" method="POST">

<b>C# is a ____________.</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> object oriented.<br>
<input type="Checkbox" name="g" value="b"> Web Developer.<br>
<input type="Checkbox" name="g" value="c"> .Net Framework..<br>
<input type="Checkbox" name="g" value="d"> Both object oriented ,.Net Framework.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table><br />
 <br />
 </td>
 </tr>
 <tr><td>
<div align="center">
<a href="csharpch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch2.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a> 
  
</div>

 </tr>
 </table>
</body>
</html>
