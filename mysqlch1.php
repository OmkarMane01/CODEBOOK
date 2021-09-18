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
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch2.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='mysqlch1.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mysqlch1-<?php echo $userRow['userName']; ?></title>
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
	.check{
	background-color: #FF0000;
	color: #F0F0F0;
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
 <tr><td width="942"><div align="center" class="style2"><strong>01.OVERVIEW,ENVIORNMENT SETUP</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">History of mysql:</strong>:-</td>
 </tr>
 <tr><td>
MySQL is a fast, easy-to-use RDBMS being used for many small and big businesses. MySQL
is developed, marketed and supported by MySQL AB, which is a Swedish company. MySQL
is becoming so popular because of many good reasons:<br />
 MySQL is released under an open-source license. So you have nothing to pay to
use it.<br />
 MySQL is a very powerful program in its own right. It handles a large subset of the
functionality of the most expensive and powerful database packages.<br />
 MySQL uses a standard form of the well-known SQL data language.<br />
 MySQL works on many operating systems and with many languages including PHP,
PERL, C, C++, JAVA, etc.<br />
 MySQL works very quickly and works well even with large data sets.<br />
 MySQL is very friendly to PHP, the most appreciated language for web
development.<br />
 MySQL supports large databases, up to 50 million rows or more in a table. The
default file size limit for a table is 4GB, but you can increase this (if your operating
system can handle it) to a theoretical limit of 8 million terabytes (TB).<br />
 MySQL is customizable. The open-source GPL license allows programmers to modify
the MySQL software to fit their own specific environments.<br />
Installing MySQL on Windows:<br />
The default installation on any version of Windows is now much easier than it used to be,
as MySQL now comes neatly packaged with an installer. Simply download the installer
package, unzip it anywhere and run the setup.exe file.<br />
The default installer setup.exe will walk you through the trivial process and by default will
install everything under C:\mysql.<br />
Test the server by firing it up from the command prompt the first time. Go to the location
of the mysqld server which is probably C:\mysql\bin, and type:<br />
mysqld.exe --console<br />
NOTE: If you are on NT, then you will have to use mysqld-nt.exe instead of mysqld.exe
If all went well, you will see some messages about startup and InnoDB. If not, you may
have a permissions issue. Make sure that the directory that holds your data is accessible
to whatever user (probably MySQL) the database processes run under.<br />
MySQL will not add itself to the start menu, and there is no particularly nice GUI way to
stop the server either. Therefore, if you tend to start the server by double clicking the
mysqld executable, you should remember to halt the process by hand by using
mysqladmin, Task List, Task Manager, or other Windows-specific means.<br />
Use the mysqladmin Utility to Obtain Server Status<br />
Use mysqladmin binary to check the server version. This binary would be available in
/usr/bin on linux and in C:\mysql\bin on windows.<br />
[root@host]# mysqladmin --version<br />
It will produce the following result on Linux. It may vary depending on your installation:
mysqladmin Ver 8.23 Distrib 5.0.9-0, for redhat-linux-gnu on i386<br />
If you do not get such a message, then there may be some problem in your installation
and you would need some help to fix it.<br />
Execute simple SQL commands using the MySQL Client<br />
You can connect to your MySQL server through the MySQL client and by using the
mysql command. At this moment, you do not need to give any password as by default it
will be set as blank.v
You can just use following command –<br />
[root@host]# mysql<br />
It should be rewarded with a mysql> prompt. Now, you are connected to the MySQL server
and you can execute all the SQL commands at the mysql> prompt as follows:<br />
mysql> SHOW DATABASES;<br />
+----------+<br />
| Database |<br />
+----------+<br />
| .mysql.....  |<br />
| test.......... |<br />
+----------+<br />
2 rows in set (0.13 sec)<br />
Post-installation Steps<br />
MySQL ships with a blank password for the root MySQL user. As soon as you have
successfully installed the database and the client, you need to set a root password as given
in the following code block:<br />
[root@host]# mysqladmin -u root password "new_password";<br />
Now to make a connection to your MySQL server, you would have to use the following
command:<br />
[root@host]# mysql -u root -p<br />
Enter password:*******<br />

<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>MySQL works on  languages including 
  

</b>
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  PHP.<br>
<input type="Checkbox" name="g" value="b"> C  .<br>
<input type="Checkbox" name="g" value="c">  C++.<br>
<input type="Checkbox" name="g" value="d">  None of this.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  

<div align="center">
<a href=""><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="mysql-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="mysqlch2.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
