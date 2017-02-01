<?php
	/* Destruction de la session après click sur le bouton Deconnexion */
	session_start();
	unset($_SESSION);
	session_destroy();

	// Une fois déconnecté, l'utilisateur est redirigé vers l'index
	header('Location: ../index.php');	
?>
