<div class="row">
	<div class="col-lg-8">
	<h2>JavaScript - Grunder</h2>

	<h3><span class="a" id="1"></span>Inledning</h3>
	<p>Om frågor kommer upp, något är otydligt eller du har något annat som du funderar över så använd forumen! Där finns både jag och "kursare" som hjälper dig.</p>
	<p>JavaScript är ett programmeringsspråk som till stor del används för att höja interaktiviteten mellan en webbplats och dess användare. Med JavaScript kan man göra webbplatser roligare och effektivare då JavaScript till skillnad från andra programmeringsspråk körs direkt i webbläsaren. Fördelen med detta är t.ex. att man inte behöver ladda om sidan för att ändra/skapa/ta bort element på en sida. Här kommer en snabb introduktion till JavaScript (och programmering). Introduktionen är exempelbaserad och ett komplement till er kurslitteratur.</p>

	<h3><span class="a" id="2"></span>Var skriver man JavaScript-kod?</h3>
	<p>JavaScript-kod används ofta tillsammans med HTML. Det bästa är egentligen att separera all JavaScript-kod från HTML-kod och ha de i olika dokument. Men för enkelhetens skull så börjar vi med att skriva det i samma dokument. All JavaScript-kod som man skriver ska skrivas mellan taggarna <code>&lt;script type="text/JavaScript"&gt;</code> och <code>&lt;/script&gt;</code>. Enkelt exempel:</p>
	<div class="example">
<pre><code>&lt!doctype html&gt
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
     &lt;script type="text/JavaScript"&gt;    
        // Här skriver man sin JavaScript-kod
     &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
        </div>
        <p>En mall för detta finna att <a href="<?php echo $link; ?>mall.html">ladda ner här</a>.</p>
        
        <h3><span class="a" id="3"></span>Variabler och utskrifter</h3>
        <p>I programmeringsspråk använder man något som kallas för variabler. En variabel kan snabbt sammanfattas som en plats att spara information. Det finns många olika metaforer för en variabel bl.a. att en variabel är en låda där man kan stoppa ner och spara saker.</p>
        <h3>Variabler</h3>
        <p>I JavaScript så skapar man en variabel genom att skriva <i>var variabelnamn</i>. Ofta vill man ju också tilldela variabeln något värde (eller för den delen lägga ner någonting i lådan man precis skapade). För att skapa variabeln "name" och tilldela variabeln namn värdet "Kalle" skriver man <i>var name = "Kalle"</i>. Som ni säkert noterade så skriver man "=" mellan variabeln och det värde som den tilldelas. Detta ska inte likställas med =, i betydelsen ekvivalent (är samma som), mer om detta senare. Ni kanske även la märket till att Kalle skrevs inom citat-tecken? Detta för att vi berättar för datorn att "Kalle" är en text-sträng. Det finns olika datatyper varav sträng är en, float/integer/bolean är andra (mer om detta senare).</p>
        <div class="example"><b>Vår första variabel:</b><br /><code>var name = "Kalle";</code></div>
        <h3>Utskrifter</h3>
        <p>Då har vi skapat vår första variabel (namn) och tilldelat den värdet Kalle. Vad kan man då göra med denna variabel? Vi kan börja med att bara skriva ut den på sidan. För att skriva ut något på en sida genom JavaScript, använder man den inbyggda funktionen "document.write(<i>Det man vill skriva ut</i>);". Exempel nedan:</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>var name = "Kalle";<br />document.write(name);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
				<pre><script type="text/JavaScript">
					var name = "Kalle";
					document.write(name);
				</script></pre>
            </div>
        	<div class="clear"></div>
        </div>
        
        <p>Resultatet av de två raderna till vänster blir alltså att det på sidan skrivs ut Kalle. Detta eftersom vi skapar en variabel (name) och tilldelar variabeln värdet "Kalle". När vi skriver ut variabeln name, så skriver webbläsaren ut det som finns i variabeln name d.v.s. "Kalle". Man behöver inte alls döpa variabeln till "name" utan kan döpa den till vad som helst (se nedan) även om det är rekommenderat att döpa den till något förståeligt.</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
				<pre><code>var name = "Kalle";<br />document.write(name);</code>
<code>var a = "Kalle";<br />document.write(a);</code>
<code>var hej = "Kalle";<br />document.write(hej);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">
	var name = "Kalle";
	document.writeln(name);
	var a = "Kalle";
	document.writeln(a);
	var hej = "Kalle";
	document.writeln(hej);
