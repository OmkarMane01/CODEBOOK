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
if (isset($_POST['ans']))
{ 


$_count1=0;
$_count2=0;
$_count3=0;
$_count4=0;
$_count5=0;
$_count6=0;
$_count7=0;
$_count8=0;
$_count9=0;
$_count10=0;
$_count11=0;
$_count12=0;
$_count13=0;
$_count14=0;
$_count15=0;
$_count16=0;
$_count17=0;
$_count18=0;
$_count19=0;
$_count20=0;
$_count21=0;
$_count22=0;
$_count23=0;
$_count24=0;
$_count25=0;
$_count26=0;
$_count27=0;
$_count28=0;
$_count29=0;
$_count30=0;
if($_POST['q1'] == "a")
{
	$_count1++;
}
if ($_POST['q2'] == "a") {
	$_count2++;
}
if ($_POST['q3'] == "b") {
	$_count3++;
}
if ($_POST['q4'] == "a") {
	$_count4++;
}
if ($_POST['q5'] == "c") {
	$_count5++;
}
if ($_POST['q6'] == "b") {
	$_count6++;
}
if ($_POST['q7'] == "c") {
	$_count7++;
}
if ($_POST['q8'] == "a") {
	$_count8++;
}
if ($_POST['q9'] == "d") {
	$_count9++;
}
if ($_POST['q10'] == "b") {
	$_count10++;
}
if ($_POST['q11'] == "c") {
	$_count11++;
}
if ($_POST['q12'] == "a") {
	$_count12++;
}
if ($_POST['q13'] == "b") {
	$_count13++;
}
if ($_POST['q14'] == "d") {
	$_count14++;
}
if ($_POST['q15'] == "d") {
	$_count15++;
}
if ($_POST['q16'] == "d") {
	$_count16++;
}
if ($_POST['q17'] == "a") {
	$_count17++;
}
if ($_POST['q18'] == "c") {
	$_count18++;
}
if ($_POST['q19'] == "d") {
	$_count19++;
}
if ($_POST['q20'] == "c") {
	$_count20++;
}

	 

$_tot1=$_count1+$_count2+$_count3+$_count4+$_count5+$_count6+$_count7+$_count8+$_count9+$_count10;
$_tot2=$_count11+$_count12+$_count13+$_count14+$_count15+$_count16+$_count17+$_count18+$_count19+$_count20;

$_tot=$_tot1+$_tot2;
$_w=$_tot-20;
$_mk=$_tot*2;
$per=(($_mk*100)/40);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.orq/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.orq/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Certificate Csharp-<?php echo $userRow['userName']; ?></title>
<style type="text/css">

	.style1{
	color:#FF0000;
	font-size: 1cm;
	font-style: italic;
	font-weight: bold;
	text-transform: capitalize;
	}
	.over{
	color:#FFFFFF;
	word-spacing: 5px;
	background-color: #FFFF00;
}
.style2{
	;
	color:#FFFF00;
	font-family:"Courier New", Courier, monospace;
		
		
}
.style3 {
	font-size: 36px;
	font-family: "Britannic Bold";
	text-transform: capitalize;
	border-top-color: #000000;
	border-right-color: #000000;
	border-bottom-color: #000000;
	border-left-color: #000000;
	width: 23%;
}
.style4{color:#FF0000;
font:Arial, Helvetica, sans-serif;}

.styleprint{background-color: #3333FF;
	color:#FFFFFF;
	padding: 20px 30xp;
	border-radius:2xp;
	width:10%;
	height:40px;
	outline-width: thin;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;

}
</style>

</head>
<body background="images/index.png"class="over">
<br /><br />
<div align="right"><button class="styleprint" onclick="myFunction()">Print!</button></div>
<script>
function myFunction() {
    window.print();
}
</script>

<br /><br />
 <table width="981" height="482" border="10" align="center"  bordercolor="#FF0000"  bgcolor="#000000">
 <tr><td width="953" height="87"><div   align="right" class="style2">
   <h1 align="left" class="style2">CODEBOOK </h1><hr />
 
 <img  src="images/1516524209997.jpg" height="100" width="224"/></div>
   <h1 class="style1">
   <center>Certificate</center></h1>
 <br />

 This is to Certify that<br />
 <h2><?php echo $userRow['userName']; 
 $_name=$userRow['userName'];

 ?></h2><br />
 has Successfully Completed the<br />
 <h1>Csharp Programming Course</h1><br />
 
 
 <table align="right" border="1" bordercolor="#FFFF00">
 <tr><td colspan="5" class="style4"><center><strong>Mark Sheet</strong></center></td></tr>
 <tr>
 <td>Correct Answers</td>
 <td>Wrong Answers</td>
  <td>Marks</td>
   <td>Percentage</td>
   <td>Grade</td>
 </tr>
 <tr>
 <td><?php echo $_tot;?></td>
 <td><?php echo $_w; ?></td>
  <td><?php echo $_mk; ?></td>
   <td><?php echo $per; ?></td>
   <td>
   	<?php 
       if ($per > 70) {
       	echo "Destinction!";
       } elseif ($per > 60) {
       	echo "First Class";
       } elseif ($per > 55) {
       	echo "Second Class";
       }elseif ($per > 35) {
       	echo "Third Class";
       }elseif ($per <35) {
       	echo "Fail!";
       }
       
       
   	 ?>



   </td>
 </tr>
 </table>
   Certificate #00<?php echo $userRow['userId']; ?><br />
   Date #<?php echo  date("Y/m/d");
   $_date=date("Y/m/d");

    ?><br />
  
 <br /><br /><br />
 </td>
<?php
$query = "INSERT INTO csharp (username,	total,	wrong	,mk,	per	,date) VALUES('$_name','$_tot',' $_w','$_mk','$per','$_date')";
			         mysqli_query($_conn,$query,$_conn);



 ?>
 </tr>
 
 
</table>

</body>
</html>