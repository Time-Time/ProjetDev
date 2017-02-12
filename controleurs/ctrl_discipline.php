<?php
	require('ctrl_sessionOK.php');
	include("../config/fonctions_bd.php");
	require('../config/connexion_bd.php');

	$disciplines = selectDisc($bdd);


	if (isset($_GET['cat'])) {

		// récupération du nom de la catégorie pour l'afficher dans la page des disciplines
		$cat_nom = $_GET['cat']; 

		if ($_GET['cat'] == 'jonglage') {
			$cat_id = 1;

		} else if ($_GET['cat'] == 'flux') {
			$cat_id = 3;

		} else if ($_GET['cat'] == 'light') {
			$cat_id = 4;

		} else {
			echo '<h1>Nom de catégorie reçu en $GET inconnu';
		}

		$tab_disciplines = selectDiscByCat($bdd, $cat_id);

	} else {
		echo '<h1>ERROR, pas de catégorie en paramètre par $GET</h1>';
		$tab_disciplines = null;
	}


?>