<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>index</title>
<style type="text/css">
<!--
.style1{
	background-color: #FFFF00;
	letter-spacing: 2px;
	color:#000000;
	text-decoration: blink;
 }

.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 24px;
	text-decoration: underline;	
	}
	.style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	
	color: #0000FF;
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
	.input1{
	height:50px;
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

    <br />
	<br />        
<h4><form action="log.php" method="post" >
        <table width="289" border="0.1" align="center" bordercolor="#333333" bgcolor="black">
              <tr>
		          <td width="283" height="42" class="style2"><center>
		            LOGIN
		          </center>
	            </td>
             </tr>
		      <tr>
		          <td height="50">Email:<br />
		          <input class="input" name="email" type="text" size="40" maxlength="40" placeholder=" Your Email."/>
	            <br /></td>
		    </tr>
		    <tr>
		        <td height="50">password:<br />
	            <input class="input" type="password" name="pass" size="40" maxlength="20" placeholder=" Your Password."/><br />		   </td>
		    </tr>
            <tr>
		       <td height="50" ><br/>
		         <center ><input class="button" name="login" type="submit" value="login" size="15" />
	          </center></td>
           </tr>
		   <tr><td><a href="Regestration.php" class="style3">Sign Up Here...</a></td>
		   </tr>
    </table>
</form>
</h4>


<br/>
</body>
</html>
