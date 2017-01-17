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
		<th class="centretable"> Détails </th>
	</thead>
		<?php		
			foreach($results as $donnees){
					echo
					'
						<tr>
						<td class="centretable">'.$donnees['NOM'].'</td>
						<td class="centretable">'.$donnees['PRENOM'].'</td>
						<td class="centretable"><a href='.'"index.php?idvip='.$donnees['IDVIP'].'"><img src="Views/img/Loupe.png"></a></td>
						</tr>
					';
				}
		 ?>
	 </table>
	 
<?php
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>