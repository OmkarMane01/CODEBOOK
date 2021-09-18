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
  echo"<script language='javascript' type='text/javascript'> location.href='htmlch9.php' </script>";
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
 <tr><td width="942"><div align="center" class="style2"><strong>9.FORMS.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>Forms:</strong></td>
 </tr>
 <tr><td>
HTML Forms are required, when you want to collect some data from the site visitor. For example, during user registration you would like to collect information such as name, email address, credit card, etc.<br />
A form will take input from the site visitor and then will post it to a back-end application such as CGI, ASP Script or PHP script etc. The back-end application will perform required processing on the passed data based on defined business logic inside the application.<br />
There are various form elements available like text fields, textarea fields, drop-down menus, radio buttons, checkboxes, etc.<br />
<span class="style5">Text Input Controls:</span><br />
There are three types of text input used on forms:<br />
 Single-line text input controls - This control is used for items that require only one line of user input, such as search boxes or names. They are created using HTML input tag.<br />
 Password input controls - This is also a single-line text input but it masks the character as soon as a user enters it. They are also created using HTMl input tag.<br />
 Multi-line text input controls - This is used when the user is required to give details that may be longer than a single sentence. Multi-line input controls are created using HTML textarea tag.<br />
 <span class="style5">Single-line text input controls:</span><br />
This control is used for items that require only one line of user input, such as search boxes or names. They are created using HTML input tag.<br />
Following is the list of attributes for input tag for creating text field.<br />
type -Indicates the type of input control and for text input control it will be set
totext.<br />
name -Used to give a name to the control which is sent to the server to be
recognized and get the value.<br />
value- This can be used to provide an initial value inside the control.<br />
size- Allows to specify the width of the text-input control in terms of characters.<br />
maxlength- Allows to specify the maximum number of characters a user can enter into
the text box.<br />
Password Input controls:<br />
This is also a single-line text input but it masks the character as soon as a user enters it.
They are also created using HTML input tag but type attribute is set to password.<br />
Here is a basic example of a single-line password input used to take user password:<br />
<center><img  src="images/pass.jpg"/></center>
<span class="style5">Multiple-Line Text Input Controls:</span><br />
This is used when the user is required to give details that may be longer than a single
sentence. Multi-line input controls are created using HTML textarea tag.<br />
Here is a basic example of a multi-line text input used to take item description:<br />
<center><img  src="images/Line Text Input Controls.jpg"/></center>
<span class="style5">Checkbox Control:</span><br />
Checkboxes are used when more than one option is required to be selected. They are also<br />
created using HTML input tag but type attribute is set to checkbox.<br />
Radio Button Control:<br />
Radio buttons are used when out of many options, just one option is required to be selected. They are also created using HTML input tag but type attribute is set to radio.<br />
Here is an example HTML code for a form with two checkboxes and Radio Button:<br />
<center>
  <span class="style5"><img  src="images/Radio Button.jpg"/></span>
</center>
<span class="style5">Button Controls:</span><br />
There are various ways in HTML to create clickable buttons. You can also create a clickable button using input tag by setting its type attribute to button.<br /> The type attribute can take the following values: 
submit
This creates a button that automatically submits a form.<br />
reset
This creates a button that automatically resets form controls to their initial values.<br />
button
This creates a button that is used to trigger a client-side script when the user clicks that button.<br />
image
This creates a clickable button but we can use an image as background of the button.<br />
Here is example HTML code for a form with three types of buttons:<br />
<center><img  src="images/Button Controls.jpg"/></center>




 <span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />


<table width="470" align="center">
<td width="462">
<tr><td><form action="" method="POST">

<b>A form will take input from the site visitor and then will post it to a back-end application such as,  or  etc.?
.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  CGI.<br>
<input type="Checkbox" name="g" value="b">  ASP Script.<br>
<input type="Checkbox" name="g" value="c">  PHP script.<br>
<input type="Checkbox" name="g" value="d">  All of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="htmlch8.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="html-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="htmlch9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 <tr>
   <td> 
 </tr>
 </table>
</body>
</html>
