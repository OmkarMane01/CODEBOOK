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
  echo"<script language='javascript' type='text/javascript'> location.href='javach9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach8-<?php echo $userRow['userName']; ?></title>
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
 <tr><td width="942"><div align="center" class="style2"><strong>08.STRINGS . </strong></div></td>
 </tr>
 <tr>
   <td><span class="style5">Creating Strings</span>:-</td>
 </tr>
 <tr><td>The most direct way to create a string is to write:<br />
String greeting = "Hello world!";<br />
Whenever it encounters a string literal in your code, the compiler creates a String object with its value in this case, "Hello world!'.<br />
As with any other object, you can create String objects by using the new keyword and a constructor. 
The String class has 11 constructors that allow you to provide the initial value of the string using different sources,
 such as an array of characters.<br />
public class StringDemo{<br />
public static void main(String args[]){<br />
char[] helloArray = { 'h', 'e', 'l', 'l', 'o', '.'};<br />
String helloString = new String(helloArray);<br />
System.out.println( helloString );<br />
}
}<br />
This will produce the following result:<br />
hello.<br />
<span class="style5">String Length:</span><br />
Methods used to obtain information about an object are known as accessor methods. 
One accessor method that you can use with strings is the length() method, which returns the number of characters 
contained in the string object.<br />
The following program is an example of length(), method String class.<br />
public class StringDemo {<br />
public static void main(String args[]) {<br />
String palindrome = "Dot saw I was Tod";<br />
int len = palindrome.length();<br />
System.out.println( "String Length is : " + len );<br />
}
}<br />
This will produce the following result:<br />
String Length is : 17<br />
 <span class="style5">Concatenating Strings:</span><br />
The String class includes a method for concatenating two strings:<br />
string1.concat(string2);<br />
This returns a new string that is string1 with string2 added to it at the end. You can also use the concat() method with string literals, as in:<br />
"My name is ".concat("Zara");<br />
Strings are more commonly concatenated with the + operator, as in:<br />
"Hello," + " world" + "!"<br />
which results in:<br />
"Hello, world!"<br />
Let us look at the following example:<br />
public class StringDemo {<br />
public static void main(String args[]) <br />{
String string1 = "saw I was ";<br />
System.out.println("Dot " + string1 + "Tod");<br />
}
}<br />
This will produce the following result:<br />
Dot saw I was Tod<br />
 
 
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of these method of class string is used to obtain length of string object ?
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  get().<br>
<input type="Checkbox" name="g" value="b">  length().<br>
<input type="Checkbox" name="g" value="c">  lengthof().<br>
<input type="Checkbox" name="g" value="d">  sizeof().<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="javach7.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
