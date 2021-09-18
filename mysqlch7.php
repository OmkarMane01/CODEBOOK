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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch7.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch7-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>07.USING JOIN, NULL VALUE.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Using Join:</strong></td>
 </tr>
 <tr><td>
This is good
enough for simple takes, but in most of the real world MySQL usages, you will often need
to get data from multiple tables in a single query.<br />
You can use multiple tables in your single SQL query. The act of joining in MySQL refers
to smashing two or more tables into a single table.
You can use JOINS in the SELECT, UPDATE and DELETE statements to join the MySQL
tables. We will see an example of the LEFT JOIN also which is different from the simple
MySQL JOIN.<br />
Now we can write an SQL query to join these two tables. This query will select all the
authors from table tutorials_tbl and will pick up the corresponding number of tutorials
from the tcount_tbl.<br />
mysql> SELECT a.tutorial_id, a.tutorial_author, b.tutorial_count FROM tutorials_tbl a, tcount_tbl b
 WHERE a.tutorial_author = b.tutorial_author;<br />
<strong class="style2"> Null Values:</strong>
We have seen the SQL SELECT command along with the WHERE clause to fetch data
from a MySQL table, but when we try to give a condition, which compares the field or the
column value to NULL, it does not work properly.<br />
To handle such a situation, MySQL provides three operators:<br />
 IS NULL: This operator returns true, if the column value is NULL.<br />
 IS NOT NULL: This operator returns true, if the column value is not NULL.<br />
 <=>: This operator compares values, which (unlike the = operator) is true even
for two NULL values.<br />
The conditions involving NULL are special. You cannot use = NULL or != NULL to look for
NULL values in columns. Such comparisons always fail because it is impossible to tell
whether they are true or not. Sometimes, even NULL = NULL fails.<br />
To look for columns that are or are not NULL, use IS NULL or IS NOT NULL<br />
Example<br />
Try the following examples:<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> create table tcount_tbl<br />
-> (
-> tutorial_author varchar(40) NOT NULL,
-> tutorial_count INT<br />
-> );<br />
Query OK, 0 rows affected (0.05 sec)<br />

mysql> INSERT INTO tcount_tbl (tutorial_author, tutorial_count) values ('mahran', 20);<br />
mysql> INSERT INTO tcount_tbl (tutorial_author, tutorial_count) values ('mahnaz', NULL);<br />
mysql> INSERT INTO tcount_tbl (tutorial_author, tutorial_count) values ('Jen', NULL);<br />
mysql> INSERT INTO tcount_tbl (tutorial_author, tutorial_count) values ('Gill', 20);<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>NULL operator returns true, if the column value is ____ NULL.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  and.<br>
<input type="Checkbox" name="g" value="b">  or.<br>
<input type="Checkbox" name="g" value="c">  not.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  

<div align="center">
<a href="mysqlch6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
