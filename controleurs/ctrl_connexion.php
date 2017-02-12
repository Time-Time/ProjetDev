<?php
	require("../config/connexion_bd.php");
	// Appel des fonctions propres à la base de données.
	require_once("../config/fonctions_bd.php");
	
	if(isset($_POST["pseudo"]) && isset($_POST["password"]))
	{	
		$resultPseudo = verifPseudoExist($bdd, $_POST["pseudo"]);
		// Relève le nombre d'occurrence du pseudo.
		$nbPseudo = $resultPseudo['nbUser'];
		if($nbPseudo == 1)
		{
			// Le pseudo existe, on teste maintenant le couple (pseudo, password).
			$resultIdentifiants = verifIdentifiantsExist($bdd, $_POST["pseudo"], $_POST["password"]);
			// Relève le nombre d'occurrence du couple (pseudo, password).
			$nbIdentifiants = $resultIdentifiants['nbUser'];
			if($nbIdentifiants == 1)
			{
				// On connecte l'utilisateur
				session_start();
				$_SESSION['pseudo'] = $_POST['pseudo'];
				// Valeur que va prendre l'objet xhr.responseText de la fonction AJAX.
				echo 'OK - identifiants corrects.';
			}
			else
			{
				echo 'KO - Mot de passe errone.';
			}
		}
		elseif($nbPseudo == 0)
		{
			echo 'KO - pseudo incorrect.';
		}
		else
		{
			echo 'Utilisateur en double dans la base de données !';
		}
	}
?>