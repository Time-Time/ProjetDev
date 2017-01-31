<?php
	if (isset($_POST['pseudo'])) {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		echo $_POST['pseudo'];
	} else if (isset($_SESSION['pseudo'])){
		echo $_SESSION['pseudo'];
	} else {
		echo 'inconnu';
	}
?>