<?php
	// initialisation de la variable utilisateur, s'il n'est pas connecté
	$user = "inconnu";

	/* si un utilisateur se connecte, on set la variable de session $user
	   pour l'affichage dans l'index */
	if (isset($_POST['pseudo'])) {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		$user = $_POST['pseudo'];
	} else if (isset($_SESSION['pseudo'])){
		$user = $_SESSION['pseudo'];
	}
?>