<?php
	$title = "Ajout VIP";
	ob_start();
	
	// Formulaire pour ajouter un nouveau VIP
	echo
	'
		<form action="index.php?action=gestionVIP" method="post" enctype="multipart/form-data" onsubmit="return confirm(\'Are you sure you want to submit this form?\');">	
			<ul class="form-style-1">
				<li>
					<label>Nom : </label>
						<input name="Nom" placeholder="Nom">
					<label>Prenom : </label>
						<input name="Prenom" placeholder="Prénom">
				</li>
				<li>
					<label>Nationalité : </label>
					<input name="Nationalite" placeholder="Nationalité">
				</li>
				<li>
					<label> Titre : </label>
					<select name="Titre">
						<option value="Acteur">Acteur</option>
						<option value="Realisateur">Réalisateur</option>
						<option value="Producteur">Producteur</option>
						<option value="Photographe">Photographe</option>
						<option value="Journaliste">Journaliste</option>
						<option value="Scenariste">Scénariste</option>
					</select>
				</li>
				<li>
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
						<option value="10">10</option>
					</select>
				</li>
				<li>
					<label>Photo : </label>
					<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
					<input type="file" name="photo">
				</li>
				<li>
					<label>Informations supplémentaires : </label>
						<textarea name="Info" rows="4" cols="50" placeholder="Informations Supplementaires"></textarea>
				</li>
				<li>
					<input type="submit" name="ajoutVIP" value="Ajouter un VIP">
				</li>
			</ul>
		</form>
	';
	
	$contenu = ob_get_clean();
	require("Views/layout.php");

?>