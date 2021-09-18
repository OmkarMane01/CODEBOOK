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
<title>php test-<?php echo $userRow['userName']; ?></title>
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
<h1 aliqn="center" class="stylea">PHP TEST </h1>

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
 <form action="php cert.php" method="post">

     <p>Q]1.<b>PHP Stands for_________. </b> <br>
         <input type="Checkbox" name="q1" value="a">  
     Php Hypertext Processor.<br>
       <input type="Checkbox" name="q1" value="b">  
    Php Hypertext Preprocessor .<br>
       <input type="Checkbox" name="q1" value="c">  
    Php Hypermarkup Processor.<br>
       <input type="Checkbox" name="q1" value="d">  
     Php Hypermarkup Preprocessor.<br>
     Q2].<b>PHP is _______ scripting language.
</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     Server-side.<br>
     <input type="Checkbox" name="q2" value="b">  
     Clint-side.<br>
     <input type="Checkbox" name="q2" value="c">  
     Middle-side.<br>
     <input type="Checkbox" name="q2" value="d">  
     Out-side.<br>
     Q3].<b>PHP scripts are executed on _________
 </b> <br>
     <input type="Checkbox" name="q3" value="a">  
     ISP Computer.<br>
     <input type="Checkbox" name="q3" value="b">  
     Client Computer.<br>
     <input type="Checkbox" name="q3" value="c">  
      Server Computer.<br>
     <input type="Checkbox" name="q3" value="d">  
     It depends on PHP scripts.<br>
     Q4].<b>What is the use of strlen( ) function in PHP?
 </b> <br>
     <input type="Checkbox" name="q4" value="a">  
     It returns the type of a string.<br>
     <input type="Checkbox" name="q4" value="b">  
     It returns the value of a string<br />
     <input type="Checkbox" name="q4" value="c">  
     It returns the length of a string.<br>
     <input type="Checkbox" name="q4" value="d">  
     It returns the subset value of a string.<br> 
     Q5].<b>Which of the following is the Concatenation Operator in PHP? </b> <br>
     <input type="Checkbox" name="q5" value="a">  
     + (Plus).<br>
     <input type="Checkbox" name="q5" value="b">   
     . (dot).<br>
     <input type="Checkbox" name="q5" value="c">  
     & (Ampersand).<br>
     <input type="Checkbox" name="q5" value="d">  
     % (Percentage).<br>
     Q6].<b>Which of the following is not PHP Loops?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     while.<br>
     <input type="Checkbox" name="q6" value="b">  
     do while.<br>
     <input type="Checkbox" name="q6" value="c">  
     for.<br>
     <input type="Checkbox" name="q6" value="d">  
     do for.<br>
     
     Q7].<b>What is the use of strpos( ) function in PHP?</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     Search for a number within a string.<br>
     <input type="Checkbox" name="q7" value="b">  
     Search for a Spaces within a string.<br>
     <input type="Checkbox" name="q7" value="c">  
      Search for a character/text within a string.<br>
     <input type="Checkbox" name="q7" value="d">  
     Search for a Capitalized string/text with in a string.<br>
     Q8].<b> Where setcookie( ) function must appear in PHP? </b> <br>
     <input type="Checkbox" name="q8" value="a">  
     Before tag.<br>
     <input type="Checkbox" name="q8" value="b">  
     After tag.<br>
     <input type="Checkbox" name="q8" value="c">  
     In tag.<br>
     <input type="Checkbox" name="q8" value="d">  
     Anywhere.<br>
     Q9].<b>What does the hash (#) sign mean in PHP?
</b> <br>
     <input type="Checkbox" name="q9" value="a">
     It indicates lines that are commented out..<br>
     <input type="Checkbox" name="q9" value="b">   
     It indicates variable declaration.<br>
     <input type="Checkbox" name="q9" value="c">  
     It indicates function declaration.<br>
     <input type="Checkbox" name="q9" value="d">  
     No uses in PHP.<br>
     Q10].<b> How to define a variable in PHP? </b> <br>
     <input type="Checkbox" name="q10" value="a">  $variable_name = value .<br>
     <input type="Checkbox" name="q10" value="b">  
     $variable_name = value;.<br>
     <input type="Checkbox" name="q10" value="c">  
     $variable_name == value;.<br>
     <input type="Checkbox" name="q10" value="d">  
     $variable_name as value?.<br>
     
      


     Q11].<b>The uses of strcmp( ) function in PHP?
 It compare strings only lowercase</b> <br>
         <input type="Checkbox" name="q11" value="a">It compare strings including case  
     It compare strings excluding case.<br>
       <input type="Checkbox" name="q11" value="b">  
     It compare strings only Uppercase.<br>
       <input type="Checkbox" name="q11" value="c">  
    It compare strings only lowercase.<br>
       <input type="Checkbox" name="q11" value="d">  
     It compare strings only lowercase.<br>
     Q12].<b>What will be the result of combining a string with another data type in PHP?</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     int.<br>
     <input type="Checkbox" name="q12" value="b">  
     float.<br>
     <input type="Checkbox" name="q12" value="c">  
     string.<br>
     <input type="Checkbox" name="q12" value="d">  
     double.<br>
     Q13].<b>Data for a cookie stored in _________ in PHP?
