<?php
	$title = "Connexion";	
	ob_start();
	echo
	'
		<form action="index.php?action=connexion" method="post">
			<input name="Login" placeholder="login">
			<input type="password" name="Pass" placeholder="mot de passe">
			<input type="submit" value="Connexion">
		</form>
	';

	$contenu=ob_get_clean();
	require('Views/layout.php');
?>