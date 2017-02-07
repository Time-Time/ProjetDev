<?php
	function etablirConnexionBDD()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=bf_bdd;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{
			// Connexion à la base échouée.
			die('Erreur : ' . $e->getMessage());
		}
		return $bdd;
	}
?>