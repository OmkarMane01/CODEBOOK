<?php
session_start();
include_once 'connection.php';
if ( isset($_SESSION['user'])!="" ) {
    header("Location: home.php");
    exit;
  }

   $_email = $_POST['email'];
   $_pass = $_POST['pass']; 

if (isset($_POST['login'])) {

      if (!empty($_email) && !empty($_pass)) 
       {
      		if (!filter_var($_email,FILTER_VALIDATE_EMAIL))
           {
            $error = true;
            echo "<script type='text/javascript'>alert('Please enter valid email address.!')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
           }

           // $_password = hash('sha256', $_pass);
            $res=mysqli_query($_conn,"SELECT userId, userName, userPass FROM users WHERE userEmail='$_email'");
      $row=mysqli_fetch_array($res);
      $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
      
      if( $count == 1 && $row['userPass']==$_pass ) {
        $_SESSION['user'] = $row['userId'];
        header("Location: home.php");
        echo "<script type='text/javascript'>alert('welcome')</script>";
      }else {
        
         echo "<script type='text/javascript'>alert('Incorrect Credentials, Try again....!')</script>";
            echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
      }



	    	}
     else
       {
       	echo "<script type='text/javascript'>alert('Please enter your email address & password.!')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
       }
}
?>