</script></pre>
            </div>
        	<div class="clear"></div>
        </div>
		<p>När man vill skriva ut saker i sidan finns det två olika funktioner. <i>document.write()</i> och <i>document.writeln()</i>. Skillnaden på dessa är att den andra (document.writeln()) har "ln" på slutet vilket innebär att den automatiskt radbryter efter utskriften. Det gör inte funktionen <i>document.write()</i>. Demo nedan:</p>
       <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
				<pre><code>var name = "Eva";<br />document.write(name);<br />document.write(name);<br />document.write(name);</code>
				
<code>var name = "Eva";<br />document.writeln(name);<br />document.writeln(name);<br />document.writeln(name);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">
	var name = "Eva";
	document.write(name);
	document.write(name);
	document.write(name);
</script>




<script type="text/JavaScript">	
	document.writeln(name);
	document.writeln(name);
	document.writeln(name);
    
    </script></pre>
            </div>
        	<div class="clear"></div>
        </div>
        <p>Så vilken utskriftsmetod man använder sig utav beror därför på situationen, om man vill ha en radbrytning eller inte.</p>
		<h3>Att skriva ut flera saker</h3>
        <p>Man behöver en skriva ut en variabel, eller en sak åt gången. Man ska skriva ut fler olika saker i samma <i>document.write()</i>-sats. För att skriva ut flera saker efter varandra använder man tecknet + (plus). Exempel nedan:</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>var greeting = "Hej ";<br />var name = "Lasse";<br />document.write(greeting + name);
				
				
var a = "Hej ";<br />var b = "Lasse";<br />document.write(a + b);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">
	var greeting = "Hej ";
	var name = "Lasse";
	document.write(greeting + name);
</script>




<script type="text/JavaScript">
	var a = "Hej ";
	var b = "Lasse";
	document.writeln(a + b);    
    </script></pre>
            </div>
        	<div class="clear"></div>
        </div>
	<p>Då har vi snabbt tittat på variabler och utskrifter i JavaScript. Om ni har några frågor så tveka inte att <b>skriva i forumet.</b></p>
    
    
    
    <h3><span class="a" id="4"></span>Datatyper</h3>
    <p>De tre vanligaste datatyperna i JavaScript, de som vi kommer jobba mest med, är:</p>
    <ol>
    	<li>Sträng (String)</li>
        <li>Heltal (Integer)</li>
        <li>Boolesk variabel (Boolean)</li>
    </ol>
    <p>En sträng är tecken (bokstäver, siffror, specialtecken). Exempel på strängar är de namn vi använt i exemplen ovan, alltså "Kalle", "Eva" och "Lasse". Strängar skrivs alltid inom citat-tecken (" "). Detta eftersom vi då berättar för datorn att det vi skriver är en sträng. Man kan inte räkna med en sträng, utan en sträng är helt enkelt tecken i följd.</p>
    <p>Heltal är siffror. Siffror man kan räkna med. Till skillnad från strängar så skrivs dessa "rent" d.v.s. utan citat-tecken</p>
    <p>Boolesk variabel är en datatyp som kan ha två värden, true eller false. Precis som heltal så skrivs dessa utan citat-tecken.</p>
     <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>var string = "Detta är en sträng";<br />var number = 27;<br />var bolean = true;<br>
