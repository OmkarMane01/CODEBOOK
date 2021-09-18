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
<title>About-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
	}
.over{
	color:#FFFFFF;
	}
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 9.60%;
}
.style2{
	word-spacing: 17.49cm;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style4{
	font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
<table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">About</div></td>
 </tr> 
</table>
<br />
<table width="971" align="center" bgcolor="#000000">
<tr><td width="963" height="40" class="style4">CODEBOOK is a Project Created by OMKAR MANE and RUTURAJ PATIL</td>
</tr>
<tr><td height="40" class="style4">In this project we provied the COURSE like[c,c++,c#,java].</td>
</tr>
<tr><td height="40" class="style4">When User complete the course thy get a certificate.</td>
</tr>
<tr><td height="40" class="style4">if they want the certificate.</td>
</tr>
<tr><td height="40" class="style4">Moto of the project to help IT students and making a best platfrom to IT Feilds.</td>
</tr>
<tr>
  <td height="40" class="style2">OMKAR-MANE:   RUTURAJ-PATIL:</td>
</tr>
<tr><td><img  src="images/profile.jpg" alt="OMKAR-MANE" width="160" height="160" border="" align="left" /> <img src="images/profile.jpg" alt="RUTURAJ-PATIL" width="160" height="160" border="" align="right" /></td>
</tr>
<tr><td height="40" class="style4" align="center">BS.c (computer sci) at GKG Colleges,kolhapur maharashtra.</td></tr>	        
</table>
</body>
</html>
