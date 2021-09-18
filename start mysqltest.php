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
<title>MYSQL TEST-<?php echo $userRow['userName']; ?></title>
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
<h1 aliqn="center" class="stylea">MYSQL TEST </h1>

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
 <form action="mysql cert.php" method="post">
 
     <p>Q]1.<b>MySQL runs on which operating systems?
</b> <br>
         <input type="Checkbox" name="q1" value="a">  
     Linux and Mac OS-X only.<br>
       <input type="Checkbox" name="q1" value="b">  
     Any operating system at all.<br>
       <input type="Checkbox" name="q1" value="c">  
    Unix, Linux, Windows and others.<br>
       <input type="Checkbox" name="q1" value="d">  
     Unix and Linux only.<br>
     Q2].<b> To remove duplicate rows from the result set of a SELECT use the following keyword:
</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     NO DUPLICATE.<br>
     <input type="Checkbox" name="q2" value="b">  
      UNIQUE.<br>
     <input type="Checkbox" name="q2" value="c">  
     DISTINCT.<br>
     <input type="Checkbox" name="q2" value="d">  
     None of the above.<br>
     Q3].<b>Which of the following can add a row to a table? 
</b> <br>
     <input type="Checkbox" name="q3" value="a">  
     Add.<br>
     <input type="Checkbox" name="q3" value="b">  
     Insert.<br>
     <input type="Checkbox" name="q3" value="c">  
     Update.<br>
     <input type="Checkbox" name="q3" value="d">  
     Alter.<br>
     Q4].<b>To use MySQL on your computer, you'll need? 
</b> <br>
     <input type="Checkbox" name="q4" value="a">  
     FTP and Telnet.<br>
     <input type="Checkbox" name="q4" value="b">  
      Some sort of client program to access the databases<br />
     <input type="Checkbox" name="q4" value="c">  
     A Browser.<br>
     <input type="Checkbox" name="q4" value="d">  
     Perl, PHP or Java.<br> 
     Q5].<b>Which SQL statement is used to insert a new data in a database? 
</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     INSERT INTO.<br>
     <input type="Checkbox" name="q5" value="b">   
     UPDATE.<br>
     <input type="Checkbox" name="q5" value="c">  
     ADD.<br>
     <input type="Checkbox" name="q5" value="d">  
     INSERT NEW.<br>
     Q6].<b>In a LIKE clause, you can could ask for any value ending in "qpt" by writing 
?</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     LIKE %qpt.<br>
     <input type="Checkbox" name="q6" value="b">  
     LIKE *ton.<br>
     <input type="Checkbox" name="q6" value="c">  
     LIKE ton$.<br>
     <input type="Checkbox" name="q6" value="d">  
     LIKE ^.*ton$.<br>
     
     Q7].<b>) A NULL value is treated as a blank or 0.
</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     True.<br>
     <input type="Checkbox" name="q7" value="b">  
     Fasle.<br>
     <input type="Checkbox" name="q7" value="c">  
     None of the above.<br>
     
     Q8].<b> MySQL is______________ 
?</b> <br>
     <input type="Checkbox" name="q8" value="a">  
     A Programming language.<br>
     <input type="Checkbox" name="q8" value="b">  
      A Programming language.<br>
     <input type="Checkbox" name="q8" value="c">  
     A technique for writing reliable programs.<br>
     <input type="Checkbox" name="q8" value="d">  
     A Relational Database Management System.<br>
     Q9].<b>In a LIKE clause, you can ask for any 6 letter value by writing? 
</b> <br>
     <input type="Checkbox" name="q9" value="a">
     LIKE ??????.<br>
     <input type="Checkbox" name="q9" value="b">   
     LIKE .{6} Answer 5: LIKE ^.{6}$.<br>
     <input type="Checkbox" name="q9" value="c">  
     LIKE ...... (that's six dots).<br>
     <input type="Checkbox" name="q9" value="d">  
     LIKE ______ (that's six underscore characters).<br>
     Q20].<b>) The result of a SELECT statement can contain duplicate rows. 
 ?</b> <br>
     <input type="Checkbox" name="q9" value="a">  False .<br>
     <input type="Checkbox" name="q0" value="b">  
     True.<br>
     
     
      


     Q11].<b>) Which function used to get the current time in mysql? 
