<?php 
	

	class Boguerisse extends Pokemon
{
	public function __construct()
	{
		$this->nom = 'boguerisse';
		$this->pv = 90;
		$this->type = 'Plante';
		$this->att1 = 'Vampigraine'; // caractéristique de Marisson 
		$this->att2 = 'poing dard';
		$this->deg1 = -20;
		$this->deg2 = -50;
		$this->poids = '29 Kg';
		$this->taille = '0.7m';
		$this->faiblesse = 'feu';
		$this->carte = 'boguerisse.png';
	}
}

?>



