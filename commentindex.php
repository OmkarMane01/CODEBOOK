<?php
$_hostname='localhost';
$_username='root';
$_password='';
$_mysqli_database='comments'; 
//connection to server or localhost.
$_conn= mysqli_connect($_hostname,$_username,$_password);
$_db=mysqli_select_db($_conn,$_mysqli_database);

if(isset($_POST['name'])){
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit']; 
 

if($submit)
{ 
if($name&&$comment)
{
$insert=mysqli_query($_conn,"INSERT INTO comments (name,comment) VALUES ('$name','$comment') ");
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=comment.php'>";
}
else
{
 echo "<script type='text/javascript'>alert('please fill out all field!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='comment.php' </script>";
}
}
}

?>