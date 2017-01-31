$(document).ready(function(){
    $('#btn_deco').click(function(){
    	$.ajax({
    		type: "POST",
    		url:"./ajax.php",
    		data:{action:'deconnexion'},
    		success: function(result) {
    			console.log(result);
    		},
    		error: function(html) {
    			alert('erreur');
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