<?php 
	

	class Marisson extends Pokemon
{
	public function __construct()
	{
		$this->nom = 'Marisson';
		$this->pv = 60;
		$this->type = 'Plante';
		$this->att1 = 'Fouet Lianes'; // caractéristique de Marisson 
		$this->att2 = 'Canon Graine';
		$this->deg1 = -10;
		$this->deg2 = -20;
		$this->poids = '9 Kg';
		$this->taille = '0.4m';
		$this->faiblesse = 'feu';
		$this->carte = 'Marisson.png';
	}

}

?>



		
	
