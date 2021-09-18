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
  echo"<script language='javascript' type='text/javascript'> location.href='javach7.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach6.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach6-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>06.ARRAYS. </strong></div></td>
 </tr>
 <tr>
   <td><span class="style5">Declaring Array Variables</span>:-</td>
 </tr>
 <tr><td>
 To use an array in a program, you must declare a variable to reference the array, and you must specify the type of array the variable can reference. <br />Here is the syntax for declaring an array variable:<br />
dataType[] arrayRefVar; // preferred way.<br />
or<br />
dataType arrayRefVar[]; // works but not preferred way.<br />
Note: The style dataType[] arrayRefVar is preferred. The style dataType arrayRefVar[] comes from the C/C++ language and was adopted in Java to accommodate C/C++ programmers.<br />
<span class="style5">Creating Arrays</span><br />
You can create an array by using the new operator with the following syntax:<br />
arrayRefVar = new dataType[arraySize];<br /> 
The above statement does two things:<br />
It creates an array using new dataType[arraySize].<br />
It assigns the reference of the newly created array to the variable arrayRefVar.<br />
Declaring an array variable, creating an array, and assigning the reference of the array to the variable can be combined in one statement, as shown below:<br />
dataType[] arrayRefVar = new dataType[arraySize];<br />
Alternatively you can create arrays as follows:<br />
dataType[] arrayRefVar = {value0, value1, ..., valuek};<br />
The array elements are accessed through the index. Array indices are 0-based; that is, they start from 0 to arrayRefVar.length-1.<br />
<span class="style5">Processing Arrays:</span><br />
When processing array elements, we often use either for loop or foreach loop 
because all of the elements in an array are of the same type and the size of the array is known.<br />
Example:<br />
Here is a complete example showing how to create, initialize, and process arrays:<br />
public class TestArray {<br />
public static void main(String[] args) {<br />
double[] myList = {1.9, 2.9, 3.4, 3.5};<br />
// Print all the array elements<br />
for (int i = 0; i < myList.length; i++) {<br />
System.out.println(myList[i] + " ");<br />
}<br />
// Summing all elements<br />
double total = 0;<br />
for (int i = 0; i < myList.length; i++) {<br />
total += myList[i];<br />
}<br />
System.out.println("Total is " + total);<br />
// Finding the largest element
double max = myList[0];<br />
for (int i = 1; i < myList.length; i++) {<br />
if (myList[i] > max) max = myList[i];<br />
}<br />
System.out.println("Max is " + max);<br />
}
}<br />
This will produce the following result:<br />
1.9<br />
2.9<br />
3.4<br />
3.5<br />
Total is 11.7<br />
Max is 3.5<br />
JDK 1.5 introduced a new for loop known as foreach loop or enhanced for loop, which enables you to
 traverse the complete array sequentially without using an index variable.<br />
Example<br />
The following code displays all the elements in the array myList:<br />
public class TestArray {<br />
public static void main(String[] args) {<br />
double[] myList = {1.9, 2.9, 3.4, 3.5};<br />
// Print all the array elements<br />
for (double element: myList) {<br />
System.out.println(element);<br />
}
}
}<br />
This will produce the following result:<br />
1.9<br />
2.9<br />
3.4<br />
3.5<br />

 <span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>Which of the is an incorrect array declaration ?.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  int arr[] = new int[5].<br>
<input type="Checkbox" name="g" value="b">  int [] arr = new int[5].<br>
<input type="Checkbox" name="g" value="c">  int arr [] = new int[5].<br>
<input type="Checkbox" name="g" value="d">  int arr[] = int [5] new.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
 
 
<div align="center">
<a href="javach5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach7.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
