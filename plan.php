<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8">
			<h2><span class="a" id="1"></span>Planering</h2>
			<p>Här presenteras kursen planering gällande höstterminen 2014.</p>
            <p>Kursen är uppdelar i fem moduler (+ kursintroduktion) som hanter olika områden inom webbprogrammering. Först visas en översikt av kursen, sedan detaljera information kring de olika modulerna. Deadline för inlämningsuppgiferna i de olika moduler är alltid söndagen (23:59) den sista veckan för modulen.</p>
   			<table class="table table-striped bigPlan">
            	<tr>
                	<th>Vecka</th>
                	<?php
						for($i = 36; $i < 53; $i++){
							echo "\n<th>$i</th>";	
						}
						for($i = 1; $i < 4; $i++){
							echo "\n<th>$i</th>";	
						}
					?>
                </tr>
                <tr>
                	<th>Modul</th>
                    <td><a href="modules.php?module=0">Intro</a></td>
                    <td colspan="3"><a href="modules.php?module=1">Modul 1</a></td>
                    <td colspan="3">Modul 2</td>
                    <td colspan="3">Modul 3</td>
                    <td colspan="3">Modul 4</td>
                    <td colspan="3">Modul 5</td>
                    <td colspan="4">Kompletteringar</td>
            </table>
            <h3><span class="a" id="2"></span>Kortfattat om modulerna</h3>
            <h4>Intro</h4>
            <p>Första veckan ska ni bekanta er med It's Learning (vår läroplattform) och dvwebb. Dvwebb är Malmö Högskolas webbpubliceringssystem som kommer att användas för denna kurs.</p>
            
            <h4><span class="a" id="21"></span>Modul 1 - Händelselyssanre</h4>
            <p>I den första modulen ska ni bekanta er med händelslyssnare och utöka er förståelse och era färdigheter kring DOM. Fokus kommer att ligga på att se för- och nackdelarna med händelselyssnare samt manipulation av HTML-kod genom JavaScript. Här finns även tid för att repetera sina JavaScript-kunskaper.</p>
            
            <h4><span class="a" id="22"></span>Modul 2 - Introduktion till ramverket jQuery & arrayer</h4>
            <p>Som ni troligen upplever under modul 1 så finns det vissa skillnader (och en viss problematik) mellan det stöd olika webbläsare (framförallt IE8) har för JavaScript. För att underlätta kompabilitetsproblem m.m. kommer vi att titta på ett JavaScript-ramverk som ska underlägga kodskrivande för oss. Vi kommer även att titta närmare på datahantering och datalagring med hjälp av arrayer.</p>
            
            <h4><span class="a" id="23"></span>Modul 3 - Introduktion till PHP</h4>
            <p>Nu ska vi byta klientprogrammering (JavaScript) mot serverprogrammering (PHP). Vi kommer att introducera programmeringsspråket PHP och fokusera på hur man kan effektivisera sitt webbplatsbyggande, men även hur vi kan använda filer för att spara undan data som webbplatsens användare förser oss med.</p>
            
            <h4><span class="a" id="24"></span>Modul 4 - PHP & databaser med MySQL</h4>
            <p>Vi fortsätter att utveckla PHP-färdigheterna, men nu med fokus på att presentera data från en MySQL-databas. Vi kommer även att titta på sessioner och bygga en enklare inloggningsfunktion.</p>
            
            <h4><span class="a" id="25"></span>Modul 5 - Ajax</h4>
            <p>Den femte och sista modulen behandlar ajax som bl.a. ger oss möjlighet att skicka/ta emot data från en webbsida utan att sidan behövs laddas om. Här kommer både JavaScript/jQuery och PHP att användas för att skapa en enklare webbapplikation.</p>
            

      
		</div>
		<div class="col-lg-4">
			<h2>Innehåll</h2>
			<div class="list-group">
				<a class="list-group-item" href="#1">Planering</a>
				<a class="list-group-item" href="#2">Kortfattat om modulerna</a>
				<a class="list-group-item" href="#21">+ Modul 1 - Händelselyssanre</a>
				<a class="list-group-item" href="#22">+ Modul 2 - Introduktion till ramverket jQuery & arrayer</a>
				<a class="list-group-item" href="#23">+ Modul 3 - Introduktion till PHP</a>
				<a class="list-group-item" href="#24">+ Modul 4 - PHP & databaser med MySQL</a>
				<a class="list-group-item" href="#25">+ Modul 5 - Ajax</a>
			</div>
		</div>
	</div>

<?php
	include "_footer.php";
?>