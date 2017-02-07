<?php

	function test()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bf_webdev;charset=utf8', 'root', '');
		$req = $bdd->query('SELECT * FROM utilisateur');
		$donnees = $req->fetch();
		svar_dump($donnees);
	}


	function inscription()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=bf_webdev;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			// Connexion à la base échouée.
			die('Erreur : ' . $e->getMessage());
		}
		if(isset($_POST["username"]))
		{				
			// On teste l'existence du pseudo dans la base de données.
			$req = $bdd->query('CALL ps_utilisateur_GET_utilisateur="'.$_POST['username'].'";');
			// On stocke le résultat de la requête dans un tableau.
			$donnees = $req->fetch();
			// Compte le nombre d'enregistrements contenus dans le tableau.
			$nombreLigne = count($donnees);
			if($nombreLigne <= 1)
			{
				// Appel de la procédure cui crée un utilisateur.
				// On fixe le droit à 0, c'est-à-dire que l'utilisateur créé n'a aucun droit spécifique.
				$bdd->query('CALL ps_utilisateur_INSERT_utilisateur="'.$_POST['username']'", "'.$_POST['password']'";');
				echo 'Utilisateur créé';
			}
			else
			{
				echo 'Ce pseudo existe déjà';
			}
			echo $nombreLigne;
			$req->closeCursor(); // Termine le traitement de la requête
		}
	}
?>