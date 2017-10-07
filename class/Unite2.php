<?php 

include_once ('Unite.php');

class Unite2 extends Unite
{
	
	function __construct($joueur,$qty)
	{
		parent::__construct($joueur,$qty);
		$this->_name='Archer';
		$this->_pv=2;
		$this->_force=2;
		$this->_race=1;
		$this->_prix=array('Bois' => 1,'Or' =>1 );
		$this->_representation=' <img src="img/archer.png" border="0"/> ';
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
        			<td> PV : $this->_pv  </td>
        			<td> Force : $this->_force </td>
        			
           		</tr>
        		<tr>
        			<td> Race : $this->_race </td>
        			<td> <img src=\"img/bois.png\" width=\"40\"/>  x" .$this->_prix['Bois']."  </td>
        			<td>  <img src=\"img/or.png\" width=\"40\"/>  x".$this->_prix['Or']." </td>
        			
        		</tr>
        	</table>
        </td>

    </tr>
   	</table> ";
   }
}

?> 