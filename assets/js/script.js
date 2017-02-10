

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

function verifConfirmationPassword()
{
	if($("#password").val())  == $("#passwordConfirm").val() && $("#password").val().length > 0 )
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