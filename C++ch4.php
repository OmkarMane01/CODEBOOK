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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch5.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch4.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch4-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style5">04.CONSTANTS,OPERATORS.</div></td>
 </tr>
 <tr>
   <td><span class="style5">CONSTANTS</span>:-</td>
 </tr>
 <tr><td>
 Constants refer to fixed values that the program may not alter and they are
called literals.<br />
There are two simple ways in C++ to define constants:<br />
<span class="style2">Using #define preprocessor:</span><br />
#define identifier value<br />
Following example explains it in detail:<br />
#include <iostream><br />
using namespace std;<br />
#define LENGTH 10<br />
#define WIDTH 5<br />
#define NEWLINE '\n'<br />
int main()<br />
{<br />
int area;<br />
area = LENGTH * WIDTH;<br />
cout << area;<br />
cout << NEWLINE;<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following result:<br />
50<br />
<span class="style2">Using const keyword</span>:<br/>
You can use const prefix to declare constants with a specific type as follows:<br/>
const type variable = value;<br/>
Following example explains it in detail:<br/>
#include <iostream><br/>
using namespace std;<br/>
int main()<br/>
{<br/>
const int LENGTH = 10;<br/>
const int WIDTH = 5;<br/>
const char NEWLINE = '\n';<br/>
int area;<br/>
area = LENGTH * WIDTH;<br/>
cout << area;<br/>
cout << NEWLINE;<br/>
return 0;<br/>
}<br/>
When the above code is compiled and executed, it produces the following result<br/>
 50<br/>
 <span class="style5">OPERATORS: </span>
 An operator is a symbol that tells the compiler to perform specific mathematical
or logical manipulations. C++ is rich in built-in operators and provide the
following types of operators:<br />
<span class="style2">Arithmetic Operators:</span><br />
There are following arithmetic operators supported by C++ language:<br />
Assume variable A holds 10 and variable B holds 20, then:<br />
+ Operator. It is used to Adds two operands i.e A + B will give 30.<br />
- Operator. It is used to Subtracts second operand from the first i.e A - B will give 10.<br />
* Operator. It is used to Multiplies both operands i.e A * B will give 200.<br />
/ Operator. It is used to Divides numerator by denumerator i.e A / B will give 2.<br />
% Operator. It is used to Modulus Operator and remainder of after an integer division i.e A % B will give 0.<br />
++ Operator. It is used to Increment operator, increases integer value by one i.e A++ will give 11.<br />
-- Operator. It is used to Decrement operator, decreases integer value by one i.e A--  will give 19.<br />
<span class="style2">Relational Operators</span>:<br />
There are following relational operators supported by C++ language<br />
Assume variable A holds 10 and variable B holds 20, then:<br />
== (Equal)Operator. Checks if the values of two operands are equal or not, if yes then condition becomestrue. i.e(A == B) is not true.<br />
!= (Not Equal)Operator. Checks if the values of twooperands are equal or not, ifvalues are not equal then condition becomes true.
 i.e(A != B) is true.<br/>
 > Operator.Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.
i.e (A > B) is not true.<br/>

< Operator. Checks if the value of left operand is less than the valueof right operand, if yes then condition becomes true.
i.e (A < B) is true.<br/>

>= Operator.Checks if the value of left .operand is greater than or equalto the value of right operand, if yes then condition becomes
true.i.e(A >= B) is not true.<br/>

<= Operator.Checks if the value of left operand is less than or equal to
the value of right operand, if yes then condition becomes
true.i.e (A <= B) is true.<br/>
<span class="style2">Logical Operators:</span><br />
There are following logical operators supported by C++ language.<br />
Assume variable A holds 1 and variable B holds 0, then:<br />
&& Operator. Called Logical AND operator. If
both the operands are non-zero,
then condition becomes true i.e(A && B) is false.<br />
|| Operator. Called Logical OR Operator. If
any of the two operands is nonzero,
then condition becomes
true.i.e(A || B) is true.<br />
! Operator. Called Logical NOT Operator.
Use to reverses the logical state
of its operand. If a condition is
true, then Logical NOT operator
will make false. i.e!(A && B) is true.<br />
<span class="style2">Assignment Operators:</span><br />
There are following assignment operators supported by C++ language: <br />
= Operator.Simple assignment operator,
Assigns values from right side operands to left side operand. i.e C = A + B will assign value of A
+ B into C<br/ >
+= Operator. Add AND assignment operator,
It adds right operand to the left
operand and assign the result to left operand. i.e C += A is equivalent to C = C + A<br />
-= Operator. Subtract AND assignment
operator, It subtracts right
operand from the left operand
and assign the result to left
operand. .ie  C -= A is equivalent to C = C -
A<br/>
*= Operator. Multiply AND assignment
operator, It multiplies right
operand with the left operand
and assign the result to left
operand. i.e C *= A is equivalent to C = C *
A<br />
%= Operator. Modulus AND assignment
operator, It takes modulus
using two operands and assign
the result to left operand. i.e C %= A is equivalent to C = C
% A<br />
<span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> What is the output of this program ?.</b><br />
#include < iostrem.h ><br />
void main()<br />
{ int  a;<br />
a=20:<br />
cout<<++a;<br />
b=30;<br />
cout<<a++;<br />
}</b></td></tr><br />
<tr><td>
<input type="Checkbox" name="g" value="a"> 19'30.<br>
<input type="Checkbox" name="g" value="b"> 21,30.<br>
<input type="Checkbox" name="g" value="c"> 21,31.<br>
<input type="Checkbox" name="g" value="d"> Non of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>

 <div align="center">
<a href="c++ch3.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch5.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
