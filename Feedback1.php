<?php

include_once 'connection.php';
if ( isset($_POST['send']) )
{
  $_name = $_POST['name'];
   $_email = $_POST['email'];
     $_comment = $_POST['comment'];


      if (!empty($_name) && !empty($_email) && !empty($_comment))
        {
         // name
         if (strlen($_name) < 8) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Name must have atleat 8 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_name))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Firstname must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
			    }  
			  //basic email validation
		         if ( !filter_var($_email,FILTER_VALIDATE_EMAIL) ) 
		         {
			     $error = true;
			     echo "<script type='text/javascript'>alert('Please enter valid email address!')</script>";
			     echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
		         }
		         //
		         if (!preg_match("/^[a-zA-Z ]+$/",$_comment))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Comment must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
			    }

                if ( !$error)
                    {
                  	 // Insert into database Query.
                     $query = "INSERT INTO Feedback(name,email ,comment) VALUES('$_name','$_email',' $_comment')";
			         mysqli_query($_conn,$query,$_conn);
			        echo "<script type='text/javascript'>alert('Thanks for your Feedback.')</script>";
				    echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
                     
                  }


      	}
      	else
      	 {
      		 echo "<script type='text/javascript'>alert('All Fildes Must Required!')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='Feedback.php' </script>";
      	  }
   
        



































}

?>