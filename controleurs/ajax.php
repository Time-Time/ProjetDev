<?php
	// ******************************************************************************** 
	
    if ($_POST['action'] == 'deconnexion') {
        echo '{success : true}';
        deconnexion();
        header('Location : index.php');
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
	
	
    $username = "Sdz";
    $password = "salut";


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