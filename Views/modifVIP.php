<?php
	$title = "Modif VIP";
	ob_start();
	
	// Formulaire pour modifier un VIP, Mise en place des valeurs par défaut
	echo
	'
		<form action="index.php?action=gestionVIP&old='.$results['IDVIP'].'&oldnom='.$results['NOM'].'&oldprenom='.$results['PRENOM'].'" method="post" enctype="multipart/form-data" onsubmit="return confirm(\'Are you sure you want to submit this form?\');">
			<ul class="form-style-1">
			<li>
			<label>Nom : </label>
				<input name="Nom" value="'.$results['NOM'].'" required>
			</li>
			<li>
			<label>Prenom : </label>
				<input name="Prenom" value="'.$results['PRENOM'].'" required>
			</li>
			<li>
			<label>Nationalité : </label>
				<input name="Nationalite" value="'.$results['NATIONALITE'].'" required>
			</li>
			<li>
			<label> Titre : </label>
	';
	if($results['TITRE']=="Acteur")
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur" selected="selected">Acteur</option>
				<option value="Realisateur">Réalisateur</option>
				<option value="Producteur">Producteur</option>
				<option value="Photographe">Photographe</option>
				<option value="Journaliste">Journaliste</option>
				<option value="Scenariste">Scénariste</option>
			</select>
		';
	}		
	else if($results['TITRE']=="Realisateur")
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur">Acteur</option>
				<option value="Realisateur" selected="selected">Réalisateur</option>
				<option value="Producteur">Producteur</option>
				<option value="Photographe">Photographe</option>
				<option value="Journaliste">Journaliste</option>
				<option value="Scenariste">Scénariste</option>
			</select>
		';
	}
	else if($results['TITRE']=="Producteur")
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur">Acteur</option>
				<option value="Realisateur">Réalisateur</option>
				<option value="Producteur" selected="selected">Producteur</option>
				<option value="Photographe">Photographe</option>
				<option value="Journaliste">Journaliste</option>
				<option value="Scenariste">Scénariste</option>
			</select>
		';
	}
	else if($results['TITRE']=="Photographe")
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur">Acteur</option>
				<option value="Realisateur">Réalisateur</option>
				<option value="Producteur">Producteur</option>
				<option value="Photographe" selected="selected">Photographe</option>
				<option value="Journaliste">Journaliste</option>
				<option value="Scenariste">Scénariste</option>
			</select>
		';
	}
	else if($results['TITRE']=="Journaliste")
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur">Acteur</option>
				<option value="Realisateur">Réalisateur</option>
				<option value="Producteur">Producteur</option>
				<option value="Photographe">Photographe</option>
				<option value="Journaliste" selected="selected">Journaliste</option>
				<option value="Scenariste">Scénariste</option>
			</select>
		';
	}
	else
	{
		echo
		'	
			<select name="Titre">
				<option value="Acteur">Acteur</option>
				<option value="Realisateur">Réalisateur</option>
				<option value="Producteur">Producteur</option>
				<option value="Photographe">Photographe</option>
				<option value="Journaliste">Journaliste</option>
				<option value="Scenariste" selected="selected">Scénariste</option>
			</select>
		';
	}
	
	echo
	'
		</li>
		<li>
		<label>Importance : </label>
	';
	if($results['IMPORTANCE']=="1")
	{
		echo
		'
			<select name="Importance">
				<option value="1" selected="selected">1</option>
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
		';
	}
	else if($results['IMPORTANCE']=="2")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2" selected="selected">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="3")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3" selected="selected">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="4")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4" selected="selected">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="5")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5" selected="selected">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="6")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6" selected="selected">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="7")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7" selected="selected">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="8")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8" selected="selected">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else if($results['IMPORTANCE']=="9")
	{
		echo
		'
			<select name="Importance">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9" selected="selected">9</option>
				<option value="10">10</option>
			</select>
		';
	}
	else
	{
		echo
		'
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
				<option value="10" selected="selected">10</option>
			</select>
		';
	}
	echo
	'
		</li>
		<li>
		<label>Photo : </label>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
		<input type="file" name="photo" required>	
		</li>
		<li>
		<label>Informations supplémentaires : </label>
	';
	
	// Lit le fichier texte correspondant au VIP pour remplir par défaut le text area
	$myfile = fopen("Views/InfoVIP/".$results['PRENOM'].$results['NOM'].".txt", "r");
	$contenu_du_fichier = fgets ($myfile, 255);
	fclose($myfile);
	
	echo
	'
				<textarea name="Info" rows="4" cols="50">'.$contenu_du_fichier.'</textarea>
				</li>
				<li>
			<input type="submit" name="ajoutVIP" value="Modifier le VIP">
			</li>
		</form>
	';
	
	$contenu = ob_get_clean();
	require("Views/layout.php");

?>