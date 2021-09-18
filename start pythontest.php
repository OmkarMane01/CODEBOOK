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
<h1 aliqn="center" class="stylea">PYTHON TEST </h1>

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
 <form action="python cert.php" method="post">
   <p><p>Q]1.<b>Is Python case sensitive when dealing with identifiers?</b> <br>
         <input type="Checkbox" name="q1" value="a">  
     yes.<br>
       <input type="Checkbox" name="q1" value="b">  
     no.<br>
       <input type="Checkbox" name="q1" value="c">  
    machine dependent.<br>
       <input type="Checkbox" name="q1" value="d">  
    none of the mentioned .<br>
     Q2].<b> What is the maximum possible length of an identifier?</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     31 characters.<br>
     <input type="Checkbox" name="q2" value="b">  
     63 characters.<br>
     <input type="Checkbox" name="q2" value="c">  
     .79 characters<br>
     <input type="Checkbox" name="q2" value="d">  
     none of the mentioned.<br>
     Q3].<b>Which of the following is invalid? 
</b> <br>
     <input type="Checkbox" name="q3" value="a">  
     _a = 1.<br>
     <input type="Checkbox" name="q3" value="b">  
      __a = 1.<br>
     <input type="Checkbox" name="q3" value="c">  
     __str__ = 1.<br>
     <input type="Checkbox" name="q3" value="d">  
    none of the mentioned .<br>
     Q4].<b>Which of the following is an invalid variable? 
</b> <br>
     <input type="Checkbox" name="q4" value="a">  
     my_string_1.<br>
     <input type="Checkbox" name="q4" value="b">  
     1st_string<br />
     <input type="Checkbox" name="q4" value="c">  
     foo.<br>
     <input type="Checkbox" name="q4" value="d">  
     _.<br> 
     Q5].<b>Why are local variable names beginning with an underscore discouraged? 
</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     they are used to indicate a private variables of a class.<br>
     <input type="Checkbox" name="q5" value="b">   
     they confuse the interpreter.<br>
     <input type="Checkbox" name="q5" value="c">  
     they are used to indicate global variables.<br>
     <input type="Checkbox" name="q5" value="d">  
     they slow down execution.<br>
     Q6].<b>Which is the correct operator for power(x^y)?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     X^y.<br>
     <input type="Checkbox" name="q6" value="b">  
     X**y.<br>
     <input type="Checkbox" name="q6" value="c">  
     X^^y.<br>
     <input type="Checkbox" name="q6" value="d">  
     None of the mentioned.<br>
     
     Q7].<b>. Which one of these is floor division?</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     /.<br>
     <input type="Checkbox" name="q7" value="b">  
     //.<br>
     <input type="Checkbox" name="q7" value="c">  
      %.<br>
     <input type="Checkbox" name="q7" value="d">  
     None of the mentioned.<br>
     Q8].<b> What is the output of this expression, 3*1**3??</b> <br>
     <input type="Checkbox" name="q8" value="a">  
      27.<br>
     <input type="Checkbox" name="q8" value="b">  
      9.<br>
     <input type="Checkbox" name="q8" value="c">  
     3.<br>
     <input type="Checkbox" name="q8" value="d">  
     1.<br>
     Q9].<b>What is the output of the following?<br>

x = ['ab', 'cd']<br>
for i in x:<br>
    i.upper()<br>
print(x)<br>
 
</b> <br>
     <input type="Checkbox" name="q9" value="a">
     [‘ab’, ‘cd’].<br>
     <input type="Checkbox" name="q9" value="b">   
     [‘AB’, ‘CD’].<br>
     <input type="Checkbox" name="q9" value="c">  
     [None, None].<br>
     <input type="Checkbox" name="q9" value="d">  
     none of the mentioned.<br>
     Q10].<b> What is the output of the following? <br>

i = 1<br>
while True: <br>
    if i%0O7 == 0: <br>
        break<br>
    print(i) <br>
    i += 1<br></b> <br>
     <input type="Checkbox" name="q10" value="a">  1 2 3 4 5 6 .<br>
     <input type="Checkbox" name="q10" value="b">  
     1 2 3 4 5 6 7.<br>
     <input type="Checkbox" name="q10" value="c">  
     error.<br>
     <input type="Checkbox" name="q10" value="d">  
     none of the mentioned.<br>
     
      


     Q11].<b>. What is the output when following statement is executed ?

