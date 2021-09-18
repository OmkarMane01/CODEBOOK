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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch5.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch4.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch4-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>04.CREATE,DROP TABLES.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Create Tables:</strong>:-</td>
 </tr>
 <tr><td>
To begin with, the table creation command requires the following details –<br />
 Name of the table<br />
 Name of the fields<br /><br />
 Definitions for each field<br />
Syntax: Here is a generic SQL syntax to create a MySQL table:<br />
CREATE TABLE table_name (column_name column_type);<br />
Now, we will create the following table in the TUTORIALS database.<br />
tutorials_tbl(<br />
tutorial_id INT NOT NULL AUTO_INCREMENT,<br />
tutorial_title VARCHAR(100) NOT NULL,
tutorial_author VARCHAR(40) NOT NULL,
submission_date DATE,
PRIMARY KEY ( tutorial_id )<br />
);<br />
Here, a few items need explanation:<br />
 Field Attribute NOT NULL is being used because we do not want this field to be
NULL. So, if a user will try to create a record with a NULL value, then MySQL will
raise an error.<br />
 Field Attribute AUTO_INCREMENT tells MySQL to go ahead and add the next
available number to the id field.<br />
 Keyword PRIMARY KEY is used to define a column as a primary key. You can use
multiple columns separated by a comma to define a primary key<br />
example:<br />
root@host# mysql -u root -p<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> CREATE TABLE tutorials_tbl(<br />
 tutorial_id INT NOT NULL AUTO_INCREMENT,
 tutorial_title VARCHAR(100) NOT NULL,
 tutorial_author VARCHAR(40) NOT NULL,
 submission_date DATE,
 PRIMARY KEY ( tutorial_id )
 );<br />
Query OK, 0 rows affected (0.16 sec)<br />
<span class="style5">Drop Tables:</span><br />
To drop tables from the command prompt, we need to execute the DROP TABLE SQL
command at the mysql> prompt.<br />
Example<br />
The following program is an example which deletes the tutorials_tbl:<br />
root@host# mysql -u root -p<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> DROP TABLE tutorials_tbl<br />
Query OK, 0 rows affected (0.8 sec)<br />
mysql>

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="514" align="center">
<td width="403">
<tr><td><form action="" method="POST">

<b>Which is right syntax to create a MySQL table ?</b>

</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  CREAE TABLE table_name (column_name column_type);.<br>
<input type="Checkbox" name="g" value="b">  CREATE TABLE table_name (column_name column_type);.<br>
<input type="Checkbox" name="g" value="c">  CREATE TABLE table_name (column_name column_type).<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  



<div align="center">
<a href="mysqlch3.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch5.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
