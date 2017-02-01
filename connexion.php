<?php
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
		if(isset($_POST["pseudo"]))
		{				
			$req = $bdd->query('CALL ps_utilisateur_INSERT_utilisateur("Thomas", "aze", 0)');

			// On affiche chaque entrée une à une
			while ($donnees = $req->fetch())
			{
				echo $donnees['ut_pseudo'];
				echo $donnees['ut_mdp'];
				echo $donnees['ut_droit'];
			}
		}

		$req->closeCursor(); // Termine le traitement de la requête
	}
?>





