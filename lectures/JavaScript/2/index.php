<div class="row">
	<div class="col-lg-8">
		<h2>JavaScript - Grunder 2</h2>
        
        <h3><span class="a" id="1"></span>Inledning</h3>
        <p>Nu när vi tittat på de mest <a href="lectures.php?type=javascript&nr=1">grundläggande bitarna</a> i JavaScript är det tags att ta sig an lite större utmaningar. Nu ska vi börja hämta in data från användare, vi ska räkna i loopar, skapa if-satser och även någon enkel funktion. Precis som förra delen är detta ett komplement till boken med lite exempel.</p>
        
        <h3><span class="a" id="2"></span>Alert &amp; prompt</h3>
        <p>Alert och prompt är två inbyggda funktioner i JavaScript, d.v.s. färdiga att använda för oss. Alert är en popup-ruta och prompt är en popup-ruta som ger möjlighet för användaren att skriva in information. Koden i detta exempel är det som händer när man klickar på knappen (den övriga koden behöver ni inte bry er om än). Exempel:</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>var name = prompt("Vad heter du?");<br />
alert("Hej " + name + "!");
</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
                <pre><input type="button" value="Testa koden!" id="ex1" /></pre>
                <script type="text/JavaScript">
				
				var button = document.getElementById("ex1").onclick = ex1;
				function ex1()
				{
					var name = prompt("Vad heter du?");
					alert("Hej " + name + "!");
				}
				
				</script>
            </div>
            <div class="clear"></div>
        </div>
        <p>Vad hände nu här?</p>
        <ol>
        	<li>Variabeln name, tilldelas det värde som du skriver in i popup-rutan. Och popup-rutan skapas av den inbyggda funktionen prompt. Vad som står i popup-rutan är det du skriver inom () efter "prompt". Det kallas det <i>argument</i> och skickas vidare till funktionen, i detta fall funktionen prompt. Argumentet här är alltså <i>"Vad heter du?"</i>.</li>
            <li>Vi kör sedan funktionen <i>alert</i> (även den är inbyggd) som genererar en popup-ruta. Som argument (det mellan () efter "alert") skriver vi det som ska stå i popup-rutan, alltså <i>"Hej " + name + "!"</i>.</li>
        </ol>
        <p>Alert och prompt är kanske inte de funktioner man använder mest, men de är enkla att komma igång med och påvisar hur man kan göra. Alert används ofta vid t.ex. varningar, felmeddelanden och liknande, men stör användaren och avbryter flödet i webbläsaren. På professionella webbplatser används de i undantagsfall.</p>
		
		<h3><span class="a" id="3"></span>Objekt</h3>
		
		<p>I språket JavaScript finns det inbyggda objekt som har funktioner och egenskaper kopplade till sig. Exempel på sådana objekt är strängar och objekten "date", "array", "math". Det finns fler, men det är inte så relevanta i nuläget. Genom att använda dessa metoder och tillhörande egenskaper kan man underlätta och utveckla sina programmeringsfärdigheter. För att använda en metod eller egenskaper skriver man <b>objekt.metod()</b> eller <b>objekt.egenskap</b>. Alltså objektet följt av en punkt (punktnotation) av den metod eller egenskap man vill använda. Nedan visas exempel på hur man kan använda metoderna och egenskaperna på en sträng.</p>
		
		<div class="row">
			<div class="col-lg-6">
				<h4>Kod</h4>
<pre><code>// Skapar en sträng, sparar den i variabeln "txt"
var txt = "Detta är TestSträng!";

// Skriver ut strängen "txt"
document.writeln(txt);

// Skriver ut strängen med versaler
document.writeln(txt.toUpperCase());

// Sparar stränger med versaler i variabeln:
// upperCaseTxt
// Och skriver sedan ut upperCaseTxt
upperCaseTxt = txt.toUpperCase();
document.writeln(upperCaseTxt);

// Skriver ut strängen med gemener
document.writeln(txt.toLowerCase());

// Skriver ut strängens längd
document.writeln(txt.length);</code></pre>
			</div>
			<div class="col-lg-6">
				<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
