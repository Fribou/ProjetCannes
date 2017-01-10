<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<header>
		<?php
		
		// Gestion de la variable de session : Existante ou non
		if(isset($_SESSION['identifiant']))
		{
			echo
			'
			<nav>
				<ul>
					<li> <a href="index.php?action=gestionVIP"> Gestion des VIP </a> </li>
					<li> <a href="index.php?action=deconnexion"> Déconnexion </a></li>
				</ul>
			</nav>
			';
		}
		else
		{
			echo
			'
			<nav>
				<ul>
					<li> <a href="index.php?action=listeVIP"> Consulter les VIP </a> </li>
					<li> <a href="index.php?action=connexion"> Connexion </a></li>
				</ul>
			</nav>
			';
		}
		?>
		</header>
		<?php echo $contenu; ?>
	</body>
</html>
