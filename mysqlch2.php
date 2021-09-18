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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch3.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch2.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch2-<?php echo $userRow['userName']; ?></title>
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
 <tr><td width="942"><div align="center" class="style2"><strong>02.ADMIN,CONNECTION.</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Running and Shutting down MySQL Server:</strong>:-</td>
 </tr>
 <tr><td>
First check if your MySQL server is running or not. You can use the following command to
check it:<br />
ps -ef | grep mysqld<br />
If your MySql is running, then you will see mysqld process listed out in your result. If
server is not running, then you can start it by using the following command:<br />
root@host# cd /usr/bin<br />
./safe_mysqld & <br />
Now, if you want to shut down an already running MySQL server, then you can do it by
using the following command:<br />
root@host# cd /usr/bin<br />
./mysqladmin -u root -p shutdown<br />
Enter password: ******<br />
<span class="style5">Setting Up a MySQL User Account:</span><br />
For adding a new user to MySQL, you just need to add a new entry to the user table in
the database mysql.<br />
The following program is an example of adding a new user guest with SELECT, INSERT
and UPDATE privileges with the password guest123; the SQL query is:<br />
root@host# mysql -u root -p<br />
Enter password:*******<br />
mysql> use mysql;<br />
Database changed<br />
mysql> INSERT INTO user<br />
(host, user, password,
select_priv, insert_priv, update_priv)
VALUES ('localhost', 'coedbook',
PASSWORD('guest123'), 'Y', 'Y', 'Y');<br />
Query OK, 1 row affected (0.20 sec)<br />
mysql> FLUSH PRIVILEGES;<br />
Query OK, 1 row affected (0.01 sec)<span class="style5"><br />
MySQL Connection Using MySQL Binary:</span><br />
You can establish the MySQL database using the mysql binary at the command prompt.<br />
Example<br />
Here is a simple example to connect to the MySQL server from the command prompt –<br />
[root@host]# mysql -u root -p<br />
Enter password:******<br />
This will give you the mysql> command prompt, where you will be able to execute any
SQL command.<br />
The following code block shows the result of above command:<br />
Welcome to the MySQL monitor. Commands end with ; or \g.<br />
Your MySQL connection id is 2854760 to server version: 5.0.9<br />
Type 'help;' or '\h' for help. Type '\c' to clear the buffer.<br />
In the above example, we have used root as a user, but you can use any other user as
well. Any user will be able to perform all the SQL operations, which are allowed to that
user.<br />
You can disconnect from the MySQL database anytime using the exit command at mysql>
prompt.<br />
mysql> exit<br />



<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> if you want to shut down an  running MySQL server.Which command is used?
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  ./mysqladmin u root -p shutdown.<br>
<input type="Checkbox" name="g" value="b">  .mysqladmin -u root -p shutdown.<br>
<input type="Checkbox" name="g" value="c">  ./mysqladmin -u root -p shutdown.<br>
<input type="Checkbox" name="g" value="d">  ./mysqladmin -u root  shutdown.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  


<div align="center">
<a href="mysqlch1.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch3.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
