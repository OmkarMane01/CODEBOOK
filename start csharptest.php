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
<h1 aliqn="center" class="stylea">Csharp TEST </h1>

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
 <form action="csharp cert.php" method="post">
   <p>Q1].<b>CLR is the .NET equivalent of _________.</b> <br>
         <input type="Checkbox" name="q1" value="a">  
     Java Virtual Machine.<br>
       <input type="Checkbox" name="q1" value="b">  
     Common Language Runtime.<br>
       <input type="Checkbox" name="q1" value="c">  
    Common Type System.<br>
       <input type="Checkbox" name="q1" value="d">  
     Common Language Specification.<br>
     Q2].<b> CLR is physically represented by an assembly named _______?</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     mscoree.dll.<br>
     <input type="Checkbox" name="q2" value="b">  
    mcoree.dll .<br>
     <input type="Checkbox" name="q2" value="c">  
     mcodree.dll.<br>
     <input type="Checkbox" name="q2" value="d">  
     mcore.dll.<br>
     Q3].<b>SOAP stands for __________.</b> <br>
     <input type="Checkbox" name="q3" value="a">  
     Simple Object Access Program.<br>
     <input type="Checkbox" name="q3" value="b">  
     Simple Object Access ProtocolSimple Object Application Protocol.<br>
     <input type="Checkbox" name="q3" value="c">  
     Simple Object Application Protocol.<br>
     <input type="Checkbox" name="q3" value="d">  
     Simple Object Account Protocol.<br>
     Q4].<b>The ____ language allows more than one method in a single class</b> <br>
     <input type="Checkbox" name="q4" value="a">  
     C#J#..<br>
     <input type="Checkbox" name="q4" value="b">  
    J#. <br />
     <input type="Checkbox" name="q4" value="c">  
     C++.<br>
     <input type="Checkbox" name="q4" value="d">  
     C.<br> 
     Q5].<b>In C#, a subroutine is called a ________.</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     Function.<br>
     <input type="Checkbox" name="q5" value="b">   
     Metadata.<br>
     <input type="Checkbox" name="q5" value="c">  
     Method.<br>
     <input type="Checkbox" name="q5" value="d">  
     Managed code.<br>
     Q6].<b>All C# applications begin execution by calling the _____ method.?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     Class().<br>
     <input type="Checkbox" name="q6" value="b">  
     Main().<br>
     <input type="Checkbox" name="q6" value="c">  
     Submain().<br>
     <input type="Checkbox" name="q6" value="d">  
     Namespace.<br>
     
     Q7].<b>A _______ is an identifier that denotes a storage location.</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     Constant.<br>
     <input type="Checkbox" name="q7" value="b">  
     Variable.<br>
     <input type="Checkbox" name="q7" value="c">  
     Reference type.<br>
     <input type="Checkbox" name="q7" value="d">  
     Object.<br>
     Q8].<b> _________ are reserved, and cannot be used as identifiers.</b> <br>
     <input type="Checkbox" name="q8" value="a">  
     Keywords.<br>
     <input type="Checkbox" name="q8" value="b">  
     literal.<br>
     <input type="Checkbox" name="q8" value="c">  
     variables.<br>
     <input type="Checkbox" name="q8" value="d">  
      Identifiers.<br>
     Q9].<b>Boxing converts a value type on the stack to an ______ on the heap.   
