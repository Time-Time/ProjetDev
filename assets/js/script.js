$(document).ready(function(){
    $('#btn_deco').click(function(){
    	$.ajax({
    		type: "POST",
    		url:"./ajax.php",
    		data:{action:'deconnexion'},
    		success: function(result) {
    			console.log(result);
    			window.location.reload();
    		},
    		error: function(html) {
    			alert('erreur');
    		}
    	});
    });
});