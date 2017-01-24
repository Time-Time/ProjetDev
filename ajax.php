<?php
    
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
?>