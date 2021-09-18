<?php
include_once 'connection.php';
$_fname = $_POST['first'];
$_mname = $_POST['middle'];
$_lname = $_POST['last'];
$_mobile = $_POST['mobile'];
$_uid = $_POST['uid'];
$_address =$_POST['address'];
$_pin = $_POST['pin'];
$_select = $_POST['dropdown'];

if (isset($_POST['buy'])) {

if (!empty($_fname) && !empty($_mname) && !empty($_lname) && !empty($_mobile) && !empty($_uid) && !empty($_address) && !empty($_pin)) 

{              //first name cheeck
               if (strlen($_fname) < 3) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('First name must have atleat 3 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_fname))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Firstname must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }
			    //middle name cheeck
               if (strlen($_mname) < 3) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Middle name must have atleat 3 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_mname))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Middle name must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }
			    //last name cheeck
               if (strlen($_lname ) < 3) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Last name must have atleat 3 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_lname ))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Last name must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }

			    // mob no
			    if (strlen($_mobile ) < 10) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('moble number must have atleat 10 Digit!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
			     else if (!preg_match("/^[0-9]+$/",$_mobile))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('plz provied Correct moblie number!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }

                 // Adhar no 
                    if (strlen($_uid ) < 16) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Adhar no  must have atleat 16 Digit!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
			     else if (!preg_match("/^[0-9]+$/",$_uid))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('plz provied CorrectAdhar no!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }
			    


			    // address
			    if (strlen($_address) < 20) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('address must have atleat 20 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z0-9 ]+$/",$_address))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Address must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }
			    
			    // pin 
			    if (strlen($_pin ) < 5) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Pin code must have atleat 6 Digit!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
		       } 
			     else if (!preg_match("/^[0-9]+$/",$_pin))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('plz provied pin code!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
			    }


    // final msg on scren to konw the users.(om)
			     if ( !$error)
                    {
                  	 // Insert into database Query.
                     $query = "INSERT INTO cashondeliver (firstName,middleName,lastName,mobile,AdharNo,address,pinCode,course) VALUES('$_fname','$_mname',' $_lname','$_mobile','$_uid','$_address ','$_pin','$_select ')";
			         mysqli_query($_conn,$query,$_conn);
             echo "<script type='text/javascript'>alert('Thanks.Payment succesfully done!.')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='start mysqltest.php' </script>";
             }
             
         }
else
{
	         echo "<script type='text/javascript'>alert('Provied Correct information!.')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='codmysql.php' </script>";
}

}
?>

