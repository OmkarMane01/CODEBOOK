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
if($_POST['g'] == "a")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch6.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlc5.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch5-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>05.INSERT,SELECT,WHERE CLAUSE,UPDATE,DELETE QUERY.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Insert Query:</strong>:-</td>
 </tr>
 <tr><td>
To insert data into a MySQL table, you would need to use the SQL INSERT
INTO command.<br />
Syntax: Here is a generic SQL syntax of INSERT INTO command to insert data into the
MySQL table.<br />
INSERT INTO table_name ( field1, field2,...fieldN )
VALUES
( value1, value2,...valueN );<br />
To insert string data types, it is required to keep all the values into double or single quotes.
For example – "value".<br />
example:<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> INSERT INTO tutorials_tbl<br />
(tutorial_title, tutorial_author, submission_date)
VALUES ("Learn PHP", "Omkar Mane", NOW());<br />
Query OK, 1 row affected (0.01 sec)<br />
<span class="style5">Select Query:</span><br />
The SQL SELECT command is used to fetch data from the MySQL database. You can use
this command at the mysql> prompt as well as in any script like PHP.<br />
Syntax: Here is a generic SQL syntax of the SELECT command to fetch data from the
MySQL table:<br />
SELECT field1, field2,...fieldN table_name1, table_name2...
[WHERE Clause]
[OFFSET M ][LIMIT N]<br />
 You can use one or more tables separated by comma to include various conditions
using a WHERE clause, but the WHERE clause is an optional part of the SELECT
command.<br />
 You can fetch one or more fields in a single SELECT command.<br />
 You can specify star (*) in place of fields. In this case, SELECT will return all the
fields.<br />
 You can specify any condition using the WHERE clause.<br />
 You can specify an offset using OFFSET from where SELECT will start returning
records. By default, the offset starts at zero.<br />
 You can limit the number of returns using the LIMIT attribute.<br />
Example<br />
The following example will return all the records from the tutorials_tbl table:<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> SELECT * from tutorials_tbl;<br />
<span class="style5">Where Clause:</span>
We have seen the SQL SELECT command to fetch data from a MySQL table. We can use
a conditional clause called the WHERE Clause to filter out the results. Using this WHERE
clause, we can specify a selection criteria to select the required records from a table.
Syntax: <br />
The following code block has a generic SQL syntax of the SELECT command with
the WHERE clause to fetch data from the MySQL table:<br />
SELECT field1, field2,...fieldN table_name1, table_name2...
[WHERE condition1 [AND [OR]] condition2.....<br />
 You can use one or more tables separated by a comma to include various conditions
using a WHERE clause, but the WHERE clause is an optional part of the SELECT
command.<br />
 You can specify any condition using the WHERE clause.<br />
 You can specify more than one condition using the AND or the OR operators.<br />
A WHERE clause can be used along with DELETE or UPDATE SQL command also to
specify a condition.<br />
The WHERE clause works like an if condition in any programming language. This clause
is used to compare the given value with the field value available in a MySQL table. If the
given value from outside is equal to the available field value in the MySQL table, then it
returns that row.<br />
The following example will return all the records from the tutorials_tbl table for which
the author name is Sanjay.<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> SELECT * from tutorials_tbl WHERE tutorial_author='Sanjay';<br />
<span class="style5">UPDATE Query:</span>
There may be a requirement where the existing data in a MySQL table needs to be
modified. You can do so by using the SQL UPDATE command. This will modify any field
value of any MySQL table.<br />
Syntax: The following code block has a generic SQL syntax of the UPDATE command to
modify the data in the MySQL table:<br />
UPDATE table_name SET field1=new-value1, field2=new-value2
[WHERE Clause]<br />
 You can update one or more field altogether.<br />
 You can specify any condition using the WHERE clause.<br />
 You can update the values in a single table at a time.<br />
Example:<br />
The following example will update the tutorial_title field for a record having the
tutorial_id as 3.<br />
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> UPDATE tutorials_tbl
 SET tutorial_title='Learning JAVA'
 WHERE tutorial_id=3;<br />
Query OK, 1 row affected (0.04 sec)<br />
Rows matched: 1 Changed: 1 Warnings: 0<br />
<span class="style5">Delete Query:</span>
If you want to delete a record from any MySQL table, then you can use the SQL
command DELETE FROM. You can use this command at the mysql> prompt as well as in
any script like PHP.<br />
Syntax:<br /> The following code block has a generic SQL syntax of the DELETE command to
delete data from a MySQL table.<br />
DELETE FROM table_name [WHERE Clause]<br />
 If the WHERE clause is not specified, then all the records will be deleted from the
given MySQL table.<br />
 You can specify any condition using the WHERE clause.<br />
 You can delete records in a single table at a time.<br />
Example<br />
The following example will delete a record from the tutorial_tbl whose tutorial_id is 3.
root@host# mysql -u root -p password;<br />
Enter password:*******<br />
mysql> use TUTORIALS;<br />
Database changed<br />
mysql> DELETE FROM tutorials_tbl WHERE tutorial_id=3;<br />
Query OK, 1 row affected (0.23 sec)<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>The SQL SELECT command is used to _____ from the MySQL database.</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  fetch data.<br>
<input type="Checkbox" name="g" value="b">  command..<br>
<input type="Checkbox" name="g" value="c">  filter.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  



<div align="center">
<a href="mysqlch4.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch6.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
