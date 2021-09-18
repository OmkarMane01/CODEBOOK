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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch4.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch3.php' </script>";
}
 
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch3-<?php echo $userRow['userName']; ?></title>
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
    <tr><td class="style3"><div align="center">C++ Language</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2">03.DATA TYPES,VARIABLE TYPES.</div></td>
 </tr>
 <tr>
   <td><span class="style2">DATA TYPES</span>:-</td>
 </tr>
 <tr><td>
 While writing program in any language, you need to use various variables to
store various information. Variables are nothing but reserved memory locations
to store values. This means that when you create a variable you reserve some
space in memory.<br />
You may like to store information of various data types like character, wide
character, integer, floating point, double floating point, boolean etc. Based on
the data type of a variable, the operating system allocates memory and decides
what can be stored in the reserved memory.<br />
Several of the basic types can be modified using one or more of these type
modifiers:<br />
1.signed<br />2.unsigned<br />3.short<br />4.long<br />
 <div class="style2">DataType/Typical Bit Width/Typical Range:</div>
 <strong>char</strong> is a data type. They have 1byte Bit width and Range is -127 to 127 or 0 to 255.<br />
<strong>unsigned char </strong>is a data type. They have 1byte Bit width and Range is  0 to 255.<br />
<strong>signed char </strong>is a data type. They have 1byte Bit width and Range is  -127 to 127.<br />
<strong> int</strong>is a data type. They have 4byte Bit width and Range is -2147483648 to 2147483647.<br />
<strong> unsigned int </strong>is a data type. They have 4byte Bit width and Range is 0 to 4294967295.<br />
<strong> signed int </strong>is a data type. They have 4byte Bit width and Range is -2147483648 to 2147483647.<br />
<strong> short int </strong>is a data type. They have 2byte Bit width and Range is -32768 to 32767.<br />
<strong> unsigned short in </strong>is a data type. They have Range Bit width and Range is 0 to 65,535.<br />
<strong> signed short int  </strong>is a data type. They have Range Bit width and Range is  -32768 to 32767.<br />
<strong> long int  </strong>is a data type. They have 4bytes Bit width and Range is  -2,147,483,647 to 2,147,483,647.<br />
<strong> signed long int   </strong>is a data type. They have 4bytes Bit width and Range is same as long int.<br />
<strong> float   </strong>is a data type. They have 4bytes Bit width and Range is +/- 3.4e +/- 38 (~7 digits).<br />
<strong> double     </strong>is a data type. They have 8bytes Bit width and Range is+/- 1.7e +/- 308 (~15 digits).<br />
<strong> long double     </strong>is a data type. They have 8bytes Bit width and Range is 8bytes +/- 1.7e +/- 308 (~15 digits)<br />
<strong> wchar_t    </strong>is a data type. They have 2 or 4bytes Bit width and Range is 1 wide charactert..<br />
<span class="style2">VARIABLE TYPES:</span><br />
A variable provides us with named storage that our programs can manipulate.
Each variable in C++ has a specific type, which determines the size and layout
of the variable's memory; the range of values that can be stored within that
memory; and the set of operations that can be applied to the variable.<br />
The name of a variable can be composed of letters, digits, and the underscore
character. It must begin with either a letter or an underscore. Upper and
lowercase letters are distinct because C++ is case-sensitive:<br />
<span class="style2">Variable Definition in C++</span><br />
A variable definition tells the compiler where and how much storage to create for
the variable. A variable definition specifies a data type, and contains a list of one
or more variables of that type as follows:<br />
type variable_list;<br />
Here, type must be a valid C++ data type including char, w_char, int, float,
double, bool or any user-defined object, etc., and variable_list may consist of
one or more identifier names separated by commas. <br />
Some valid declarations are shown here:<br />
int i, j, k;<br />
char c, ch;<br />
float f, salary;<br />
double d;<br />
The line int i, j, k; both declares and defines the variables i, j and k; which
instructs the compiler to create variables named i, j and k of type int.<br />
Variables can be initialized (assigned an initial value) in their declaration. The
initializer consists of an equal sign followed by a constant expression as follows:<br />
type variable_name = value;<br />
Some examples are:<br />
extern int d = 3, f = 5; // declaration of d and f.<br />
int d = 3, f = 5; // definition and initializing d and f.<br />

<span class="style2" ><strong>Extra References:</strong></span><br />
<span class="style2" ><strong>Question:</strong></span><br />
<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> What is the output of this program ?.</b><br />
#include < iostrem.h > <br />
void main()<br />
{ int res, a, b; <br />
  a=10, b=15;<br />
  res= a + b + a - b;<br />
  cout<< res;<br />
  }<br />

 </td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> 20.<br>
<input type="Checkbox" name="g" value="b"> 15.<br>
<input type="Checkbox" name="g" value="c"> 30.<br>
<input type="Checkbox" name="g" value="d"> 25.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>

 <br />
<div align="center">
<a href="c++ch2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch4.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a> 
  </div>

 </tr>
 </table>
</body>
</html>