</b> <br>
     <input type="Checkbox" name="q9" value="a">
     Bool type.<br>
     <input type="Checkbox" name="q9" value="b">   
     Instance type.<br>
     <input type="Checkbox" name="q9" value="c">  
      Class type.<br>
     <input type="Checkbox" name="q9" value="d">  
     Object type.<br>
     Q10].<b>The character pair ?: is a________________available in C#.</b> <br>
     <input type="Checkbox" name="q10" value="a">  Unary operator .<br>
     <input type="Checkbox" name="q10" value="b">  
     Ternary operator.<br>
     <input type="Checkbox" name="q10" value="c">  
     Decision operator.<br>
     <input type="Checkbox" name="q10" value="d">  
     Functional operator.<br>

     Q11].<b>In C#, all binary operators are ______.</b> <br>
         <input type="Checkbox" name="q11" value="a">  
      Center-associative.<br>
       <input type="Checkbox" name="q11" value="b">  
     Right-associative.<br>
       <input type="Checkbox" name="q11" value="c">  
    Left-associative.<br>
       <input type="Checkbox" name="q11" value="d">  
      Top-associative.<br>
     Q12].<b>An _______ is a symbol that tells the computer to perform certain mathematical or logical manipulations.?</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     Operator.<br>
     <input type="Checkbox" name="q12" value="b">  
     Expression.<br>
     <input type="Checkbox" name="q12" value="c">  
     Condition.<br>
     <input type="Checkbox" name="q12" value="d">  
     Logic.<br>
     Q13].<b>. A _____ is any valid C# variable ending with a colon.</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     goto.<br>
     <input type="Checkbox" name="q13" value="b">  
     Label.<br>
     <input type="Checkbox" name="q13" value="c">  
     Logical.<br>
     <input type="Checkbox" name="q13" value="d">  
     non of this.<br>
     Q14].<b>C# has _______ operator, useful for making two way decisions.</b> <br>
     <input type="Checkbox" name="q14" value="a">  
     Looping.<br>
     <input type="Checkbox" name="q14" value="b">  
      Functional.<br />
     <input type="Checkbox" name="q14" value="c">  
     Exponential.<br>
     <input type="Checkbox" name="q14" value="d">  
     Conditional.<br> 
     Q15].<b>________causes the loop to continue with the next iteration after skipping any statements in between.   
</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     Loop.<br>
     <input type="Checkbox" name="q15" value="b">   
     Exit.<br>
     <input type="Checkbox" name="q15" value="c">  
     Break.<br>
     <input type="Checkbox" name="q15" value="d">  
     Continue.<br>
     Q16].<b>
16.  An ____ is a group of contiguous or related data items that share a common name.?</b> <br>
     <input type="Checkbox" name="q16" value="a">  
      Operator.<br>
     <input type="Checkbox" name="q16" value="b">  
     Integer.<br>
     <input type="Checkbox" name="q16" value="c">  
     Exponential.<br>
     <input type="Checkbox" name="q16" value="d">  
     Array.<br>
     
     Q17].<b>Arrays in C# are ______ objects</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     Reference.<br>
     <input type="Checkbox" name="q17" value="b">  
     Logical.<br>
     <input type="Checkbox" name="q17" value="c">  
      Value.<br>
     <input type="Checkbox" name="q17" value="d">  
     Arithmetic.<br>
     Q18].<b> Multidimensional arrays are sometimes called _______ Arrays.  
?</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     Square.<br>
     <input type="Checkbox" name="q18" value="b">  
      Triangular.<br>
     <input type="Checkbox" name="q18" value="c">  
      Rectangular.<br>
     <input type="Checkbox" name="q18" value="d">  
      Cube.<br>
     Q19].<b>______ parameters are used to pass results back to the calling method.</b> <br>
     <input type="Checkbox" name="q19" value="a">
     Input.<br>
     <input type="Checkbox" name="q19" value="b">   
     Reference.<br>
     <input type="Checkbox" name="q19" value="c">  
      Value.<br>
     <input type="Checkbox" name="q19" value="d">  
     Output.<br>
     Q20].<b> The formal-parameter-list is always enclosed in _______.?</b> <br>
     <input type="Checkbox" name="q20" value="a">   Square.<br>
     <input type="Checkbox" name="q20" value="b">  
     Semicolon.<br>
     <input type="Checkbox" name="q20" value="c">  
     Parenthesis.<br>
     <input type="Checkbox" name="q20" value="d">  
      Colon.<br>
     
      


    
     
      

     
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
