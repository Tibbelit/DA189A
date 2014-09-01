// Vår timer som kör spelet
var timer;
// När sidan laddat klart kör vi funktionen init
window.addEventListener("load", init, false);

function init(){
	// 1) Placerar ut boxarna
	var boxes = document.querySelectorAll(".bBox");
	for(var i = 0; i < boxes.length; i++){
		var h = Math.floor((Math.random() * window.innerHeight) + 1)-200;
		if(h < 0){h = 0;}
		var w = Math.floor((Math.random() * window.innerWidth) + 1)-200;
		if(w < 0){w = 0;}
		boxes[i].style.left = w+"px";
		boxes[i].style.top = h+"px";
	}
	
	// 2) Flyttar på dem varje sekund
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
}

// Funktion som kontrollerar om spelet är slut
function finished(){
	var boxes = document.querySelectorAll(".bBox");
	if(boxes.length == 0){
		clearInterval(timer);
		alert("Spelet slut!");	
	}
}
/* Din kod nedan */