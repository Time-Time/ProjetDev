<?php
	include("../config/fonctions_bd.php");
	require('../config/connexion_bd.php');

	$disciplines = selectDisc($bdd);
	
?>