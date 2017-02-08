<?php
	if (!isset($_SESSION['pseudo'])) {
		header('Location: ../vues/vue_connexion.php');
	}
?>