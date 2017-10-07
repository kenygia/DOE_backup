<?php
 require_once('bdd.php');
 require_once('head.php');
 include_once('navbar.php');
 include 'class/Joueur.php';

if(isset($_COOKIE['DOE_log']))
{
  $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $_COOKIE['DOE_log'] ));
            $reponse= $req1 -> fetch();
  $joueur_actuel=new Joueur($reponse['sauvegarde']); 
  $joueur_actuel->toString();
}
else{
  die('<META HTTP-equiv="refresh" content=0;URL=index.php>');}


 require_once('foot.php');
  ?>
