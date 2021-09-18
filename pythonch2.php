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
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch3.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch2.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch2-<?php echo $userRow['userName']; ?></title>
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
02.BASIC SYNTAX.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">First Python Program:</strong></td>
 </tr>
 
 <tr><td>
Let us execute the programs in different modes of programming.<br />
Python 3.4.3 (v3.4.3:9b73f1c3e601, Feb 24 2015, 22:43:06) [MSC v.1600 32 bit (Intel)] on
win32<br />
Type "copyright", "credits" or "license()" for more information.
>>><br />
Type the following text at the Python prompt and press Enter-<br />
>>> print ("Hello, Python!")<br />
If you are running the older version of Python (Python 2.x), use of parenthesis as
inprint function is optional.<br /> This produces the following result-<br />
Hello, Python!<br />
<span class="style5">Python Identifiers:</span><br />
A Python identifier is a name used to identify a variable, function, class, module or other
object. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by
zero or more letters, underscores and digits (0 to 9).<br />
Python does not allow punctuation characters such as @, $, and % within identifiers.
Python is a case sensitive programming language. Thus, Manpower and manpower are
two different identifiers in Python.<br />
Here are naming conventions for Python identifiers-<br />
 Class names start with an uppercase letter. All other identifiers start with a
lowercase letter.<br />
 Starting an identifier with a single leading underscore indicates that the identifier
is private.<br />
 Starting an identifier with two leading underscores indicates a strong private
identifier.<br />
 If the identifier also ends with two trailing underscores, the identifier is a languagedefined
special name.<br />
<span class="style5">Quotation in Python:</span><br />
Python accepts single ('), double (") and triple (''' or """) quotes to denote string literals,
as long as the same type of quote starts and ends the string.<br />
The triple quotes are used to span the string across multiple lines. <br />For example, all the
following are legalword<br />
= 'word'<br />
sentence = "This is a sentence."<br />
paragraph = """This is a paragraph. It is
made up of multiple lines and sentences."""<br />
<span class="style5">Comments in Python:</span><br />
A hash sign (#) that is not inside a string literal is the beginning of a comment. All
characters after the #, up to the end of the physical line, are part of the comment and the
Python interpreter ignores them.<br />
#!/usr/bin/python3<br />
# First comment<br />
print ("Hello, Python!") # second comment<br />
This produces the following result-<br />
Hello, Python!<br />
You can type a comment on the same line after a statement or expressionname<br />
= "Madisetti" # This is again comment<br />
Python does not have multiple-line commenting feature. You have to comment each line
individually as follows-<br />
# This is a comment.<br />
# This is a comment, too.<br />
# This is a comment, too.<br />
# I said that already.<br />
<span class="style5">Waiting for the User:</span><br />
The following line of the program displays the prompt and the statement saying “Press the
enter key to exit”, and then waits for the user to take action -<br />
#!/usr/bin/python3<br />
input("\n\nPress the enter key to exit.")<br />
Here, "\n\n" is used to create two new lines before displaying the actual line. Once the
user presses the key, the program ends. This is a nice trick to keep a console window open
until the user is done with an application.<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Python is a case ________ programming language.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Easy.<br>
<input type="Checkbox" name="g" value="b">  Diffcult.<br>
<input type="Checkbox" name="g" value="c">  sensitive.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="pythonch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch3.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
