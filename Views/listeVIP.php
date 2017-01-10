<?php
	$title='VIP';
	ob_start();
?>
	<h1>Liste des VIP</h1>

	<table>
		<?php		
			foreach($results as $donnees){
					echo
					'
						<tr>
						<td>'.$donnees['NOM'].'</td>
						<td>'.$donnees['PRENOM'].'</td>
						<td><a href='.'"index.php?idvip='.$donnees['IDVIP'].'">Détails</a></td>
					';
				}
		 ?>
	 </table>
	 
<?php
	$contenu = ob_get_clean();
	require('Views/layout.php');
?>