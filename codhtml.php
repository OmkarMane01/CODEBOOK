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
<title>htmlcash on deliver-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
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
    .stylea{
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
	width: 27%;
}
.style4
{
	color: #FF0000;
}
.input{
	height:25px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
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
</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> PAYMENYT OPTION </h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">cash on deliver </div></td>
   </tr>
</table><br />
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center">
 <h4><center><form action="codhtml2.php" method="post" autocomplete="off">
First-Name:  <input class="input" name="first" type="text"  size="31" maxlength="15" placeholder="Enter the First Name."/><br /><br />
Middle-Name:  <input  class="input" name="middle" type="text"  size="29" maxlength="15" placeholder="Enter the Middle Name."/><br /><br />
Last-Name:   <input class="input" name="last" type="text"  size="32" maxlength="15"  placeholder="Enter the Last Name."/><br /><br />
Mobile_No :<input  class="input" name="mobile" type="text"  size="32" maxlength="10" placeholder="Enter the Mobile No."/><br /><br />
Adhar no :<input class="input" name="uid" type="text"  size="33" maxlength="16" placeholder="Enter the Adhar no."/><br /><br />
Address :<input  class="input" name="address" type="text" size="34" maxlength="50"/ placeholder="Enter the Address."><br /><br />
 pin code no :<input class="input" name="pin" type="text"  size="32" maxlength="6" placeholder="Enter the Adhar no."/><br /><br />
 Select Course's :<select class="input" name="dropdown">
<option value="cpp" selected>c++</option>
<option value="java" selected>java</option>
<option value="csharp" selected>C#</option>
<option value="python" selected>python</option>
<option value="php" selected>php</option>
<option value="html" selected>html</option>
<option value="mysql" selected>mysql</option>
<option value="smart user" selected>smart user</option>

</select><br /><br />
<input class="button1" name="buy" type="submit" value="BUY NOW" size="15" />
</form>
</center>
</h4>
 
 
 
 </div></td>
 </tr>
 
 
</table>
  
   
 




</body>
</html>
