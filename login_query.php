<?php
require_once('bdd.php');
if (isset($_POST['name']) AND isset($_POST['pwd']))      // Si les deux champs sont completer:
{
     $pwdSaisie=hash('sha512', $_POST['pwd']);           // on crypte le mdp saisie


	 $req1= $bdd->prepare("SELECT `pwd` FROM `User` WHERE `name`= :name");  //on cherche le mdp a l'aide du nom utilisateur
            $req1->execute(array('name' => $_POST['name'] ));
            $reponse1= $req1 -> fetch();
              echo "res".$reponse1['pwd']."\n";
              echo "pwd".$pwdSaisie;

             if (strcmp($reponse1['pwd'],$pwdSaisie)==0)  // si le mdp crypter de la base = le mdp saisie :
             {

              $req2= $bdd->prepare("SELECT `id` FROM `User` WHERE `name`= :name"); //on recupere l'identifiant associer
              $req2->execute(array('name' => $_POST['name'] ));                    //    au nom pour set le cookie
              $reponse2= $req2 -> fetch();
              setLog($reponse2['id']);
              delError();

              $req3= $bdd->prepare("SELECT `race` FROM `User` WHERE `name`= :name"); // on verifie si l utilisateur est
              $req3->execute(array('name' => $_POST['name'] ));                      //       un admin
              $reponse3= $req3 -> fetch();

	              if($reponse3['race']==0)    // si c'est un admin on redirige vers la page administrateur
	              {

	              die('<META HTTP-equiv="refresh" content=0;URL=admin.php>');
	              }
	              else   // si c'est un joueur il va dans le jeux
	              {

	              die('<META HTTP-equiv="refresh" content=0;URL=home.php>');
	              }

             }   // le mdp saisi ne correspond pas a celui dans la base de donne

     delLog();
     setError("Mots de passe incorrect !");
	 die('<META HTTP-equiv="refresh" content=0;URL=index.php>');

}
else   // tout les champs n'ont pas ete completer
{
	delLog();
	setError("Completer tout les champs SVP");
    die('<META HTTP-equiv="refresh" content=0;URL=index.php>');
}
?>
