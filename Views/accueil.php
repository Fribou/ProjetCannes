<?php
	$title='accueil';
	ob_start();
	
	echo
	'
	<label> Dernier VIP ajouté </label>
	<h1>'.$results['NOM'].' '.$results['PRENOM'].'</h1>
	<img src="Views/'.$results['PHOTO'].'" alt="Photo" />
	';
	
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>