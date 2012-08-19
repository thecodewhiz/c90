<?php
// index.php

echo "welcome to admin login";

include("./Resources/Database/dbConnect.php");



?>


        <!--//==============================================================================================================//-->

   <FIELDSET STYLE="position:left;width:500;LEFT:10;top:10;height:170;background:#cccccc;">
   <legend style="color:#003399;font-weight:bold;size:+2;">admin login  </legend>
   <form action="Admin/adminLogin.php" method="post">
   <table>
   <tr />
   <td /> <td />
   <td /> <td />
   <tr />
   <td colspan="4"/><hr>
   <tr />
   <td />Administrator:<td /> <input type="text" name="name" />
   <tr />
   <td />password : <td /> <input type="password" name="password" />
   <tr />
   <tr />
   <td /><br /><input type="reset" value=" clear " /> <td /><br /> <input type="submit" value=" login " /> <a href="UserManagement/createAccount.php"> create account </a>
   </table>
   </form>
   </fieldset>
   
   
        <!--//==============================================================================================================//-->
      
