<?php
 require_once 'bdd.php';
 require_once('head.php');
 include('navbar.php');
 include 'class/Ferme.php';
 include 'class/Scierie.php';
 include 'class/CentreVille.php';
 include 'class/Caserne.php';
 include 'class/Archerie.php';
 include 'class/Unite1.php';
 include 'class/Unite2.php';

if(isset($_POST['race']))  // si la race est choisie
{
  if($_POST['race']=="nain") //si la race choisie est nain
  {
  	if(isset($_POST['type'])) //si le type est choisie et que l'on a choisie nain
  	{
	      if ($_POST['type']=="Batiment") 
	      {
	      	for ($i=1; $i < 6 ; $i++) { 
	      		$ferm = new Ferme(0,$i);
	      		$ferm->toString();
	      	}
	      	for ($j=1; $j < 6 ; $j++) { 
	      		$sc = new Scierie(0,$j);
	      		$sc->toString();
	      	}
	      	for ($k=1; $k< 6 ; $k++) { 
	      		$tc = new CentreVille(0,$k);
	      		$tc->toString();
	      	}
	        for ($l=1; $l< 6 ; $l++) { 
	      		$c = new Caserne(0,$l);
	      		$c->toString();
	      	}
	      	for ($m=1; $m< 6 ; $m++) { 
	      		$c = new Archerie(0,$m);
	      		$c->toString();
	      	}
	      }
	  	
	    else  // on afiche les uniter naine
	  	{
	     $un=new Unite1(12,14);
	     $un->toString();
	     $ar=new Unite2(12,4);
	     $ar->toString();
  	    }
  	}
  	

  	else  // si le type n est pas choisie et que l'on a choisie nain
  	{
        ?>
		<tr>
		          <td> <form  action="codex.php" method="post">
		          <input type="hidden" name="race" value="nain" />
		          <input type="hidden" name="type" value="Batiment" />
		          <input class="btn" type="submit" value="Batiment" />
		          </form></td>
		          <td> <form action="codex.php" method="post">
		          <input type="hidden" name="race" value="nain" />
		          <input type="hidden" name="type" value="Unite" />
		          <input class="btn" type="submit" value="Unite" />
		          </form></td>

		</tr>
		<?php
    }
 }

	else  // si la race est elfe
	  {
		if(isset($_POST['type'])) // si le type est choisie et que l'on a  choisi elfe
		{
              if ($_POST['type']=="Batiment") 
              {
			      	for ($i=1; $i < 6 ; $i++) { 
			      		$ferm = new Ferme(0,$i);
			      		$ferm->toString();
			      	}
			      	for ($j=1; $j < 6 ; $j++) { 
			      		$sc = new Scierie(0,$j);
			      		$sc->toString();
			      	}
			      	for ($k=1; $k< 6 ; $k++) { 
			      		$tc = new CentreVille(0,$k);
			      		$tc->toString();
			      	}
			        for ($l=1; $l< 6 ; $l++) { 
			      		$c = new Caserne(0,$l);
			      		$c->toString();
			      	}
			      	for ($m=1; $m< 6 ; $m++) { 
			      		$c = new Archerie(0,$m);
			      		$c->toString();
      	 
      	      }
		}
      	      
      	      else
      	      {
	         $un=new Unite1(12,14);
		     $un->toString();
		     $ar=new Unite2(12,4);
		     $ar->toString();
      	      }
		  }
		  	else  //si le type n est pas choisi mais que la race choisi est elfe
		  	{
		        ?>
				<tr>
				          <td> <form action="codex.php" method="post">
				          <input type="hidden" name="race" value="elfe" />
				          <input type="hidden" name="type" value="Batiment" />
				          <input class="btn" type="submit" value="Batiment" />
				          </form></td>
				          <td> <form  action="codex.php" method="post">
				          <input type="hidden" name="race" value="elf" />
				          <input type="hidden" name="type" value="Unite" />
				          <input class="btn" type="submit" value="Unite" />
				          </form></td>

				</tr>
				<?php
		    }
	  }
}
else   // si la race n est pas choisi
{
	?>
<tr>
          <td> <form action="codex.php" method="post">
          <input type="hidden" name="race" value="nain" />
          <input class="btn"type="submit" value="Nain" />
          </form></td>
          <td> <form  action="codex.php" method="post">
          <input type="hidden" name="race" value="elfe" />
          <input class="btn" type="submit" value="elfe" />
          </form></td>

</tr>

<?php
}

 require_once('foot.php');
 ?>
