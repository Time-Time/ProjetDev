<?php

	if (isset($_POST['pseudo'])) {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		echo 'Bonjour ' . $_POST['pseudo'] . ' !';
	} else if (isset($_SESSION['pseudo'])){
		echo 'Bonjour ' . $_SESSION['pseudo'] . ' !';
	} else {
		echo 'Bonjour inconnu !';
	}
?>