<?php
	$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
	/*require_once('../controleurs/connexion_bd.php');*/

	function selectDisc($bdd) {

		$req = $bdd->query('SELECT * FROM discipline');
		$donnee = $req->fetch();
		return $donnee;
	}
?>