<?php

// authenticate user
include("../Resources/Database/dbConnect.php");

// initialize the invoices table
$init = mysql_query($create_invoices_table); // ignore the error if the table already exist

$invoices = mysql_query($select_invoices);

if(mysql_num_rows($invoices)){

	echo "<table border=0 bgcolor=\"\" cellspacing=\"4\">";
	echo "<tr />";
	echo "<th bgcolor=\"#cccccc\"/> Supplier <th bgcolor=\"#cccccc\"/> Item <th bgcolor=\"#cccccc\"/> Date <th bgcolor=\"#cccccc\"/> Price/Unit <th bgcolor=\"#cccccc\"/> Quantity <th bgcolor=\"#cccccc\"/> Total <th bgcolor=\"#cccccc\"/>  <th bgcolor=\"#cccccc\"/>";
	
	while($invoice = mysql_fetch_array($invoices)){
	
		$id = $invoice['id'];
		
		echo "<tr />";
		echo "<td bgcolor=\"#cccccc\"/>  ".$invoice['supplier'];
		echo "<td bgcolor=\"#cccccc\"/>  ".$invoice['item'];
		echo " <td bgcolor=\"#cccccc\"/> ".$invoice['idate'];
		echo "<td bgcolor=\"#cccccc\"/> ".$invoice['unit_price'];
		echo "<td bgcolor=\"#cccccc\"/> ".$invoice['quantity'];
		echo "<td bgcolor=\"#cccccc\"/> ".$invoice['total'];
		echo "<td bgcolor=\"#cccccc\"/> <a href=\"editInvoice.php?id=$id\"> edit  </a>";
		echo "<td bgcolor=\"#cccccc\"/> <a href=\"deleteInvoice.php\"> delete  ";
	}
	
	echo "</table>";
}

//window.location='http://www.navioo.com';
echo "<br /><br />";
echo "<input type=\"button\" onClick=\"window.location='createNewInvoice.php';\" value=\"Create New\">";
?>