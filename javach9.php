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
  echo"<script language='javascript' type='text/javascript'> location.href='javach9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach9.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach9-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
	width: 7.50%;
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
</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">Java</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>9.FILE AND I/O.</strong></div></td>
 </tr>
 <tr>
   <td><span class="style5">Stream:-</span></td>
 </tr>
 <tr><td>
A stream can be defined as a sequence of data. There are two kinds of Streams:<br />
InPutStream: The InputStream is used to read data from a source.<br />
 OutPutStream: The OutputStream is used for writing data to a destination. <br />
 Standard Streams:<br />
All the programming languages provide support for standard I/O where the user's program can take input from a keyboard and then produce an output on the computer screen. If you are aware of C or C++ programming languages, then you must be aware of three standard devices STDIN, STDOUT and STDERR. Similarly,<br /> Java provides the following three standard streams:<br />
 Standard Input: This is used to feed the data to user's program and usually a keyboard is used as standard input stream and represented as System.in.<br />
 Standard Output: This is used to output the data produced by the user's program and usually a computer screen is used for standard output stream and represented as System.out.<br />
 Standard Error: This is used to output the error data produced by the user's program and usually a computer screen is used for standard error stream and represented as System.err.<br />
 <span class="style5">Reading and Writing Files:</span><br />
As described earlier, a stream can be defined as a sequence of data.<br />
 The InputStream is used to read data from a source and the OutputStream is used for writing data to a destination.<br />
 The two important streams are FileInputStream and FileOutputStream, which would be discussed in this tutorial.<br />
 <span class="style5">FileInputStream:</span><br />
This stream is used for reading data from the files. Objects can be created using the keyword new and there are several types of constructors available.<br />
Following constructor takes a file name as a string to create an input stream object to read the file:<br />
InputStream f = new FileInputStream("C:/java/hello");<br />
Following constructor takes a file object to create an input stream object to read the file. First we create a file object using File() method as follows:<br />
File f = new File("C:/java/hello");<br />
InputStream f = new FileInputStream(f);<br />
<span class="style5">DataOutputStream:</span><br />
The DataOutputStream stream lets you write the primitives to an output source.<br />
Following is the constructor to create a DataOutputStream.<br />
DataOutputStream out = DataOutputStream(OutputStream out);<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of these methods are used to read in from file ?</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  get().<br>
<input type="Checkbox" name="g" value="b">  scan().<br>
<input type="Checkbox" name="g" value="c">  read().<br>
<input type="Checkbox" name="g" value="d">  read file input().<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="javach8.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
