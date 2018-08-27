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
	// echo $marisson -> att1 ( $grenousse );
//aplliquer l'attaque 2 de Marisson sur Grenousse ( sans bouton pour le moment )
	// echo $marisson -> att2 ( $grenousse );


	
	?>








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