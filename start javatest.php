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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.orq/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.orq/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cash on deliver-<?php echo $userRow['userName']; ?></title>
<style type="text/css">
.style1{
	background: #FFFF00;
	letter-spacing: 2px;
	color: #000000;
	text-decoration: blink;
	}
	.button1 {
	background-color: #3333FF;
	color: #FFFFFF;
	padding: 20px 30px;
	width: 40px;
	height:40px;
	outline-width:thin;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:18px;
}
    .stylea{

    background-color:#FFFF00;
	letter-spacing: 2px;
	color: #000000;
	text-decoration: blink;
	
	} 
	.over{
	
	color: #FFFFFF;
	}
.style3 {
	;
	font-size:36px;
	font-family:"Britannic Bold";
	text-transform:capitalize;
	border-top-color:#000000;
	border-right-color:#00000;
	border-bottom-color:#000000;
	border-left-color:#000000;
}
.input{
	
	height:25xp;
	border-top-color:#F0F0F0;
	background-color:#FFFFFF;
	border-color:#0B0B0B;
	
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
	.colo{color:red;}
</style>
</head>

<body  background="images/index.png" class="over"> 
<h1 class="style1">CODEBOOK</h1>
<h1 aliqn="center" class="stylea">JAVA TEST </h1>

<div aliqn="center">
  <table border="1" align="center" aliqn="center" bqcolor="#000000" >
    <tr>
      <td class="style3"><div align="center">Multiple Choice Question</div></td>
    </tr>
</table>
<br />
<table width="950" align="center" bgcolor="#000000">
 <tr><td width="942"><div align="center" class="style3"><stronq>QUESTION</stronq></div></td>
 </tr>
 <tr><td align="center" >
 
     <div class="colo"><h2><p id="para"></p></h2>
    <img id="image" >
        
    <script>
    
    let seconds = 1500;
    
   document.getElementById("para").innerHTML = `${Math.floor(seconds / 60)}:${seconds % 60 < 10 ? 0 : ""}${seconds % 60}`;

    seconds--;

    setInterval(() => {
      if (seconds < 0) { 
document.getElementById("para").style.display = "none"; document.getElementById("image").style.display = "block";
 return; }
      document.getElementById("para").innerHTML = `<p>${Math.floor(seconds / 60)}:${seconds % 60 < 10 ? 0 : ""}${seconds % 60}</p>`;
      seconds--;
    }, 1000);

    </script>
 </td></tr>
 <tr><td>
 <form action="java cert.php" method="post">
   <p>Q1]What is type range of short data type in java?.<b></b> <br>
          <input type="Checkbox" name="q1" value="a">  
     -128 to127.<br>
       <input type="Checkbox" name="q1" value="b">  
     -32768 to 32767.<br>
       <input type="Checkbox" name="q1" value="c">  
    -21474836587 to 2145786584.<br>
       <input type="Checkbox" name="q1" value="d">  
     no of this.<br>
     Q2].<b> an expression involving byte,int and literal number is promoted to which of these?</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     int.<br>
     <input type="Checkbox" name="q2" value="b">  
     long.<br>
     <input type="Checkbox" name="q2" value="c">  
     byte.<br>
     <input type="Checkbox" name="q2" value="d">  
     float.<br>
     Q3].<b>Which data type value is returened by all trancendental ,maths function?</b> <br>
     <input type="Checkbox" name="q3" value="a">  
     int.<br>
     <input type="Checkbox" name="q3" value="b">  
     float.<br>
     <input type="Checkbox" name="q3" value="c">  
     double.<br>
     <input type="Checkbox" name="q3" value="d">  
     long.<br>
     Q4].<b>Firstly java was called________ by james Gosling.</b> <br>
     <input type="Checkbox" name="q4" value="a">  
     Greentalk.<br>
     <input type="Checkbox" name="q4" value="b">  
     oak.<br />
     <input type="Checkbox" name="q4" value="c">  
     jave.<br>
     <input type="Checkbox" name="q4" value="d">  
     Gosl.<br> 
     Q5].<b>java Interpreter is used for which purpose?</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     compile java program.<br>
     <input type="Checkbox" name="q5" value="b">   
     Execute class file.<br>
     <input type="Checkbox" name="q5" value="c">  
     both.<br>
     <input type="Checkbox" name="q5" value="d">  
     non of this.<br>
     Q6].<b>What is the return type of program’s main( ) method?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     void main.<br>
     <input type="Checkbox" name="q6" value="b">  
     void.<br>
     <input type="Checkbox" name="q6" value="c">  
     both.<br>
     <input type="Checkbox" name="q6" value="d">  
     non of this.<br>
     
     Q7].<b>What are different comments?</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     // -- single line comment
