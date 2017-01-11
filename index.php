<?php	
	session_start();
	
	// Appel et initialisation des variances de gestion de la base de données
	
	require('Model/Model.php');
	require('Model/UserManager.php');
	require('Model/vipManager.php');
	$um = new UserManager();
	$vm = new vipManager();
	
	// Deconnexion
	
	if(isset($_GET['action'])&& $_GET['action']=='deconnexion')
	{
		session_destroy();
		header ('Location: index.php');
		exit(0);
	}
	
	// Connexion
	
	if(isset($_GET['action']) && $_GET["action"]=='connexion')
	{		
		require("Views/connexion.php");	
		if(isset($_POST['Login']))
		{	
			$identifiant = $_POST['Login'];
			$password = $_POST['Pass'];
			$result = $um -> getConnexion($identifiant);
			print_r($result);
			if ($result == NULL)
				echo "<p> Une erreur est survenue : Identifiant inconnu.</p>";	
			else if ($result['PASS']!=$password)
				echo "<p> Une erreur est survenue : Mot de passe incorrect.</p>";	
			else
			{
				echo "<p>Cool</p>";
				$_SESSION['identifiant']=$identifiant;
				header ('Location: index.php');
				exit(0);
			}
		}
	}
	
	// Gestion des VIP avec affichage en mode Admin
	
	else if(isset($_GET['action']) && $_GET["action"]=='gestionVIP')
	{
		if(!empty($_POST))
		{	
			$nom = $_POST['Nom'];
			$prenom = $_POST['Prenom'];
			$nationalite = $_POST['Nationalite'];
			$titre = $_POST['Titre'];
			$importance = $_POST['Importance'];
			
			//Ajout d'une image à une certaine position dans mon ordinateur
		
			// Constantes
			define('TARGET', 'Views/PhotoVIP/'); // Repertoire cible
			define('MAX_SIZE', 100000);    // Taille max (octets)
			define('WIDTH_MAX', 2000);    // Largeur max (pixels)
			define('HEIGHT_MAX', 2000);    // Hauteur max (pixels)
			
			// Tableaux de donnees
			$tabExt = array('jpg');    // Extensions autorisees
			$infosImg = array();
			 
			// Variables
			$extension = '';
			$message = '';
			$nomImage = '';
			
			// On verifie si le champ est rempli
			if(!empty($_FILES['photo']['name']))
			{
				// Recuperation de l'extension du fichier
				$extension  = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

				// On verifie l'extension du fichier
				if(in_array(strtolower($extension),$tabExt))
				{
					// On recupere les dimensions du fichier
					$infosImg = getimagesize($_FILES['photo']['tmp_name']);

					// On verifie le type de l'image
					if($infosImg[2] >= 1 && $infosImg[2] <= 14)
					{
						// On verifie les dimensions et taille de l'image
						if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['photo']['tmp_name']) <= MAX_SIZE))
						{
							// Parcours du tableau d'erreurs
							if(isset($_FILES['photo']['error']) && UPLOAD_ERR_OK === $_FILES['photo']['error'])
							{
								// On renomme le fichier
								$nomImage = $prenom.$nom.'.'.$extension;

								// Si c'est OK, on teste l'upload
								if(move_uploaded_file($_FILES['photo']['tmp_name'], TARGET.$nomImage))
								{
									$message = 'Upload réussi !';
									$result = $vm -> setVIP($nom, $prenom, $nationalite, $titre, $importance);
								}
								else
								{
									// Sinon on affiche une erreur systeme
									$message = 'Problème lors de l\'upload !';
								}
							}
							else
							{
								$message = 'Une erreur interne a empêché l\'uplaod de l\'image';
							}
						}
						else
						{
							// Sinon erreur sur les dimensions et taille de l'image
							$message = 'Erreur dans les dimensions de l\'image !';
						}
					}
					else
					{
						// Sinon erreur sur le type de l'image
						$message = 'Le fichier à uploader n\'est pas une image !';
					}
				}
				else
				{
					// Sinon on affiche une erreur pour l'extension
					$message = 'L\'extension du fichier est incorrecte !';
				}
			}
			else
			{
				// Sinon on affiche une erreur pour le champ vide
				$message = 'Veuillez remplir le formulaire svp !';
			}
			
			// Création du fichier txt dans /Views/InfoVIP
			
			$myfile = fopen("Views/InfoVIP/".$prenom.$nom.".txt", "wb");
			$txt = $nom." ".$prenom." : ".$_POST['Info'];
			fwrite($myfile, $txt);
			fclose($myfile);
			
			echo $message;
		}
		$results = $vm -> getVIP();
		require("Views/gestionVIP.php");
	}
	
	// Affichage des détails d'un VIP en particulier
	
	else if(isset($_GET['idvip']))
	{
		if ($_GET['idvip']=="")
		{
			echo 'Identifiant de VIP requis';
		}
		else
		{
			$results = $vm -> getDetailsVIP($_GET['idvip']);
			require("Views/detailsVIP.php");
		}
	}
	
	// Suppresion d'un VIP
	
	else if(isset($_GET['suppvip']))
	{
		if ($_GET['suppvip']=="")
		{
			echo 'Identifiant de VIP requis';
		}
		else
		{
			$vm -> deleteVIP($_GET['suppvip']);
			$results = $vm -> getVIP();
			require("Views/gestionVIP.php");
		}
	}
	
	// Affichage de la liste des VIP mode non Admin
	
	else if(isset($_GET['action']) && $_GET["action"]=='listeVIP')
	{
		$results = $vm -> getVIP();
		require("Views/listeVIP.php");
	}
	
	// Page d'ajout d'un VIP
	
	else if(isset($_GET['action']) && $_GET["action"]=='ajoutVIP')
	{
		require("Views/ajoutVIP.php");
	}
	
	// Page d'accueil
	
	else
	{
		require("Views/accueil.php");
	}
?>