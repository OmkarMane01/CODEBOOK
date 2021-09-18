<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Regestration</title>
<style type="text/css">
<!--
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
 }
 .style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	
	color: #0000FF;
	}

.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	text-decoration: underline;	
	}
.button{
	background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:40%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	}
	.input{
	height:25px;
	border-top-color: #F0F0F0;
	background-color: #FFFFFF;
	border-color: #0B0B0B;
	}
	.over{
	color:#FFFFFF;}

-->
</style>
</head>

<body  background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>

<h4>
<form action="reg.php" method="post" autocomplete="off">
  <table align="center" bgcolor="black" >
     <tr>
       <td width="290"><div align="center" class="style2">SIGNUP </div></td>
	 </tr>
	 <tr>
       <td>FullName:<br /><input class="input" name="name" type="text" size="40" maxlength="30" placeholder=" Your FullName."/>
		   <br /> </td>
	 <tr>
       <td>Email-id:<br /><input class="input" name="email" type="text" size="40" maxlength="30" placeholder=" Your Email."/>
		   <br /></td>
	 </tr>
	 
	 
	 <tr>
       <td>Password:<br /><input class="input" name="pass" type="password" size="40" maxlength="20" placeholder=" Your Password."/>
		   <br /></td>
	 </tr>
	 <tr>
       <td>Confirm Password:<br /><input class="input" name="pass2" type="password" size="40" maxlength="20" placeholder=" Your Confirm Password."/>
		   <br /></td>
	 </tr>
	 <td><br/><center ><input class="button" name="reg" type="submit" value="signup" size="15" /></center></td>
         </tr>
		 <tr><td> <a href="index.php" class="style3"> Sign in Here...</a></td></tr>
  </table>
</form>
</h4>
</body>
</html>
