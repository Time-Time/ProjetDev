
<?php
	//  paropriétées du fichier uploadé
	// $_FILES['image']['name'];     //nom
	// $_FILES['image']['type'];     //type
	// $_FILES['image']['size'];     //taille en octets
	// $_FILES['image']['tmp_name']; //répertoire temporaire de l'upload
	// $_FILES['image']['error'];    //code erreur

	switch ($_FILES['image']['error']) {
    case UPLOAD_ERR_NO_FILE:
        echo "Fichier manquant";
        break;
    case UPLOAD_ERR_INI_SIZE:
        echo "Fichier dépasse la taille autorisée par PHP";
        break;
    case UPLOAD_ERR_FORM_SIZE:
        echo "Fichier dépasse la taille autorisée par le formulaire";
        break;
	case UPLOAD_ERR_PARTIAL:
        echo "Fichier transféré partiellemnt";
        break;
	default :
		echo "Téléchargement OK";
	}

	$nom = $_FILES['image']['name'];
	$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
	if ($resultat) echo "Transfert réussi";
?>