.<br>
     <input type="Checkbox" name="q7" value="b">  
     */ multiple line comment.<br>
     <input type="Checkbox" name="q7" value="c">  
     /** --
*/ documentation.<br>
     <input type="Checkbox" name="q7" value="d">  
     all of this.<br>
     Q8].<b> Java supports multidimensional arrays.?</b> <br>
     <input type="Checkbox" name="q8" value="a">  
     True.<br>
     <input type="Checkbox" name="q8" value="b">  
     False.<br>
     
     Q9].<b>What is the argument type of program’s main( ) method?</b> <br>
     <input type="Checkbox" name="q9" value="a">
     array.<br>
     <input type="Checkbox" name="q9" value="b">   
     string.<br>
     <input type="Checkbox" name="q9" value="c">  
     string array.<br>
     <input type="Checkbox" name="q9" value="d">  
     all of this.<br>
     Q10].<b> Which operator is to create and concatenate string?</b> <br>
     <input type="Checkbox" name="q9" value="a">  
     -.<br>
     <input type="Checkbox" name="q10" value="b">  
     +.<br>
     <input type="Checkbox" name="q10" value="c">  
     *.<br>
     <input type="Checkbox" name="q10" value="d">  
     /.<br>
     <p>Q11].<b>What is the value of a[3] as the result of the following array declaration?</b> <br>
         <input type="Checkbox" name="q11" value="a">  
     1.<br>
       <input type="Checkbox" name="q11" value="b">  
     2.<br>
       <input type="Checkbox" name="q11" value="c">  
    3.<br>
       <input type="Checkbox" name="q11" value="d">  
     4.<br>
     Q12].<b> Which of the following are primitive types?
</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     byte.<br>
     <input type="Checkbox" name="q12" value="b">  
     String
.<br>
     <input type="Checkbox" name="q12" value="c">  
     integer.<br>
     <input type="Checkbox" name="q12" value="d">  
     Float.<br>
     Q13].<b>What are the values of x and y ?
x = 5; y = ++x;</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     x = 5; y = 6.<br>
     <input type="Checkbox" name="q13" value="b">  
     x = 6; y = 6.<br>
     <input type="Checkbox" name="q13" value="c">  
     x = 6; y = 5.<br>
     <input type="Checkbox" name="q13" value="d">  
     no of this.<br>
     Q14].<b>Constructors can be overloaded like regular methods.</b> <br>
     <input type="Checkbox" name="q14" value="a">  
     True.<br>
     <input type="Checkbox" name="q14" value="b">  
     False<br />
     
     Q15].<b>Casting between primitive types allows conversion of one primitive type to another</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     True.<br>
     <input type="Checkbox" name="q15" value="b">   
     False.<br>
     
     Q16].<b>Which of the selection test only for equality?</b> <br>
     <input type="Checkbox" name="q16" value="a">  
     if.<br>
     <input type="Checkbox" name="q16" value="b">  
     switch.<br>
     <input type="Checkbox" name="q16" value="c">  
     if &switch.<br>
     <input type="Checkbox" name="q16" value="d">  
     non of this.<br>
     
     Q17].<b>Which of the are selection in java?</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     if().<br>
     <input type="Checkbox" name="q17" value="b">  
     for().<br>
     <input type="Checkbox" name="q17" value="c">  
     continue.<br>
     <input type="Checkbox" name="q17" value="d">  
     break.<br>
     Q18].<b> Which of these jump statement?</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     break.<br>
     <input type="Checkbox" name="q18" value="b">  
     return.<br>
     <input type="Checkbox" name="q18" value="c">  
     exit.<br>
     <input type="Checkbox" name="q18" value="d">  
     continue.<br>
     Q19].<b>The ++ operator is used for incrementing and the -- operator is used for
decrementing</b> <br>
     <input type="Checkbox" name="q19" value="a">
     True.<br>
     <input type="Checkbox" name="q19" value="b">   
     False.<br>
     
     Q20].<b> Name interfaces without a method??</b> <br>
     <input type="Checkbox" name="q20" value="a">  Serializable,  &  .<br>
     <input type="Checkbox" name="q20" value="b">  
     Cloneble.<br>
     <input type="Checkbox" name="q20" value="c">  
     Remote.<br>
     <input type="Checkbox" name="q20" value="d">  
     all of this.<br>
     
      </p>

      </p>
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
