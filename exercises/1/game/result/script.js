// Våra poång (börjar på 0):
var points = 0;
// Vår timer som kör spelet
var timer;
// När sidan laddat klart kör vi funktionen init
window.addEventListener("load", init, false);

function init(){
	// 1) Placerar ut boxarna slumpvis på skärmen
	var boxes = document.querySelectorAll(".bBox");
	for(var i = 0; i < boxes.length; i++){
		var h = Math.floor((Math.random() * window.innerHeight) + 1)-200;
		if(h < 0){h = 0;}
		var w = Math.floor((Math.random() * window.innerWidth) + 1)-200;
		if(w < 0){w = 0;}
		boxes[i].style.left = w+"px";
		boxes[i].style.top = h+"px";
	}
	
	// 2) Flyttar på dem varje sekund (slumpvis på skrämen)
	var time = 0;
	timer = setInterval(function(){
		var boxes = document.querySelectorAll(".bBox");
		for(var i = 0; i < boxes.length; i++){
			var h = Math.floor((Math.random() * window.innerHeight) + 1)-200;
			if(h < 0){h = 0;}
			var w = Math.floor((Math.random() * window.innerWidth) + 1)-200;
			if(w < 0){w = 0;}
			boxes[i].style.left = w+"px";
			boxes[i].style.top = h+"px";
		}	
		time += 1;
		document.querySelector("#time").innerHTML = "Tid: <b>"+time+"s</b>";
		finished();
	}, 1000);
	
	// 3) Hantertar klicken på boxarna
	
	// Hämtar alla "stora" boxar och sparar dem i "boxes"
	var boxes = document.querySelectorAll(".bBox");
	// Loopar igenom alla "stora" boxar
	for(var i = 0; i < boxes.length; i++){
		// När man klickar på en "stor" box körs funktionen "bigBoxClick"
		boxes[i].addEventListener("click", bigBoxClick, false);	
	}
	// Hämtar alla "små" boxar och sparar dem i "boxes"
	var boxes = document.querySelectorAll(".sBox");
	// Loopar igenom alla "små" boxar
	for(var i = 0; i < boxes.length; i++){
		// När man klickar på en "liten" box körs funktionen "smallBoxClick"
		boxes[i].addEventListener("click", smallBoxClick, false);	
	}
}

function bigBoxClick(e){
	// Stoppar bubbling
	e.stopPropagation();
	// Ger1 p poäng till vår poängsumma
	points += 1;	
	// Tar bort den stora boxen (och den lilla)
	this.parentNode.removeChild(this);
	// Uppdaterar poängen genom funktionen "updatePoints()"
	updatePoints();
}
function smallBoxClick(e){
	// Stoppar bubbling
	e.stopPropagation();
	// 1) Ger poäng
	points += 2;
	// 2) Tar bort den lilla boxen
	this.parentNode.removeChild(this);
	// Uppdaterar poängen genom funktionen "updatePoints()"
	updatePoints();
}

// Funktion som uppdaterar poängen
function updatePoints(){
	var pointHolder = document.querySelector("#points");
	pointHolder.innerHTML = "Poäng: <b>"+points+"</b>";
}
// Funktion som kontrollerar om spelet är slut
function finished(){
	var boxes = document.querySelectorAll(".bBox");
	if(boxes.length == 0){
		clearInterval(timer);
		alert("Spelet slut!");	
	}
}