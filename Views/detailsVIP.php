<?php
	$title="CannesProject : ".$results['NOM'].$results['PRENOM'];
	ob_start();
	
	echo '<h1>'.$results['NOM'].' '.$results['PRENOM'].'</h1>';
	echo '<img src="Views/'.$results['PHOTO'].'" alt="Photo" />';
	$contenu=ob_get_clean();
	require('Views/layout.php');
?>
