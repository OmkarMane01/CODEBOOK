<?php
require('commentindex.php');
if(isset($_POST['name'])){
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

if($submit)
{
if($name&&$comment)
{
$insert=mysqli_query($_conn,"INSERT INTO comment (name,comment) VALUES ('$name','$comment') ");
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=commentindex.php'>";
}
else
{
                echo "<script type='text/javascript'>alert('please fill out all field!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='comment.php' </script>";
}
}
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment box</title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
	.input{
	height:25px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
	}
	.input1{
	height:50px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
	}
	.over{
	color:#FFFFFF;}
	.stylea{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	word-spacing: 4cm;
	}
	.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 8%;
}
.button{
	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:20%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	}
</style>
</head>
 
<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<center><h1 class="stylea"> <a href="home.php">Home</a>   <a href="Course.php">Course's</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a> </h1></center>
 <table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Post</div></td>
 </tr> 
</table>
<br />
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2">
<form action="commentindex.php" method="POST" >
<table>
<tr><td>Name: <br><input class="input" type="text" name="name" placeholder="Enter your name!."/></td></tr>
<tr>
  <td colspan="2">Post: </td>
</tr>
<tr><td colspan="5"><textarea class="input1" name="comment"  placeholder="Enter your Question!" rows="2" cols="150"></textarea></td></tr>
<tr><td colspan="2"><input class="button" type="submit" name="submit" value="Post"></td></tr>
</table>
</form>

<div align="left">
  <?php

 
$getquery=mysqli_query($_conn,"SELECT * FROM comments ORDER BY id DESC");
while($rows=mysqli_fetch_assoc($getquery))
{
$id=$rows['id'];
$name=$rows['name'];
$comment=$rows['comment'];
echo $name.  '<br />'  .  '<br />' .  $comment  .  '<br />'  .  '<br />'  .  '<hr size="1"/>'
;}
?>
</div>
 </div></td>
 </tr>
</table>

</body>
</html>