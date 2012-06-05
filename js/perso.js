/**
 * Renvoie l'objet permettant les requête Ajax
 */
function getXMLHttpRequest() {
	if (window.XMLHttpRequest) {
		return new XMLHttpRequest();
	} else {
		if (window.ActiveXObject) {
			try{
				return new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try{
					return new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					return null;
				}
			}
		}
	}
}

/**
 * Renvoie le contenu affiché dans le fichier en paramètre
 * @param fichier
 */
function file(fichier) {
	xhr_object = getXMLHttpRequest();
	xhr_object.open("GET", fichier, false);
	xhr_object.send(null);
	if(xhr_object.readyState == 4) {
		return xhr_object.responseText;
	}
	else {
		return "";
	}
}

/**
 * Change le contenu central de la page
 * @param fichier
 */
function getMenu(fichier, input) {
	//on deselectionne l'ancien menu
	jQuery(".active").each(function() {
		jQuery(this).removeClass("active");
	});
	
	//on selectionne le nouveau menu
	input.className = "active";
	
	//puis on remplit la page centrale
//	var html = file("./ajax/" + fichier);
//	jQuery("#content").html(html);
}


