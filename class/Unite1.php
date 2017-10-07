<?php 

include_once ('Unite.php');

class Unite1 extends Unite
{
	
	function __construct($joueur,$qty)
	{
		parent::__construct($joueur,$qty);
		$this->_name='Guerrier';
		$this->_pv=1;
		$this->_force=1;
		$this->_race=1;
		$this->_prix= array('Nouriture' => 1,'Or' =>1 );
		$this->_representation=' <img src="img/guerrier.png" border="0"/> ';
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
        			<td> <img src=\"img/Nouriture.png\" width=\"40\"/>  x" .$this->_prix['Nouriture']."  </td>
        			<td>  <img src=\"img/or.png\" width=\"40\"/>  x".$this->_prix['Or']." </td>
        			
        		</tr>
        	</table>
        </td>

    </tr>
   	</table> ";
   }
}
?> 