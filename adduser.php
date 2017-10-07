<?php
     require_once('bdd.php');


    if (isset($_POST['name']) AND isset($_POST['pwd']) AND isset($_POST['race']) AND isset($_POST['email']))
 {          $pwd= hash('sha512',$_POST['pwd']);
            $req1= $bdd->prepare("SELECT `id` FROM `User` WHERE `name`= :name");
            $req1->execute(array('name' => $_POST['name'] ));
            $reponse= $req1 -> fetch();
           if ($reponse['id']=="")
           {    
            
                 echo "je suis ici ";
                 $req2 = $bdd->prepare("INSERT INTO `User`(`name`, `pwd`, `race`, `email`,`sauvegarde`) VALUES( :name, :pwd, :race, :email, :sauvegarde);");
                 $req2->execute(array(
                 'name'=>$_POST['name'],
                 'pwd'=>$pwd,
                 'race'=>$_POST['race'],
                 'email'=>$_POST['email'],
                 'sauvegarde'=>""
                 ));
                 $req1->execute(array('name' => $_POST['name'] ));
                 $id = $req1 -> fetch();
                 echo $id['id'];
                 $arrayName = array('id' =>$id['id'],'qtyUnite1'=>1,'qtyUnite2'=>0,'lvlFerme'=>1,'lvlScierie'=>1,'lvlCaserne'=>1,
                                 'lvlArcherie'=>1,"lvlCentreVille"=>1,'qtyNouriture'=>20,'qtyBois'=>20,'qtyOr'=>30);    
                 $string=json_encode($arrayName);
                 $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
                 $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id['id'] ));
                 echo $string;
                 setLog($id['id']);
                 delError();
                 die('<META HTTP-equiv="refresh" content=0;URL=home.php>');
           }
            else
            {
                echo "itentifiant deja utiliser";
                setError("Identifiant deja utiliser");
                delLog();
                die('<META HTTP-equiv="refresh" content=0;URL=register.php>');



            }
 }
 else
 {

    echo "completer tout les champ";
    delLog();
    setError("Completer tout les champs SVP") ;
   die('<META HTTP-equiv="refresh" content=0;URL=register.php>'); 

}
?>
