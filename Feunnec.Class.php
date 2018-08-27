<?php 
	

	class Feunnec extends Pokemon
{
	public function __construct()
	{
		$this->nom = 'Feunnec';
		$this->pv = 60;
		$this->type = 'feu';
		$this->att1 = 'Griffe';
		$this->att2 = 'Charbon Mutant'; // // caractéristique de Feunnec
		$this->deg1 = -10;
		$this->deg2 = -20;
		$this->poids = '9 Kg';
		$this->taille = '0.4 m';
		$this->faiblesse = 'eau';
		$this->carte = 'Feunnec.png';

		
		
	}
}

?>