 <?php 

include 'Joueur.php';
class Utilitaire
{
  

  public  static function ajouteNouriture($id,$value,$bdd)
  {
  	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['qtyNouriture']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
  }

  public  static function ajouteBois($id,$value,$bdd)
  {
  	$req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['qtyBois']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
  }

  public  static function ajouteOr($id,$value,$bdd)
  {
  	$req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['qtyOr']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
  }

   public static function upgradeFerme($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['lvlFerme']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
	
	public static function upgradeScierie($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['lvlScierie']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
	
	public static function upgradeCaserne($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['lvlCaserne']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
   public static function upgradeAcherie($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('name' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['lvlArcherie']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
   public static function upgradeCentreVille($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['lvlCentreVille']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
   public static function ajouteUnite1($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['qtyUnite1']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }
   public static function ajouteUnite2($id ,$value,$bdd)
   {
   $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('name' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
              $result['qtyUnite2']+= $value;


            $string=json_encode($result);
            $req3= $bdd->prepare("UPDATE `user` SET `sauvegarde`= :sauvegarde WHERE `id` = :id");  
            $req3->execute(array('sauvegarde' => $string,
                                   'id' => $id ));
   }

   public  static function getQtyNouriture($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);

            $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['qtyNouriture'];
   }
   public  static function getQtyBois($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['qtyBois'];
   }
   public  static function getQtyOr($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['qtyOr'];
   }

   public  static function getQtyUnite1($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['qtyUnite1'];
   }
    public  static function getQtyUnite2($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['qtyUnite2'];
   }
    public  static function getLvlFerme($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['lvlFerme'];
   }
   public  static function getLvlScierie($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['lvlScierie'];
   }
   public  static function getLvlCaserne($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['lvlCaserne'];
   }
   public  static function getLvlArcherie($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['lvlArcherie'];
   }
   public  static function getLvlCentreVille($id,$bdd)
   {
   	 $req1= $bdd->prepare("SELECT `sauvegarde` FROM `User` WHERE `id`= :id");
            $req1->execute(array('id' => $id ));
            $reponse= $req1 -> fetch();

            $obj =json_decode($reponse['sauvegarde']);
             
             $result = array('id' =>$obj -> {'id'} ,
                             'qtyUnite1' =>$obj -> {'qtyUnite1'} ,
                             'qtyUnite2' =>$obj -> {'qtyUnite2'} ,
                             'lvlFerme' =>$obj -> {'lvlFerme'} ,
                             'lvlScierie' =>$obj -> {'lvlScierie'} ,
                             'lvlCaserne' =>$obj -> {'lvlCaserne'} ,
                             'lvlArcherie' =>$obj -> {'lvlArcherie'} ,
                             'lvlCentreVille' =>$obj -> {'lvlCentreVille'} ,
                             'qtyNouriture' =>$obj -> {'qtyNouriture'} ,
                             'qtyBois' =>$obj -> {'qtyBois'} ,
                             'qtyOr' =>$obj -> {'qtyOr'}  );
             
             return $result['lvlCentreVille'];
   }
}

 ?>