<?php
	// Appel des fonctions propres à la base de données.
	require_once("../config/fonctions_bd.php");
	require_once("../config/connexion_bd.php");
	if(isset($_POST["disciplineNom"])){
		$disciplineNom = verifDisciplineExist($bdd, $_POST["disciplineNom"]);
		// Relève le nombre d'occurrence de la discipline.
		$nbDisciplineNom = $disciplineNom['nbDiscipline'];
		/*echo $nombreLigne;*/
		if($nbDisciplineNom == 0){
			echo 'OK - Discipline disponible.';
		}else{
			echo 'KO - Cette discipline existe déjà.';
		}
	}
	/*if(isset($_POST["disc_nom"]) && isset($_POST["disc_description"]) && isset($_POST["disc_categorie"])){
		$retour = getCatIdUsingCatNom($bdd, $_POST["disc_categorie"]);

		$nbDisciplineNom = $retour['cat_id'];
		echo 'Nb discipline : ' + $nbDisciplineNom;
		// insertDiscipline($bdd, $_POST["disc_nom"], $_POST["disc_description"], $_POST["disc_categorie"]);
		echo 'OK - Discipline créée.';
	}*/
	/*function getListeCategorie() {
		$bdd = new PDO('mysql:host=localhost;dbname=bf_web;charset=utf8', 'root', '');
		// Appel de la fonction retournant la liste des catégories.
		$tableauCategorie = $bdd->query('SELECT cat_nom AS categorie FROM categorie');
		// On boucle sur les catégories contenues dans le résultat de la requête.
		while($categorie = $tableauCategorie->fetch())
		{
			echo '<option>'.$categorie['categorie'].'</option>';
		}
	}*/
	if(isset($_POST["disc_categorie"])){
		$bdd = new PDO('mysql:host=localhost;dbname=bf_web;charset=utf8', 'root', '');
		// Appel de la fonction retournant la liste des catégories.
		$tableauCategorie = $bdd->query('SELECT cat_nom AS categorie FROM categorie');
		echo 'OK.';
		// On boucle sur les catégories contenues dans le résultat de la requête.
		while($categorie = $tableauCategorie->fetch())
		{
			echo '<option>'.$categorie['categorie'].'</option>';
		}
	}
?>