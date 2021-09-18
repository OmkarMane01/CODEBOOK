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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch7.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch6.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch6-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>06.LIKE CLAUSE,SORTING.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">LIKE Clause:</strong>:-</td>
 </tr>
 <tr><td>
We have seen the SQL SELECT command to fetch data from the MySQL table. We can
also use a conditional clause called as the WHERE clause to select the required records.
A WHERE clause with the ‘equal to’ sign (=) works fine where we want to do an exact
match. Like if "tutorial_author = 'Sanjay'". But there may be a requirement where we
want to filter out all the results where tutorial_author name should contain "jay". This can
be handled using SQL LIKE Clause along with the WHERE clause.<br />
If the SQL LIKE clause is used along with the % character, then it will work like a meta
character (*) as in UNIX, while listing out all the files or directories at the command
prompt. Without a % character, the LIKE clause is very same as the equal to sign along
with the WHERE clause.<br />
Syntax: The following code block has a generic SQL syntax of the SELECT command along
with the LIKE clause to fetch data from a MySQL table.<br />
SELECT field1, field2,...fieldN table_name1, table_name2...
WHERE field1 LIKE condition1 [AND [OR]] filed2 = 'somevalue'<br />
 You can specify any condition using the WHERE clause.<br />
 You can use the LIKE clause along with the WHERE clause.<br />
 You can use the LIKE clause in place of the equal to sign.<br />
 When LIKE is used along with % sign then it will work like a meta character search.<br />
 You can specify more than one condition using AND or OR operators.<br />
 A WHERE...LIKE clause can be used along with DELETE or UPDATE SQL command
also to specify a condition.<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> SELECT * from tutorials_tbl WHERE tutorial_author LIKE '%jay';<br />
<span class="style5">Sorting Results:</span>
clause that names the column or columns which you want to sort.<br />
Syntax:<br />
The following code block is a generic SQL syntax of the SELECT command along with the
ORDER BY clause to sort the data from a MySQL table.<br />
SELECT field1, field2,...fieldN table_name1, table_name2...
ORDER BY field1, [field2...] [ASC [DESC]]<br />
 You can sort the returned result on any field, if that field is being listed out.<br />
 You can sort the result on more than one field.<br />
 You can use the keyword ASC or DESC to get result in ascending or descending
order. By default, it's the ascending order.<br />
 You can use the WHERE...LIKE clause in the usual way to put a condition.<br />
 root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> SELECT * from tutorials_tbl ORDER BY tutorial_author ASC<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>We can also use a conditional clause called as the __________ to select the required records.</b>

</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  LIKE  clause.<br>
<input type="Checkbox" name="g" value="b">  WHERE clause.<br>
<input type="Checkbox" name="g" value="c">   LIKE or WHERE clause.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="mysqlch5.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch7.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
