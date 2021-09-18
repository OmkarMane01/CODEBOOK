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
  echo"<script language='javascript' type='text/javascript'> location.href='phpch5.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch4.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch4-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
    <tr>
      <td class="style3"><div align="center">php</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>04.LOOP.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>The for loop statement</strong>:-</td>
 </tr>
 <tr><td>

The for statement is used when you know how many times you want to execute a
statement or a block of statements.<br />
Syntax<br />
for (initialization; condition; increment)<br />
{<br />
code to be executed;<br />
}<br />
The initializer is used to set the start value for the counter of the number of loop iterations.
A variable may be declared here for this purpose and it is traditional to name it $i.<br />
<span class="style5">while loop statement</span><br />
The while statement will execute a block of code if and as long as a test expression is true.<br />
If the test expression is true, then the code block will be executed. After the code has
executed the test expression will again be evaluated and the loop will continue until the
test expression is found to be false.<br />
Syntax<br />
while (condition)<br />
{<br />
code to be executed;<br />
}<br />
<span class="style5">do...while loop statement</span><br />
The do...while statement will execute a block of code at least once - it will then repeat the
loop as long as a condition is true.<br />
Syntax<br />
do<br />
{<br />
code to be executed;<br />
}while (condition);<br />
 <span class="style5">foreach loop statement</span><br />
The foreach statement is used to loop through arrays. For each pass the value of the
current array element is assigned to $value and the array pointer is moved by one and in
the next pass next element will be processed.<br />
Syntax<br />
foreach (array as value)<br />
{<br />
code to be executed;<br />
}<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>What is oputput ? <br /><
   ?php<br>
   $i=0;<br />
   for($i)<br />
   {<br />
    echo"$i";<br />
   }<br />
   ?><br />
</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> 0.<br>
<input type="Checkbox" name="g" value="b">  infinite loop.<br>
<input type="Checkbox" name="g" value="c">  error.<br>
<input type="Checkbox" name="g" value="d">  No output.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch3.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch5.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
