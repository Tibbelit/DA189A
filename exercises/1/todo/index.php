<div class="row">
	<div class="col-lg-8">
		<h2>Övning 3 - En enkel todo-lista</h2>
        <h3>Syfte</h3>
        <p>I denna övning ska ni bygga en enklare todo-lista, där man ska kunna lägga till/ta bort saker från listan.</p>
        <h3>Förkunskaper</h3>
        <p>Innan ni börjar med denna uppgiften bör ni läst/sett följande material:</p>
        <ul>
			<li><a href="lectures.php?type=Modul1&nr=Intro">Introduktion till event listeners [Video]</a></li>
            <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/8.php" target="_blank">Översikt av event listeners [Text]</a></li>
            <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/5.php">Repetition av pekaren "this"</a></li>
            <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/6.php">Repetition av DOM</a></li>
        </ul>
        <h3>Uppgiftsbeskrivning</h3>        
        <p>Ni ska alltså bygga en enklare todo-lista. Listan ska fungera så att det finns ett text-fält där man kan lägga till saker i sin lista, samt en lista där de tillagda sakerna visas. I själva listan ska man sedan kunna ta bort de saker som är avklarade. Det skulle kunna se ut såhär:</p>
        <img class="preview" src="exercises/1/todo/todo.png" alt="Todo">
        <p>Alltså bör er todo-lista (när sidan laddas) bestå av ett text-fält (där man skriver in sin sak), en knapp ("Lägg till", som lägger till saken i listan) och en tom lista (där det kommer läggas till saker när listan används).</p>
        <h4>Krav på uppgiften</h4>
        <h5>Alla element ska skapas genom JavaScript</h5>
        <p>Alla element som läggs till (&lt;li&gt; och &lt;button&gt;) ska skapas genom HTML-funktionen <code>document.createElement()</code>, och textnoden (som i bilden ovan är "Städa", "Diska", "Plugga", samt texten "Ta bort" på knapparna) ska skapas genom <code>document.createTextNode();</code>. Exempel på detta:</p>
        <pre>//Skapar ett &lt;li&gt;-element
var li = document.createElement("li");
// Skapa den textnod som ska ligga i &lt;li&gt;-elementet
var text = document.createTextNode("Städa"); // "Städa" ska ersättas av det som skrivs i text-rutan
// Lägger till texten till &lt;li&gt;-elementet
li.appendChild(text);
// Sedan ska ju även knappen "Ta bort" läggas till &lt;li&gt;-elementet
</pre>
		<h5>Knappen "Ta bort" ska tilldelas en event listeners när den skapas</h5>
        <p>När ni skapar er knapp "Ta bort" för den todo-sak som ni lägger till i listan är det viktigt att när den skapas - även får en instruktion om vad som ska hända när man klickar på den. Vi vill ju att när man klickar på den så ska &lt;li;&gt;-elementet som knappen ligger i ska tas bort. Exempel på detta:</p>
        <pre>// Skapar en knapp (den som ska bli "Ta bort")
var btn = document.createElement("button");
// Skapar texten som ska finnas på knappen ("Ta bort")
var btnText = document.createTextNode("Ta bort");
// Lägger till knapp-texten på knappen (som nu ser ut såhär: "&lt;button&gt;Ta bort&lt;/button&gt;")
btn.appendChild(btnText);
// Lägger till en event listener på knappen "Ta bort" - så att ni vi klickar på knappen körs funktionen
"removeThingFromList" (som ska ta bort &lt;li&gt;-elementet (vår todo-sak) från listan)
btn.addEventListener("click", removeThingFromList, false);     
        </pre>
        <hr>
        <p>Annars är det upp till er att lösa uppgiften på det sätt som ni tycker är lämpligast.</p>
        <h4>Överkurs</h4>
        <p>Saker som ni kan göra för att träna ytterliggare:</p>
        <ul>
        	<li>Lägger till en knapp till (t.ex. "Klar"), som när man klickar på den knappen för en todo-sak så stryks saken över (den är klar - men inte borttagen).</li>
        </ul>
        <h3>Startfiler</h3>
        <p>Ni får själva skapa era startfiler, lämpligen en HTML, en CSS och en JavaScript-fil. Tänk på att alla JavaScript-kod ska ligga i JavaScript-filen (alltså ingen JavaScript-kod i HTML-filen).</p>
        <h3>Facit</h3>
        <p>Ni kan ladda ner facit <a href="exercises/1/todo/result/result.zip">här</a>, eller surfa till webbsidan <a href="exercises/1/todo/result/"> här</a>.</p>
    </div>
</div>