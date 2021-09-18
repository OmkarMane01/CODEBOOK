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
  echo"<script language='javascript' type='text/javascript'> location.href='phpch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='phpch9.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmlch9-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>09.PHP & MYSQL.</strong></div></td>
 </tr>
 <tr>
   <td class="style5"><strong>Connecting to MySQL Database:</strong></td>
 </tr>
 <tr><td>

<span class="style5">Opening a Database Connection</span><br />
PHP provides mysqli_connect function to open a database connection. This function takes
five parameters and returns a MySQL link identifier on success, or FALSE on failure.<br />
Syntax<br />
connection mysqli_connect(server,user,passwd,new_link);<br />
1
server
Optional - The host name running database server. If not specified, then
default value is localhost:3306.<br />
2
user
Optional - The username accessing the database. If not specified, then default
is the name of the user that owns the server process.<br />
3
passwd
Optional - The password of the user accessing the database. If not specified
then default is an empty password.<br />
4
new_link
Optional - If a second call is made to mysqli_connect() with the same
arguments, no new connection will be established; instead, the identifier of
the already opened connection will be returned.<br />

<span class="style5">Closing Database Connection</span><br />
Its simplest function mysqli_close PHP provides to close a database connection. This
function takes connection resource returned by mysqli_connect function. It returns TRUE
on success or FALSE on failure.<br />
Syntax<br />
bool mysqli_close ( resource $link_identifier );
If a resource is not specified, then the last opened database is closed.<br />
<span class="style5">Creating a Database:</span><br />
To create and delete a database, you should have admin privilege. It’s very easy to create
a new MySQL database. PHP uses mysqli_query function to create a MySQL database.
This function takes two parameters and returns TRUE on success or FALSE on failure.<br />
Syntax<br />
bool mysqli_query($_conn, sql, connection );<br />
1
sql
Required - SQL query to create a database<br />
2
connection
Optional - if not specified, then the last opened connection by
mysqli_connect will be used.<br />
<center><img src="images/mysql.jpg" /></center>

<span class="style5">Deleting a Database:</span><br />
If a database is no longer required, then it can be deleted forever. You can use pass an
SQL command to mysqli_query to delete a database.<br />
<center><img  src="images/mysql2.jpg" /></center>
<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="476" align="center">
<td width="468">
<tr><td><form action="" method="POST">

<b>Which is correct syntax to Database Connection . <br />
</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  connection mysqli_connect(server,user,passwd,new_link).<br>
<input type="Checkbox" name="g" value="b">  connection mysqli_connect(server,user,passwd,new_link);.<br>
<input type="Checkbox" name="g" value="c">  connection mysqli_connect(server user passwd new_link);.<br>
<input type="Checkbox" name="g" value="d">  All of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="phpch6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="php-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="phpch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
