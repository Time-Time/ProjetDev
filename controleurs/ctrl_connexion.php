<?php
	require("../config/connexion_bd.php");
	// Appel des fonctions propres à la base de données.
	require_once("../config/fonctions_bd.php");
	
	
		if(isset($_POST["pseudo"]) && isset($_POST["password"]))
		{		
			$donnees = verifIdentifiantsExist($bdd, $_POST["pseudo"], $_POST["password"]);
			// Relève le nombre d'occurrence du pseudo.
			$nombreLigne = $donnees['nbUser'];

			if($nombreLigne == 1)
			{
				session_start();
				$_SESSION['pseudo'] = $_POST['pseudo'];
				// L'utilisateur est connu.
				echo 'Utilisateur reconnu. Prêt à être connecté.';
				header('Location: ../vues/index.php');
			}
			else
			{
				echo 'Utilisateur non reconnu. L\'identifiant ou le mot de passe n\'a pas été saisi correctement.';
			}
			
		}
	
?>