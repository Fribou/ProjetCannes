<?php
	$title='VIP';
	ob_start();
?>
	<h1>Liste des VIP</h1>
	
	<!-- Affichage des VIP -->
	<table>
		<?php		
			foreach($results as $donnees){
					echo '<tr>';
					echo '<td>'.$donnees['NOM'].'</td>';
					echo '<td>'.$donnees['PRENOM'].'</td>';
					echo '<td>'.$donnees['IMPORTANCE'].'</td>';
					echo '<td><a href='.'"index.php?idvip='.$donnees['IDVIP'].'">Détails</a></td>';
					echo '<td><a href='.'"index.php?suppvip='.$donnees['IDVIP'].'" OnClick="return confirm(\'Voulez-vous vraiment supprimer ?\')">Supprimer</a></td>';
					echo '</tr>';
				}
		 ?>
	 </table>
	 <a href="index.php?action=ajoutVIP"> Ajouter un VIP </a>
<?php
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>