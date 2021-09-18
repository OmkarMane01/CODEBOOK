<?php


include_once 'connection.php';




?>  	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FeedBack-<?php echo $userRow['userName']; ?></title>
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
	width: 12%;
}
.style6{color:#FF0000;}
	
	.style9 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
	
	color: #0000FF;
	}
	.style10{
	color:#FF0000;
	text-align:center;
	font:Arial, Helvetica, sans-serif;
	font-size: 20px;
}
</style>
</head>

<body background="images/index.png" class="over">
<h1 class="style1">CODEBOOK</h1>
<table border="1" align="center" bgcolor="#000000">
 <tr><td class="style3"><div align="center">Notice</div></td>
 </tr> 
</table><br />

<table width="790" align="center" bgcolor="#000000" border="2" bordercolor="#FFFFFF">
 <tr><td width="778" >
 <hr color="red"  />
		<p class="style10"><?php
		$_result = mysqli_query($_conn,"SELECT * from notice");
while ($_row = mysqli_fetch_array($_result) ) {
     

          
	     
	            echo $_row['date']; echo "<br>";
	            echo $_row['headline']; echo "<br>";
	            echo $_row['info']; echo "<br>";
	            echo $_row['links']; 
		  
	}
?>		</p>
	  
		
		 	 	 	 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
</td>
</tr></table>




