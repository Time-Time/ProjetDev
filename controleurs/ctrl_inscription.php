<?php
	// Appel des fonctions propres à la base de données.
	require_once("../config/fonctions_bd.php");
	require_once("../config/connexion_bd.php");

	if(isset($_POST["pseudo"]) && isset($_POST["password"]))
	{		
		$donnees = verifPseudoExist($bdd, $_POST["pseudo"]);
		// Relève le nombre d'occurrence du pseudo.
		$nombreLigne = $donnees['nbUser'];
		/*echo $nombreLigne;*/
		if($nombreLigne == 0)
		{
			// L'utilisateur n'existe pas encore => on le crée. On fixe le droit à 0, c'est-à-dire que l'utilisateur créé n'a aucun droit spécifique.
			insertMembre($bdd, $_POST["pseudo"], $_POST["password"], 0);
			echo 'OK';
		}
		else
		{
			echo 'KO - Erreur. Le pseudo choisit par l\'utilisateur existe déjà.';
		}
	}
	function test()
	{
		$bdd = connexionBD();
		$req = $bdd->query('SELECT * FROM utilisateur');
		$donnees = $req->fetch();
		svar_dump($donnees);
	}
	
	
?>