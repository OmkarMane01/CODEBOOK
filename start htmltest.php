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
 <form action="html cert.php" method="post">


      <p>Q]1.<b>A webpage displays a picture. What tag was used to display that picture?
 </b> <br>
         <input type="Checkbox" name="q1" value="a">  
     picture.<br>
       <input type="Checkbox" name="q1" value="b">  
     image.<br>
       <input type="Checkbox" name="q1" value="c">  
    img.<br>
       <input type="Checkbox" name="q1" value="d">  
     src.<br>
     Q2].<b> Choose the correct HTML tag to make a text italic
</b> <br>
     <input type="Checkbox" name="q2" value="a">  
     ii.<br>
     <input type="Checkbox" name="q2" value="b">  
     italics.<br>
     <input type="Checkbox" name="q2" value="c">  
     iitalic.<br>
     <input type="Checkbox" name="q2" value="d">  
     .<br>
     Q3].<b>What does vlink attribute mean?
  </b> <br>
     <input type="Checkbox" name="q3" value="a">  
      visited link.<br>
     <input type="Checkbox" name="q3" value="b">  
     virtual link.<br>
     <input type="Checkbox" name="q3" value="c">  
     very good link.<br>
     <input type="Checkbox" name="q3" value="d">  
     active link<br>
     Q4].<b>Which attribute is used to name an element uniquely?
 </b> <br>
     <input type="Checkbox" name="q4" value="a">  
     class.<br>
     <input type="Checkbox" name="q4" value="b">  
     id<br />
     <input type="Checkbox" name="q4" value="c">  
     dot.<br>
     <input type="Checkbox" name="q4" value="d">  
     all of above.<br> 
     Q5].<b>Which tag creates a check box for a form in HTML?</b> <br>
     <input type="Checkbox" name="q5" value="a">  
     checkbox.<br>
     <input type="Checkbox" name="q5" value="b">   
     input type="checkbox".<br>
     <input type="Checkbox" name="q5" value="c">  
     input type="checkbox.<br>
     <input type="Checkbox" name="q5" value="d">  
     non of this.<br>
     Q6].<b>To create a combo box (drop down box) which tag will you use?
</b> <br>
     <input type="Checkbox" name="q6" value="a">  
     select.<br>
     <input type="Checkbox" name="q6" value="b">  
     list.<br>
     <input type="Checkbox" name="q6" value="c">  
    input type="dropdown" .<br>
     <input type="Checkbox" name="q6" value="d">  
     all of above.<br>
     
     Q7].<b>Which of the following is not a pair tag??</b> <br>
     <input type="Checkbox" name="q7" value="a">  
     p.<br>
     <input type="Checkbox" name="q7" value="b">  
     u.<br>
     <input type="Checkbox" name="q7" value="c">  
     i.<br>
     <input type="Checkbox" name="q7" value="d">  
     img.<br>
     Q8].<b> To create HTML document you require a?</b> <br>
     <input type="Checkbox" name="q8" value="a">  
     web page editing software.<br>
     <input type="Checkbox" name="q8" value="b">  
     High powered computer.<br>
     <input type="Checkbox" name="q8" value="c">  
     Just a notepad can be used.<br>
     <input type="Checkbox" name="q8" value="d">  
      None of above.<br>
     Q9].<b>The special formatting codes in HTML document used to present content are?
