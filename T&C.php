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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Terms & condtions-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
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
	width: 33.60%;
}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
<table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Terms & condtions</div></td>
 </tr> 
</table><br>
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div  class="style2"><strong>
1). TEST FEE is 2500 RS/- for all language .<br>
2). If user want a certificate of C++,Java, C#,Python, Php, HTML,MySql language then give the test.<br>
3). If you register the test or exam then you want to give the test it is compulsory user can't cancel the test.<br>
4). In test 30 questions asked ( MCQ question ) type each question carry 2 marks.<br>
5). User must score the above 35% pass the test.<br>
6). please provide correct information for online process payment like Aadhar card number ,user full name, address, pin code and select proper payment option.<br>
7).dont miss use of this certificate.<br>
Have a good day <?php echo $userRow['userName']; ?> .<br>
</strong></div></td>
 </tr>

</table>
</body>
</html>