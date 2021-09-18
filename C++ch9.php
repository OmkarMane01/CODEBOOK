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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch10.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch9.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>C++ch9-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style5">09CLASSES AND OBJECTS.</div></td>
 </tr>
 <tr><td><span class="style5">C++ Class Definitions</span>:</td>
 </tr>
 <tr><td>
  A class definition starts with the keyword class followed by the class name; and
the class body, enclosed by a pair of curly braces. A class definition must be
followed either by a semicolon or a list of declarations. <br />For example, we define
the Box data type using the keyword class as follows:<br />
class Box<br />
{<br />
public:<br />
double length; // Length of a box<br />
double breadth; // Breadth of a box<br />
double height; // Height of a box<br />
};<br />
 The keyword public determines the access attributes of the members of the
class that follows it. A public member can be accessed from outside the class
anywhere within the scope of the class object. You can also specify the members
of a class as private or protected which we will discuss in a sub-section.<br />
<span class="style5">Define C++ Objects:</span><br />
A class provides the blueprints for objects, so basically an object is created from
a class. We declare objects of a class with exactly the same sort of declaration
that we declare variables of basic types.<br /> Following statements declare two
objects of class Box:<br />
Box Box1; // Declare Box1 of type Box<br />
Box Box2; // Declare Box2 of type Box<br />
 <span class="style5">Accessing the Data Members:</span><br />
The public data members of objects of a class can be accessed using the direct
member access operator (.). Let us try the following example to make the things
clear:<br />
// box 1 specification<br />
Box1.height = 5.0;<br />
Box1.length = 6.0;<br />
Box1.breadth = 7.0;<br />
<span class="style5">Class member functions:</span><br />
A member function of a class is a function that
has its definition or its prototype within the
class definition like any other variable.<br /><a herf="">In Details:<a/><br />
<span class="style5">Class access modifiers:</span><br />
 A class member can be defined as public,
private or protected. By default members
would be assumed as private.<br /><a herf="">In Details:<a/><br />
<span class="style5">Constructor & destructor:</span><br />
 A class constructor is a special function in a
class that is called when a new object of the
class is created. A destructor is also a special
function which is called when created object is
deleted.<br /><a herf="">In Details:<a/><br />
<span class="style5">C++ copy constructor:</span> <br />
The copy constructor is a constructor which
creates an object by initializing it with an
object of the same class, which has been created previously.<br />
<a herf="">In Details:<a/><br />
<span class="style5">C++ friend functions:</span><br /> 
A friend function is permitted full access to
private and protected members of a class.<br />
<a herf="">In Details:<a/><br />
<span class="style5">C++ inline functions</span> <br />With an inline function, the compiler tries to
expand the code in the body of the function in
place of a call to the function.<br />
<a herf="">In Details:<a/><br />

<span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> what does your class can  hold?.</b></td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> data.<br>
<input type="Checkbox" name="g" value="b"> function.<br>
<input type="Checkbox" name="g" value="c"> both data & function.<br>
<input type="Checkbox" name="g" value="d"> Non of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
<br />
 <div align="center">
<a href="c++ch8.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch10.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
