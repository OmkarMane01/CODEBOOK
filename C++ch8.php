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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch8.php' </script>";
}
 
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>C++ch8-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style5">08.POINTERS</div></td>
 </tr>
 <tr><td><span class="style5"><strong>POINTER:</strong></span></td>
 </tr>
 <tr><td>
 A pointer is a variable whose value is the address of another variable. Like any
variable or constant, you must declare a pointer before you can work with it. <br />
The general form of a pointer variable declaration is:<br />
type *var-name;<br />
Here, type is the pointer's base type; it must be a valid C++ type and varname
is the name of the pointer variable. The asterisk you used to declare a
pointer is the same asterisk that you use for multiplication. However, in this
statement the asterisk is being used to designate a variable as a pointer.<br />
Following are the valid pointer declaration:<br />
int *ip; // pointer to an integer<br />
double *dp; // pointer to a double<br />
float *fp; // pointer to a float<br />
char *ch // pointer to character<br />
The actual data type of the value of all pointers, whether integer, float,
character, or otherwise, is the same, a long hexadecimal number that represents
a memory address. The only difference between pointers of different data types
is the data type of the variable or constant that the pointer points to.<br />
Using Pointers in C++:<br />
There are few important operations, which we will do with the pointers very
frequently. <br />(a) We define a pointer variable.<br /> (b) Assign the address of a variable
to a pointer. <br />(c) Finally access the value at the address available in the pointer
variable. This is done by using unary operator * that returns the value of the
variable located at the address specified by its operand. <br />
Following example
makes use of these operations:<br />
#include <iostream><br />
using namespace std;<br />
int main ()<br />
{<br />
int var = 20; // actual variable declaration.<br />
int *ip; // pointer variable<br />
ip = &var; // store address of var in pointer variable<br />
cout << "Value of var variable: ";<br />
cout << var << endl;<br />
// print the address stored in ip pointer variable<br />
cout << "Address stored in ip variable: ";<br />
cout << ip << endl;<br />
// access the value at the address available in pointer<br />
cout << "Value of *ip variable: ";<br />
cout << *ip << endl;<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces result something as
follows:<br />
Value of var variable: 20<br />
Address stored in ip variable: 0xbfc601ac<br />
Value of *ip variable: 20<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:</strong></span><br />



<table width="358" align="center">
<td width="350">
<tr><td><form action="" method="POST">

<b> What is meaning of declaration ?.</b><br>
int(*p[5})();</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> p is pointer to function.<br>
<input type="Checkbox" name="g" value="b"> p is array of pointer to function.<br>
<input type="Checkbox" name="g" value="c"> p is pointer to such function which return type is array.<br>
<input type="Checkbox" name="g" value="d"> p is pointer to array of function.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>


<br />
 <div align="center">
<a href="c++ch7.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
