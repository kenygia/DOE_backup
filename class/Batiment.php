<?php
     
    abstract class Batiment 
     {

//////////////////////////ATTRIBUT/////////////////////////////////////

    protected $_joueur;
    protected $_name;
    protected $_lvl;               #niveau du batiment
    protected $_tmpProduction;         # peu etre automatique ou declanche (automatique pour les ressouce ,declancher pour les uniter)
    protected $_prodution;              # peu etre une ressouce ou une uniter
    protected $_qtyProduction;
    protected $_prixConstruction = array(2);  #prix de la construction du batiment 
    protected $_tmpConstruction;
    protected $_race;          
    protected $_lvlMax;
    protected $_representation;
 
///////////////////////CONSTRUCTEUR///////////////////////////////////

     	function __construct($joueur,$lvl)
     	{
     		$this->_joueur= $joueur;
     		$this->_lvl=$lvl;
        }

//////////////////////SETTER//////////////////////////////////////////  

  public function setlvl($value)
    {
        if(!empty($value)AND $value>0)
        {
          $this->_lvl=(int)$value;	
        }      
     }

//////////////////////GETTER////////////////////////////////////////

 public function getId()
 {
 	return $this->_joueur;
 }
 
 public function getLvl()
 {
 	return $this->_lvl;
 }
 
 public function getName()
 {
 	return $this->_name;
 }
 
 public function getTmpProduction()
 {
 	return $this->_joueur;
 }

 public function getProduction()
 {
 	return $this->_prodution;
 }

 public function getPrixConstruction()
 {
  return $this->_prixConstruction;
 }
 
 public function getTmpConstruction()
 {
 	return $this->_tmpConstruction();
 }
 
public function getRace()
{
	return $this->_race;
}

public function getRepresentation()
{
	return $this->_representation;
}

public function getQtyProdution()
{
    return $this->_qtyProduction;
}

public function getLvlMax()
{
    return $this->_lvlMax;
}
//////////////////////////////UTILIATAIRE//////////////////////////////////

public function upgradeBatiment()
{
	/// a faire
}


 }
?>