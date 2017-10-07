<?php
 require_once 'bdd.php';
 require_once('head.php');
 include('navbar.php');

  if ((isset($_POST['id']))&&(isset($_COOKIE['DOE_log'])))
  {
      ?>
       <table>

        <tr>

          <td>Nom du joueur  </td>

          <td>Adresse Email   </td>

          <td>    </td>

       </tr>

      <?php
      $req4 = $bdd->prepare("SELECT `name`,`email` FROM `User` WHERE `id`= :id");
      $req4->execute(array('id' => $_POST['id'] ));

			while ($donnees = $req4->fetch()) // On affiche chaque entrée une à une dans une ligne du tableau
			{ ?>
          <tr>
           <form class="form" action="userupdate.php" method="post">
            <td><input class="in" type="text"  name="name" value="<?php echo $donnees['name']; ?>" /></td>
            <td><input class="in" type="text"  name="email" value="<?php echo $donnees['email']; ?>" /></td>
             <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
            <td><input class="btn btn-sub" type="submit" value="Modifier" /></td>

           </form>

          </tr>
        <?php
      }
     }
  require_once('foot.php');
  ?>