// Skapar en sträng, sparar den i variabeln "txt"
var txt = "Detta är TestSträng!";
// Skriver ut strängen "txt"
document.writeln(txt);
// Skriver ut strängen med versaler
document.writeln(txt.toUpperCase());
upperCaseTxt = txt.toUpperCase();
document.writeln(upperCaseTxt);
// Skriver ut strängen med gemener
document.writeln(txt.toLowerCase());
// Skriver ut strängens längd
document.writeln(txt.length);
				</script></pre>
			</div>
			<div class="clear"></div>
		</div>
		
		<p><a href="http://www.w3schools.com/jsref/jsref_obj_string.asp" target="_blank">Här kan ni läsa om fler metoder och egenskaper som är inbyggda för datatypen sträng</a></p>
		
		<p>Nedan exempel på hur man kan använda objektet "date"</p>
  <div class="row">
			<div class="col-lg-6">
				<h4>Kod</h4>
<pre><code>// Skapar objektet date
// och sparar det i variabeln "date
var date = new Date();

// Skriver ut objektet Date()
document.writeln(date);

// Skriver aktuellt år
document.writeln("År: " + date.getFullYear());

// Skriver aktuell månad
document.writeln("Månad: " + (date.getMonth()+1));

// Skriver aktuell dag
document.writeln("Dag: " + +date.getDate());

// Skriver aktuell timme 
document.writeln("Timme: " + date.getHours());</code></pre>
			</div>
			<div class="col-lg-6">
				<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
// Skapar objektet date
//och sparar det i variabeln "date

var date = new Date();

document.writeln(date);

// Skriver aktuellt år

document.writeln("År: " + date.getFullYear());

// Skriver aktuell månad

document.writeln("Månad: " + (date.getMonth()+1));

// Skriver aktuell dag

document.writeln("Dag: " + +date.getDate());

// Skriver aktuell timme 

document.writeln("Timme: " + date.getHours());
</script></pre>
			</div>
			<div class="clear"></div>
		</div>      
		
		<p>Som ni kan se ovan så kan man genom objektet date skriva ut den aktuella tiden m.m. Lägg märket till att funktionen <b>getMonth()</b> returnerar en lista från 0-11. Alltså måste man lägga till ett för att få aktuell månad (som vi räknar). <a href="http://www.w3schools.com/jsref/jsref_obj_date.asp" target="_blank">För alla funktioner och egenskaper klicka här</a>.</p>
		
		<p>Det sista objektet vi ska ta en snabb titt på är objektet <b>Math</b>. Genom objektet "Math" kan man bland annat genera slumptal. Nedan exempel på hur det fungerar:</p>
	<div class="row">
			<div class="col-lg-6">
				<h4>Kod</h4>
<pre><code>// Skriver ut ett sluptal mellan 0-1
document.writeln(Math.random());

// Skriver ut ett slumptal mellan 0 och 9
document.writeln(Math.floor(Math.random()*10));

// Skriver ut ett slumptal mellan 0-99
document.writeln(Math.floor(Math.random()*100));
</code></pre>
			</div>
			<div class="col-lg-6">
				<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
// Skriver ut ett sluptal mellan 0-1

document.writeln(Math.random());

// Skriver ut ett slumptal mellan 0 och 9

document.writeln(Math.floor(Math.random()*10));

// Skriver ut ett slumptal mellan 0-99

