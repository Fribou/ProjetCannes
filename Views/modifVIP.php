<?php
	$title = "Modif VIP";
	ob_start();
	
	// Formulaire pour ajouter un nouveau VIP
	echo
	'
		<form action="index.php?action=gestionVIP&form='.$results['IDVIP'].'&oldnom='.$results['NOM'].'&oldprenom='.$results['PRENOM'].'" method="post" enctype="multipart/form-data" onsubmit="return confirm(\'Are you sure you want to submit this form?\');">
			<label>Nom : </label>
				<input name="Nom" value="'.$results['NOM'].'">
			<label>Prenom : </label>
				<input name="Prenom" value="'.$results['PRENOM'].'">
			<label>Nationalité : </label>
				<input name="Nationalite" value="'.$results['NATIONALITE'].'">
			<label> Titre : </label>
				<select name="Titre">
					<option value="Acteur">Acteur</option>
					<option value="Realisateur">Réalisateur</option>
					<option value="Producteur">Producteur</option>
					<option value="Photographe">Photographe</option>
					<option value="Journaliste">Journaliste</option>
					<option value="Scenariste">Scénariste</option>
				</select>
			<label>Importance : </label>
				<select name="Importance">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			<label>Photo : </label>
				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
				<input type="file" name="photo">
			<label>Informations supplémentaires : </label>
				<textarea name="Info" rows="4" cols="50" placeholder="Informations Supplementaires"></textarea>
			<input type="submit" name="ajoutVIP" value="Modifier le VIP">
		</form>
	';
	
	$contenu = ob_get_clean();
	require("Views/layout.php");

?>