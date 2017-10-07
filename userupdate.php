<?php
 require_once 'bdd.php';  // nota bene si le nom saisi existe deja il faut renvoyer au formulaire

 if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_COOKIE['DOE_log'])&&isset($_POST['id']))
 
 {
 	 $req3= $bdd->prepare("SELECT `race` FROM `User` WHERE `id`= :id"); // on verifie si l utilisateur est 
     $req3->execute(array('id' => $_COOKIE['DOE_log'] ));                      //       un admin
     $reponse3= $req3 -> fetch();
		     if($reponse3['race']==0) 
		 	{
   
		    echo  "je suis un admin"; 
		 	 
		 	 $req1= $bdd->prepare("UPDATE `user` SET `name`= :name,`email`= :email WHERE `id` = :id");  //on modifie les donne associer a l'id
		     $req1->execute(array('name' => $_POST['name'],
		                          'email' => $_POST['email'],
		                          'id' => $_POST['id'] ));

		     setInfo("L'utilisateur a bien ete modifier");
		     die('<META HTTP-equiv="refresh" content=0;URL=admin.php>');  // on redirige apres la modification	
		 	}
		 	else
		 	{
		 	 $req1= $bdd->prepare("UPDATE `user` SET `name`= :name,`email`= : email WHERE `id` = :id"); //on modifie les donne associer a l'id
		     $req1->execute(array('name' => $_POST['name'],
		                          'email' => $_POST['email'],
		                          'id' => $_COOKIE['DOE_log'] ));

		     setInfo("L'utilisateur a bien ete modifier");
		     die('<META HTTP-equiv="refresh" content=0;URL=index.php>');  // on redirige apres la modification
		   }
 }


?>