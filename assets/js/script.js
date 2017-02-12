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
	/* ******************** FONCTION DE TEST ******************** */
	$('#btn_inscription').click(function(){
	});
	/* ******************** Exemple AJAX OPEN CLASS ROOM ******************** */
    // $('#AAA').click(function(){
		// //Permet d'instancier un objet de type XmlHttpRequest.
		// $.ajax({
			// //Ressource ciblée
			// url : './ajax.php',
			// type : 'POST',
			// data : 	'ut_pseudo=' + $('#user_username').val()
				// + 'ut_mdp=' + $('password').val(),
			// datatType : 'html',
			// success : function(code_html, statut){
			// //		Le paramètre code_html contient le code html renvoyé par la requête.
			// },
			// //Permet de traiter une éventuelle erreur lors de l'exécution de la requête AJAX.
			// error : function(resultat, statut, erreur){
				// alert('Erreur lors du traitement de la requête d\'inscription.\n\n'
				// + erreur);
			// },
			// //Permet de traiter la suite des événements une fois que la requête AJAX ait été exécutée.
			// complete : function(resultat, statut){
				
			// }
		// });
// alert('Appel javascript.');
// });
/* ********************  ******************** */
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

function verifIdentifiants(){
	var pseudo = document.getElementById("user_username").value;
	var pwd1 = document.getElementById("password").value;
	var pwd2 = document.getElementById("passwordConfirm").value;
	var xmlHTTP;

	// test mdp identiques
	if(pwd1 == pwd2){
		xmlHTTP = new XMLHttpRequest();
		xmlHTTP.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if(xmlHTTP.responseText == "OK") {
						// TODO redirection vers la page d'accueil.
						header('Location: ../vues/index.php');
				}else{
						alert("Ce pseudo existe déjà.");
						document.getElementById("user_username").focus();
				}
			}
		};
		xmlHTTP.open("POST", "../controleurs/ctrl_inscription.php", true);
		xmlHTTP.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xmlHTTP.send("pseudo=" + pseudo + "password=" + pwd1);
	}else{
		alert("Mots de passes différents");
		document.getElementById('password').value = "";
		document.getElementById('passwordConfirm').value = "";
		document.getElementById('password').focus();
	}
}