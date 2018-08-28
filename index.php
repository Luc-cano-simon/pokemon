<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pok pok pok pok pok pokemonnnnnnn</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



	<?php 

	ini_set('display_errors', '1'); // pour afficher les erreurs

	require("Pokemon.Class.php");
	require("Marisson.Class.php"); // pour lier les pages 
	require("Grenousse.Class.php");
	require("Feunnec.Class.php");


	$marisson = new Marisson();
	$grenousse = new grenousse(); 
	$feunnec = new feunnec();

	



//aplliquer l'attaque 1 de Marisson sur Grenousse ( sans bouton pour le moment )
	// echo $marisson -> Matt1 ( $grenousse );
//aplliquer l'attaque 2 de Marisson sur Grenousse ( sans bouton pour le moment )
	// echo $marisson -> Matt2 ( $grenousse );


// appliquer l'attaque 1 de Grenousse sur Marisson ( sans bouton pour le moment )
	// echo $grenousse -> Gatt1 ( $marisson );


	
	?>

	<?php 
	// bouton attaque 1 de marisson vert Grenousse 
	
	if(!empty($_POST['att1'])) 
	{
   		 echo $marisson -> Matt1 ( $grenousse );
	}
    
    // bouton attaque 2 de Marisson vert Grenousse 

    	if(!empty($_POST['att2'])) 
	{
   		 echo $marisson -> Matt2 ( $grenousse );
	}

	// bouton attaque 1 de Marisson vert Grenousse 

    	if(!empty($_POST['attGM1'])) 
	{
   		 echo $grenousse -> Gatt1 ( $marisson );
	}	

	// bouton attaque 1 de Marisson vert Grenousse 

    	if(!empty($_POST['attGM2'])) 
	{
   		 echo $grenousse -> Gatt2 ( $marisson );
	}

	?>



<h3>Les differentes attaques : </h3>


<!-- Remise à zero pour les valeurs des cartes -->
<form method="POST">
	<input type="submit" href="http://localhost/pok3/" value="carte par défaut"><p></p>

<!-- bouton attaque 1 et 2  de marisson vert Grenousse -->
	<div class="attMarisson">
		<input  type="submit" name="att1" value="attaque 1 de Marisson sur Grenousse">
		<input type="submit" name="att2" value="attaque 2 de Marisson sur Grenousse">
	</div><p></p>

<!-- bouton attaque 1 et 2 de Grenousse vert Marisson -->	
	<div class="attGrenousse">
		<input type="submit" name="attGM1" value="attaque 1 de Grenousse sur Marisson">
		<input type="submit" name="attGM2" value="attaque 2 de Grenousse sur Marisson">
	</div>

</form>

<h3>Evolution pokemon</h3>
	<input type="submit" name="attGM1" value="faire evoluer Marisson">
<h3>Les differents Pokemon :</h3>







<!-- Case de Marisson -->

	<div class="gauche">
		<table class="green">
			<tr>
				<th>Nom</th>
				<td><?php echo $marisson->nom ?></td>
			</tr>
			<tr>
				<th>pv</th>
				<td><?php echo $marisson->pv ?></td>
			</tr>
			<tr>
				<th>type</th>
				<td><?php echo $marisson->type ?></td>
			</tr>
			<tr>
				<th>att1</th>
				<td><?php echo $marisson->att1 ?></td>
			</tr>
			<tr>
				<th>att2</th>
				<td><?php echo $marisson->att2 ?></td>
			</tr>
			<tr>
				<th>degat att 1</th>
				<td><?php echo $marisson->deg1 ?></td>
			</tr>
			<tr>
				<th>degat att 2</th>
				<td><?php echo $marisson->deg2 ?></td>
			</tr>
			<tr>
				<th>poids</th>
				<td><?php echo $marisson->poids ?></td>
			</tr>
			<tr>
				<th>taille</th>
				<td><?php echo $marisson->taille ?></td>
			</tr>
			<tr>
				<th>faiblesse</th>
				<td><?php echo $marisson->faiblesse ?></td>
			</tr>
			<tr>
				<th></th>
				<td><?php echo $marisson->aff() ?></td>
			</tr>
		</table>
	</div>

	
	<!-- Case de Grenousse -->

	<div class="centre">
		<table class="blue" >
			<tr>
			<th>Nom</th>
			<td><?php echo $grenousse->nom ?></td>
		</tr>
		<tr>
			<th>pv</th>
			<td><?php echo $grenousse->pv ?></td>
		</tr>
		<tr>
			<th>type</th>
			<td><?php echo $grenousse->type ?></td>
		</tr>
		<tr>
			<th>att1</th>
			<td><?php echo $grenousse->att1 ?></td>
		</tr>
		<tr>
			<th>att2</th>
			<td><?php echo $grenousse->att2 ?></td>
		</tr>
		<tr>
			<th>degat att 1</th>
			<td><?php echo $grenousse->deg1 ?></td>
		</tr>
		<tr>
			<th>degat att 2</th>
			<td><?php echo $grenousse->deg2 ?></td>
		</tr>
		<tr>
			<th>poids</th>
			<td><?php echo $grenousse->poids ?></td>
		</tr>
		<tr>
			<th>taille</th>
			<td><?php echo $grenousse->taille ?></td>
		</tr>
		<tr>
			<th>faiblesse</th>
			<td><?php echo $grenousse->faiblesse ?></td>
		</tr>
		<tr>
			<th></th>
			<td><?php echo $grenousse->aff() ?></td>
		</tr>
	</table>
	</div>

	<!-- case de Feunnec -->
	<div class="droite">
		<table class="red">
			<tr>
			<th>Nom</th>
			<td><?php echo $feunnec->nom ?></td>
		</tr>
		<tr>
			<th>pv</th>
			<td><?php echo $feunnec->pv ?></td>
		</tr>
		<tr>
			<th>type</th>
			<td><?php echo $feunnec->type ?></td>
		</tr>
		<tr>
			<th>att1</th>
			<td><?php echo $feunnec->att1 ?></td>
		</tr>
		<tr>
			<th>att2</th>
			<td><?php echo $feunnec->att2 ?></td>
		</tr>
		<tr>
			<th>degat att 1</th>
			<td><?php echo $feunnec->deg1 ?></td>
		</tr>
		<tr>
			<th>degat att 2</th>
			<td><?php echo $feunnec->deg2 ?></td>
		</tr>
		<tr>
			<th>poids</th>
			<td><?php echo $feunnec->poids ?></td>
		</tr>
		<tr>
			<th>taille</th>
			<td><?php echo $feunnec->taille ?></td>
		</tr>
		<tr>
			<th>faiblesse</th>
			<td><?php echo $feunnec->faiblesse ?></td>
		</tr>
		<tr>
			<th></th>
			<td><?php echo $feunnec->aff() ?></td>
		</tr>
			
	</table>
	</div>




</body>	
</html>




