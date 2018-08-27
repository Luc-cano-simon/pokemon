<?php 
	

	class Grenousse extends Pokemon
{
	public function __construct()
	{
		$this->nom = 'Grenousse';
		$this->pv = 60;
		$this->type = 'eau';
		$this->att1 = 'Ecras Face';
		$this->att2 = 'Goutte à Goutte'; // caractéristique de Grenousse
		$this->deg1 = -10;
		$this->deg2 = -20;
		$this->poids = '7 Kg';
		$this->taille = '0.3m';
		$this->faiblesse = 'plante';
		$this->carte = 'Grenousse.png';
	}
		
}

?>
		
