<?php

	/*********************************************************
	********************** INSCRIPTION ***********************
	**********************************************************/

	function insertMembre($bdd, $pseudo, $password, $droit)
	{
		// On teste l'existence du pseudo dans la base de donn�es.
		$req = $bdd->query('
			INSERT INTO membre (mem_pseudo, mem_pwd, mem_admin)
			VALUES(\''.$pseudo.'\', \''.$password.'\', \''.$droit.'\');
			');
		$req->closeCursor(); // Termine le traitement de la requ�te.
	}

	/*********************************************************
	********************** CONNEXION *************************
	**********************************************************/

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

	/*********************************************************
	********************** GALLERIE **************************
	**********************************************************/


	// Retourne un objet contenant toutes les images pr�sentes dans la BD
	function selectAllImg($bdd) {
		$req = $bdd->query('SELECT * FROM image');
		$donnees = $req->fetchAll(PDO::FETCH_OBJ);
		$req->closeCursor();
		return $donnees;
	}


	// Retourne l'url du nom de l'image donn� en param�tre
	function selectImgByName($bdd, $name) {
		$req = $bdd->query('SELECT * FROM image WHERE img_desc =\''.$name.'\'');
		$donnee = $req->fetch();
		$req->closeCursor();
		return $donnee;
	}

	/*********************************************************
	********************** DISCIPLINE ************************
	**********************************************************/

	function selectDisc($bdd)
	{
		$req = $bdd->query('SELECT * FROM discipline');
		$donnee = $req->fetch();
		return $donnee;
	}


	function selectDiscByCat($bdd, $cat) {
		$req = $bdd->query('SELECT disc_nom, disc_desc, img_url
							FROM discipline JOIN image ON discipline.disc_img_id = image.img_id 
							WHERE disc_cat_id =\''.$cat.'\'');
		$donnees = $req->fetchAll(PDO::FETCH_OBJ);
		$req->closeCursor();
		return $donnees;
	}

	/*********************************************************
	********************** CATEGORIE *************************
	**********************************************************/


	/*********************************************************
	************************ ADMIN ***************************
	**********************************************************/

	function verifDisciplineExist($bdd, $disciplineNom) {
		// On teste l'existence du pseudo et du mot de passe dans la base de donn�es.
		$req = $bdd->query('
			SELECT COUNT(*) AS nbDiscipline FROM discipline WHERE disc_nom = \''.$disciplineNom.'\';
			');
		// On stocke le r�sultat de la requ�te dans un tableau.
		$donnees = $req->fetch();
		$req->closeCursor(); // Termine le traitement de la requ�te
		return $donnees;
	}
	// Ins�re un enouvelle discipline dans la base.
	function insertDiscipline($bdd, $disc_nom, $disc_description, $disc_categorie){
		// On r�cup�re l'id de la cat�gorie s�lectionn�e.
		$disc_cat_identifiant = getCatIdUsingCatNom($bdd, $disc_categorie)['cat_id'];
		$req = $bdd->query('
			INSERT INTO discipline (disc_nom, disc_desc, disc_cat_id, disc_img_id)
			VALUES(\''.$disc_nom.'\', \''.$disc_description.'\', '.$disc_cat_identifiant.', 0);
			');
		$req->closeCursor(); // Termine le traitement de la requ�te
	}
	// Retourne l'id d'une cat�gorie en fonction d'un nom.
	function getCatIdUsingCatNom($bdd, $cat_nom){
		$req = $bdd -> query('
			SELECT cat_id FROM categorie WHERE cat_nom = \''.$cat_nom.'\';
			');
		$donnee = $req->fetch();
		$req->closeCursor();
		return $donnee;
	}
?>