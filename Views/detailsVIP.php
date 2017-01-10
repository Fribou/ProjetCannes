<?php
	$title="CannesProject : ".$results['NOM'].$results['PRENOM'];
	ob_start();
	
	// Affichage de la photo du VIP
	echo '<h1>'.$results['NOM'].' '.$results['PRENOM'].'</h1>';
	echo '<img src="Views/'.$results['PHOTO'].'" alt="Photo" />';
	
	// Affichage des données supplémentaires
	$myfile = fopen("Views/".$results['INFOSUPP'], "r");
	$file = file("Views/".$results['INFOSUPP']); 
	$nbLignes = count($file); 
	for($i=0;$i<$nbLignes;$i++)
	{
		echo $ligne = fgets($myfile);
		echo '<br>';
	}	
	fclose($myfile);
	
	$contenu=ob_get_clean();
	require('Views/layout.php');
?>
