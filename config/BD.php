<?php
	

	function ConnexionBD()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=bf_bdd;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			// Connexion � la base �chou�e.
			die('Erreur : ' . $e->getMessage());
		}
		return $bdd;
	}

	function selectDisc($bdd) {

		$req = $bdd->query('SELECT * FROM discipline');
		$donnee = $req->fetch();
		return $donnee;
	}
?>