document.writeln(Math.floor(Math.random()*100));
</script></pre>
			</div>
			<div class="clear"></div>
		</div>
		
		<p><a href="http://www.w3schools.com/jsref/jsref_obj_math.asp" target="_blank">Mer om objektet <b>Math</b> kan ni läsa här</a></p>
		
        <h3><span class="a" id="4"></span>Iterationer (loopar)</h3>
        <p>Iterationer, eller loopar som de också kallas, är ett kraftfullt sätt att minimera skrivandet av kod. Att skriva iteration som kör kodsnutt 10gånger är ju mycket smidigare än att skriva samma kodsnutt 10gånger.</p>
        <p>I JavaScript finns det tre sorters iterationer som används:</p>
        <ol>
        	<li>For-loop</li>
            <li>While-loop</li>
            <li>Do while-loop</li>
        </ol>
        <p>Dessa tre iterationer gör samma sak d.v.s. upprepar en viss sak ett antal gånger. Men de fungerar på lite olika sätt.</p>
        <h4>For-loop</h4>
        <p>For-loopen fungerar på så sätt att man anger hur många gånger man vill att loopen ska köras. Man sätter ett startvärde, ett villkor (hur länge loopen ska köras) och ett uppdateringsvärde. Syntaxen blir alltså</p>
        <div class="row">
        	<h4>Kod</h4>
        	<pre><code>for(startvärde; villkor; uppdateringsvärde)
{
	Här har vi kod som ska köras x antal gånger
}</code></code></pre>
        </div>
        <p>Vi ska nu skriva ut "Hej!" 10 gånger. I detta fall är vårt startvärde, variabeln "i" som har värdet 0, vårt villkor är att loopen ska hålla på så länge variabeln "i" är mindre än 10, samt att för varje gång loopen har gått ett varv (alltså uppdateringsvärde) ökar värdet för variabel "i" med 1.</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>for(var i = 0; i < 10; i++)
{
    document.writeln("Hej!");
}</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre><script type="text/JavaScript">
for(var i = 0; i < 10; i++)
{
	document.writeln("Hej!");
}
</script></pre></div>
				<div class="clear"></div>
            </div>
            <p>Det fungerade ju som vi hade tänkt, och "Hej!" skrevs ut tio gånger. Om vi tittar på uppdateringsvärdet i loopen d.v.s. "i++", så innebär detta att för varje gång loopen körs så blir värdet för variabeln i 1 större. Detta kan vi se om vi gör en loop, som precis som den ovan upprepar 10 gånger, men istället för att skriva ut "Hej!" varje gång loopen körs så skriver vi ut värdet på i. Detta är då var som händer:</p>
            <div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>for(var i = 0; i < 10; i++)
{
    document.writeln(i);
}</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
for(var i = 0; i < 10; i++)
{
	document.writeln(i);
}</script></pre></div>
				<div class="clear"></div>
        </div>
        <p>Då kan vi tydligt utläsa att för varje varv som loopen kör blir värdet på i 1 större. Man kan då fråga sig varför man ska börja på 0 om man vill upprepa en sak 10 gånger? Det behöver man inte, men det känns mest logiskt. Man kan räkna från 37-46 om man känner för det, men det finns ju egentligen ingen anledning? Testa att skriva lite loopar, ändra lite villkor i for-satsen och prova dig fram. Det är bästa sättet att lära sig!</p>
        
        <h3>While-loop</h3>
        <p>Precis som for-loop används while-loop för att repetera en kodsnutt ett antal gånger. Det som skiljer sig mellan for- och while-loopen är att man inte bestämmer hur många gånger loopen körs. Istället för att räkna till ett visst värde (som man gör i for-loopen) så håller while-loopen på så länge ett villkor är sant. Syntaxen för while-loop är:</p>
        <div class="row">
        	<h4>Kod</h4>
<pre><code>while(villkor)
{
    Här har vi kod som ska köras x antal gånger
}
</code></pre>
			<div class="clear"></div>
        </div>
        <p>Så länge villkoret är sant så fortsätter loopen att köras. Vi gör ett liknande exempel som det för for-loopen och räknar från 0 till 9:</p>
        
            <div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>var i = 0;
while(i < 10)
{
    document.writeln(i);
    i++;
}
</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
var i = 0;
while(i < 10)
{
    document.writeln(i);
    i++;
}
</script>
</pre></div>
				<div class="clear"></div>
        </div>
		<p>Som ni ser så blev det lite mer kod här än för for-loopen, detta eftersom vi innan loopen startar måste deklarera variabeln i och tilldela den värdet 0. Sedan körs loopen så länge villkoret är sant (d.v.s. i &lt; 10), och för varje varv skriver vi ut värdet på i, samt ökar värdet med 1. Nedan en annan användning av while-loopen där vi kör loopen ända tills man svarar rätt på frågan som ställs via funktionen <i>prompt</i></p>
        <div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>

