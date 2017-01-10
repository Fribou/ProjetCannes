<?php
	$title='accueil';
	ob_start();
	
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>