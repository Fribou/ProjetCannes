<?php
	class vipManager extends Model
	{
		
		// Récupère toutes les informations de la table VIP
		public function getVIP()
		{
			$sql='SELECT * FROM vip ORDER BY NOM';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		// Récupère seulement les informations d'un VIP
		public function getDetailsVIP($vipid)
		{
			$sql='SELECT * from vip WHERE IDVIP = :identifiant ';
			$req = $this -> executerRequete($sql,array('identifiant' =>	$vipid));
			$results = $req->fetch(PDO::FETCH_ASSOC);
			return $results;
		}
		
		// Ajoute un nouveau VIP
		public function setVIP($nom, $prenom, $nationalite, $titre, $importance){
			$sql = 'Insert into VIP(NOM, PRENOM, NATIONALITE, TITRE, IMPORTANCE, PHOTO, INFOSUPP) values (:nom, :prenom, :nationalite, :titre, :importance, :photo, :infosupp)';
			$req = $this->executerRequete($sql, array('nom' => $nom, 'prenom' => $prenom, 'nationalite' => $nationalite, 'titre' => $titre, 'importance' => $importance, 'photo' => "PhotoVIP/".$prenom.$nom.".jpg" , 'infosupp' => "InfoVIP/".$prenom.$nom.".txt" ));
			$req->closeCursor();
		}
		
		public function deleteVIP($vipsupp)
		{
			$sql='DELETE FROM vip WHERE IDVIP = :identifiant ';
			$req = $this -> executerRequete($sql,array('identifiant' =>	$vipsupp));
			$req->closeCursor();
		}
	}
?>