<?php
	$title = "Connexion";	
	ob_start();
	echo
	'
		<div class="form-style-6">
			<h1> Connexion </h1> 
			<form action="index.php?action=connexion" method="post">
				<input type = "text" name="Login" placeholder="login">
				<input type="password" name="Pass" placeholder="mot de passe">
				<input type="submit" value="Connexion">
			</form>
		</div>
	';

	$contenu=ob_get_clean();
	require('Views/layout.php');
?>