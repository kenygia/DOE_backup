<?php
require_once('bdd.php');
include 'class/Joueur.php';

if (isset($_POSTE['joueur_actuel']) AND isset($_POSTE['batiment']))
{
  if($_POSTE['batiment']=="Ferme")
  {
   $cout =$_POSTE['joueur_actuel']->getFerme()->getPrixConstruction();
   $ressource_du_joueur= $_POSTE['joueur_actuel']->getRessource();
   if(($cout['Nouriture']<=$ressource_du_joueur['Nouriture'])AND
   	($cout['Bois']<=$ressource_du_joueur['Bois'])AND
   	($cout['Or']<=$ressource_du_joueur['Or']))
   {
   	$newNouriture=$ressource_du_joueur['Nouriture']-$cout['Nouriture'];
   	$newBois=$ressource_du_joueur['Bois']-$cout['Bois'];
   	$newOr=$ressource_du_joueur['Or']-$cout['Or'];

   	 $_POSTE['joueur_actuel']->setRessource($newNouriture,$newBois,$newOr);
     sleep($_POSTE['joueur_actuel']->getFerme()->getTmpConstruction()*60);
     $_POSTE['joueur_actuel']->getFerme()->setLvl( $_POSTE['joueur_actuel']->getFerme()->getLvl()+1);
   }
   else
   {
   	// pas assez de ressource pour construire ce batiment
   }

  }
  elseif($_POSTE['batiment']=="Scierie")
  {

  }
  elseif($_POSTE['batiment']=="Caserne")
  {

  }
  elseif($_POSTE['batiment']=="CentreVille")
  {

  }
  elseif($_POSTE['batiment']=="Archerie")
  {

  }

}


?>