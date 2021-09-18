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
  echo"<script language='javascript' type='text/javascript'> location.href='htmlch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='htmlch8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch8-<?php echo $userRow['userName']; ?></title>
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
    <tr><td class="style3"><div align="center">html</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>08.COLORS.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>HTML Color Coding Methods:</strong></td>
 </tr>
 <tr><td>
are following three different methods to set colors in your web page:<br />
 Color names - You can specify color names directly like green, blue or red.<br />
 Hex codes - A six-digit code representing the amount of red, green, and blue that makes up the color.<br />
 Color decimal or percentage values - This value is specified using the rgb() property.<br />
Now we will see these coloring schemes one by one.<br />
<span class="style5">HTML Colors - Color Names:</span><br />
You can specify direct a color name to set text or background color. W3C has listed 16 basic color names that will validate with an HTML validator but there are over 200 different color names supported by major browsers.<br />
Here is the list of W3C Standard 16 Colors names and it is recommended to use them.<br />
<center><img  src="images/Color Names.jpg" width="587"/></center>

<span class="style5">HTML Colors - Hex Codes</span><br />
A hexadecimal is a 6 digit representation of a color. The first two digits(RR) represent a red value, the next two are a green value(GG), and the last are the blue value(BB).
A hexadecimal value can be taken from any graphics software like Adobe Photoshop, Paintshop Pro or MS Paint.<br />
Each hexadecimal code will be preceded by a pound or hash sign #. Following is a list of few colors using hexadecimal notation.<br />
<center>
  <span class="style5"><img  src="images/Hex Codes.jpg" width="480" height="336"/>  </span>
</center>
<span class="style5">HTML Colors - RGB Values:</span><br />
This color value is specified using the rgb( ) property. This property takes three values, one each for red, green, and blue. The value can be an integer between 0 and 255 or a percentage. <br />Note: All the browsers does not support rgb() property of color so it is recommended not to use it.
Following is a list to show few colors using RGB values.<br />
<center><img  src="images/RGB Values.jpg" width="486" height="394"/>
</center>
 <span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />


<table width="470" align="center">
<td width="462">
<tr><td><form action="" method="POST">

<b>Which is Color RGB-rgb(255,255,0)?
.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  Green.<br>
<input type="Checkbox" name="g" value="b">  Purple.<br>
<input type="Checkbox" name="g" value="c">  Blue.<br>
<input type="Checkbox" name="g" value="d">  Red.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="htmlch7.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="html-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="htmlch9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 <tr>
   <td> 
 </tr>
 </table>
</body>
</html>
