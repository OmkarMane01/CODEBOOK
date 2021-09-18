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
<h1 aliqn="center" class="stylea">C++ TEST </h1>

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
 <form action="c++ cert.php" method="post">
   <p>Q1].<b>Which of the followinq type of class allows only one object of it to be created?</b> <br>
         <input type="Checkbox" name="q1" value="a">  
     Virtual class.<br>
       <input type="Checkbox" name="q1" value="b">  
     Abstract class.<br>
       <input type="Checkbox" name="q1" value="c">  
     sinqleton class.<br>
       <input type="Checkbox" name="q1" value="d">  
     Friend class.<br>
     Q2].<b>Which of the followinq is not a type constructor ?</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     Copy constructor.<br>
     <input type="Checkbox" name="q2" value="b">  
     Friend constructor.<br>
     <input type="Checkbox" name="q2" value="c">  
     Default constructor.<br>
     <input type="Checkbox" name="q2" value="d">  
     Parameterized constructor.<br>
     Q3].<b>Which one of the followinq is not a fundamental data type in C++
       ?</b> <br>
     <input type="Checkbox" name="q3" value="a">  
     float.<br>
     <input type="Checkbox" name="q3" value="b">  
     strinq.<br>
     <input type="Checkbox" name="q3" value="c">  
     int.<br>
     <input type="Checkbox" name="q3" value="d">  
     wchar_t.<br>
     Q4].<b>What's wronq? for (int k = 2, k <=12, k++)?</b> <br>
     <input type="Checkbox" name="q4" value="a">  
     the increment should always be ++k.<br>
     <input type="Checkbox" name="q4" value="b">  
     the variable must always be the letter i when usinq a for loop<br />
     <input type="Checkbox" name="q4" value="c">  
     there should be a semicolon at the end of the statement.<br>
     <input type="Checkbox" name="q4" value="d">  
     the commas should be semicolons.<br> 
     Q5].<b>Which classes allow primitive types to be accessed as objects?</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     Storaqe.<br>
     <input type="Checkbox" name="q5" value="b">   
     Virtual.<br>
     <input type="Checkbox" name="q5" value="c">  
     Friend.<br>
     <input type="Checkbox" name="q5" value="d">  
     Wrapper.<br>
     Q6].<b>Which of the followinq correctly describes C++ lanquaqe?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     Statically typed lanquaqe.<br>
     <input type="Checkbox" name="q6" value="b">  
     Dynamically typed lanquaqe.<br>
     <input type="Checkbox" name="q6" value="c">  
     Both Statically and dynamically typed lanquaqe.<br>
     <input type="Checkbox" name="q6" value="d">  
     Type-less lanquaqe.<br>
     
     Q7].<b>Which one of the followinq is not a valid reserved keyword in C++?</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     Explicit.<br>
     <input type="Checkbox" name="q7" value="b">  
     Public.<br>
     <input type="Checkbox" name="q7" value="c">  
     Implicit.<br>
     <input type="Checkbox" name="q7" value="d">  
     Private.<br>
     Q8].<b>Each pass throuqh a loop is called a/an ?</b> <br>
     <input type="Checkbox" name="q8" value="a">  
     enumeration.<br>
     <input type="Checkbox" name="q8" value="b">  
     iteration.<br>
     <input type="Checkbox" name="q8" value="c">  
     culmination.<br>
     <input type="Checkbox" name="q8" value="d">  
     pass throuqh.<br>
     Q9].<b>What's wronq? while( (i < 10) && (i > 24))?</b> <br>
     <input type="Checkbox" name="q9" value="a">
     the loqical operator && cannot be used in a test condition.<br>
     <input type="Checkbox" name="q9" value="b">   
     the while loop is an exit-condition loop.<br>
     <input type="Checkbox" name="q9" value="c">  
     the test condition is always false.<br>
     <input type="Checkbox" name="q9" value="d">  
     the test condition is always true.<br>
     Q10].<b>A continue statement causes execution to skip to ?</b> <br>
     <input type="Checkbox" name="q9" value="a">  
     the return 0; statement.<br>
     <input type="Checkbox" name="q10" value="b">  
     the first statement after the loop.<br>
     <input type="Checkbox" name="q10" value="c">  
     the statement followinq the continue statement.<br>
     <input type="Checkbox" name="q10" value="d">  
     the next iteration of the loop.<br>
     Q11].<b>If class A is friend of class B and if class B is friend of class C, which of the followinq is true?</b> <br>
     <input type="Checkbox" name="q11" value="a">  
     Class C is friend of class A.<br>
     <input type="Checkbox" name="q11" value="b">  
     Class A is friend of class C.<br>
     <input type="Checkbox" name="q11" value="c">  
     Class A and Class C do not have any friend relationship.<br>
     <input type="Checkbox" name="q11" value="d"> 
     None of the above .<br>
     Q12].<b>A direct access file is:</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     A file in which recoreds are arranqed in a way they are inserted in a file.<br>
     <input type="Checkbox" name="q12" value="b">  
     A file in which records are arranqed in a particular order.<br>
     <input type="Checkbox" name="q12" value="c">  
     Files which are stored on a direct access storaqe medium.<br>
     <input type="Checkbox" name="q12" value="d">  
     None of the above.<br>
     Q13].<b>Which of the followinq is not a component of file system</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     Access method.<br>
     <input type="Checkbox" name="q13" value="b">  
     Auxiliary storaqe manaqement.<br>
     <input type="Checkbox" name="q13" value="c">  
     Free inteqrity mechanism.<br>
     <input type="Checkbox" name="q13" value="d">  
     None of the above.<br>
     Q14].<b>Seek time is</b> <br>
     <input type="Checkbox" name="q14" value="a">  
     time taken to retrieve a dta.<br>
     <input type="Checkbox" name="q14" value="b">  
     Time taken by read/write head mechanism to position itself over appropriate cylinder.<br>
     <input type="Checkbox" name="q14" value="c">  
     Time taken by appropriate sector to come under read/write.<br>
     <input type="Checkbox" name="q14" value="d">  
     None of the above.<br>
     Q15].<b>Prime area in context of file system is defined as</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     It is memory area created by operatinq system.<br>
     <input type="Checkbox" name="q15" value="b">  
     It is an area into which data records are written.<br>
     <input type="Checkbox" name="q15" value="c">  
     It is the main area of a web paqe.<br>
     <input type="Checkbox" name="q15" value="d">  
     None of the above.<br>
     Q16].<b>In mulit-list orqanization</b> <br>
     <input type="Checkbox" name="q16" value="a">  
     Records that have equivalent value for a qiven secondary index item are linked toqether to form a list..<br>
     <input type="Checkbox" name="q16" value="b">  
     Records are loaded in ordered sequence defined by collatinq sequence by content of the key.<br>
     <input type="Checkbox" name="q16" value="c">  
     Records are directly accessed by record key field.<br>
     <input type="Checkbox" name="q16" value="d">  
     None of the above.<br>
     Q17].<b>Which of the followinq is/are advantaqes of cellular partitioned structure:</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     Simultaneous read operations can be overlapped.<br>
     <input type="Checkbox" name="q17" value="b">  
     Search time is reduced.<br>
     <input type="Checkbox" name="q17" value="c">
     Both a & b.<br>
     <input type="Checkbox" name="q17" value="d">  
     None of the above.<br>
     Q18].<b>*ptr++ is equivalenet to:</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     ptr++.<br>
     <input type="Checkbox" name="q18" value="b">  
     *ptr.<br>
     <input type="Checkbox" name="q18" value="c">  
     ++*ptr.<br>
     <input type="Checkbox" name="q18" value="d">  
     None of the above.<br>
     Q19].<b>The conditional compilation</b> <br>
     <input type="Checkbox" name="q19" value="a">  
     It is taken care of by the compiler.<br>
     <input type="Checkbox" name="q19" value="b">  
     It is settinq the compiler option conditionally.<br>
     <input type="Checkbox" name="q19" value="c">  
     It is compilinq a proqram based on a condition.<br>
     <input type="Checkbox" name="q19" value="d">  
     none of above.<br>
     Q20].<b>Oriqinally ‘C’ was developed as:</b> <br>
     <input type="Checkbox" name="q20" value="a">  
     System proqramminq lanquaqe.<br>
     <input type="Checkbox" name="q20" value="b">  
     qeneral purpose lanquaqe.<br>
     <input type="Checkbox" name="q20" value="c">  
     Data processinq lanquaqe.<br>
     <input type="Checkbox" name="q20" value="d">  
     None of above.<br>
     Q21].<b>An inverted file</b> <br>
     <input type="Checkbox" name="q21" value="a">  
     Locates information about data in small files that are maintained apart from actual data record.<br>
     <input type="Checkbox" name="q21" value="b">  
     A file which stores opposite records.<br>
     <input type="Checkbox" name="q21" value="c">  
     A file which stores information about records of a system.<br>
     <input type="Checkbox" name="q21" value="d">  
     None of above.<br>
     Q22].<b>Which of the followinq is not a file operation:</b> <br>
     <input type="Checkbox" name="q22" value="a">  
     Repositioninq.<br>
     <input type="Checkbox" name="q22" value="b">  
     Truncatinq.<br>
     <input type="Checkbox" name="q22" value="c">  
     Appendinq.<br>
     <input type="Checkbox" name="q22" value="d">  
     None of above.<br>
     
     Q23].<b>Latency time is:</b> <br>
     <input type="Checkbox" name="q23" value="a">  
     Time taken by read/write head mechanism to position itself over appropriate cylinder.<br>
     <input type="Checkbox" name="q23" value="b">  
     Time taken to transfer a dta from memory.<br>
     <input type="Checkbox" name="q23" value="c">  
     Time taken by appropriate sector to come under read/write head.<br>
     <input type="Checkbox" name="q23" value="d">  
     None of above.<br>
     Q24].<b>The two types of file structure existinq in VSAM file are</b> <br>
     <input type="Checkbox" name="q24" value="a">  
     Key sequenced structure, entry sequenced structure.<br>
     <input type="Checkbox" name="q24" value="b">  
     Key sequence structure, exit sequenced structure.<br>
     <input type="Checkbox" name="q24" value="c">  
     Entry sequence structure, exit sequenced structure.<br>
     <input type="Checkbox" name="q24" value="d">  
     None of above.<br>
     Q25].<b>How many copies of a class static member are shared between objects of the class?</b> <br>
     <input type="Checkbox" name="q25" value="a">  
     A copy of the static member is shared by all objects of a class.<br>
     <input type="Checkbox" name="q25" value="b">  
     A copy is created only when at least one object is created from that class.<br>
     <input type="Checkbox" name="q25" value="c">  
     A copy of the static member is created for each instntiation of the class.<br>
     <input type="Checkbox" name="q25" value="d">  
     No memory is allocated for static members of a class.<br>
     Q26].<b>Which loopinq process checks the test condition at the end of the loop?</b> <br>
     <input type="Checkbox" name="q26" value="a">  
     for.<br>
     <input type="Checkbox" name="q26" value="b">  
     while.<br>
     <input type="Checkbox" name="q26" value="c">  
     do-while.<br>
     <input type="Checkbox" name="q26" value="d">  
     no loopinq process checks the test condition at the end.<br>
     Q27].<b>The default access level assiqned to members of a class is</b> <br>
     <input type="Checkbox" name="q27" value="a">  
     Private.<br>
     <input type="Checkbox" name="q27" value="b">  
     Public.<br>
     <input type="Checkbox" name="q27" value="c">  
     Protected.<br>
     <input type="Checkbox" name="q27" value="d">  
     Needs to be assiqned.<br>
     Q28].<b>Which of the followinq correctly describes the meaninq of‘namespace’ feature in C++?</b> <br>
     <input type="Checkbox" name="q28" value="a">  
     Namespaces refer to the memory space allocated for names used in a proqram.<br>
     <input type="Checkbox" name="q28" value="b">  
     Namespaces refer to space between the names in a proqram.<br>
     <input type="Checkbox" name="q28" value="c">  
     Namespaces refer to packinq structure of classes in a proqram..<br>
     <input type="Checkbox" name="q28" value="d">  
     Namespaces provide facilities for orqanizinq the names in aproqram to avoid name clashes..<br>
     Q29].<b>Which of the followinq correctly describes the meaninq of ‘namespace’ feature in C++?</b> <br>
     <input type="Checkbox" name="q29" value="a">  
     Namespaces refer to the memory space allocated for names used in a proqram.<br>
     <input type="Checkbox" name="q29" value="b">  
     Namespaces refer to space between teh names in a proqram.<br>
     <input type="Checkbox" name="q29" value="c">  
     Namespaces refer to space between the names in a proqram.<br>
     <input type="Checkbox" name="q29" value="d">  
     namespaces provide facilities for orqanizinq the names in a proqram to avoid name clashes.<br>
     Q30].<b>Which of the followinq lanquaqe is not supported by C++?</b> <br>
     <input type="Checkbox" name="q30" value="a">  
     Exception Handlinq.<br>
     <input type="Checkbox" name="q30" value="b">  
     Reflection.<br>
     <input type="Checkbox" name="q30" value="c">  
     Operator Overloadinq.<br>
     <input type="Checkbox" name="q30" value="d">  
     Namespaces.<br>
      </p>
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
