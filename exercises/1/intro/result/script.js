// När sidan laddats klart körs funktionen "init"
window.addEventListener("load", init, false);

function init(){
	// Letar upp <select>-elementet som har id:t "chooseBackgroundColor"
	var backgroundColorElement = document.querySelector("#chooseBackgroundColor");
	// När man klickar på <select>-elementet som har id:t "chooseBackgroundColor", så körs funktionen "changeBackgroundColor"
	backgroundColorElement.addEventListener("change", changeBackgroundColor, false);
	// Letar upp <select>-elementet som har id:t "chooseColor"
	var colorElement = document.querySelector("#chooseColor");
	// När man klickar på <select>-elementet som har id:t "chooseColor", så körs funktionen "changeColor"
	colorElement.addEventListener("change", changeColor, false);
}
function changeBackgroundColor(e){
	// Hämtar värdet från det valda alternativet i drop down-listan (för bakgrundsfärg)
	var color = this.options[this.selectedIndex].value;
	// Sparar elementet "body" i variabeln "bodyElement"
	var bodyElement = document.querySelector("body");
	// Byter bakgrundsfärgen för <body> till den valda färgen
	bodyElement.style.backgroundColor = color;
}
function changeColor(e){
	// Hämtar värdet från det valda alternativet i drop down-listan (för textfärg)
	var color = this.options[this.selectedIndex].value;
	// Sparar elementet "body" i variabeln "bodyElement"
	var bodyElement = document.querySelector("body");
	// Byter textfärgen för <body> till den valda färgen
	bodyElement.style.color = color;
}