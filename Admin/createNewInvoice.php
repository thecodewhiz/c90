<?php

// authenticate user

include("../Resources/Database/dbConnect.php");


?>

  <!--//==============================================================================================================//-->

   <FIELDSET STYLE="position:left;width:500;LEFT:10;top:10;height:auto;background:#cccccc;">
   <legend style="color:#003399;font-weight:bold;size:+2;">Create Invoice </legend>
   <form action="createInvoice.php" method="post">
   <table>
   <tr />
   <td /> <td />
   <td /> <td />
   <tr />
   <td colspan="4"/><hr>
   
   <tr />
   <td />Supplier:<td /> <input type="text" name="supplier" />
   <tr />
   <td />Item:<td /> <input type="text" name="item" />
   <tr />
   <td />Date : <td /> <input type="text" name="date" />
   <tr />
   <td />Price/unit : <td /> <input type="text" name="unit_price" />
   <tr />
   <td />Quantity : <td /> <input type="text" name="quantity" />
   <tr />
   <td />Total : <td /> <input type="text" name="total" />
   
   <tr />
   <tr />
   <td /><br /><input type="reset" value=" clear " /> <td /><br /> <input type="submit" value=" create " /> 
   </table>
   </form>
   </fieldset>
   
   
        <!--//==============================================================================================================//-->
      