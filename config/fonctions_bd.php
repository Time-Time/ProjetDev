<?php

	function selectDisc($bdd)
	{
		$req = $bdd->query('SELECT * FROM discipline');
		$donnee = $req->fetch();
		return $donnee;
	}

	//
	function verifIdentifiantsExist($bdd, $pseudo, $password)
	{
		// On teste l'existence du pseudo et du mot de passe dans la base de donn�es.
		$req = $bdd->query('SELECT COUNT(*) AS nbUser FROM membre WHERE mem_pseudo = \''.$pseudo.'\' AND mem_pwd=\''.$password.'\'');
		// On stocke le r�sultat de la requ�te dans un tableau.
		$donnees = $req->fetch();
		$req->closeCursor(); // Termine le traitement de la requ�te
		return $donnees;
	}


	function verifPseudoExist($bdd, $pseudo)
	{
		// On teste l'existence du pseudo dans la base de donn�es.
		$req = $bdd->query('SELECT COUNT(*) AS nbUser FROM membre WHERE mem_pseudo=\''.$pseudo.'\'');
		// On stocke le r�sultat de la requ�te dans un tableau.
		$donnees = $req->fetch();
		$req->closeCursor(); // Termine le traitement de la requ�te
		return $donnees;
	}

	function insertMembre($bdd, $pseudo, $password, $droit)
	{
		// On teste l'existence du pseudo dans la base de donn�es.
		$req = $bdd->query('
			INSERT INTO membre (mem_pseudo, mem_pwd, mem_admin)
			VALUES(\''.$pseudo.'\', \''.$password.'\', \''.$droit.'\');
			');
		$req->closeCursor(); // Termine le traitement de la requ�te.
	}
?>