document.writeln(string);<br />document.writeln(number);<br />document.writeln(bolean);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">
	var string = "Detta är en sträng";
	var number = 27;
	var bolean = true;
	document.writeln(string);
    document.writeln(number);
	document.writeln(bolean);   
    </script></pre>
            </div>
        	<div class="clear"></div>
        </div>
        <p>När man ser resultatet till höger, ovan, så ser användaren inte skillnad på datatyperna. Och just i detta exempel så är skillnaden inte så stor (förutom att det just är olika datatyper). Men om vi t.ex. vill räkna lite så är det viktigt att välja rätt datatyp (heltal) annars så blir uträkningen inte korrekt, se exempel nedan</p>
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>var tal1 = "5";
var tal2 = "7";
var sum1 = tal1 + tal2;
document.writeln(sum1);
var tal3 = 5;
var tal4 = 7;
var sum2 = tal3 + tal4;
document.writeln(sum2);</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre>
<script type="text/JavaScript">
	var tal1 = "5";
	var tal2 = "7";
	var sum1 = tal1+tal2;
	document.writeln(sum1);
	var tal3 = 5;
	var tal4 = 7;
	var sum2 = tal3+tal4;
	document.writeln(sum2);  
    </script>
                </pre>
            </div>
        	<div class="clear"></div>
        </div>
        <p>I exemplet ovan så vill vi addera 5 med 7 (som ju blir 12). I första exemplet skapar vi variablerna "tal1" och "tal2". Vi sätter citat-tecken runt om och gör då 5 och 7 till strängar. Eftersom att strängar är räknas som tecken (och inte siffror) så slår JavaScript ihop strängarna istället för att addera dem. Så "5"+"7" blir då "57" (precis som "Hej Lasse"-exemplet tidigare). Det var ju inte det resultat som vi önskade. Om vi då istället skriver in 5 och 7 som siffror (utan citat-tecken) så fungerar additionen som vi vill och 5+7 blir 12. Detta är ett exempel på hur viktigt det är att hålla rätt på vilken datatyp som används.</p>
        
        <p>Till skillnad från andra språk kan man kombinera olika datatyper vid utskrifter i JavaScript. T.ex. kan jag skriva ut en sträng "+" ett heltal. Då slås strängen och siffran ihop (precis som två strängar). Exempel</p>
        
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>// Variabel age är av datatypen heltal
var age = 23;
document.writeln("Jag är " + age + " år");</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">
	var age = 23;
	document.writeln("Jag är " + age + " år");  
    </script></pre>
            </div>
        	<div class="clear"></div>
        </div>
        
        <p>Datatypen boolesk variabel är antingen true eller false (sant eller falskt) och används ofta när man gör test i JavaScript och returneras sedan (vi kommer att prata mer om returer och användning av denna datatyp senare).</p>
        
        <h3><span class="a" id="5"></span>Kommentarer i JavaScript</h3>
        <p>Det är alltid bra att kommentera den kod man skriver, framförallt i början när allt är nytt. Genom att kommentera koden kan man snabbt få en överblick vad den gör så att man lättare får förståelse för den. Dessutom är det bra att kommentera koden i fall någon annan skulle behöva använda den vid senare tillfälle. Kommentarer skrivs aldrig ut i webbläsaren (bara i källkoden) och är därför till för utvecklarna.</p>
        <p>I JavaScript kan man kommentera på två olika sätt.</p>
        <ol>
        	<li>// Kommentar här - Detta kör att man kommenterar en (och endast en) rad.</li>
            <li>/* Kommentar här */ - M.h.a. denna kommentering kan man kommentera flera rader. Kommentaren börjar vid /* och slutar vid */</li>
        </ol>
        
        <div class="row">
        	<div class="col-lg-6">
            	<h3>Kod</h3>
                <pre><code>// Detta är en kort kommentar<br />
/* Detta är en längre kommentar
som kan vara över flera rader */</code></pre>
            </div>
            <div class="col-lg-6">
            	<h3>I webbläsaren</h3>
                <pre><script type="text/JavaScript">// Detta är en kort kommentar<br />
/* Detta är en längre kommentar
som kan vara över flera rader */</script>
                </pre>
            </div>
        	<div class="clear"></div>
        </div>
        <h3><span class="a" id="6"></span>Övningar</h3>
        <p>Här är några övningar för de intresserade</p>
        <p>1. Spara ditt förnamn i en variabel som heter "firstName" och ditt efternamn i en variabel som heter "lastName". Skriv sedan ut detta på en sida så att resultatet blir:
        <div class="example">
        	<pre><code>Mitt namn är <i>förnamn efternamn</i></code></pre>
        </div>
        <p>2. Nu ska vi räkna lite datatypen heltal. För att göra det hela lite mer utmanande ska vi sedan skriva ut svaret med både datatypen sträng och tal. Spara först talen 8 och 9 i variabler. Gör sedan en tredje variabel där du räknar ut summan av dessa två tal. När du fått fram svaret ska du skriva ut det såhär:</p>
        <div class="example">
        	<pre><code>Resultat: 8 + 9 = 17</code></pre>
        </div>
        <p>I utskriften ska talen 8, 9 och 17 vara dina variabler som du gjort.</p>
        <p>Testa även att kommentera dina övningar så att du får testa på hur det fungerar.</p>
        <p>Lösningsförslag till övningarna <a href="<?php echo $link; ?>facit1.html">finns här</a> (Visa källa för att se källkoden).</p>
	</div>
	<div class="col-lg-4">
		<h3>Innehåll</h3>
		<div class="list-group">
			<a class="list-group-item" href="#1">Inledning</a>
			<a class="list-group-item" href="#2">Var skriver man JavaScript-kod?</a>
			<a class="list-group-item" href="#3">Variabler och utskrifter</a>
			<a class="list-group-item" href="#4">Datatyper</a>
			<a class="list-group-item" href="#5">Kommentarer i JavaScript</a>
			<a class="list-group-item" href="#6">Övningar</a>
		</div>
	</div>
</div>