
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
			url:"../controleurs/ajax.php",
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

function verifConfirmationPassword()
{
	if($("#password").val()  == $("#passwordConfirm").val() && $("#password").val().length > 0 )
	{
		// Les deux mots de passes sont identiques
		$("btn_inscription").val().enabled();
		return false;
	}
	else
	{
		return true;

	}
}
/* ************************************************************************************ */
/*									vue_inscription.php									*/
/* ************************************************************************************ */

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
		// A placer après la méthode open si on utilise la méthode POST.
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
/*									vue_connexion.php									*/
/* ************************************************************************************ */

function connexionVerifIdentifiants(){
	var pseudo = document.getElementById("user_username").value;
	var password = document.getElementById("user_password").value;
	var xhr = null;

	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(xhr.responseText == "OK - identifiants corrects.") {
					/*alert("Utilisateur reconnu !");*/
					document.location.href="../vues/index.php";
			}else if(xhr.responseText == "KO - Mot de passe errone."){
					alert("Mot de passe errone.");
					document.getElementById("user_password").value = "";
					document.getElementById("user_password").focus();
			}
			else{
					alert("Ce nom d'utilisateur n'existe pas.");
					document.getElementById("user_username").value = "";
					document.getElementById("user_password").value = "";
					document.getElementById("user_username").focus();
			}
		}
	};
	xhr.open("POST", "../controleurs/ctrl_connexion.php", true);
	// A placer après la méthode open si on utilise la méthode POST.
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	// Ajout de '&' entre les variables à passer en les paramètres sinon ça ne fonctionne pas !!!
	xhr.send("pseudo=" + pseudo + "&" + "password=" + password);
}

/* ************************************************************************************ */
/*									vue_admin.php									*/
/* ************************************************************************************ */

function adminVerifDisciplineNom(){
	var disNom = document.getElementById("disc_nom").value;
	var xhr = null;

	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(xhr.responseText == "OK - Discipline disponible.") {
				/*alert("Discipline disponible.");*/
			}
			else{
				alert("Cette discipline existe déjà.");
				document.getElementById("disc_nom").focus();
			}
		}
	};
	xhr.open("POST", "../controleurs/ctrl_admin.php", true);
	// A placer après la méthode open si on utilise la méthode POST.
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	// Ajout de '&' entre les variables à passer en les paramètres sinon ça ne fonctionne pas !!!
	xhr.send("disciplineNom=" + disNom);
}

function adminVerifSaisie(){
}
/* ************************************************************************************ */
/*																						*/
/* ************************************************************************************ */