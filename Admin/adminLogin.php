<?php
//adminLogin.php
include("../Resources/Database/dbConnect.php");
echo "admin logged in";

$username = $_POST['name'];
$password = $_POST['password'];

echo "<br /> username : $username <br /> password $password";

// authenticate user
$authenticate_user = "select * from $user_credentials_table where username='$username' and password='$password'";

$login = mysql_query($authenticate_user) or die(mysql_error());

if(!mysql_num_rows($login)){
	// wrong credentials
	die(" <br />wrong username / password");
	
}

echo "<br /> login successful !";




?>

<ul>

<li /> <a href="invoices.php"> Invoices </a>
<li /> <a href="supliers.php"> Supliers </a>
<li /> <a href="products.php"> Products </a>
<li /> <a href="purchaseOrder.php"> L.P.O </a>
<li /> <a href="analysis.php"> Analysis </a>
<li /> <a href="addUser.php"> Add User </a>
<li /> <a href="logout.php"> Logout </a>

</ul>