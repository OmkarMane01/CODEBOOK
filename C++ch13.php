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
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch13.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='C++ch13.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>c++ch13-<?php echo $userRow['userName']; ?></title>
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
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 23%;
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
.check{
	background-color: #FF0000;
	color: #F0F0F0;
}</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">C++ Language</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style5">13.FILES AND STREAMS.</div></td>
 </tr>
 <tr>
   <td class="style5">FILES AND STREAMS:</tr></td>
 
 <tr><td>
 So far, we have been using the iostream standard library, which
provides cin and cout methods for reading from standard input and writing to
standard output respectively.<br />
This tutorial will teach you how to read and write from a file. This requires
another standard C++ library called fstream, which defines three new data
types:<br />
<span class="style5">ofstream</span>: This data type represents the output file stream and is
used to create files and to write information to files.<br />
<span class="style5">ifstream:</span> This data type represents the input file stream and is
used to read information from files.<br />
<span class="style5">fstream:</span> This data type represents the file stream generally,
and has the capabilities of both ofstream and ifstream
which means it can create files, write information to
files, and read information from files.<br />
To perform file processing in C++, header files <iostream> and <fstream> must
be included in your C++ source file.<br />
<span class="style5">Opening a File:</span><br />
A file must be opened before you can read from it or write to it. Either
ofstream or fstream object may be used to open a file for writing. And ifstream
object is used to open a file for reading purpose only.<br />
Following is the standard syntax for open() function, which is a member of
fstream, ifstream, and ofstream objects.<br />
void open(const char *filename, ios::openmode mode);<br />
Here, the first argument specifies the name and location of the file to be opened
and the second argument of the open() member function defines the mode in
which the file should be opened. <br />
<span class="style5">Mode Flag:</span><br />
ios::app -Append mode. All output to that file to be appended to
the end.<br />
ios::ate -Open a file for output and move the read/write control
to the end of the file.<br />
ios:: -in Open a file for reading.<br />
ios::out - Open a file for writing.<br />
ios::trunc - If the file already exists, its contents will be truncated
before opening the file.<br />
You can combine two or more of these values by ORing them together. For
example if you want to open a file in write mode and want to truncate it in case
that already exists, following will be the syntax:
ofstream outfile;<br />
outfile.open("file.dat", ios::out | ios::trunc );<br />
Similar way, you can open a file for reading and writing purpose as follows:
fstream afile;<br />
afile.open("file.dat", ios::out | ios::in );<br />
<span class="style5">Closing a File:</span><br />
When a C++ program terminates it automatically flushes all the streams,
release all the allocated memory and close all the opened files. But it is always a
good practice that a programmer should close all the opened files before
program termination.<br />
Following is the standard syntax for close() function, which is a member of
fstream, ifstream, and ofstream objects.<br />
void close();<br />
<span class="style5">Writing to a File:</span><br />
While doing C++ programming, you write information to a file from your
program using the stream insertion operator (<<) just as you use that operator
to output information to the screen. The only difference is that you use
an ofstream or fstream object instead of the cout object.<br />
<span class="style5">Reading from a File:</span><br />
You read information from a file into your program using the stream extraction
operator (>>) just as you use that operator to input information from the
keyboard. The only difference is that you use an ifstream or fstream object
instead of the cin object.<br />
Following is the C++ program which opens a file in reading and writing mode.
After writing information entered by the user to a file named afile.dat, the
program reads information from the file and outputs it onto the screen:<br />
#include <fstream><br />
#include <iostream><br />
using namespace std;<br />
int main ()<br />
{<br />
char data[100];<br />
// open a file in write mode.
ofstream outfile;<br />
outfile.open("afile.dat");<br />
cout << "Writing to the file" << endl;<br />
cout << "Enter your name: ";<br />
cin.getline(data, 100);<br />
// write inputted data into the file.<br />
outfile << data << endl;<br />
cout << "Enter your age: ";<br />
cin >> data;<br />
cin.ignore();<br />
// again write inputted data into the file.<br />
outfile << data << endl;<br />
C++
241
// close the opened file.
outfile.close();<br />
// open a file in read mode.
ifstream infile;<br />
infile.open("afile.dat");<br />
cout << "Reading from the file" << endl;<br />
infile >> data;<br />
// write the data at the screen.
cout << data << endl;<br />
// again read the data from the file and display it.
infile >> data;<br />
cout << data << endl;<br />
// close the opened file.
infile.close();<br />
return 0;<br />
}<br />
When the above code is compiled and executed, it produces the following
sample input and output:<br />
$./a.out<br />
Writing to the file<br />
Enter your name: Zara<br />
Enter your age: 9<br />
Reading from the file<br />
Zara<br />
9<br />
Above examples make use of additional functions from cin object, like getline()
function to read the line from outside, and ignore() function to ignore the extra
characters left by previous read statement.<br />

<span class="style2" >Extra References:</span></strong><br />
<span class="style2" >Question:</span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b>____________ is return type is_open() function.
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a"> int.<br>
<input type="Checkbox" name="g" value="b"> bool.<br>
<input type="Checkbox" name="g" value="c"> float.<br>
<input type="Checkbox" name="g" value="d"> char *.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
<br />
 <div align="center">
<a href="c++ch12.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="c++-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="C++ch13.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a>  </div>

</td> 
 </tr>
 </table>
</body>
</html>