<pre><code>while(i != "Sverige")
{
    var i = prompt("Vilket land bor vi i?");
}
</code></pre>

            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
                <pre><input type="button" value="Testa koden!" id="ex2" /></pre>
                <script type="text/JavaScript">
				
				var button = document.getElementById("ex2").onclick = ex1;
				function ex1()
				{
					while(i != "Sverige")
					{
						var i = prompt("Vilket land bor vi i?");
					}
				}
				
				</script>
            </div>
            <div class="clear"></div>
        </div>
        <p>Det vi gör här, är att vi sätter villkoret: Så länge variabeln "i" <i>inte</i> är lika med strängen "Sverige" så kör vi loopen ett varv till (d.v.s. ställer frågan igen). När man sedan till slut skriver in "Sverige" så är ju faktisk variabeln "i" lika med "Sverige", vilket gör villkoret falskt och loopen avbryts. <b>Observera att != betyder "inte lika med"</b>, mer om detta senare. Loopen pågår alltså så länge villkoret är sant.</p>
        
        <h4>Do while-loop</h4>
        <p>Do while-loopen fungerar på samma sätt som while-loopen, alltså håller på så länge ett villkor är sant. Skillnaden mellan de två är att do while-loopen alltid körs minst en gång. Do while-loopen körs alltså en gång innan man tittar om villkoret stämmer, medan while-loopen tittar om det stämmer innan den kör igång. Syntax för do while-loop</p>
        <div class="row">
        	<h4>Kod</h4>
<code><pre>do
{
    Här har vi kod som ska köras x antal gånger
}
while(villkor)
</pre></code>
        </div>
	<p>Även här kan vi testa hur det ser ut för att räkna från 0 till 9:</p>
    	<div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>var i = 0;
do
{
    document.writeln(i);
    i++;
}
while(i < 10)</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
var i = 0;
do
{
    document.writeln(i);
    i++;
}
while(i < 10)
</script></pre></div>
				<div class="clear"></div>
        </div>
        <p>Do while-loopen fungerar alltså på liknande sätt som while-loopen.</p>
        
        <h4>Sammanfattning av loopar</h4>
        <p>När ska man då använda vilken loop? En tumregel är att om man vet hur många gånger en loop ska köras så använder man for-loop, annars while- eller do while-loop.</p>
        
        <h3><span class="a" id="5"></span>Logik</h3>
        <p>För att förstå och kunna använda sig utav programmering är det viktigt att ha koll på den grundläggande logik som finns. De mest grundläggande finns nedan. Vissa har vi redan använt, andra kommer snart at användas.</p>
        	<h4>Logik</h4>
			<div class="row">
				<div class="col-lg-6" style="text-align:right; width:20px; margin-right:10px; font-weight:bold;">
					<p>=</p>
					<p>==</p>
					<p>===</p>
					<p>!=</p>
					<p>||</p>
					<p>&&</p>
					<p>&lt;</p>
					<p>&gt;</p>
					<p>&lt;=</p>
					<p>&gt;=</p>
					<p>%</p>
					<p>+</p>
					<p>-</p>
					<p>++</p>
					<p>/</p>
					<p>*</p>
				</div>
				<div class="col-lg-6">
					<p>Tilldelar ett värde</p>
					<p>Lika med (ekvivalent)</p>
					<p>Lika med och samma datatyp</p>
					<p>Inte lika med</p>
					<p>Eller</p>
					<p>Och</p>
					<p>Mindre än</p>
					<p>Större än</p>
					<p>Mindre än, eller lika med</p>
					<p>Större än, eller lika med</p>
					<p>Modulus (Resten vid division)</p>
					<p>Addition</p>
					<p>Subtraktion</p>
					<p>Öka med 1</p>
					<p>Division</p>
					<p>Multiplikation</p>
				</div>
				<div class="clear"></div>
			</row>
        </div>
        
        <h3><span class="a" id="6"></span>If-satser</h3>
        <p>Något som är väldigt användbart och effektivt inom programmering är if-satser. Översatt till svenska blir det om-satser, vilka innebär att man kontrollerar ett villkor och beroende på utfallet så gör man olika saker. Syntaxen för if-satser är:</p>
        <div class="row">
        	<h4>Kod</h4>
