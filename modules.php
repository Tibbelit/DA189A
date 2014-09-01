<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8">
			<h2>Moduler</h2>
            <p>De olika modulerna kommer att publiceras under kursens gång.</p>
            
            <h3><span class="a" id="m0"></span>Introduktion - Bekanta er med kursen</h3>
			<p>Kursen börjar med att ni ska bekanta er med It's Learning (vår läroplattform) och dvwebb. Dvwebb är Malmö Högskolas webbpubliceringssystem som kommer att användas för denna kurs. Det fungerar i praktiken som ett webbhotell där ni kan ladda upp era filer för att kunna nå dem globalt (inte bara från er egna dator). Dvwebb har stöd för programmeringsspråket PHP och samt databasspråket MySQL som vi kommer att använda i denna kurs. Alla inlämningsuppgifter kräver att ni publicerar er lösning på dvwebb och bifogar länken till er lösning vid inlämning via It's Learning.</p>
            <h4>Att komma igång:</h4>
            <h5>1. Dvwebb</h5>
            <h6>1.1. Aktivera Dvwebb</h6>
			<p>Instruktioner för att aktivera och använda dvwebb hittar ni <a href="http://ddwap.mah.se">här</a>. Har ni några problem med att komma igång med denna tjänst så använda forumet på It's Learning för att får hjälp.</p>
			<p>Videoguide för hur man aktiverar och kommer igång med dvwebb:</p>
			<ul>
				<li><a href="lectures.php?type=Intro&nr=dvwebb">Kom igång med dvwebb</a></li>
			</ul>
			<h6>1.2. Övning</h6>
            <ul>
            	<li>Testa att lägga upp en webbsida (skapa en enklel HTML-sida, eller använd <a href="modules/0/template.html">denna exempelsida</a>) på dvwebb - surfa till den - kontrollera så att allt fungerar som det ska (vilket är en förutsättning för att lyckas i kursen).</li>
            </ul>
			<p>Ni som inte läser kursen genom Malmö Högskola kan använda vilket webbhotell ni vill för att slutföra uppgifterna.</p>
            <h5>2. It's Learning</h5>
            <p>Kontrollera att ni kan logga in på It's Learning med de uppgifter ni fått från Malmö Högskola. När ni loggat in på It's Learning kontrollera att ni se kursen "20142-75062 - Webbprogrammering". Det är viktigt att ni kommer åt kursen på It's Learning eftersom det är där som nyheter publiceras, inlämningsuppgifter ska lämnas in och forumet för frågor finns.</p>
            <h5>Repetera JavaScript-kunskaper</h5>
            <p>Om det var längesedan ni programmerade i JavaScript (eller språket är nytt för er) så finns här lite länkar som ni kan repetera vid:</p>
            <ul>
            	<li><a href="http://www.codecademy.com/tracks/javascript">Codeacademy</a> - En interaktiv guide för att komma igång med JavaScript</li>
				<li><a href="lectures.php?type=JavaScript&nr=1">JavaScript: Grunder</a></li>
				<li><a href="lectures.php?type=JavaScript&nr=2">JavaScript: Grunder 2</a></li>
                <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/3.php">JavaScript: Arrayer & funktioner</a></li>
				<li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/4.php">JavaScript: Programmeringsprinciper</a></li>
            </ul>
            
			<h3><span class="a" id="m1"></span>Modul 1 - Event listeners</h3>
            <p>I denna modul ska vi ta och titta närmre på <i>event listeners</i> (svenska: händelselyssnare) för att sköta händelshanteringen på våra webbsidor. Exempel på hur <i>event listeners</i> kan se ut:<br><code>element.addEventListener("click", myFunction, false);</code></p>
            <p><i>Event listeners</i> är enligt <a href="http://www.w3.org/">W3C</a> den senaste standarden (DOM 3) för händelsehantering (<a href="http://www.w3.org/TR/DOM-Level-3-Events/" target="_blank">se W3Cs standard här</a>). I den tidigare kursen <a href="http://edu.mah.se/sv/Course/DA122A" target="_blank">Webbutveckling: Fortsättningskurs</a> har vi tittat på <i>event handlers</i> (svenska: händelsehanterare) vilket är en äldre standard för händelshantering. Exempel på hur <i>event handlers</i> kan se ut:<br><code>element.onclick = myFunction;</code></p>
            <p>Det är alltså <b>event listeners</b> vi ska använda i denna kurs. Inför den första inlämningsuppgiften kan det vara bra att repetera kring hur objektet <code>this</code> kan användas i händelsehantering. Här finns två föreläsningar som tar upp detta (<a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/5.php">del 1</a> & <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/7.php">del 2</a>). I dessa föreläsningar används <i>event handlers</i> istället för <i>event listeners</i>, men <code>this</code> har samma syfte och fungerar i princip på samma sätt för både <i>event listeners</i> och <i>event handlers</i>.</p>
            <div class="row modulArea">
            	<div class="col-lg-4">
                	<h4>Föreläsningar/Läsning</h4>
                    <h5>Föreläsningar event listeners</h5>
                    <ul>
                    	<li><a href="lectures.php?type=Modul1&nr=Intro">Introduktion [Video]</a></li>
                        <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/8.php" target="_blank">Översikt [Text]</a></li>
                        <li><a href="lectures.php?type=Modul1&nr=Capturing-Bubbling">Bubbling/capturing [Video]</a></li>
                    </ul>
                    <h5>Läshänvisningar i kurslitteratur</h5>
                    <ul>
                    	<li>Inga för denna modul</li>
                    </ul>
                    <h5>Bra läsning</h5>
                    <ul>
                    	<li><a href="http://www.kirupa.com/html5/javascript_events.htm" target="_blank">Introduktion</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.addEventListener">Mer om event listeners</a></li>
                        <li><a href="http://www.quirksmode.org/js/events_properties.html">"event"-objektet vid event listeners</a></li>
                    	<li><a href="http://www.quirksmode.org/js/events_order.html" target="_blank">Mer om bubbling/capturing (1)</a></li>
                        <li><a href="http://www.kirupa.com/html5/event_capturing_bubbling_javascript.htm" target="_blank">Mer om bubbling/capturing (2)</a></li>
                        <li><a href="http://themousepotatowebsite.co.za/demo/2011-11-03-javascript-events-capturing-and-bubbling/" target="_blank">Bubbling/captureing exempel</a></li>
                    </ul>
                    <h5>Extra läsning</h5>
                    <ul>
                    	<li><a href="http://www.w3.org/TR/DOM-Level-3-Events/" target="_blank">W3C specifikation</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                	<h4>Övningar</h4>
                    <ol>
                    	<li><a href="exercises.php?module=1&title=intro">Introduktion till event listeners</a></li>
                    	<li><a href="exercises.php?module=1&title=calculator">Bygga en enklare miniräknare</a></li>
                    	<li><a href="exercises.php?module=1&title=todo">Bygga enklare en todo-lista</a></li>
                    	<li><a href="exercises.php?module=1&title=game">Bygga ett enkelt webbläsarspel</a></li>
                    </ol>
                </div>
                <div class="col-lg-4">
                	<h4>Inlämningsuppgift</h4>
                    <p><a href="assignments.php?nr=1">Inlämningsuppgift 1 - Event listeners</a></p>
                </div>
            </div>
            
            
			
		</div>
		<div class="col-lg-4">
			<h2>Innehåll</h2>
			<div class="list-group">
				<a class="list-group-item" href="#m0">Introduktion</a>
				<a class="list-group-item" href="#m1">Modul 1 - Händelselyssnare</a>
			</div>
		</div>
	</div>

<?php
	include "_footer.php";
?>