<?php

// authenticate user

include("../Resources/Database/dbConnect.php");

$supplier = $_POST['supplier'];
$item = $_POST['item'];
$date = $_POST['date'];
$unit_price = $_POST['unit_price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];

$sql = "insert into $invoices_table(id, supplier, item, idate, unit_price, quantity, total) values(id, \"$supplier\", \"$item\", \"$date\", \"$unit_price\", \"$quantity\", \"$total\")";

$insert = mysql_query($sql) or die(mysql_error());

echo "update successful";


?>

