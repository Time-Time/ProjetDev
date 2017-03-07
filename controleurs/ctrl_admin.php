<?php
	// Appel des fonctions propres à la base de données.
	require_once("../config/fonctions_bd.php");
	require_once("../config/connexion_bd.php");

	// ******************************************************************************** //
	// 		Vérification existence nom image - AJAX								//
	// ******************************************************************************** //
	if(isset($_POST["imageDescription"])){
		$ImageDesc = verifImageExist($bdd, $_POST["imageDescription"]);
			// Relève le nombre d'occurrence de la discipline.
		$nbImageDesc = $ImageDesc['nbImage'];
		if($nbImageDesc == 0){
			insertImage($bdd, $_POST["imageDescription"]);
			echo 'OK - Image disponible.';
		}else{
			echo 'KO - Une image du même nom existe déjà.';
		}
	}

	// ******************************************************************************** //
	// 		Vérification existence nom discipline - AJAX								//
	// ******************************************************************************** //
	if(isset($_POST["disciplineNom"])){
		$disciplineNom = verifDisciplineExist($bdd, $_POST["disciplineNom"]);
			// Relève le nombre d'occurrence de la discipline.
		$nbDisciplineNom = $disciplineNom['nbDiscipline'];
		if($nbDisciplineNom == 0){
			echo 'OK - Discipline disponible.';
		}else{
			echo 'KO - Cette discipline existe déjà.';
		}
	}

	// ******************************************************************************** //
	// 		Création d'une nouvelle discipline - AJAX									//
	// ******************************************************************************** //
	if(isset($_POST["disc_nom"]) && isset($_POST["disc_description"]) && isset($_POST["disc_categorie"]) && isset($_POST["disc_image"])){
		insertDiscipline($bdd, $_POST["disc_nom"], $_POST["disc_description"], $_POST["disc_categorie"], $_POST["disc_image"]);
		echo 'OK - Discipline créée.';
	}

	// ******************************************************************************** //
	// 		FONCTION : Obtenir la liste des catégories existantes						//
	// ******************************************************************************** //
	function getListeCategorie() {
		$bdd = new PDO('mysql:host=localhost;dbname=bf_web;charset=utf8', 'root', '');
			// Appel de la fonction retournant la liste des catégories.
		$tableauCategorie = $bdd->query('SELECT cat_nom AS categorie FROM categorie');
			// On boucle sur les catégories contenues dans le résultat de la requête.
		while($categorie = $tableauCategorie->fetch())
		{
			echo '<option>'.$categorie['categorie'].'</option>';
		}
	}

	// ******************************************************************************** //
	// 		FONCTION : Obtenir la liste des noms d'image existants						//
	// ******************************************************************************** //
	function getListeImage() {
		$bdd = new PDO('mysql:host=localhost;dbname=bf_web;charset=utf8', 'root', '');
			// Appel de la fonction retournant la liste des noms d'image.
		$tableauImageNom = $bdd->query('SELECT img_desc AS imageNom FROM image');
			// On boucle sur les catégories contenues dans le résultat de la requête.
		while($image = $tableauImageNom->fetch())
		{
			echo '<option>'.$image['imageNom'].'</option>';
		}
	}

	// ******************************************************************************** //
	// 		Copie d'un fichier sélectionné dans le répertoire des images				//
	// ******************************************************************************** //
	if(isset($_FILES["fichierCopie"])){
		switch ($_FILES['fichierCopie']['error']) {
			case UPLOAD_ERR_NO_FILE:
			echo "Fichier manquant";
			break;
			case UPLOAD_ERR_INI_SIZE:
			echo "Le fichier dépasse la taille autorisée par PHP";
			break;
			case UPLOAD_ERR_FORM_SIZE:
			echo "Le fichier dépasse la taille autorisée par le formulaire";
			break;
			case UPLOAD_ERR_PARTIAL:
			echo "Le fichier transféré partiellemnt";
			break;
			default :
			echo "Téléchargement OK";
		}
		$cheminDossierDepart = $_FILES['fichierCopie']['tmp_name'];
		$cheminDossierDestination = "../assets/img/" . $_FILES['fichierCopie']['name'];
		$cheminImageBase = "http://localhost/ProjetWeb/assets/img/" . $_FILES['fichierCopie']['name'];
		$resultat = move_uploaded_file($cheminDossierDepart, $cheminDossierDestination);
		if ($resultat){
			insertImage($bdd, $cheminImageBase);
			echo "OK - Fichie selectionne.";
		}
	}
?>