<pre><code>if(test)
{
    Om testet är sant körs denna biten
}
else
{
    Annars körs denna
}</code></pre>
</div>
		<p>Nedan kör vi några exemplet på hur detta kan fungera. Vi börjar med att testa om 5 är större än 4 (vilket ju är sant).</p>
     	<div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>if(5 > 4)
{
    document.writeln("Japp, 5 är större!");
}
else
{
    document.writeln("Nej, 4 är större!");
}</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<script type="text/JavaScript">
if(5 > 4)
{
    document.writeln("Japp, 5 är större!");
}
else
{
    document.writeln("Nej, 4 är större!");
}
</script>
</pre></div>
				<div class="clear"></div>
        </div>
        
        <p>Det stämde, 5 är större än 4. Alltså skriver vi ut "Japp, 5 är större!". Hade nu inte 5 varit större än 4 så hade det istället skrivits ut "Nej, 4 är större!".</p>
        <p>I nästa exempel testar vi om talet som man bes skriva in är större eller mindre än 0</p>
        
      	<div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>var number = prompt("Skriv in ett tal så säger jag om det är större eller mindre än 0");
if(number > 0)
{
    alert("Talet är positivt!");
}
else
{
    alert("Talet är negativt!");
}
</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<input type="button" value="Testa koden!" id="ex3" style="margin-top:20px;" />
<script type="text/JavaScript">
var button = document.getElementById("ex3").onclick = ex3;

function ex3()
{
	var number = prompt("Skriv in ett tal så säger jag om det är större eller mindre än 0.");
	if(number > 0)
	{
		alert("Talet är större!");
	}
	else
	{
		alert("Talet är mindre!");
	}
}</script>
</pre></div>
				<div class="clear"></div>
        </div>       
        <p>Det fungerade ju bra! Eller? Vad händer när man skriver in 0? Då påstår ju koden vi precis skrev att 0 är mindre än 0, och det stämmer ju inte. Detta eftersom vi testar om talet är större än 0, vilket 0 ju inte är och eftersom testet då blir falskt så skriver vi ut else-satsen. I exemplet ovan har vi inte täckt in alla möjliga utfall av vad det som användaren kan skrivit in i popup-rutan. I detta fall är det inte hela världen om användaren skulle skriva in "hej" i popup-rutan, men det borde ändå hanteras. I större system är det viktigt att man täcker alla möjliga utfall, annars kan kritiska fel uppstå som t.ex. att programmet hänger sig eller kraschar. Därför gäller det att planera och tänka igenom alla möjligheter och utfall.</p>
        <p>Vad vi nu egentligen vill ha är ett tredje alternativ som säger att "Du skrev in 0, det är varken större eller mindre än 0!". Detta går ju inte om man bara har if- och else-sats. För att lösa detta kan man dock lägga till en "else if"-sats. En "else if"-sats har precis som if-satser egna test. Det fungerar så att man först kör if-saten, om den är sann körs koden under, om den är falsk få fortsätter man till "else if"-satsen. Är den sann körs koden under, annars går man vidare till ytterligare en "else if"-sats (eller när dessa är slut, till den avslutande else-satsen). Så fort man får ett test som är sant, körs den tillhörande koden och testningar under körs aldrig. Man kan ha så många "else if"-satser som man behöver. Syntax nedan:</p>
        <div class="row">
        	<h4>Else if-sats</h4>
