// När sidan laddat klart kör vi funktionen init
window.addEventListener("load", init, false);

function init(){
	// Letar upp knappen med id:t "add"
	var add = document.querySelector("#add");
	// När man klickar på knappen med id:t "add" ska funktionen "calcAdd" köras
	add.addEventListener("click", calcAdd, false);
	// Letar upp knappen med id:t "sub"
	var subt = document.querySelector("#sub");
	// När man klickar på knappen med id:t "sub" ska funktionen "calcSub" köras
	subt.addEventListener("click", calcSub, false);
	// Letar upp knappen med id:t "div"
	var div = document.querySelector("#div");
	// När man klickar på knappen med id:t "div" ska funktionen "calcDiv" köras
	div.addEventListener("click", calcDiv, false);
	// Letar upp knappen med id:t "multi"	
	var mult = document.querySelector("#multi");
	// När man klickar på knappen med id:t "multi" ska funktionen "calcMult" köras
	mult.addEventListener("click", calcMult, false);
	
}
function calcAdd(e){
	// Hämtar värdet (numret) från den första text-rutan och sparar det i variabeln "nr1"
	var nr1 = parseInt(document.querySelector("#firstNumber").value);
	// Hämtar värdet (numret) från det andra text-rutan och sparar det i variabeln "nr2"
	var nr2 = parseInt(document.querySelector("#secondNumber").value);
	// Beräknar resultatet och sparar det i variabeln "result"
	var result = nr1 + nr2;
	// Visar resultatet i text-rutan med id:t "result"
	document.querySelector("#result").value = result;
}
function calcSub(e){
	// Hämtar värdet (numret) från den första text-rutan och sparar det i variabeln "nr1"
	var nr1 = parseInt(document.querySelector("#firstNumber").value);
	// Hämtar värdet (numret) från det andra text-rutan och sparar det i variabeln "nr2"
	var nr2 = parseInt(document.querySelector("#secondNumber").value);
	// Beräknar resultatet och sparar det i variabeln "result"
	var result = nr1 - nr2;
	// Visar resultatet i text-rutan med id:t "result"
	document.querySelector("#result").value = result;
}
function calcDiv(e){
	// Hämtar värdet (numret) från den första text-rutan och sparar det i variabeln "nr1"
	var nr1 = parseInt(document.querySelector("#firstNumber").value);
	// Hämtar värdet (numret) från det andra text-rutan och sparar det i variabeln "nr2"
	var nr2 = parseInt(document.querySelector("#secondNumber").value);
	// Beräknar resultatet och sparar det i variabeln "result"
	var result = nr1 / nr2;
	// Visar resultatet i text-rutan med id:t "result"
	document.querySelector("#result").value = result;
}
function calcMult(e){
	// Hämtar värdet (numret) från den första text-rutan och sparar det i variabeln "nr1"
	var nr1 = parseInt(document.querySelector("#firstNumber").value);
	// Hämtar värdet (numret) från det andra text-rutan och sparar det i variabeln "nr2"
	var nr2 = parseInt(document.querySelector("#secondNumber").value);
	// Beräknar resultatet och sparar det i variabeln "result"
	var result = nr1 * nr2;
	// Visar resultatet i text-rutan med id:t "result"
	document.querySelector("#result").value = result;
}