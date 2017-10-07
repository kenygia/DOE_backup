<?php
 require_once 'bdd.php';

 if ((isset($_POST['oldmdp']))&&(isset($_POST['newmdp']))&&isset($_POST['id']))
  {
    $hasholmdp = hash('sha512',$_POST['oldmdp']);
  	$req1= $bdd->prepare("SELECT `pwd` FROM `User` WHERE `id`= :id");
    $req1->execute(array('id' => $_POST['id'] ));
    $reponse= $req1 -> fetch();

  	if ($reponse['pwd']==$hasholmdp)
  	{    $hashnewmdp = hash('sha512',$_POST['newmdp'] );
  		 $req2= $bdd->prepare("UPDATE `user` SET `pwd`= :pwd WHERE `id` = :id");  //on modifie les donne associer a l'id
		     $req2->execute(array('pwd' => $hashnewmdp,
		                           'id' => $_POST['id'] ));
		     setInfo("L'utilisateur a bien ete modifier");

		    die('<META HTTP-equiv="refresh" content=0;URL=index.php>');  // on redirige apres la modification

  	}
  	else
  	{
             ?>
            <table>

        <tr>

          <td>Ancien mots de passe </td>

          <td>Nouveau mots de passe   </td>

          <td>    </td>

       </tr>

       <tr>
           <form action="updaterpwd.php" method="post">
            <td><input class="in" type="text"  name="oldmdp" value="" /></td>
            <td><input class="in" type="text"  name="newmdp" value="" /></td>
             <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
            <td><input class="btn btn-sub" type="submit" value="Modifier" /></td>

           </form>

          </tr>
    <?php



  	}

  }
  else
  {
    die('<META HTTP-equiv="refresh" content=0;URL=index.php>');  // on redirige apres la modification
  }
?>
