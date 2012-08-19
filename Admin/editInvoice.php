<?php

// authenticate user
include("../Resources/Database/dbConnect.php");

$id = $_GET['id']; 

$sql = "select * from $invoices_table where id=$id";

$query = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_array($query);

$supplier = $row['supplier']; 
$item = $row['item']; 
$date = $row['idate']; 
$unit_price = $row['unit_price']; 
$quantity = $row['quantity'];
$total = $row['total'];
$supplier = $row['supplier'];




?>

<!--//==============================================================================================================//-->

   <FIELDSET STYLE="position:left;width:500;LEFT:10;top:10;height:auto;background:#cccccc;">
   <legend style="color:#003399;font-weight:bold;size:+2;"> edit invoice </legend>
   <form action="invoices.php" method="post">
   <table>
   <tr />
   <td /> <td />
   <td /> <td />
   <tr />
   <td colspan="4"/><hr>
   
   <tr />
   <td />Supplier:<td /> <input type="text" name="supplier" value="<?php echo "$supplier";  ?>" />
   <tr />
   <td />Item:<td /> <input type="text" name="item" value="<?php echo "$item"; ?>"/>
   <tr />
   <td />Date : <td /> <input type="text" name="date" value="<?php echo "$date" ; ?>"/>
   <tr />
   <td />Price/unit : <td /> <input type="text" name="unit_price" value="<?php echo "$unit_price"; ?>" />
   <tr />
   <td />Quantity : <td /> <input type="text" name="quantity" value="<?php echo "$quantity"; ?>" />
   <tr />
   <td />Total : <td /> <input type="text" name="total" value="<?php echo "$total"; ?>" />
   <tr />
   <td />Total : <td /> <input type="hidden" name="edit_id" value="<?php echo "$id"; ?>"/>
   <tr />
   <tr />
   <td /><br /><input type="reset" value=" clear " /> <td /><br /> <input type="submit" value=" save " /> 
   </table>
   </form>
   </fieldset>
   
   
        <!--//==============================================================================================================//-->
      