<?php
 require_once 'bdd.php';
 include 'class/Utilitaire.php';
 
 if (isset($_POST['id']) AND isset($_POST['ressource']))
 {  
   $util= new Utilitaire();
   if ($_POST['ressource']=="nouriture")
   {
        $util->ajouteNouriture($_POST['id'],-1,$bdd);
   }
       
   elseif ($_POST['ressource']=="bois")
   {
        $util->ajouteBois($_POST['id'],-1,$bdd);
         
   }
    elseif ($_POST['ressource']=="or")
   {
        $util->ajouteOr($_POST['id'],-1,$bdd);
         
   }
  
 }
die('<META HTTP-equiv="refresh" content=0;URL=admin.php>');

 ?>