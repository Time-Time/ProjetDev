
/* ************************************************************************************ */
/*										vue_topbar.php									*/
/* ************************************************************************************ */

function deconnexion() {
	alert('Vous êtes à présent déconnecté');
}

$(document).ready(function(){
	$('#btn_deco').click(function(){
		$.ajax({
			type: "POST",
			url:"./controleurs/ajax.php",
			data:{action:'deconnexion'},
			success: function(result) {
				console.log(result);
			},
			error: function(html) {
    			//alert('erreur');
    		}
    	});
	});
});

/* ************************************************************************************ */
/*									vue_inscription.php									*/
/* ************************************************************************************ */

// Efface les champs de saisie des mots de passes s'ils ne sont pas identiques.
function clearTextBox(){
	document.getElementById("user_username").value = "";
	document.getElementById("password").value = "";
	document.getElementById("passwordConfirm").value = "";
}

function inscriptionVerifIdentifiants(){
	var pseudo = document.getElementById("user_username").value;
	var pwd1 = document.getElementById("password").value;
	var pwd2 = document.getElementById("passwordConfirm").value;
	var xhr = null;

	// test mdp identiques
	if(pwd1 == pwd2){
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if(xhr.responseText == "OK") {
						/*alert("Utilisateur créé !");*/
						// Redirection vers la page d'accueil.
						document.location.href="../vues/index.php";

				}else{
						alert("Ce pseudo existe déjà.");
						document.getElementById("user_username").focus();
				}
			}
		};
		xhr.open("POST", "../controleurs/ctrl_inscription.php", true);
		// A placer aprèsa méthode open si on utilise la méthode POST.
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		// Ajout de '&' entre les variables à passer en les paramètres sinon ça ne fonctionne pas !!!
		xhr.send("pseudo=" + pseudo + "&" + "password=" + pwd1);
	}else{
		alert("Mots de passes différents");
		document.getElementById('password').value = "";
		document.getElementById('passwordConfirm').value = "";
		document.getElementById('password').focus();
	}
}

/* ************************************************************************************ */
/*																						*/
/* ************************************************************************************ */