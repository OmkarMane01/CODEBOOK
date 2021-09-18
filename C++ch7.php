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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch7.php' </script>";
}
 
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>C++ch7-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>07.ARRAYS,STRINGS</strong>.</div></td>
 </tr>
 <tr><td class="style2"><strong>ARRAYS:</strong></td>
 </tr>
 <tr><td>
 C++ provides a data structure, the array, which stores a fixed-size sequential
collection of elements of the same type. An array is used to store a collection of
data, but it is often more useful to think of an array as a collection of variables
of the same type.<br />
<span class="style2">Declaring Arrays:</span><br />
To declare an array in C++, the programmer specifies the type of the elements
and the number of elements required by an array as follows:<br />
type arrayName [ arraySize ];<br />
This is called a single-dimension array. The arraySize must be an integer
constant greater than zero and type can be any valid C++ data type. <br />
For example: <br />
double balance[10]; <br />
Initializing Arrays:<br />
You can initialize C++ array elements either one by one or using a single
statement as follows:<br />
double balance[5] = {1000.0, 2.0, 3.4, 17.0, 50.0};<br />
The number of values between braces { } cannot be larger than the number of
elements that we declare for the array between square brackets [ ].<br />
<span class="style2">Multi-dimensional Arrays:</span><br />
C++ allows multidimensional arrays. Here is the general form of a
multidimensional array declaration:<br />
type name[size1][size2]...[sizeN];<br />
For example, the following declaration creates a three dimensional 5 . 10 . 4
integer array:<br />
int threedim[5][10][4];<br />
<span class="style2">Two-Dimensional Arrays:</span><br />
The simplest form of the multidimensional array is the two-dimensional array. A
two-dimensional array is, in essence, a list of one-dimensional arrays. To declare
a two-dimensional integer array of size x,y, you would write something as
follows:<br />
type arrayName [ x ][ y ];<br />
Where type can be any valid C++ data type and arrayName will be a valid C++
identifier.<br />
A two-dimensional array can be think as a table, which will have x number of
rows and y number of columns. A 2-dimensional array a, which contains three
rows and four columns<br />
<span class="style2">Initializing Two-Dimensional Arrays</span>:<br />
Multidimensioned arrays may be initialized by specifying bracketed values for
each row. Following is an array with 3 rows and each row have 4 columns.<br />
int a[3][4] = {<br />
{0, 1, 2, 3} , /* initializers for row indexed by 0 */<br />
{4, 5, 6, 7} , /* initializers for row indexed by 1 */<br />
{8, 9, 10, 11} /* initializers for row indexed by 2 */<br />
};<br />
The nested braces, which indicate the intended row, are optional.<br />
<strong class="style2">STRINGS:</strong><br />
C++ provides following two types of string representations:<br />
1.The C-style character string.<br />
2.The string class type introduced with Standard C++.<br />
The C-Style Character String:<br />
The C-style character string originated within the C language and continues to
be supported within C++. This string is actually a one-dimensional array of
characters which is terminated by a null character '\0'. Thus a null-terminated
string contains the characters that comprise the string followed by a null.<br />
The following declaration and initialization create a string consisting of the word
"Hello". To hold the null character at the end of the array, the size of the
character array containing the string is one more than the number of characters
in the word "Hello."<br />
char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};<br />
If you follow the rule of array initialization, then you can write the above
statement as follows:<br />
char greeting[] = "Hello";<br />
Actually, you do not place the null character at the end of a string constant. The
C++ compiler automatically places the '\0' at the end of the string when it
initializes the array. Let us try to print above-mentioned string:<br />
#include <iostream><br />
using namespace std;<br />
int main ()<br />
{<br />
char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};<br />
cout << "Greeting message: ";<br />
cout << greeting << endl;<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Greeting message: Hello<br />
C++ supports a wide range of functions that manipulate null-terminated strings:<br />
strcpy(s1, s2); Copies string s2 into string s1.<br />
strcat(s1, s2); Concatenates string s2 onto the end of string s1.<br />
strlen(s1); Returns the length of string s1.<br />
strcmp(s1, s2); Returns 0 if s1 and s2 are the same; less than 0 if s1<s2; greater than
0 if s1>s2<br />
strchr(s1, ch);
Returns a pointer to the first occurrence of character ch in string s1.<br />
strstr(s1, s2); Returns a pointer to the first occurrence of string s2 in string s1.<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:</strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> What do arrays do?.</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> hold addresses.<br>
<input type="Checkbox" name="g" value="b"> hold value under a single name.<br>
<input type="Checkbox" name="g" value="c"> hold one value.<br>
<input type="Checkbox" name="g" value="d"> Non of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
<br />
 <div align="center">
<a href="c++ch6a.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
