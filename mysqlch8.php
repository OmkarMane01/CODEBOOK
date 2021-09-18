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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch8.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch8-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>08.ALTER,USING SEQUENCES.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Dropping:</strong></td>
 </tr>
 <tr><td>

if you want to drop an existing column i from the above MySQL table, then you will use the
DROP clause along with the ALTER command as shown below:<br />
mysql> ALTER TABLE testalter_tbl DROP i;<br />
A DROP clause will not work if the column is the only one left in the table.
To add a column, use ADD and specify the column definition.<br /> The following statement
restores the i column to the testalter_tbl:<br />
mysql> ALTER TABLE testalter_tbl ADD i INT;<br />
<span class="style5">Altering (Changing) a Column Definition or a Name:</span><br />
To change a column's definition, use MODIFY or CHANGE clause along with the ALTER
command.<br />
For example, to change column c from CHAR(1) to CHAR(10), you can use the following
command:<br />
mysql> ALTER TABLE testalter_tbl MODIFY c CHAR(10);<br />
<span class="style5">Altering (Changing) a Table Type:</span><br />
You can use a table type by using the TYPE clause along with the ALTER command. Try
out the following example to change the testalter_tbl to MYISAM table type.<br />
To find out the current type of a table, use the SHOW TABLE STATUS statement.<br />
mysql> ALTER TABLE testalter_tbl TYPE = MYISAM;<br />
mysql> SHOW TABLE STATUS LIKE 'testalter_tbl'\G<br />
*************************** 1. row ****************<br />
Name: testalter_tbl<br />
Type: MyISAM<br />
Row_format: Fixed<br />
Rows: 0<br />
Avg_row_length: 0<br />
Data_length: 0<br />
Max_data_length: 25769803775<br />
Index_length: 1024<br />
Data_free: 0<br />
Auto_increment: NULL<br />
Create_time: 2007-06-03 08:04:36<br />
Update_time: 2007-06-03 08:04:36<br />
Check_time: NULL<br />
Create_options:<br />
Comment:<br />
1 row in set (0.00 sec)<br />
<span class="style5">Renaming (Altering) a Table:</span><br />
To rename a table, use the RENAME option of the ALTER TABLE statement.<br />
Try out the following example to rename testalter_tbl to alter_tbl.<br />
mysql> ALTER TABLE testalter_tbl RENAME TO alter_tbl;<br />
You can use the ALTER command to create and drop the INDEX command on a MySQL
file.<br />
<span class="style5">Using AUTO_INCREMENT Column:</span><br />
The simplest way in MySQL to use Sequences is to define a column as AUTO_INCREMENT
and leave the remaining things to MySQL to take care.<br />
Example<br />
Try out the following example. This will create table and after that it will insert few rows
in this table where it is not required to give record ID because it is auto incremented by
MySQL.<br />
mysql> CREATE TABLE insect<br />
(<br />
id INT UNSIGNED NOT NULL AUTO_INCREMENT,<br />
 PRIMARY KEY (id),<br />
 name VARCHAR(30) NOT NULL, # type of insect<br />
 date DATE NOT NULL, # date collected<br />
 origin VARCHAR(30) NOT NULL # where collected<br />
);<br />
Query OK, 0 rows affected (0.02 sec)<br />
<span class="style5">Renumbering an Existing Sequence:</span><br />
There may be a case when you have deleted many records from a table and you want to
re-sequence all the records. This can be done by using a simple trick, but you should be
very careful to do so if your table is having joins with the other table.<br />
If you determine that the resequencing of an AUTO_INCREMENT column is unavoidable,
the way to do it is to drop the column from the table, then add it again.<br />
The following example shows how to renumber the id values in the table using this
technique.<br />
mysql> ALTER TABLE insect DROP id;<br />
mysql> ALTER TABLE insect<br />
ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
 ADD PRIMARY KEY (id);<br />
 <span class="style5">Starting a Sequence at a Particular Value:</span><br />
By default, MySQL will start sequence from 1, but you can specify any other number as
well at the time of the table creation.<br />
The following program is an example which shows how MySQL will start the sequence from
100.<br />
mysql> CREATE TABLE insect<br />
 (<br />
 id INT UNSIGNED NOT NULL AUTO_INCREMENT = 100,<br />
 PRIMARY KEY (id),<br />
 name VARCHAR(30) NOT NULL, # type of insect<br />
 date DATE NOT NULL, # date collected<br />
 origin VARCHAR(30) NOT NULL # where collected<br />
);<br />
Alternatively, you can create the table and then set the initial sequence value with the
ALTER TABLE command.<br />
mysql> ALTER TABLE t AUTO_INCREMENT = 100;<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>To change a column's definition, use MODIFY or CHANGE clause along with the  command.
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  ALTER.<br>
<input type="Checkbox" name="g" value="b">  SELECT.<br>
<input type="Checkbox" name="g" value="c">  AUTO_INCREMENT.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="mysqlch7.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch8.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
