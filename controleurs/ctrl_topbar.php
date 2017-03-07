<?php
	require_once('../config/fonctions_bd.php');
	require_once('../config/connexion_bd.php');

	if (isset($_SESSION['pseudo'])) {
		$resAdmin = verifAdmin($bdd, $_SESSION['pseudo']);
		$estAdmin = $resAdmin['mem_admin'];
    }	
?>