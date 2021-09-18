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
  echo"<script language='javascript' type='text/javascript'> location.href='javach4.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach3.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach3-<?php echo $userRow['userName']; ?></title>
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
.style5 {color: #FF0000; font-weight: bold; }
.check{
	background-color: #FF0000;
	color: #F0F0F0;
}
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
 <tr><td width="942"><div align="center" class="style2"><strong>03.DATATYPES<strong> , </strong>VARIABLE.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Datatypes:</strong>:-</td>
 </tr>
 <tr><td>Datatypes:
There are eight primitive datatypes supported by Java. Primitive datatypes are predefined by the language and named by a keyword. Let us now look into the eight primitive data types in detail.<br  />
<span class="style2">byte:</span><br  />
 Byte data type is an 8-bit signed two's complement integer<br  />
 Minimum value is -128 (-2^7)<br  />
 Maximum value is 127 (inclusive)(2^7 -1)<br  />
 Default value is 0<br  />
 Byte datatype is used to save space in large arrays, mainly in place of integers, since a byte is four times smaller than an integer<br  />
 Example: byte a = 100 , byte b = -50<br  />
 <span class="style2">short:</span><br  />
 Short datatype is a 16-bit signed two's complement integer<br  />
 Minimum value is -32,768 (-2^15)<br  />
 Maximum value is 32,767 (inclusive) (2^15 -1)<br  />
 Short datatype can also be used to save memory as byte data type. A short is 2 times smaller than an integer<br  />
 Default value is 0<br  />
 Example: short s = 10000, short r = -20000<br  />
 <span class="style2">int:</span><br  />
 Int datatype is a 32-bit signed two's complement integer<br  />
 Minimum value is - 2,147,483,648 (-2^31)<br  />
 Maximum value is 2,147,483,647(inclusive) (2^31 -1)<br  />
 Integer is generally used as the default data type for integral values unless there is a concern about memory.<br  />
 The default value is 0<br  />
 Example: int a = 100000, int b = -200000<br  />
 <span class="style2">long:</span><br  />
 Long datatype is a 64-bit signed two's complement integer<br  />
 Minimum value is -9,223,372,036,854,775,808 (-2^63)<br  />
 Maximum value is 9,223,372,036,854,775,807 (inclusive) (2^63 -1)<br  />
 This type is used when a wider range than int is needed<br  />
 Default value is 0L<br  />
 Example: long a = 100000L, long b = -200000L<br  />
 <span class="style2">float:</span><br  />
 Float datatype is a single-precision 32-bit IEEE 754 floating point<br  />
 Float is mainly used to save memory in large arrays of floating point numbers<br  />
 Default value is 0.0f<br  />
 Float datatype is never used for precise values such as currency<br  />
 Example: float f1 = 234.5f<br  />
 <span class="style2">double:</span><br  />
 double datatype is a double-precision 64-bit IEEE 754 floating point<br  />
 This datatype is generally used as the default data type for decimal values, generally the default choice<br  />
 Double datatype should never be used for precise values such as currency<br  />
 Default value is 0.0d<br  />
Example: double d1 = 123.4<br  />
<span class="style2">boolean:</span><br  />
 boolean datatype represents one bit of information<br  />
 There are only two possible values: true and false<br  />
 This datatype is used for simple flags that track true/false conditions<br  />
 Default value is false<br  />
 Example: boolean one = true<br  />
 <span class="style2">char:</span><br  />
 char datatype is a single 16-bit Unicode character<br  />
 Minimum value is '\u0000' (or 0)<br  />
 Maximum value is '\uffff' (or 65,535 inclusive)<br  />
 Char datatype is used to store any character<br  />
 Example: char letterA ='A'<br  />
 <span class="style5">Variable:</span><br />
A variable provides us with named storage that our programs can manipulate. Each variable in Java 
has a specific type, which determines the size and layout of the variable's memory; the range of values that
 can be stored within that memory; and the set of operations that can be applied to the variable.<br />
You must declare all variables before they can be used.<br /> Following is the basic form of a variable declaration:<br />
data type variable [ = value][, variable [= value] ...] ;<br />
Here data type is one of Java's datatypes and variable is the name of the variable. To declare more than one variable of the specified type, you can use a comma-separated list.<br />
Following are valid examples of variable declaration and initialization in Java:<br />
int a, b, c; // Declares three ints, a, b, and c.<br />
int a = 10, b = 10; // Example of initialization<br />
byte B = 22; // initializes a byte type variable B.<br />
double pi = 3.14159; // declares and assigns a value of PI.<br />
char a = 'a'; // the char variable a iis initialized with value 'a'<br />
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>How many prinitive data types are there in java ?</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  6.<br>
<input type="Checkbox" name="g" value="b">  7.<br>
<input type="Checkbox" name="g" value="c">  8.<br>
<input type="Checkbox" name="g" value="d">  9.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="javach2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach4.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
