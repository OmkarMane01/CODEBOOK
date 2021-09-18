<?php

include_once 'connection.php';
if ( isset($_POST['reg']) )
{
   $_name = $_POST['name'];
   $_email = $_POST['email'];
   $_pass = $_POST['pass'];
   $_pass2 = $_POST['pass2'];
              //Error handlers
              // check for empty fileds

      if (!empty($_name) && !empty($_email) && !empty($_pass) && !empty($_pass2))
       {    
             // basic firstname validation
		      if (strlen($_name) < 3) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Firstname must have atleat 3 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_name))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Firstname must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
			    }

                 
                 //basic email validation
		         if ( !filter_var($_email,FILTER_VALIDATE_EMAIL) ) 
		         {
			     $error = true;
			     echo "<script type='text/javascript'>alert('Please enter valid email address!')</script>";
			     echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
		         }
                 else 
                 {
			      // check email exist or not
			     $query = "SELECT userEmail FROM users WHERE userEmail='$_email'";
			     $result = mysqli_query($_conn,$query);
			     $count = mysqli_num_rows($result);
			     if($count!=0)
			     {
	        	 $error = true;
				 echo "<script type='text/javascript'>alert('Provided Email is already in use!.')</script>";
				 echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
				 }
				 }


                   // password validation
		          if ($_pass !== $_pass2)
		           {
			       $error = true;
			       echo "<script type='text/javascript'>alert('Password Not Match!.')</script>";
			       echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
		           }
		            else if(strlen($_pass) < 6)
		           {
			       $error = true;
		           echo "<script type='text/javascript'>alert('Password must have atleast 6 characters!.')</script>";
		           echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";
		           } 

		           // password encrypt using SHA256();
		           //$_password = hash('sha256', $_pass);     

                  if ( !$error)
                    {
                  	 // Insert into database Query.
                     $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$_name','$_email',' $_pass')";
			         mysqli_query($_conn,$query);
			        echo "<script type='text/javascript'>alert('YOUR REGESTRATION WAS DONE SEUCCESFULLY!. WELLCOME TO COEDBOOK.Now you LOGIN.')</script>";
				    echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
                     }

    	  
       }
       else
       {
        echo "<script type='text/javascript'>alert('All Fildes Must Required!')</script>";
        echo "<script language='javascript' type='text/javascript'> location.href='Regestration.php' </script>";

       }














    




}

?>