
<?php
	//  paropri�t�es du fichier upload�
	// $_FILES['image']['name'];     //nom
	// $_FILES['image']['type'];     //type
	// $_FILES['image']['size'];     //taille en octets
	// $_FILES['image']['tmp_name']; //r�pertoire temporaire de l'upload
	// $_FILES['image']['error'];    //code erreur

	switch ($_FILES['image']['error']) {
    case UPLOAD_ERR_NO_FILE:
        echo "Fichier manquant";
        break;
    case UPLOAD_ERR_INI_SIZE:
        echo "Fichier d�passe la taille autoris�e par PHP";
        break;
    case UPLOAD_ERR_FORM_SIZE:
        echo "Fichier d�passe la taille autoris�e par le formulaire";
        break;
	case UPLOAD_ERR_PARTIAL:
        echo "Fichier transf�r� partiellemnt";
        break;
	default :
		echo "T�l�chargement OK";
	}

	$nom = $_FILES['image']['name'];
	$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
	if ($resultat) echo "Transfert r�ussi";
?>