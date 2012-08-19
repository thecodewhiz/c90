<?php
//createUser.php



?>

<FIELDSET STYLE="position:left;width:500;LEFT:10;top:10;height:auto;background:#cccccc;">
   <legend style="color:#003399;font-weight:bold;size:+2;"> create account  </legend>
   <form action="create_user.php" method="post">
   <table>
   <tr />
   <td /> <td />
   <td /> <td />
   <tr />
   <td colspan="4"/><hr>
   <tr />
   <td />username:<td /> <input type="text" name="name" />
   <tr />
   <td />password : <td /> <input type="password" name="password" />
   <tr />
   <td />confirm password : <td /> <input type="password" name="confirm_password" />
   <tr />
   <td />email : <td /> <input type="text" name="email" />
   <tr />
   <tr />
   <td /><br /><input type="reset" value=" clear " /> <td /><br /> <input type="submit" value=" create account " />
   </table>
   </form>
   </fieldset>