</b> <br>
         <input type="Checkbox" name="q11" value="a">  
      getTime().<br>
       <input type="Checkbox" name="q11" value="b">  
     
 Time().<br>
       <input type="Checkbox" name="q11" value="c">  
    NOW().<br>
       <input type="Checkbox" name="q11" value="d">  
     Non of this.<br>
     Q12].<b> Which of the following is not a valid aggregate function?
?</b> <br>
     <input type="Checkbox" name="q12" value="a">  
     COUNT.<br>
     <input type="Checkbox" name="q12" value="b">  
     MIN.<br>
     <input type="Checkbox" name="q12" value="c">  
     MAX.<br>
     <input type="Checkbox" name="q12" value="d">  
     COMPUTE.<br>
     Q13].<b>mysqli_pconnect()
is used to make a persistent connection to the database which means a SQL link that do not close when the execution of your script ends. 
</b> <br>
     <input type="Checkbox" name="q13" value="a">  
     True.<br>
     <input type="Checkbox" name="q13" value="b">  
     False.<br>
     <input type="Checkbox" name="q13" value="c">  
     .<br>
     <input type="Checkbox" name="q13" value="d">  
     <br>
     Q14].<b>) What SQL clause is used to restrict the rows returned by a query? 
</b> <br>
     <input type="Checkbox" name="q14" value="a">  
     AND.<br>
     <input type="Checkbox" name="q14" value="b">  
     WHERE <br />
     <input type="Checkbox" name="q14" value="c">  
     HAVING
 .<br>
     <input type="Checkbox" name="q14" value="d">  
     FROM.<br> 
     Q15].<b>Which of the following is used to delete an entire MYSQL database?

</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     mysqli_drop_database.<br>
     <input type="Checkbox" name="q15" value="b">   
     mysqli_drop_entiredb.<br>
     <input type="Checkbox" name="q15" value="c">  
     mysqli_drop_db.<br>
     <input type="Checkbox" name="q15" value="d">  
     mysqli_drop_dbase.<br>
     Q16].<b>) MySQL supports the complete SQL99 standard

?</b> <br>
     <input type="Checkbox" name="q16" value="a">  
     false.<br>
     <input type="Checkbox" name="q16" value="b">  
    true .<br>
     
     
     Q17].<b>How much character are allowed to create database name?

?</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     55.<br>
     <input type="Checkbox" name="q17" value="b">  
     72.<br>
     <input type="Checkbox" name="q17" value="c">  
     64.<br>
     <input type="Checkbox" name="q17" value="d">  
     40.<br>
     Q18].<b> Which of the following commands should be used to create a database named “student”?) CREATE ?I student?</b> <br>
     <input type="Checkbox" name="q18" value="a">  
      CREATE ?I student.<br>
     <input type="Checkbox" name="q18" value="b">  
     CREATE DATABASE student.<br>
     <input type="Checkbox" name="q18" value="c">  
     DATABASE /student.<br>
     <input type="Checkbox" name="q18" value="d">  
     DATABSE student.<br>
     Q19].<b>Which one will delete the table data as well as table structure? 
</b> <br>
     <input type="Checkbox" name="q19" value="a">
     TRUNCATE.<br>
     <input type="Checkbox" name="q19" value="b">   
     DROP.<br>
     
     Q20].<b> The USE command?
a) 
b) 
c)
d) 
?</b> <br>
     <input type="Checkbox" name="q20" value="a"> Is used to load code from another file  .<br>
     <input type="Checkbox" name="q20" value="b">  
     Has been deprecated and should be avoided for security reasons.<br>
     <input type="Checkbox" name="q20" value="c">  
      Is a pseudonym for the SELECT command.<br>
     <input type="Checkbox" name="q20" value="d">  
     Should be used to choose the database you want to use once you've connected to MySQL.<br>
     

      </p>

      </p>
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