</b> <br>
     <input type="Checkbox" name="q9" value="a">
     tags.<br>
     <input type="Checkbox" name="q9" value="b">   
     attributes.<br>
     <input type="Checkbox" name="q9" value="c">  
      values.<br>
     <input type="Checkbox" name="q9" value="d">  
      None of above.<br>
     Q10].<b> HTML documents are saved in ?</b> <br>
     <input type="Checkbox" name="q10" value="a">   Special binary format .<br>
     <input type="Checkbox" name="q10" value="b">  
     Machine language codes.<br>
     <input type="Checkbox" name="q10" value="c">  
     ASCII text.<br>
     <input type="Checkbox" name="q10" value="d">  
      None of above.<br>
     
      


     Q11].<b>Some tags enclose the text. Those tags are known as
 </b> <br>
         <input type="Checkbox" name="q11" value="a">  
     Couple tags.<br>
       <input type="Checkbox" name="q11" value="b">  
     Single tags.<br>
       <input type="Checkbox" name="q11" value="c">  
    Double tags.<br>
       <input type="Checkbox" name="q11" value="d">  
     Pair tags.<br>
     Q12].<b> The _____ character tells browsers to stop tagging the text
   ?</b> <br>
     <input type="Checkbox" name="q12" value="a">  
      ?.<br>
     <input type="Checkbox" name="q12" value="b">  
      /.<br>
     <input type="Checkbox" name="q12" value="c">  
     >.<br>
     <input type="Checkbox" name="q12" value="d">  
     %.<br>
     Q13].<b>In HTML document the tags
 </b> <br>
     <input type="Checkbox" name="q13" value="a">  
     Should be written in upper case.<br>
     <input type="Checkbox" name="q13" value="b">  
     should be written in lower case.<br>
     <input type="Checkbox" name="q13" value="c">  
     should be written in proper case.<br>
      <input type="Checkbox" name="q13" value="d">  
     can be written in both uppercase or lowercase<br>
     Q14].<b>Marquee is a tag in HTML to
 </b> <br>
     <input type="Checkbox" name="q14" value="a">  
     mark the list of items to maintain inqueue.<br>
     <input type="Checkbox" name="q14" value="b">  
     Mark the text so that it is hidden in browser<br />
     <input type="Checkbox" name="q14" value="c">  
     Display text with scrolling effect.<br>
     <input type="Checkbox" name="q14" value="d">  
     None of above.<br> 
     Q15].<b>There are ____ different of heading tags in HTML
</b> <br>
     <input type="Checkbox" name="q15" value="a">  
     4.<br>
     <input type="Checkbox" name="q15" value="b">   
     5.<br>
     <input type="Checkbox" name="q15" value="c">  
     6.<br>
     <input type="Checkbox" name="q15" value="d">  
     7.<br>
     Q16].<b>To create a blank line in your web page
 ?</b> <br>
     <input type="Checkbox" name="q16" value="a">  
     press Enter two times.<br>
     <input type="Checkbox" name="q16" value="b">  
      press Shift + Enter.<br>
     <input type="Checkbox" name="q16" value="c">  
     insert BR tag.<br>
     <input type="Checkbox" name="q16" value="d">  
     insert BLINE.<br>
     
     Q17].<b>Which of the following is not a style tag?
 ?</b> <br>
     <input type="Checkbox" name="q17" value="a">  
     b.<br>
     <input type="Checkbox" name="q17" value="b">  
     tt.<br>
     <input type="Checkbox" name="q17" value="c">  
     i.<br>
     <input type="Checkbox" name="q17" value="d">  
     All of above are style tags.<br>
     Q18].<b>The way the browser displays the object can be modified by _____
  ?</b> <br>
     <input type="Checkbox" name="q18" value="a">  
     attributes.<br>
     <input type="Checkbox" name="q18" value="b">  
     parameters.<br>
     <input type="Checkbox" name="q18" value="c">  
     modifiers.<br>
     <input type="Checkbox" name="q18" value="d">  
     None of above.<br>
     Q19].<b>Which of the following is an attribute related to font tag?
 </b> <br>
     <input type="Checkbox" name="q19" value="a">
     size.<br>
     <input type="Checkbox" name="q19" value="b">   
     face.<br>
     <input type="Checkbox" name="q19" value="c">  
     color.<br>
     <input type="Checkbox" name="q19" value="d">  
     All of above are style tags.<br>
     Q20].<b> HTML supports______ ?</b> <br>
     <input type="Checkbox" name="q20" value="a">  ordered lists .<br>
     <input type="Checkbox" name="q20" value="b">  
     unordered lists.<br>
     <input type="Checkbox" name="q20" value="c">  
     both type of lists.<br>
     <input type="Checkbox" name="q20" value="d">  
     does not support those types.<br>
     
	  <center ><input class="button" name="ans" type="submit" value="GO" size="15" /></center>
   </form>
 
 
 
 
 </td></tr>
</table>

</body></html>
