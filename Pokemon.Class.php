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
	
// Fonction première attaque Marisson

	public function Matt1($pv)
	{
		$pv ->pv = $pv ->pv-10;
	}

// Fonction deuxieme attaque Marisson 

		public function Matt2($pv)
	{
		$pv ->pv = $pv ->pv-20;
	}

// Fonction première attaque Grenousse 

		public function Gatt1($pv)
	{
		$pv ->pv = $pv ->pv-10;
	}


// Fonction seconde attaque Grenousse 

		public function Gatt2($pv)
	{
		$pv ->pv = $pv ->pv-20;
	}	

// Fonction première attaque Grenousse 

		public function Fatt1($pv)
	{
		$pv ->pv = $pv ->pv-10;
	}

// Fonction seconde attaque Grenousse
	
		public function Fatt2($pv)
	{
		$pv ->pv = $pv ->pv-20;
	}

// fonction evolution de Marisson

	public function evol1M($nom)
	{
		echo 
	}



}

?>