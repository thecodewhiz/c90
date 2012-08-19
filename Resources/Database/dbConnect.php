<?php

include("statements.php");

//credentials
$host = "localhost";
$user = "root";
$password = "";

$con = mysql_connect($host,$user,$password) or die(mysql_error());

// initialize the database
$init = mysql_query($create_database_statement); // ignore the error

//select database
$init = mysql_select_db($database_name);

// create login credentials table
$init = mysql_query($create_login_credentials_table);

// create default admin user : admin123 password : admin123
$init = mysql_query($create_default_user);


echo $con;

?>