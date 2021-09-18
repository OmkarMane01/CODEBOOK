<?php
$_hostname='localhost';
$_username='root';
$_password='';
$_mysqli_database='codebook'; 
//connection to server or localhost.
$_conn= mysqli_connect($_hostname,$_username,$_password);
if (!$_conn) {
	die('Connection is not successfull!.');
}
// Connection  to the database.
$_db=mysqli_select_db($_conn,$_mysqli_database);
 if (!$_db) 
 {
 	die('Database is not exit!.');
 } 
?>