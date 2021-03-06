<?php 

include_once ('Batiment.php');

class Caserne extends Batiment
{    
	
	function __construct($joueur,$lvl)
	{

    if ($lvl > 5)
  { 
		parent::__construct($joueur,5);
		$this->_name='Caserne';
		$this->_tmpProduction=30-($lvl*3);
		$this->_qtyProduction=1;
		$this->_production='Unite1';
		$this->_prixConstruction=array('Bois' =>(int)$lvl*3,'Or'=>(int)$lvl*3 );
        $this->_tmpConstruction=pow((int)$lvl,2);
		$this->_race=1;
		$this->_representation=' <img src="img/tower_square.svg" border="0"/> ';
        $this->_lvlMax=5;
  }
    elseif($lvl < 0)
  {
    parent::__construct($joueur,1);
    $this->_name='Caserne';
    $this->_tmpProduction=30-($lvl*3);
    $this->_qtyProduction=1;
    $this->_production='Unite1';
    $this->_prixConstruction=array('Bois' =>(int)$lvl*3,'Or'=>(int)$lvl*3 );
    $this->_tmpConstruction=pow((int)$lvl,2);
    $this->_race=1;
    $this->_representation=' <img src="img/tower_square.svg" border="0"/> ';
    $this->_lvlMax=5;
  }
    else
    {
    parent::__construct($joueur,$lvl);
    $this->_name='Caserne';
    $this->_tmpProduction=30-($lvl*3);
    $this->_qtyProduction=1;
    $this->_production='Unite1';
    $this->_prixConstruction=array('Bois' =>(int)$lvl*3,'Or'=>(int)$lvl*3  );
    $this->_tmpConstruction=pow((int)$lvl,2);
    $this->_race=1;
    $this->_representation=' <img src="img/tower_square.svg" border="0"/> ';
    $this->_lvlMax=5 ;
    }
	}
   public function toString()
   {
   	echo "
   	<table>
     <tr>
        <td>Representation</td>
        <td>Caracteristique</td>

    </tr>
    <tr>
        <td> $this->_representation</td>
        <td>
        	<table border =4 cellspacing=4 cellpadding=4 widh=80%>
        		<tr>
        			<td> Nom : $this->_name  </td>
        			<td> Lvl : $this->_lvl  </td>
        			<td> tmpProduction :  $this->_tmpProduction  </td>
        			<td> production : <img src=\"img/guerrier.png\" width=\"40\"/> </td>
           		</tr>
        		<tr>
        			<td> qtyProduction:  $this->_qtyProduction </td>
        			<td>prixConstruction: <img src=\"img/bois.png\" width=\"40\"/> " .$this->_prixConstruction['Bois']. "/ <img src=\"img/or.png\" width=\"40\"/>  " .$this->_prixConstruction['Or']."  </td>
        			<td> tmpConstruction:  $this->_tmpConstruction </td>
        			<td> race: $this->_race </td>
        		</tr>
        	</table>
        </td>

    </tr>
   	</table> ";
   }


}





?> 