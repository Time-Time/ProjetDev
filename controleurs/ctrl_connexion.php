<?php
	// Appel des fonctions propres à la base de données.
	require_once("../config/BD.php");
	function connecterUtilisateur()
	{
		if(isset($_POST["pseudo"]) && isset($_POST["password"]))
		{		
			$bdd = connexionBD();
			// On teste l'existence du pseudo dans la base de données.
			$req = $bdd->query('SELECT * FROM utilisateur WHERE ut_pseudo="'.$_POST["pseudo"].'", "'.$_POST["password"].'";');
			// On stocke le résultat de la requête dans un tableau.
			$donnees = $req->fetch();
			// Compte le nombre d'enregistrements contenus dans le tableau.
			$nombreLigne = count($donnees);
			if($nombreLigne >= 1)
			{
				// L'utilisateur est connu.
				echo 'Utilisateur reconnu. Prêt à être connecté.';
			}
			else
			{
				echo 'Utilisateur non reconnu. L\'identifiant ou le mot de pass n\'a pas été saisi correctement.';
			}
			$req->closeCursor(); // Termine le traitement de la requête
		}
	}
	
?>