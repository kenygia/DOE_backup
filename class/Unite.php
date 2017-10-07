<?php
  /**
  * 
  */
    class Unite
  {

/////////////////////////////////ATTIBUT////////////////////////////////    
    protected $_joueur;
    protected $_nom;
    protected $_pv;
    protected $_race;
    protected $_force;
    protected $_prix  = array();
    protected $_representation;
    protected $_qty;
   

/////////////////////////////CONSTRUCTEUR///////////////////////////////



    function __construct($joueur,$qty) 
    {
    
     $this->_joueur = $joueur;
     $this->_qty= $qty;
    
    }


///////////////////////////////SETTER///////////////////////////////////  

  
public function setNom($value)
  {
  if (!empty($value) AND strlen($value) < 15)
    {
      $this->_nom = $value;
    }
  }

public function setPV($value)
  {
  if (!empty($value) AND $value >= 0)
    {
      $this->_pv = $value;
    }
  }

public function setForce($value)
  {
  if (!empty($value) AND $value > 0)
    {
      $this->_force = $value;
    }
  }  
 
 public function setRace($value)
  {
  if (!empty($value) AND $value > -1 AND $value < 3)
    {
      $this->_race = $value;
    }
  } 

  public function setPrix(array $value)
  {
  if (!empty($value) AND $value > 0)
    {
      $this->_prix =(int)$value;
    }
  } 
  
  public function setRepresentation($value)
  {
  if (!empty($value))
    {
      $this->_representation = $value;
    }
  }

  public function setQty($value)
  {
   if (!empty($value))
   {
    $this->_qty= (int)$value;
   }
  }

/////////////////////////GETTER///////////////////////////////


public function getNom()
  {
   return $this->_nom ;
  }

public function getPV()
  {
  return $this->_pv;
  }

public function getForce()
  {
  return $this->_force;
  }
 
public function getRace()
  {
  return $this->_race;
  }

public function getPrix()
  {
  return $this->_prix;
  } 
  
public function getRepresentation()
  {
  return $this->_representation;
  }
public function getQty()
  {
  return $this->_qty;
  }



}
?>