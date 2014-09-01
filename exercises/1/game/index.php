<div class="row">
	<div class="col-lg-8">
		<h2>Övning 4 - Ett webbläsarspel</h2>
        <h3>Syfte</h3>
        <p>I denna övning ska ni fortsätta att arbeta med event listeners, i form att ett mycket simpelt spel i webbläsare. Spelet går ut på att man ska "klicka bort" boxar som flyttar sig på skärmen. Beroende var på boxarna man klickar så får man olika mycket poäng - och målet är att få så många poäng på så lite tid som möjligt. Beroende på hur säkra ni känner er på JavaScript finns det möjlighet att få en grund att utgå från i denna övning och er uppgift blir att skriva koden som sköter poängräkning och borttagning av boxar (när man klickar på dem).</p>
        <h3>Förkunskaper</h3>
        <p>Innan ni börjar med denna uppgiften bör ni läst/sett följande material:</p>
        <ul>
			<li><a href="lectures.php?type=Modul1&nr=Intro">Introduktion till event listeners [Video]</a></li>
            <li><a href="lectures.php?type=Modul1&nr=Capturing-Bubbling">Bubbling/capturing vid event listening [Video]</a></li>
            <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/8.php" target="_blank">Översikt av event listeners [Text]</a></li>
        </ul>
        <h3>Uppgiftsbeskrivning</h3>        
        <p>Ni ska alltså bygga ett spel. Reglerna för spelet är:</p>
        <ol>
        	<li>Klickar man på en "liten" box får man <b>2st poäng</b>
            	<ul>
                	<li>När man klickat på den "lilla" boxen så ska den försvinna (den "stora" boxen finns kvar)</li>
                </ul>
            </li>
            <li>Klickar man på en "stor" box får man <b>1st poäng</b>
            	<ul>
                	<li>När man klickar på den "stora" boxen ska både den "stora" och den "lilla" boxen försvinna</li>
                </ul>
            </li>
            <li>Spelet är slut när alla boxar är borta från spelet</li>
            <p>Målet med spelet är att få så många poäng som möjligt på så lite tid som möjligt.</p>
        </ol>
        <p>Ni kan test-spela det färdiga spelet <a href="exercises/1/game/result/">här</a> för att få en bättre förståelse för hur det fungerar.</p>
        <h4>Start-kod</h4>
        <p>För den som vill finns kodgrund att utgå från (som ni kan ladda ner <a href="exercises/1/game/exercise/exercise.zip">här</a>), det som ni "får" att utgå från är:</p>
        <ul>
        	<li>HTML-koden för uppgiften - alltså alla boxarna, samt uttrymmet för att visa poäng/tid</li>
            <li>CSS-koden som behövs för uppgiften</li>
            <li>JavaScriptkod för följande funktioner
            	<ul>
                	<li>Slumpa ut boxarna på skärmen</li>
                    <li>Flytta boxarna varje sekund</li>
                    <li>En räknare för hur många sekunder spelet pågått i</li>
                    <li>En funktion som kontrollerar när spelet är slut (när det inte finns några boxar kvar)</li>
                </ul>
            </li>
        </ul>
        <h4>Ert bidrag</h4>
        <p>Ni ska då skriva funktionaliteten i spelet för att:</p>
        <ol>
        	<li>Ge spelare poäng när denna klickar på en box
            	<ol>
                	<li><b>2p</b> om man klickar på en "liten" box</li>
                    <li><b>1p</b> om man klickar på en "stor" box</li>
                </ol>
            </li>
            <li>Ta bort den box som användaren klickar på
            	<ol>
                	<li>Om man klickar på en "liten" box så ska denna tas bort</li>
                    <li>Om man klickar på en "stor" box ska <i>både</i> den stora boxen man klickar på tas bort, men även den lilla boxen som ligger i den stora boxen</li>
                </ol>
            </li>
        </ol>
        <h3>Startfiler</h3>
        <p>Ni kan hämta en grund att starta från <a href="exercises/1/game/exercise/exercise.zip">här</a>.</p>
        <h3>Facit</h3>
        <p>Ni kan ladda ner facit <a href="exercises/1/game/result/result.zip">här</a>, eller surfa till webbsidan <a href="exercises/1/game/result/"> här</a>.</p>
    </div>
</div>