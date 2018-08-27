<?php 


class Pokemon
{
	public $nom;
	public $pv;
	public $type;
	public $att1;
	public $att2;
	public $deg1; // Differentes caractéristiques communes des pokemon
	public $deg2;
	public $poids;
	public $taille;
	public $faiblesse;
	public $carte;





	public function __construct()
	{
	
	}
	
// fonction afficher les images 
	public function aff()
	{
		echo '<img src="' . $this->carte . '">';
	}
	
// Fonction première attaque

	public function att1($pv)
	{
		$pv ->pv = $pv ->pv-10;
	}

// Fonction deuxieme attaque

		public function att2($pv)
	{
		$pv ->pv = $pv ->pv-20;
	}







}

?>