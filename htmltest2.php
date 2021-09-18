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






if (isset($_POST['Continue']))
{ 
if($_POST['g'] == "a")
{ 
   echo "<script type='text/javascript'>alert('Select the Payment option Cash on Deliver.Thank you!')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='codhtml.php' </script>";
}
elseif ($_POST['g'] == "b")
{ 
   echo "<script type='text/javascript'>alert('Select the Payment option  Credit Card.Thank you!')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='htmlCreditCard.php' </script>";
}
 elseif ($_POST['g'] == "c")
{ 
   echo "<script type='text/javascript'>alert('Select the Payment option   Debit Card.Thank you!')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='htmlDebitCard.php' </script>";
}else{ 
   echo "<script type='text/javascript'>alert('Select the Payment option plz. !')</script>";
  echo"<script language='javascript' type='text/javascript'> location.href='htmltest2.php' </script>";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>htmltest-<?php echo $userRow['userName']; ?></title>
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
	width:  13%;
}
.style4
{
	color: #FF0000;
}


</style>
</head>

<body background="images/index.png"class="over">
<h1 class="style1">CODEBOOK</h1>
<h1 align="center" class="stylea"> <a href="Course.php">Course's</a>   <a href="comment.php">Post</a>    <a href="Chall.php">Challenge</a>    <a href="pro.php">Profile</a></h1>
 
<div align="center">
  <table border="1" align="center" bgcolor="#000000" >
    <tr><td class="style3"><div align="center">html test</div></td>
   </tr>
</table><br />
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style2"><strong>Exam From</strong></div></td>
 </tr>
 <tr><td>
                 <h4>userId  :   <?php echo $userRow['userId']; ?><br /></h4>
               <h4> userName     :  <?php echo $userRow['userName']; ?><br /></h4>
                <h4> userEmail   :  <?php echo $userRow['userEmail']; ?><br /><h4> 
                <span class="style4">
                <h4>
                <strong>                Fee of Test : 2500 RS /-</strong>
                <h4>
                </span>         


<br />
		<center><h1>Payments option's.</h1></center>
		<center><form action="htmltest2.php" method="post">
		<input type="Checkbox" name="g" value="a">  Cash on Deliver.
        <input type="Checkbox" name="g" value="b">  Credit Card.
		<input type="Checkbox" name="g" value="c">  Debit Card.
		
		
		<br><br />
             <input class="button1" name="Continue" type="submit" value="Continue"  />
		</form>		
				
				
				 
				 
				 
				 </td> </tr>
 
</table>
  
   
 




</body>
</html>
