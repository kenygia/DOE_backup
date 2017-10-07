<?php
 require_once 'bdd.php';  // nota bene si le nom saisi existe deja il faut renvoyer au formulaire
 require_once('head.php');
 include('navbar.php');
 if ((isset($_POST['id']))&&(isset($_COOKIE['DOE_log'])))
  {
      ?>
       <table>

        <tr>

          <td>Ancien mots de passe </td>

          <td>Nouveau mots de passe   </td>

          <td>    </td>

       </tr>

       <tr>
           <form class="form" action="updaterpwd.php" method="post">
            <td><input class="in" type="text"  name="oldmdp" value="" /></td>
            <td><input class="in" type="text"  name="newmdp" value="" /></td>
             <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
            <td><input class="btn btn-sub"  type="submit" value="Modifier" /></td>

           </form>

          </tr>
        <?php

     }

require_once('foot.php');
?>