<pre><code>if(test)
{
    // Om testet ovan är sant, kör denna biten. Annars fortsätt
}
else if(test)
{
    // Om testet ovan är sant, kör denna biten. Annars fortsätt
}
else if(test)
{
    // Om testet ovan är sant, kör denna biten. Annars fortsätt
}
...
else
{
    Om inget test ovan är sant, kör denna biten
}</code></pre>
        </div>
        
        <p>Med hjälp av en "else if"-sats så kan vi lösa vårt problem ovan genom att lägga till ett tredje alternativ som vi pratade om, nämligen om talet man skriver in, varken är större eller mindre än 0. För att se hur vi löser detta, se kod nedan:</p>
              	<div class="row">
        	<div class="col-lg-6">
            	<h4>Kod</h4>
<pre><code>var number = prompt("Skriv in ett tal så säger jag om det är större eller mindre än 0");
if(number > 0)
{
    alert("Talet är positivt!");
}
else if(number < 0)
{
    alert("Talet är negativt!");
}
else
{
    alert("Du skrev in 0, det är varken större eller mindre än 0!");
}
</code></pre>
            </div>
            <div class="col-lg-6">
            	<h4>Webbläsare</h4>
<pre>
<input type="button" value="Testa koden!" id="ex4" style="margin-top:20px;" />
<script type="text/JavaScript">
var button = document.getElementById("ex4").onclick = ex4;

function ex4()
{
	var number = prompt("Skriv in ett tal så säger jag om det är större eller mindre än 0.");
if(number > 0)
{
    alert("Talet är positivt!");
}
else if(number < 0)
{
    alert("Talet är negativt!");
}
else
{
    alert("Du skrev in 0, det är varken större eller mindre än 0!");
}
}</script>
</pre></div>
				<div class="clear"></div>
        </div>       
		<p>Genom "else if"-satsen kan vi nu säga om talet är större, mindre eller 0. Det finns fortfarande problem som behöver lösas som t.ex. om man inte skriv in något alls, eller skriver in bokstäver säger koden "Du skriv in 0, ..." vilket ju inte stämmer. Detta kan lösas genom fler "else if"-satser som testar så att man verkligen skriver in något, samt att man skriver in en siffra.</p>
    
    	<h3><span class="a" id="7"></span>Övningar</h3>
        <ol>
        	<li>Gör en loop som räknar från 0 till 100, och endast skriver ut de jämna talen. Utskriften ska ske på en lång rad men kommatecken mellan talen.</li>
            <li>Gör en loop som räknar från 10 till 79, där du efter varje tiotal börjar på en ny rad. Även här ska talen separeras med ett kommatecken.</li>
            <li>Gör en if-sats kontrollerar om "10" är samma som 10. Gör två versioner, en med "==" och en med "===", när du kontrollerar. Om det är samma (sant) Skriv ut "Det är sant", annars skriv ut "Det är falskt!".</li>
            <li>Gör ett frågespel med minst två frågor (använd funktionen prompt för att skriva in svar), som räknar det totala antalet gångar man svarat fel.</li>
            <li>Komplettera det sista exemplet ovan med att testa om det man skriver in är tal, samt att man skriver in något över huvud taget.</li>
			<li>I en loop som går 10 varv, slumpa fram ett tal som är mellan 0 och 19. Kontrollera sedan om talet är över, under eller lika med tio. Utskriften ska vara antingen "Talet x är över 10", "Talet x är under 10" eller "Talet x är 10". Där x är talet du slumpar fram.</li>
        </ol>
        <p><a href="<?php echo $link;?>facit2.html">Här finns lösningsförslag</a> (Visa källa för att se källkoden)</p>
	</div>
	<div class="col-lg-4">
		<h4>Innehåll</h4>
		<div class="list-group">
			<a class="list-group-item" href="#1">Inledning</a>
			<a class="list-group-item" href="#2">Alert &amp; prompt</a>
			<a class="list-group-item" href="#3">Objekt</a>
			<a class="list-group-item" href="#4">Iterationer (loopar)</a>
			<a class="list-group-item" href="#5">Logik</a>
			<a class="list-group-item" href="#6">If-satser</a>
			<a class="list-group-item" href="#7">Övningar</a>
		</div>
	</div>
</div>