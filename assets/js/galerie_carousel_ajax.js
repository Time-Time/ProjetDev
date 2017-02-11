//On teste le navigateur afin de specificié l'objet XmlHttpRequest 
function getXmlHttpRequestObject() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest(); //Mozilla, Safari ...
	} else if (window.ActiveXObject) {
		return new ActiveXObject("Microsoft.XMLHTTP"); //IE
	} else {
		//Affiche un message d'erreur
		alert("Your browser doesn't support the XmlHttpRequest object. Votre navigateur ne supporte pas XmlHttpRequest.");
	}
}

//On créer notre objet
var xmlHTTP = getXmlHttpRequestObject();

//On initialise notre requête
function getMiniatures() { 
	var url = "../../controleurs/ajax.php";
	var params = "image=true";
	xmlHTTP.open("POST", url, true);

	xmlHTTP.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xmlHTTP.onreadystatechange = function() {
		if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200) {
			document.getElementById("miniatures").innerHTML = xmlHTTP.responseText;
			//carousel();
		}
	}
	xmlHTTP.send(params);
};

// On attend que le DOM soit bien chargé
$(document).ready(function(){
	// on fait notre appel ajax
	getMiniatures();
});