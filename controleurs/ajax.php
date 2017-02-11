<?php
    include("../config/fonctions_bd.php");
    require('../config/connexion_bd.php');
	// ******************************************************************************** 
	
    if ($_POST['action'] == 'deconnexion') {
        echo '{success : true}';
        deconnexion();
        header('Location : index.php');
    }

    if ( isset($_POST['image=true']) {
        $url_img = selectAllImg($bdd);
    }


    function deconnexion() {
        if (isset($_SESSION['pseudo'])) {
            unset($_SESSION['pseudo']);
            session_destroy();
        }
    }
	// Inscription au site.
	if( isset($_POST['user_username']) && isset($_POST['password']) ){
		echo "'User : ' + $_POST['user_username'] + '\npassword : ' + _POST['password']";
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