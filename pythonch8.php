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
if($_POST['g'] == "d")
{ 
   echo "<script type='text/javascript'>alert('Correct Answer!.Next Chapter was started')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch9.php' </script>";
}else
{ 	
  echo "<script type='text/javascript'>alert('Wrong Answer!.Learn Properly')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='pythonch8.php' </script>";
}
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>pythonrpch8-<?php echo $userRow['userName']; ?></title>
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
	width: 11.55%;
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
    <tr><td class="style3"><div align="center">python</div></td>
   </tr>
</table><br />
   <table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>
08.LISTS..</strong></div></td>
 </tr>
 <tr>
   <td><strong class="style2">Python Lists:</strong></td>
 </tr>
 
 <tr><td>
 

The list is the most versatile datatype available in Python, which can be written as a list
of comma-separated values (items) between square brackets. Important thing about a list
is that the items in a list need not be of the same type.<br />
Creating a list is as simple as putting different comma-separated values between square
brackets.<br /> For example<br />list1
= ['physics', 'chemistry', 1997, 2000];<br />
list2 = [1, 2, 3, 4, 5 ];<br />
list3 = ["a", "b", "c", "d"];<br />
Similar to string indices, list indices start at 0, and lists can be sliced, concatenated and
so on.<br />

<span class="style5">Accessing Values in Lists:</span><br />
To access values in lists, use the square brackets for slicing along with the index or indices
to obtain value available at that index.<br /> 
For example-<br />
#!/usr/bin/python3<br />
list1 = ['physics', 'chemistry', 1997, 2000]<br />
list2 = [1, 2, 3, 4, 5, 6, 7 ]<br />
print ("list1[0]: ", list1[0])<br />
print ("list2[1:5]: ", list2[1:5])<br />
When the above code is executed, it produces the following result -<br />
list1[0]: physics<br />
list2[1:5]: [2, 3, 4, 5]<br />

<span class="style5">Updating Lists:</span><br />
You can update single or multiple elements of lists by giving the slice on the left-hand side
of the assignment operator, and you can add to elements in a list with the append()
method<br />. For example-<br />
#!/usr/bin/python3<br />
list = ['physics', 'chemistry', 1997, 2000]<br />
print ("Value available at index 2 : ", list[2])<br />
list[2] = 2001<br />
print ("New value available at index 2 : ", list[2])<br />
Note: The append() method is discussed in the subsequent section.<br />
When the above code is executed, it produces the following result -<br />
Value available at index 2 :<br />
1997<br />
New value available at index 2 <br />:
2001<br />

<span class="style5">Delete List Elements:</span><br />
To remove a list element, you can use either the del statement if you know exactly which
element(s) you are deleting. You can use the remove() method if you do not know exactly
which items to delete. <br />For example-<br />
#!/usr/bin/python3<br />
list = ['physics', 'chemistry', 1997, 2000]<br />
print (list)<br />
del list[2]<br />
print ("After deleting value at index 2 : ", list)<br />
When the above code is executed, it produces the following result-<br />
['physics', 'chemistry', 1997, 2000]<br />
After deleting value at index 2 : ['physics', 'chemistry', 2000]<br />
Note: remove() method is discussed in subsequent section.<br />


<span class="style2" ><strong>Extra References:</strong></span></strong><br />
<span class="style2" ><strong>Question:<strong></span><br />



<table width="275" align="center">
<td width="267"><tr><td><form action="" method="POST">

<b> Which of the following commands will create a list ?<b><br />
</td></tr>
<tr><td>
<input type="Checkbox" name="g" value="a">  list1 = list().<br>
<input type="Checkbox" name="g" value="b">  list1 = [].<br>
<input type="Checkbox" name="g" value="c">  list1 = list(1,2,3).<br>
<input type="Checkbox" name="g" value="d">  All of This.<br>
<input class="check" name="go" type="submit" value="Check"  /></td></tr>
</form></table>
 <br />
  
<div align="center">
<a href="pythonch6.php"><input class="button1" name="login2" type="submit" value="<<Previos" size="15" /></a>
<a href="python-index.php"><input name="submit"  type="submit" class="button2" value="index" size="15" /></a>
 <a href="pythonch9.php"><input class="button3" name="login" type="submit" value="Next>>" size="15" /></a></div>

 </tr>
 </table>
</body>
</html>
