<?php
 
 include 'class/Ferme.php';
 include 'class/Scierie.php';
 include 'class/CentreVille.php';
 include 'class/Caserne.php';
 include 'class/Archerie.php';
 include 'class/Unite1.php';
 include 'class/Unite2.php';

class Joueur 
{


  private $_id;
  private $_unite= array(2);     // tableau d'unite
  private $_batiment= array(5);  // tableau de batiment
  private $_ressource= array(3); //tableau de ressource
  
/////////////////////////CONSTRUCTEUR///////////////////////////////////////////
    
     function __construct($string)
     {

      $obj =json_decode($string);
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
      $this->hydrate( $result);
     }

////////////////////////////HYDRATATION//////////////////////////////////////////////
   
    public function hydrate(array $donnees)
    {
         if(isset($donnees['id']))
          {$this->setId($donnees['id']);}
         
          $this->setUnit($donnees['qtyUnite1'],$donnees['qtyUnite2']);
         if(isset($donnees['lvlFerme'])AND isset($donnees['lvlScierie'])AND isset($donnees['lvlCaserne']) AND isset($donnees['lvlArcherie'])AND isset($donnees['lvlCentreVille']))
            {$this->setBatiment($donnees['lvlFerme'],$donnees['lvlScierie'],$donnees['lvlCaserne'],$donnees['lvlArcherie'],$donnees['lvlCentreVille']);}
         if(isset($donnees['qtyNouriture'])AND isset($donnees['qtyBois'])AND isset($donnees['qtyOr']))
            {$this->setRessource($donnees['qtyNouriture'],$donnees['qtyBois'],$donnees['qtyOr']);}     
    }

    
///////////////////////////SETTER////////////////////////////////////////////////////

  public function setId($value)
      {
        $this->_id =$value;
      }

  public function setUnit($qtyUnite1,$qtyUnite2)
  {
      $this->_unite = array('unite1' => $unite1= new Unite1($this->getId(),(int)$qtyUnite1),
                           'unite2' => $unite2= new Unite2($this->getId(),(int)$qtyUnite2) );
  }

  public function setBatiment($lvlFerme,$lvlScierie,$lvlCaserne,$lvlArcherie,$lvlCentreVille)
  {
     $this->_batiment = array('Ferme' =>$Ferme = new Ferme($this->getId(),(int)$lvlFerme),
                             'Scierie' =>$Scierie = new Scierie($this->getId(),(int)$lvlScierie),
                             'Caserne' =>$Caserne = new Caserne($this->getId(),(int)$lvlCaserne),
                             'Archerie' =>$Archerie = new Archerie($this->getId(),(int)$lvlArcherie),
                             'CentreVille' =>$CentreVille = new CentreVille($this->getId(),(int)$lvlCentreVille) );
  }

  public function setRessource($qtyNouriture,$qtyBois,$qtyOr)
  {
    $this->_ressource= array('Nouriture' =>(int)$qtyNouriture ,
                            'Or' =>(int)$qtyOr ,
                            'Bois' =>(int)$qtyBois );
  }
////////////////////////////GETTER////////////////////////////////////////////////////////

  public function getId()
  {
    return $this->_id;
  }

  public function getUnite()
  {
    return $this->_unite;
  }
  
  public function getFerme()
  {
    return $this->_batiment['Ferme'];
  }
  public function getScierie()
  {
    return $this->_batiment['Scierie'];
  }
  
  public function getRessource()
  {
    return $this->_ressource;
  }
//////////////////////////////UTILITAIRE/////////////////////////////////////////

public function chargerSauvegarde($value)
{
  # code...
}
public function enregistrerSauvegarde()
{
  # code...
}
public function nouveauxJoueur()
{
  # code...
}
//////////////////////////////TOSTRING/////////////////////////////////////////
public function toString()
   {
    echo "
    <table>
     <tr>
        <td></td>
        <td>Vos batiments</td>

    </tr>
    <tr>
        <td> </td>
        <td>
          <table border =5 cellspacing=5 cellpadding=5 widh=100%>
            <tr>
              <td> ".$this->_batiment['Ferme']->getRepresentation()."</td>
              <td> ".$this->_batiment['Scierie']->getRepresentation()." </td>
              <td> ".$this->_batiment['CentreVille']->getRepresentation()." </td>
              <td> ".$this->_batiment['Caserne']->getRepresentation()." </td>
              <td> ".$this->_batiment['Archerie']->getRepresentation()." </td>              
              </tr>
            <tr>
              <td> Lvl :".$this->_batiment['Ferme']->getLvl()." </td>
              <td>Lvl :".$this->_batiment['Scierie']->getLvl() ." </td>
              <td>Lvl :".$this->_batiment['CentreVille']->getLvl() ." </td>
              <td> Lvl :".$this->_batiment['Caserne']->getLvl() ." </td>
              <td>Lvl :".$this->_batiment['Archerie']->getLvl() ." </td>  
            </tr>
          </table>
        </td>
    </tr>
    </table>
    </br>
    <table>
     <tr>
        <td>   </td>
        <td> Troupes  </td>

    </tr>
    <tr>
        <td> </td>
        <td>
          <table border =5 cellspacing=5 cellpadding=5 widh=100%>
            <tr>
              <td> ".$this->_unite['unite1']->getRepresentation()."</td>
              <td> ".$this->_unite['unite2']->getRepresentation()." </td>
                        
              </tr>
            <tr>
              <td> X ".$this->_unite['unite1']->getQty()." </td>
              <td> X ".$this->_unite['unite2']->getQty() ." </td>
               
              
              
            </tr>
          </table>
        </td>

    </tr>
    </table> 
    <table>
     <tr>
        <td>   </td>
        <td>Vos ressources</td>

    </tr>
    <tr>
        <td>  </td>
        <td>
          <table border =5 cellspacing=5 cellpadding=5 widh=100%>
            <tr>
              <td> <img src=\"img/Nouriture.png\" width=\"40\"/> </td>
              <td> <img src=\"img/bois.png\" width=\"40\"/>  </td>
              <td> <img src=\"img/or.png\" width=\"40\"/>  </td>
                          
              </tr>
            <tr>
              <td>  ".$this->_ressource['Nouriture']." </td>
              <td>  ".$this->_ressource['Bois'] ." </td>
               <td> ".$this->_ressource['Or']." </td>
                
              
              
            </tr>
          </table>
        </td>

    </tr>
    </table> 
 ";
   }
}
?>
