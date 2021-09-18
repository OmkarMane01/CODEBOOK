
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
<title>Help-<?php echo $userRow['userName']; ?></title>
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
	width: 8.35%;
}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
<table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Help</div></td>
 </tr> 
</table>
<br />
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942">
<table align="center" border="2" bordercolor="#FFFFFF">
<tr>
<td height="34"><div align="center">Name</div></td>
<td><div align="center">Mobile NO</div></td>
 <td><div align="center">Email ID</div></td></tr>
 
 <td height="32">Omkar Mane</td>
<td>7058624001</td>
 <td>omkarmane010197@gmail.com</td></tr>
 <td height="34">Ruturaj patil</td>
<td>9284553261</td>
 <td>ruturaj.patil550@gmail.com</td></tr>
 
 
 </table>



</body>
</html>
