<?php
  require_once('bdd.php');
  require_once('head.php');
  include('navbar.php');
  include 'class/Utilitaire.php';

  setcookie('DOE_log',1,time()+365*24*3600) ;
  if (isset($_COOKIE['DOE_log']))
  {  $util = new Utilitaire();
  	 $req3= $bdd->prepare("SELECT `race` FROM `User` WHERE `id`= :id"); // on verifie si l utilisateur est
     $req3->execute(array('id' => $_COOKIE['DOE_log'] ));                      //       un admin
     $reponse3= $req3 -> fetch();
     if($reponse3['race']==0) // protection anti piratage
     {

      ?>
      <table border =4 cellspacing=4 cellpadding=4 widh=80%>

        <tr>

          <td> Identifiant  </td>

          <td>Nom du joueur  </td>

          <td>Mot de passe  </td>

          <td>Race du joueur  </td>

          <td>Adresse Email   </td>

          <td>    </td>

          <td>    </td>
          <td><img src="img/Nouriture.png" border="0"/></td>
          <td><img src="img/bois.png" border="0"/>    </td>
          <td><img src="img/or.png" border="0"/>    </td>


        </tr>

      <?php
      $reponse = $bdd->query('SELECT * FROM `User`');

			while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une dans une ligne du tableau

			{

			?>

			    <tr>

			    <td> <?php echo $donnees['id']; ?></td>

			    <td><?php echo $donnees['name']; ?></td>

          <td><form action="updatepwd.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input class="in" type="submit" value="Modifier mdp" />
          </form></td>

			    <td><?php echo $donnees['race']; ?></td>

			    <td><?php echo $donnees['email']; ?></td>

          <td><form action="updateuser.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input class="in" type="submit" value="Modifier info" />
          </form></td>

          <td><form action="deluser.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input class="in" type="submit" value="Supprimer" />
          </form></td>
           

           <td>
            <form action="down.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input type="hidden" name="ressource" value="<?php echo "nouriture"; ?>" />
            <input class="in" type="submit" value="-" />
          </form>
            <?php echo $util->getQtyNouriture($donnees['id'],$bdd);?>
            <form action="up.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input type="hidden" name="ressource" value="<?php echo "nouriture"; ?>" />
            <input class="in" type="submit" value="+" />
          </form>
        </td>
        <td>
          <form action="down.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input type="hidden" name="ressource" value="<?php echo "bois"; ?>" />
            <input class="in" type="submit" value="-" />
          </form>
           <?php echo $util->getQtyBois($donnees['id'],$bdd);?>
          <form action="up.php" method="post">        
            <input type="hidden" name="ressource" value="<?php echo "bois"; ?>" />
            <input class="in" type="submit" value="+" />
          </form>
        </td>
          <td>
           <form action="down.php" method="post">
            <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>" />
            <input type="hidden" name="ressource" value="<?php echo "or"; ?>" />
            <input class="in" type="submit" value="-" /></form>
             <?php echo $util->getQtyOr($donnees['id'],$bdd);?>
            <form action="up.php" method="post">
            <input type="hidden" name="ressource" value="<?php echo "or"; ?>" />
            <input class="in" type="submit" value="+" />
          </form>
        </td>

			   </tr>

		<?php
	       }
    ?>

         </table>
    <?php
     }
     else
     {
      echo "Vous n'avez pas les droit d'administrateur";
 ?>
      <a href="index.php"> revenir a l'index</a>
 <?php

     }

  }
  else
  {
   echo "Vous n' ete pas connecte";
?>
    <a href="index.php"> revenir a l'index</a>
<?php
  }
 require_once('foot.php');
?>
