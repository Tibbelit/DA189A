<div class="row">
	<div class="col-lg-8">
		<h2>Inlämningsuppgift 1</h2>
		<h3><span class="a" id="m1"></span>1. Inledning</h3>
		<p>I den första inlämningsuppgiften ska vi bygga en liten fiktiv e-handelssida som ska innehålla två komponenter. Den första komponenten är en interaktiv vy för att visa produkterna som finns på e-handelssidan, den andra kompnenten består av en interaktiv varukorg. Den huvudsakliga funktionaliteten för webbsidan är alltså att man kan lägga till/ta bort produkter från sin varukorg, och att i varukorgen kunna se den totala summan av de produkter som finns i varukorgen.</p>
		<h3><span class="a" id="m2"></span>2. Syfte</h3>
		<p>Syftet med denna inlämningsuppgift är att ni ska få en bättre förståelse på hur HTML-dokument är uppbyggda och hur man i efterhand, genom JavaScript, kan skapa/radera/redigera element beroende på användarens beteende. Med andra ord kommer vi genom JavaScript att manipulera <a href="http://en.wikipedia.org/wiki/Document_Object_Model">DOM</a>.</p>
		<p>Ni ska även lära er hantera <code>event listeners</code> (istället för <code>event handlers</code>), dess för- och nackdelar och hur man praktiskt använder dem.</p>
        <p><b>OBS</b>, det är inte tillåtet att använda några JavaScript-ramverk för denna uppgift, t.ex. jQuery, MooTools, AngularJS osv.</p>
        
		<h3><span class="a" id="m3"></span>3. Uppgiften</h3>
		<p>I uppgiften ska ni bygga en enklare e-handelssida som ska vara uppbyggd genom två komponenter:</p>
		<ol>
			<li>Produkter
            	<ul>
                	<li>Produkterna ska vara indelade i två olika kategorier</li>
                    <li>Man ska kunna växla mellan de olika kategorierna</li>
                    <li>Produkterna ska ha ett namn och ett pris</li>
                    <li>Man ska kunna lägga till en produkt i sin varukorg</li>
                </ul>
            </li>
            <li>Varukorg
            	<ul>
                	<li>Man ska kunna se tillagda produkter</li>
                	<li>Man ska kunna ta bort en produkt från varukorgen</li>
                    <li>Man ska se summan av de tillagda produkterna i varukorgen</li>
                 </ul>
            </li>
		</ol>
        <p>Här är ett exempel på hur sidan skulle kunna se ut:</p>
        <a href="assignments/1/preview.png" data-lightbox="image-1"><img src="assignments/1/preview.png" alt="ex" class="preview"></a>
        <p style="text-align:center"><i>Notera att layouten på bilder/videos bara är en exempel-layout för att påvisa funktionalitet. Det är mycket trevligare om ni skapar en egen layout (kanske lite färggladare?) som gör er sidan mer personlig!</i></p>
        
		<h4><span class="a" id="m31"></span>3.1. Komponent: Produkterna</h4>
        <p>Här ska man kunna se alla era produkter som er e-handelssida har att erbjuda. Ni måste minst ha <i>6 st</i> produkter, uppdelade i <i>minst 2st</i> kategorier. Bara produkter vald från kategori ska visas. När sidan laddas in ska produkterna från den första kategorin visas som standard. När man sedan klickar på en av produktkategorierna ska de produkter som finns i den kategorin visas och resterande produkter ska döljas.</p>
        <p>Själva produkterna ska visas i en lista (<code>&lt;ul&gt;/&lt;ol&gt; & &lt;li&gt;</code>) som består utav produktens namn, pris samt en <code>(+)</code>-ikon. När man klickar på produkten (var som helst på <code>&lt;li&gt;</code>-elementet, förutom <code>(+)</code>-ikonen) så ska det visas detaljerad information om produkten under produktens titel, klickar man sedan på samma produkt igen ska den detaljerade information döljas.</p>
        <p>Klickar man på <code>(+)</code>-ikonen så ska produkten läggas till i varukorgen och det totala priset i varukorgen ska uppdateras. Notera att detaljerad information om produkten <i>inte</i> ska visas/döljas när man klickar på <code>(+)</code>-ikonen.</p>
        
        <h4><span class="a" id="m32"></span>3.2. Komponent: Varukorg</h4>
        <p>Varukorgen ska visa en sammanställning på de produkter som man valt från produkt-delen. Funktionaliteten för denna komponent är att man ska ha möjlighet att ta bort en produkt från varukorgen när användaren klickar på <code>(-)</code>-ikonen. Dessutom ska den totala summan av de produkter som ligger i varukorgen visas. Den totala summan ska uppdateras varje gång som användaren lägger till/tar bort en produkt från varukorgen.</p>
        
        <h4><span class="a" id="m33"></span>3.3. Webbläsarkompabilitet</h4>
        <p>Det är viktigt att vara medveten om att äldre webbläsare (framförallt Internet Explorer v.8) inte stödjer alla JavaScript-funktioner som moderna webbläsare gör. Det är även viktigt att man vet hur man ska förhålla sig till detta. Den sista delen av denna uppgift är att visa att ni har förståelse för hur man agerar om man vill lägga till stöd för <code>event listeners</code> även i Internet Explorer v.8. Detta får ni göra genom ett av följande sätt (välj ett):</p>
        <ul>
        	<li>Implementera er webbsida så att den blir kompatibel med Internet Explorer v.8 (utan externa JavaScript-bibliotek)</li>
            <li>Göra ett praktiskt exempel där ni påvisar skillnaderna mellan <code>addEventListenser</code> och <code>attachEvent</code> och förklarar ert exempel</li>
            <li>Skriva en kortare redogörelse (1/2 till 1 sida) där ni diskuterar problematiken mellan de olika standarderna för <code>event listeners</code>, hur man löser de befintliga problemen, samt hur man ska förhålla sig till detta i ett längre perspektiv.</li>
        </ul>
        
        <h3><span class="a" id="m4"></span>4. Krav</h3>
        <p><b>OBS</b>, det är inte tillåtet att använda några JavaScript-ramverk för denna uppgift, t.ex. jQuery, MooTools, AngularJS osv.</p>
        <h5>Funktionalitet</h5>
        <ul>
        	<li>Produkterna
            	<ul>
                    <li>Man ska kunna byta produktkategori utan att sidan laddas om.</li>
                    <li>När man klickar var som helst på ett produkt-element (förutom på <code>(+)</code>) så ska det fällas ut mer information om produkten. Klickar på igen på samma produkt (förutom på <code>(+)</code>) ska den detaljerade informationen döljas.</li>
                    <li>När man klickar på (+)-tecknet ska produkten läggas till i varukorgen.</li>
                </ul>
             </li>
             <li>Varukorgen
             	<ul>
                	<li>Man ska kunna ta bort en produkt genom att klicka på <code>(-)</code>-ikonen</li>
                    <li>Den totala summan för priset av produkterna som finns i varukorgen ska uppdateras när man lägger till/tar bort en produkt från varukorgen</li>
                </ul>
            </li>
        </ul>
        <h5>Krav på koden</h5>
        <ul>
        	<li>All JavaScript-kod ska finnas i ett externt JavaScript-dokument.</li>
            <li><code>Event listeners</code> ska användas för <i>all</i> händelsehantering, inga <code>event handlers</code> får finnas.</li>
            <li>Alla era element ni skapar i JavaScript (när ni lägger till en produkt i varukorgen) ska skapas genom funktionen <code>createElement</code> (se avsnitt 5.1. nedan) och <b><i>inte</i></b> genom funktionen <code>innerHTML</code>.</li>
            <li>Er kod ska vara bra indenterad och lättläslig.</li>
            <li>Er JavaScript-kod ska göras utan några fel i Chrome/Firefox/IE9</li>
            <li>Er HTML-kod ska validera enligt HTML 5 & CSS-kod ska validera enligt CSS 2 (eller nyare)</li>
            <li>Er JavaScript-kod ska vara av god kvalité och använda generella lösningar där det är möjligt</li>
        </ul>
        <p>Kvalitén på er kod kommer även att bedömas, det innebär att saker som t.ex. indentering, programmeringskonventioner, lösningens effektivitet/smidighet kommer betygsättas.</p>
        
        <h3><span class="a" id="m5"></span>5. Resultat</h3>
        <p>Nedan finns en video där det förväntade resultatet demonstreras. Noter att det är funktionaliteten som demonstreras, er webbplats behöver inte visullelt efterliknas det grafiska gränssnitt som finns i videon.</p>
        <iframe width="640" height="360" src="//www.youtube.com/embed/QVkPS5L04Ps" frameborder="0" allowfullscreen></iframe>
		
		<h3><span class="a" id="m6"></span>6. Ledning/Tips</h3>
        <h4><span class="a" id="m61"></span>6.1. Skapa element i JavaScript</h4>
        <p>En snabb introduktion till hur man skapa element i JavaScript:</p>
		<div class="well well-sm">
        <code>
		// 1. Skapar en paragraf<br>
		var paragraph = document.createElement("p");<br>
		// 2. Skapar en textnod till paragrafen<br>
		var textNode = document.createTextNote("Test");<br>
		// 3. Lägg textnoden i vår paragraf<br>
		paragraph.appendChild(textNode);
        </code>
		</div>
        <p>Ni kan läsa mer om hur man skapar element <a href="https://developer.mozilla.org/en-US/docs/Web/API/document.createElement">här</a> eller <a href="http://www.w3schools.com/js/js_htmldom_nodes.asp">här</a>.</p>
		
        <h4><span class="a" id="m62"></span>6.2. Spara data i HTML-element</h4>
        <p>Det kan vara en bra idé att spara t.ex. produktens titel & pris i det <code>&lt;li&gt;</code>-element som innehåller information om produkten. Detta så att vi enkelt & smidigt, när vi vill lägga till en produkt i varukorgen, kan hämta titeln & priset tillhörande den produkt som vi klickade på. Exempel:</p>
        <div class="well well-sm">
        <p><b>HTML</b></p>
        <p>
        	<code>&lt;li id="first" data-title="iPad Air" data-price="349"&gt; iPad Air (€ 349) &lt;/li&gt;</code>
        </p>
        <p><b>JavasScript</b></p>
        <p>
            <code>
        	// 1. Sparar &lt;li&gt;-elementet i varabeln "li"
            <br>
            var li = document.querySelector("#first");
            <br>
            // 2. Hämtar ut värde från attributet "data-title" (alltså "iPad Air") och sparar i variabeln "title"
            <br>
            var title = li.getAttribute("data-title");
            <br>
            // 3. Hämtar ut värde från attributet "data-price" (alltså "iPad Air") och sparar i variabeln "price"
            <br>
            var price = li.getAttribute("data-price");
            <br>
            // 4. Nu kan man göra vad man vill med detta variablerna "price" och "title" (lägga till dem i varukorgen?)
            </code>
        </p>
        </div>
        <p>Notera att ni <i>inte</i> ska ha ett id på varje <code>&lt;li&gt;</code>-element, utan det används endast i förenklande syfte i exemplet ovan.</p>
        <p>Ni kan läsa mer om <code>data-*</code>-attributet <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Using_data_attributes">här</a> och <a href="http://www.w3schools.com/tags/att_global_data.asp">här</a>.</p>
        
		<h3><span class="a" id="m7"></span>7. Redovisning</h3>
		<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan och jämfört med videon och allt ser bra ut, lämnar ni in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
		<p>Lycka till!</p> 
	</div>
		<div class="col-lg-4">
		<h2>Innehållsförteckning</h2>
		<div class="list-group">
			<a class="list-group-item" href="#m1">1. Inledning</a>
			<a class="list-group-item" href="#m2">2. Syfte</a>
			<a class="list-group-item" href="#m3">3. Uppgiften</a>
			<a class="list-group-item" href="#m31">3.1. Komponent: Produkterna</a>
			<a class="list-group-item" href="#m32">3.2. Komponent: Varukorg</a>
			<a class="list-group-item" href="#m33">3.3. Webbläsarkompabilitet</a>
            <a class="list-group-item" href="#m4">4. Krav</a>
            <a class="list-group-item" href="#m5">5. Resultat</a>
            <a class="list-group-item" href="#m6">6. Ledning/Tips</a>
            <a class="list-group-item" href="#m61">6.1. Skapa element i JavaScript</a>
            <a class="list-group-item" href="#m62">6.2. Spara data i HTML-element</a>
            <a class="list-group-item" href="#7">7. Redovisning</a>
		</div>
	</div>
</div>