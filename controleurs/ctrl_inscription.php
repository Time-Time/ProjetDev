<?php
	// Appel des fonctions propres à la base de données.
	require_once("config/BD.php");
	function test()
	{
		$bdd = etablirConnexionBDD();
		$req = $bdd->query('SELECT * FROM utilisateur');
		$donnees = $req->fetch();
		svar_dump($donnees);
	}
	
	function inscription()
	{
		if(isset($_POST["username"]) && isset($_POST["password"]))
		{		
			$bdd = etablirConnexionBDD();
			// On teste l'existence du pseudo dans la base de données.
			$req = $bdd->query('SELECT * FROM utilisateur WHERE ut_pseudo="'.$_POST["username"].'";');
			// On stocke le résultat de la requête dans un tableau.
			$donnees = $req->fetch();
			// Compte le nombre d'enregistrements contenus dans le tableau.
			$nombreLigne = count($donnees);
			if($nombreLigne <= 1)
			{
				// L'utilisateur n'existe pas encore => on le crée.
				// On fixe le droit à 0, c'est-à-dire que l'utilisateur créé n'a aucun droit spécifique.
				$bdd->query('
					INSERT INTO utilisateur (ut_pseudo, ut_mdp, ut_droit)
					VALUES("'.$_POST['username'].'", "'.$_POST['password'].'", 0);
					');
				echo 'L\'utilisateur "'.$_POST['username'].'" a été créé.';
			}
			else
			{
				echo 'Ce pseudo existe déjà.';
			}
			$req->closeCursor(); // Termine le traitement de la requête
		}
	}
	
?>