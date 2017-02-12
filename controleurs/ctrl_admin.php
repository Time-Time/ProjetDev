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
?>