<?php
	$title='VIP';
	ob_start();
?>
	<h1>Liste des VIP</h1>
	
	<!-- Affichage des VIP -->
	<table class="table-fill">
	<thead>
		<tr>
		<th class="centretable"> Nom </th>
		<th class="centretable"> Prenom </th>
		<th class="centretable"> Importance </th>
		<th class="centretable"> Détails </th>
		<th class="centretable"> Modifier </th>
		<th class="centretable"> Supprimer </th>
	</thead>
	<tbody class="table-hover">
		<?php		
			foreach($results as $donnees){
					echo '<tr>';
					echo '<td class="centretable">'.$donnees['NOM'].'</td>';
					echo '<td class="centretable">'.$donnees['PRENOM'].'</td>';
					echo '<td class="centretable">'.$donnees['IMPORTANCE'].'</td>';
					echo '<td class="centretable"><a href='.'"index.php?idvip='.$donnees['IDVIP'].'"><img src="Views/img/Loupe.png"></a></td>';
					echo '<td class="centretable"><a href='.'"index.php?modifvip='.$donnees['IDVIP'].'"><img src="Views/img/Crayon.png"></a></td>';
					echo '<td class="centretable"><a href='.'"index.php?suppvip='.$donnees['IDVIP'].'" OnClick="return confirm(\'Voulez-vous vraiment supprimer ?\')"><img src="Views/img/Poubelle.png"></a></td>';
					echo '</tr>';
				}
		 ?>
	 </tbody>
	 </table>
	 <a href="index.php?action=ajoutVIP" class="action-button shadow animate yellow"> Ajouter un VIP </a>
<?php
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>