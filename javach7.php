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
  echo"<script language='javascript' type='text/javascript'> location.href='javach8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='javach7.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>javach7-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>07.CLASSES & OBJECTS. </strong></div></td>
 </tr>
 <tr>
   <td><span class="style5">Classes in Java:</span>:-</td>
 </tr>
 <tr><td>
A class is a blueprint from which individual objects are created.<br />
Following is a sample of a class.<br />
public class Dog{<br />
String breed;<br />
int ageC<br />
String color;<br />
void barking(){<br />
}<br />
void hungry(){<br />
}<br />
void sleeping(){<br />
}
}<br />
A class can contain any of the following variable types.<br />
<span class="style5">1)Local variables:</span> Variables defined inside methods, constructors or blocks are called local variables. 
The variable will be declared and initialized within the method and the variable will be destroyed when the method has completed.<br />
<span class="style5">2)Instance variables:</span> Instance variables are variables within a class but outside any method. These variables are 
initialized when the class is instantiated. Instance variables can be accessed from inside any method, constructor or blocks of that particular class.<br />
 <span class="style5">3)Class variables</span>: Class variables are variables declared within a class, outside any method, with the static keyword.
A class can have any number of methods to access the value of various kinds of methods. In the above example, barking(),
 hungry() and sleeping() are methods.<br />
 <span class="style5">Objects in Java:</span><br />
Let us now look deep into what are objects. If we consider the real-world, we can find many objects around us, cars, dogs, humans, etc. All these objects have a state and a behavior.
If we consider a dog, then its state is - name, breed, color, and the behavior is - barking, wagging the tail, running.<br />
If you compare the software object with a real-world object, they have very similar characteristics.
Software objects also have a state and a behavior. A software object's state is stored in fields and behavior is shown via methods.<br />
So in software development, methods operate on the internal state of an object and the object-to-object communication is done via methods.<br />
<span class="style5">Constructors</span>:<br />
When discussing about classes, one of the most important sub topic would be constructors. Every class has a constructor.
 If we do not explicitly write a constructor for a class, the Java compiler builds a default constructor for that class.<br />
Each time a new object is created, at least one constructor will be invoked. The main rule of constructors is that they should have 
the same name as the class. A class can have more than one constructor.<br />
Following is an example of a constructor:<br />
public class Puppy{<br />
public Puppy(){<br />
}<br />
public Puppy(String name){<br />
// This constructor has one parameter, name.<br />
}
}<br />
Java also supports Singleton Classes where you would be able to create only one instance of a class.<br />
Note: We have two different types of constructors. We are going to discuss constructors in detail in the subsequent chapters.<br />
 
 <span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>A top level class may have which one of the following access modifiers ?</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Package.<br>
<input type="Checkbox" name="g" value="b">  private.<br>
<input type="Checkbox" name="g" value="c">  public.<br>
<input type="Checkbox" name="g" value="d">  protected.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
 
<div align="center">
<a href="javach6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="java-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="javach8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
