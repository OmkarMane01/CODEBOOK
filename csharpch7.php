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
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='csharpch7.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>csharpch7-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>
07.ARRAY & STRINGS.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Declaring Arrays:</strong></td>
 </tr>
 
 <tr><td>
To declare an array in C#, you can use the following syntax:<br />
datatype[] arrayName;<br />
where,<br />
 datatype is used to specify the type of elements in the array.<br />
 [ ] specifies the rank of the array. The rank specifies the size of the array.<br />
 arrayName specifies the name of the array.<br />
For example,<br />
double[] balance;<br />
<span class="style5">Initializing an Array</span><br />
Declaring an array does no<br />t initialize the array in the memory. When the array variable is initialized, you can assign values to the array. <br />

Array is a reference type, so you need to use the new keyword to create an instance of the array. For example,<br />
double[] balance = new double[10];<br />
<span class="style5">Assigning Values to an Array</span><br />
You can assign values to individual array elements, by using the index number, like:<br />
double[] balance = new double[10];<br />
balance[0] = 4500.0;<br />
You can assign values to the array at the time of declaration as shown:<br />
double[] balance = { 2340.0, 4523.69, 3421.0};<br />
You can also create and initialize an array as shown:<br />
int [] marks = new int[5] { 99, 98, 92, 97, 95};<br />
<span class="style5">Accessing Array Elements</span><br />
An element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. <br />For example,
double salary = balance[9];<br />
Multidimensional Arrays<br />
C# allows multidimensional arrays. Multi-dimensional arrays are also called rectangular array. You can declare a 2-dimensional array of strings as:<br />
string [,] names;<br />
or, a 3-dimensional array of int variables as:<br />
int [ , , ] m;<br />
<span class="style5">Two-Dimensional Arrays</span><br />
The simplest form of the multidimensional array is the 2-dimensional array. A 2-dimensional array is a list of one-dimensional arrays.<br />
A 2-dimensional array can be thought of as a table, which has x number of rows and y number of columns. <br />Following is a 2-dimensional array, which contains 3 rows and 4 columns:<br />
113
Thus, every element in the array a is identified by an element name of the form a[ i , j ], where a is the name of the array, and i and j are the subscripts that uniquely identify each element in array a.<br />
<span class="style5">Initializing Two-Dimensional Arrays</span><br />
Multidimensional arrays may be initialized by specifying bracketed values for each row. The following array is with 3 rows and each row has 4 columns.<br />
int [,] a = int [3,4] = {<br />
{0, 1, 2, 3} , /* initializers for row indexed by 0 */<br />
{4, 5, 6, 7} , /* initializers for row indexed by 1 */<br />
{8, 9, 10, 11} /* initializers for row indexed by 2 */<br />
};<br />
<span class="style5">Accessing Two-Dimensional Array Elements</span><br />
An element in 2-dimensional array is accessed by using the subscripts.That is, row index and column index of the array.<br /> For example,
int val = a[2,3];<br />
<span class="style5">STRINGS:</span><br />
In C#, you can use strings as array of characters. However, more common practice is to use the string keyword to declare a string variable. The string keyword is an alias for theSystem.String class.<br />
Creating a String Object<br />
You can create string object using one of the following methods:<br />
 By assigning a string literal to a String variable<br />
 By using a String class constructor<br />
 By using the string concatenation operator (+)<br />
 By retrieving a property or calling a method that returns a string<br />
 By calling a formatting method to convert a value or an object to its string representation<br />
The following example demonstrates this:<br />
using System;<br />
namespace StringApplication<br />
{<br />
class Program<br />
{<br />
static void Main(string[] args)<br />
{<br />
//from string literal and string concatenation<br />
string fname, lname;<br />
fname = "Rowan";<br />
lname = "Atkinson";<br /><br />
string fullname = fname + lname;<br />
Console.WriteLine("Full Name: {0}", fullname); <br />
//by using string constructor<br />
char[] letters = { 'H', 'e', 'l', 'l','o' };<br />
string greetings = new string(letters);<br />
Console.WriteLine("Greetings: {0}", greetings);<br />
//methods returning string<br />
string[] sarray = { "Hello", "From", "Tutorials", "Point" };<br />
string message = String.Join(" ", sarray);<br />
Console.WriteLine("Message: {0}", message);<br />
//formatting method to convert a value<br />
DateTime waiting = new DateTime(2012, 10, 10, 17, 58, 1);<br />
string chat = String.Format("Message sent at {0:t} on {0:D}",<br />
waiting);<br />
Console.WriteLine("Message: {0}", chat);<br /><br />
Console.ReadKey() ;<br />
}
}
}<br />
When the above code is compiled and executed, it produces the following result:<br />
Full Name: Rowan Atkinson<br />
Greetings: Hello<br />
Message: Hello From Tutorials Point<br />
Message: Message sent at 5:58 PM on Wednesday, October 10, 2012<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of the following statements will correctly output ?<br />
string s1="Nagpur";<br>
string s2:<br />
s2 = s1.Insert(6, " mumbai");<br />
Console.WriteLine(s2);<br /></b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Nagpumumbair<br />
<input type="Checkbox" name="g" value="b">  Nagpur mumbai.<br>
<input type="Checkbox" name="g" value="c">  Nagpur.<br>
<input type="Checkbox" name="g" value="d">  Nagpurmumbai.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
<div align="center">
<a href="csharpch5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="csharp-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="csharpch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
