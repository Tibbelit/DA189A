// När sidan laddas kör vi funktionen "init"
window.addEventListener("load", init, false);

function init(){
	// Letar upp knappen "Lägg till"
	var addTodoButton = document.querySelector("#addTodoButton");
	// När vi klickar på "Lägg till" så körs funktionen "addThingToList"
	addTodoButton.addEventListener("click", addThingToList, false);
}
function addThingToList(e){
	// Hämtar det som användaren skrivit i text-rutan och sparar det i variabeln "thing"
	var thing = document.querySelector("#addTodo").value;
	// Skapar ett <li>-element
	var li = document.createElement("li");
	// Skapar en text-sträng (det som användaren skrev in i text-rutan)
	var text = document.createTextNode(thing);
	// Skapar en knapp (den som ska bli "Ta bort")
	var btn = document.createElement("button");
	// Skapar texten som ska finnas på knappen ("Ta bort")
	var btnText = document.createTextNode("Ta bort");
	// Lägger till knapp-texten på knappen (som nu ser ut såhär: "<button>Ta bort</button>")
	btn.appendChild(btnText);
	// Lägger till en event listener på knappen "Ta bort" - så att ni vi klickar på knappen körs funktionen "removeThingFromList" (som ska ta bort <li>-elementet (vår todo-sak) från listan)
	btn.addEventListener("click", removeThingFromList, false);
	// Lägger till vår textnod i <li>-elementet (den text som användaren skrev in i text-rutan)
	li.appendChild(text);
	// Lägger till knappen "Ta bort" i vårt <li>-element (<li>-elementet ser t.ex. ut såhär nu: "<li>Städa<button>Ta bort</button></li>")
	li.appendChild(btn);
	// Lägger till vårt <li>-element i vårt todo-lista som har id:t "todoList";
	document.querySelector("#todoList").appendChild(li);
	// Återställer värdet i text-rutan till "" (alltså till inget)
	document.querySelector("#addTodo").value = "";
}
function removeThingFromList(e){
	// Detta tar bort en sak från vår lista
	this.parentNode.parentNode.removeChild(this.parentNode);
	/*
		Förklaring:
		Strukturen för vår lista ser ut såhär nu (t.ex.):
		<ul id="todoList">
            <li>Städa<button>Ta bort</button></li>
			<li>Diska<button>Ta bort</button></li>
			<li>Plugga<button>Ta bort</button></li>
		</ul>
		
		I detta exempel så klickar vi på den "Ta bort"-knappen som ligger med "Städa" (i koden ovan)
		this = knappen "Ta bort" som vi klickar på (alltså <button>Ta bort</button>.
		this.parentNode = "<li>"-elemtet som innehåller texten "Städa" och knappen "Ta bort"
		this.parentNode.parentNode = <ul id="todoList"> (som innehåller alla <li>-elementen (Städa, Diska, Plugga)
		this.parentNode.parentNode.removeChild = Detta betyder alltså att vi vill ta bort ett element som ligger i <ul>-elementet (vi vill ta bort ett <li>-element i listan). Nu måste vi säga vilket:
		
		this.parentNode.parentNode.removeChild(this.parentNode); = Detta betyder alltså "I vår <ul>-lista vill vi ta bort det <li>-element som innehåller knappen som vi klickade på", alltså tar vi bort koden: "<li>Städa<button>Ta bort</button></li>"
	*/
}