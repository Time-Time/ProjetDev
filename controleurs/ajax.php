<?php
    include("../config/fonctions_bd.php");
    require('../config/connexion_bd.php');
	// ******************************************************************************** 
	
    if (isset($_POST['action']) && $_POST['action'] == 'deconnexion') {
        echo '{success : true}';
        deconnexion();
        header('Location : index.php');
    }

    /* Provenance : galerie_carousel_ajax.php */
    if ( isset($_POST['image']) && $_POST['image'] == "true") {
        $url_img = selectAllImg($bdd); // Objet contenant toutes les images présenetes dans la BD
        foreach ($url_img as $value) { 
            // On retourne la valeur de l'url de chaque image sous forme de balise img
            echo '<img src="' . $value->img_url . '" id="' . $value->img_desc . '" class="miniature" onclick=carousel(this.id) >';
        };
    }

    if ( isset($_POST['img_id'])) {
        $img_name = $_POST['img_id'];

        $url_img = selectImgByName($bdd, $img_name); // Objet contenant toutes les images présenetes dans la BD
        // On retourne la valeur de l'url de chaque image sous forme de balise img
        echo '<img src="' . $url_img['img_url'] . '" class="image-carousel">';
    }


    function deconnexion() {
        if (isset($_SESSION['pseudo'])) {
            unset($_SESSION['pseudo']);
            session_destroy();
        }
    }
	// Inscription au site.
	if( isset($_POST['user_username']) && isset($_POST['password']) ){
		echo "User : " . $_POST['user_username'] . ' password : ' . $_POST['password'];
	}

    /**************** */
    if( isset($_POST['user_username']) && isset($_POST['password']) ){

        if($_POST['user_username'] == $username && $_POST['password'] == $password && $_POST['passwordConfirm'] == $password){
            session_start();
            $_SESSION['user'] = $username;
            echo "Hey ! Success";        
        }
        else{ // Sinon
            echo "Hoy ! Failed";
        }

    }
	
?>