>>>"a"+"bc"
</b> <br>
         <input type="Checkbox" name="q11" value="a">  
      a.<br>
       <input type="Checkbox" name="q11" value="b">  
     bc.<br>
       <input type="Checkbox" name="q11" value="c">  
    bca.<br>
       <input type="Checkbox" name="q11" value="d">  
      abc.<br>
     Q12].<b> What is the output when following statement is executed ?

>>>"abcd"[2:]
</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     a.<br>
     <input type="Checkbox" name="q12" value="b">  
     ab.<br>
     <input type="Checkbox" name="q12" value="c">  
     cd.<br>
     <input type="Checkbox" name="q12" value="d">  
      dc.<br>
     Q13].<b>. The output of executing string.ascii_letters can also be achieved by:
</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     string.ascii_lowercase_string.digits.<br>
     <input type="Checkbox" name="q13" value="b">  
     string.ascii_lowercase+string.ascii_upercase.<br>
     <input type="Checkbox" name="q13" value="c">  
     string.letters.<br>
     <input type="Checkbox" name="q13" value="d">  
      string.lowercase_string.upercase.<br>
     Q14].<b>What is the output when following code is executed ?

>>> str1 = 'hello'<br>
>>> str2 = ','<br>
>>> str3 = 'world'<br>
>>> str1[-1:]<br>
 
</b> <br>
     <input type="Checkbox" name="q14" value="a">  
     olleh.<br>
     <input type="Checkbox" name="q14" value="b">  
     hello<br />
     <input type="Checkbox" name="q14" value="c">  
      h.<br>
     <input type="Checkbox" name="q14" value="d">  
     o.<br> 
     Q15].<b>. What arithmetic operators cannot be used with strings ? 
</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     +.<br>
     <input type="Checkbox" name="q15" value="b">   
     *.<br>
     <input type="Checkbox" name="q15" value="c">  
      –.<br>
     <input type="Checkbox" name="q15" value="d">  
     All of the mentioned.<br>
     Q16].<b>What is the output when following code is executed ?

>>>names = ['Amir', 'Bear', 'Charlton', 'Daman']<br>
>>>print(names[-1][-1])<br>
</b> <br>
     <input type="Checkbox" name="q16" value="a">  
      A.<br>
     <input type="Checkbox" name="q16" value="b">  
     Daman.<br>
     <input type="Checkbox" name="q16" value="c">  
     Error.<br>
     <input type="Checkbox" name="q16" value="d">  
      n.<br>
     
     Q17].<b>. Which of the following is a Python tuple?. 
?</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     [1, 2, 3].<br>
     <input type="Checkbox" name="q17" value="b">  
     (1, 2, 3).<br>
     <input type="Checkbox" name="q17" value="c">  
     {1, 2, 3}.<br>
     <input type="Checkbox" name="q17" value="d">  
     {}.<br>
     Q18].<b>Suppose t = (1, 2, 4, 3), which of the following is incorrect?
</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     print(t[3]).<br>
     <input type="Checkbox" name="q18" value="b">  
     t[3] = 45.<br>
     <input type="Checkbox" name="q18" value="c">  
     print(max(t)).<br>
     <input type="Checkbox" name="q18" value="d">  
     print(len(t)).<br>
     Q19].<b>. What will be the output?

>>>t=(1,2,4,3)<br>
>>>t[1:3]<br>
 
</b> <br>
     <input type="Checkbox" name="q19" value="a">
     (1, 2).<br>
     <input type="Checkbox" name="q19" value="b">   
    (1, 2, 4) .<br>
     <input type="Checkbox" name="q19" value="c">  
     (2, 4).<br>
     <input type="Checkbox" name="q19" value="d">  
     (2, 4, 3).<br>
     Q20].<b>  Python was developed by __________.
</b> <br>
     <input type="Checkbox" name="q20" value="a">  William R. Stanek .
 .<br>
     <input type="Checkbox" name="q20" value="b">  
     Guido van Rossum.
.<br>
     <input type="Checkbox" name="q20" value="c">  
     Behrouz Forouzan..<br>
     <input type="Checkbox" name="q20" value="d">  
     om ArcherT.<br>
     

      </p>
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
