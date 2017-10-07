 
<?php
 require_once 'bdd.php';
 require_once('head.php');
 include('navbar.php');
 
 if (isset($_POST['id']))

 {
 	
 	 $req1= $bdd->prepare("DELETE FROM `User` WHERE `id`= :id");  //on supprime tout ce qui conserne l'id
     $req1->execute(array('id' => $_POST['id'] ));

     setInfo("L'utilisateur a bien ete supprime");
     die('<META HTTP-equiv="refresh" content=0;URL=admin.php>');  // on redirige apres la suppression
 }

require_once('foot.php');
?>