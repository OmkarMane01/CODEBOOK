<?php
include_once 'connection.php';
$_uid = $_POST['uid'];
$_cardno = $_POST['CardNo'];
$_cardname = $_POST['cardname'];
$_cvv = $_POST['cvv'];
$_date = $_POST['date'];
$_select = $_POST['dropdown'];

if (isset($_POST['buy'])) {

	if (!empty($_uid) && !empty($_cardno) && !empty($_cardname) && !empty($_cvv) &&!empty($_date) && !empty($_select))
	{
       // Adhar no 
                    if (strlen($_uid ) < 16) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Adhar no  must have atleat 16 Digit!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
		       } 
			     else if (!preg_match("/^[0-9]+$/",$_uid))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('plz provied CorrectAdhar no!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
			    }
                //card no
			    if (strlen($_cardno ) < 16) 
			   {
		       $error = true;


			   echo "<script type='text/javascript'>alert('Debit Card no  must have atleat 16 Digit!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
		       } 
			     else if (!preg_match("/^[0-9]+$/",$_cardno))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('plz provied CorrectAdhar no!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
			    }
			    // card holder name
			    if (strlen($_cardname) < 15) 
			   {
		       $error = true;
			   echo "<script type='text/javascript'>alert('Name must have atleat 15 characters!')</script>";
			   echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
		       } 
		       else if (!preg_match("/^[a-zA-Z ]+$/",$_cardname))
		        {
		       $error = true;
			    echo "<script type='text/javascript'>alert('Name must contain alphabets and space!')</script>";
			    echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
			    }
			    
               // final msg on scren to konw the users.(om)
			     if ( !$error)
                    {
                  	 // Insert into database Query.
                     $query = "INSERT INTO CreditCard (AdharNo,CardNo ,CardHolder ,cvv,ExpireDate ,course) VALUES('$_uid','$_cardno','$_cardname','$_cvv','$_date','$_select ')";
			         mysqli_query($_conn,$query,$_conn);
             echo "<script type='text/javascript'>alert('Thanks.Payment succesfully done!.')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='start phptest.php' </script>";
             }


	}else
	{
		  echo "<script type='text/javascript'>alert('Provied Correct information!.')</script>";
             echo "<script language='javascript' type='text/javascript'> location.href='phpCreditCard.php' </script>";
	}



}
?>