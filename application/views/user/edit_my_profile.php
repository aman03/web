
<form action="" method="post">
    <fieldset class="Edit my profile">
 <table> 
      <tr><td>First name:</td>
        <td><input type="text" name="fname"value="<?php echo $user->fname ?>"/></td></tr>
     <tr><td>Last name:</td>
        <td><input type="text" name="lname"value="<?php echo $user->lname ?>"/></td></tr>
     <tr><td>Username:</td>
        <td><input type="text" name="username"value="<?php echo $user->username ?>"/></td></tr>
     <tr><td>Password:</td>
        <td><input type="password" name="password"value=""/></td></tr>
      <tr><td>Confirm password:</td>
        <td><input type="text" name="cpassword"value=""/></td></tr>
     <tr><td>Phone no:</td>
        <td><input type="text" name="phoneno"value="<?php echo $user->phoneno ?>"/></td></tr>
      <tr> <td></td><td><input type="submit" name="save" value="Save"/></td></tr>
    </table>
  </form>
   </fieldset>