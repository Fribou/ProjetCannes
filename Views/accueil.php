<?php
	$title='accueil';
	ob_start();
	
	// Affichage du dernier VIP ajouté
	echo
	'
	<label> Dernier VIP ajouté </label>
	<h1>'.$results['NOM'].' '.$results['PRENOM'].'</h1>
	<img src="Views/'.$results['PHOTO'].'" alt="Photo" />
	';
	
	// Decompte jusqu'au festival de cannes
	$annee = date('Y');
	$festival = mktime(0, 0, 0, 5, 17, $annee);
			
	if ($festival < time())
	$festival = mktime(0, 0, 0, 5, 17, ++$annee);

	$tps_restant = $festival - time(); // $festival sera toujours plus grand que le timestamp actuel, vu que c'est dans le futur. ;)

	// CONVERSIONS

	$i_restantes = $tps_restant / 60;
	$H_restantes = $i_restantes / 60;
	$d_restants = $H_restantes / 24;
	$s_restantes = floor($tps_restant % 60); // Secondes restantes
	$i_restantes = floor($i_restantes % 60); // Minutes restantes
	$H_restantes = floor($H_restantes % 24); // Heures restantes
	$d_restants = floor($d_restants); // Jours restants

	setlocale(LC_ALL, 'fr_FR');

	echo 'Nous sommes le '. strftime('%d %B %Y, et il est %Hh%M.').' Il reste exactement '. $d_restants .' jours, '. $H_restantes .' heures,'.$i_restantes .' minutes et '. $s_restantes .'s avant le début du festival.';
	
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>