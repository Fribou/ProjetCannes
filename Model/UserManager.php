<?php
   class UserManager extends Model
   {
		public function getConnexion($userid)
		{
			$sql = 'Select LOGIN, PASS from user where LOGIN = :identifiant';
			$req= $this -> executerRequete($sql, array('identifiant' =>	$userid));
			$results = $req -> fetch(PDO::FETCH_ASSOC);
			$req -> closeCursor();
			return $results;
		}
		
		public function getTitre($titreid)
		{
			$sql = 'Select TITRE from user';
			$req= $this -> executerRequete($sql);
			$results = $req -> fetchAll(PDO::FETCH_ASSOC);
			$req -> closeCursor();
			return $results;
		}
	}
?>