<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<header>
		<?php
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
