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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch4.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch3.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch3-<?php echo $userRow['userName']; ?></title>
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
}
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 9.55%;
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
    <tr><td class="style3"><div align="center">mysql</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>03.CREATE,DROP,SELECT DATABASA..</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Create Database:</strong>:-</td>
 </tr>
 <tr><td>
You would need special privileges to create or to delete a MySQL database. So assuming
you have access to the root user, you can create any database using the
mysql mysqladmin binary.<br />
Example<br />
Here is a simple example to create a database called TUTORIALS –<br />
[root@host]# mysqladmin -u root -p create TUTORIALS<br />
Enter password:******<br />
This will create a MySQL database called TUTORIALS.<br />

<span class="style5">Drop a Database using mysqladmin:</span><br />
You would need special privileges to create or to delete a MySQL database. So, assuming
you have access to the root user, you can create any database using the
mysql mysqladmin binary.<br />
Be careful while deleting any database because you will lose your all the data available in
your database.<br />
Here is an example to delete a database (TUTORIALS) created in the previous chapter:<br />
[root@host]# mysqladmin -u root -p drop TUTORIALS<br />
Enter password:******<br />
This will give you a warning and it will confirm if you really want to delete this database
or not.<br />
Dropping the database is potentially a very bad thing to do.<br />
Any data stored in the database will be destroyed.<br />
Do you really want to drop the 'TUTORIALS' database [y/N] y<br />
Database "TUTORIALS" dropped<br />
<span class="style5">Selecting MySQL Database :</span><br />
It is very simple to select a database from the mysql> prompt. You can use the SQL
command use to select a database.<br />
Example<br />
Here is an example to select a database called TUTORIALS:<br />
[root@host]# mysql -u root -p<br />
Enter password:******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql><br />
Now, you have selected the TUTORIALS database and all the subsequent operations will
be performed on the TUTORIALS database.<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> You can use the SQL command use to select a database.
 </b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  create TUTORIALS.<br>
<input type="Checkbox" name="g" value="b">  use TUTORIALS;.<br>
<input type="Checkbox" name="g" value="c">  drop TUTORIALS .<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
   

<div align="center">
<a href="mysqlch2.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch4.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