</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     In ISP Computer.<br>
     <input type="Checkbox" name="q13" value="b">  
     In User’s Computer.<br>
     <input type="Checkbox" name="q13" value="c">  
     In Server Computer.<br>
     <input type="Checkbox" name="q13" value="d">  
    It depends on PHP Coding <br>
     Q14].<b>PHP is a ______ typed language. </b> <br>
     <input type="Checkbox" name="q14" value="a">  
     User.<br>
     <input type="Checkbox" name="q14" value="b">  
     Loosely<br />
     <input type="Checkbox" name="q14" value="c">  
     Server.<br>
     <input type="Checkbox" name="q14" value="d">  
    System .<br> 
     Q15].<b>What does the PHP Interpreter do?</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     It translates User Language to System Language.<br>
     <input type="Checkbox" name="q15" value="b">   
     It creates connection between ISP & Server.<br>
     <input type="Checkbox" name="q15" value="c">  
     It processes the HTML and PHP files.<br>
     <input type="Checkbox" name="q15" value="d">  
      All of these.<br>
     Q16].<b>What does fopen() function do in PHP ?</b> <br>
     <input type="Checkbox" name="q16" value="a">  
     It used to open files in PHP.<br>
     <input type="Checkbox" name="q16" value="b">  
     It used to open Remote Server.<br>
     <input type="Checkbox" name="q16" value="c">  
     It used to open folders in PHP.<br>
     <input type="Checkbox" name="q16" value="d">  
     It used to open Remote Computer.<br>
     
     Q17].<b>What does sprintf() function do in PHP?
</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     it sends output to a variable.<br>
     <input type="Checkbox" name="q17" value="b">  
     it prints the output of program.<br>
     <input type="Checkbox" name="q17" value="c">  
     it sends output to a variable converting into string.<br>
     <input type="Checkbox" name="q17" value="d">  
     it prints the output of program converting into string.<br>
     Q18].<b>Which function displays the information about PHP?</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     info().<br>
     <input type="Checkbox" name="q18" value="b">  
     sysinfo().<br>
     <input type="Checkbox" name="q18" value="c">  
     phpinfo().<br>
     <input type="Checkbox" name="q18" value="d">  
      php_info().<br>
     Q19].<b>What does isset() function do in PHP? </b> <br>
     <input type="Checkbox" name="q19" value="a">
     There is no such function in PHP.<br>
     <input type="Checkbox" name="q19" value="b">   
     It checks whether variable is set or not.<br>
     <input type="Checkbox" name="q19" value="c">  
     It checks whether variable is free or not.<br>
     <input type="Checkbox" name="q19" value="d">  
     It checks whether variable is string or integer.<br>
     Q20].<b> How PHP files can be accessed?
A.
B.
C. 
D. ?</b> <br>
     <input type="Checkbox" name="q20" value="a">   Through Web Browser .<br>
     <input type="Checkbox" name="q20" value="b">  
      Through HTML files.<br>
     <input type="Checkbox" name="q20" value="c">  
     Through Web Server.<br>
     <input type="Checkbox" name="q20" value="d">  
     All of Above.<br>
     
      
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
