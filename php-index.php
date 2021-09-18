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

?>
<!DOCTYPE php PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xphp1/DTD/xphp1-transitional.dtd">
<php xmlns="http://www.w3.org/1999/xphp">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
<title>php Index-<?php echo $userRow['userName']; ?></title>
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
	width: 7.50%;
}
.style2{
	color: #FF0000;
}
</style>
</head>
<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Notice</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">php</div></td>
   </tr>
   </table>
  <br />
</div>
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center">INDEX</div></td></tr>
 <tr>
   <td><a href="phpch1.php" class="over">01.OVERVIEW,ENVIORNMENT SETUP.</a></td>
 </tr>
 <tr>
   <td><a href="phpch2.php" class="over">02.VARIABLE,CONSTANTS,OPERATORS.</a></td>
 </tr>
 <tr>
   <td><a href="phpch3.php" class="over">03.DESICSION MAKING.</a></td>
 </tr>
 <tr>
   <td><a href="phpch4.php" class="over">04.LOOP.</a></td>
 </tr>
 <tr><td><a href="phpch5.php" class="over">05.ARRAYS,STRINGS.</a></td></tr>
 <tr>
   <td><a href="phpch6.php" class="over">06.GET & POST METHOD.</a></td>
 </tr>
 <tr>
   <td><a href="phpch7.php" class="over">07.FILE INCLUSION.</a></td>
 </tr>
 <tr>
   <td><a href="phpch8.php" class="over">08.SESSION. </a></td>
 </tr>
 <tr>
   <td><a href="phpch9.php" class="over">09.PHP & MYSQL.</a></td>
 </tr>
 
 
   
 <tr><td><div class="style2"><a href="phptest.php">FINAL TEST.</a></div></td></tr>
 
</table>

</body>
</php>
