<div class="row">
	<div class="col-lg-8">
		<h2>Övning 1 - Introduktion till event listeners</h2>
        <h3>Syfte</h3>
        <p>I denna övning ska ni introduceras till event listeners. Detta genom att uppdatera en webbsida (ni ska ändra i JavaScript-filen) som i nuläget använder event handlers för händelsehanteringen, så att webbsida istället använder sig utav event listeners.</p>
        <h3>Förkunskaper</h3>
        <p>Innan ni börjar med denna uppgiften bör ni läst/sett följande material:</p>
        <ul>
			<li><a href="lectures.php?type=Modul1&nr=Intro">Introduktion till event listeners [Video]</a></li>
            <li><a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/8.php" target="_blank">Översikt av event listeners [Text]</a></li>
        </ul>
        <h3>Uppgiftsbeskrivning</h3>        
        <p>Webbsidan är en enkel sådan, det enda man kan göra är att (genom JavaScript) ändra bakgrundsfärgen och textfärgen för webbsidan. Webbsidan består av totalt tre stycken filer:</p>
        <ul>
        	<li>index.html - Här finns HTML-koden</li>
            <li>style.css - Här finns lite formgivning för sidan</li>
            <li>script.js - Här finns funktionaliteten för sidan</li>
        </ul>
        <p>Den enda filen som ni behöver ändra i för denna uppgift är alltså <i>script.js</i></p>
        <p>Ni ska alltså byta ut alla <code>event handlers</code> mot <code>event listeners</code>. Snabb repetition:</p>
        <p>Event handler<br><code>element.onclick = myFunction;</code></p>
        <p>Event listener<br><code>element.addEventListener("click", myFunction, false);</code></p>
        <h4>Förtydligande</h4>
        <p>Nedan ser ni JavaScript-koden från filen <code>script.js</code>, markerat (fetstilt och understruket) var ni ska uppdatera koden:</p>
        <pre><b><u>window.onload = init;</u></b>
function init(){
    var backgroundColorElement = document.querySelector("#chooseBackgroundColor");
    <b><u>backgroundColorElement.onchange = changeBackgroundColor;</u></b>
    var colorElement = document.querySelector("#chooseColor");
    <b><u>colorElement.onchange = changeColor;</u></b>
}
function changeBackgroundColor(e){
    var color = this.options[this.selectedIndex].value;
    var bodyElement = document.querySelector("body");
    bodyElement.style.backgroundColor = color;
}
function changeColor(e){
    var color = this.options[this.selectedIndex].value;
    var bodyElement = document.querySelector("body");
    bodyElement.style.color = color;
}
        </pre>
        <h3>Startfiler</h3>
        <p>Ni kan ladda ner de tre filerna ovan <a href="exercises/1/intro/exercise/exercise.zip">här</a>, eller surfa till webbsidan <a href="http://localhost/DA189A/exercises/1/intro/exercise/">här</a>.</p>
        <h3>Facit</h3>
        <p>Ni kan ladda ner facit <a href="exercises/1/intro/result/result.zip">här</a>, eller surfa till webbsidan <a href="http://localhost/DA189A/exercises/1/intro/result/"> här</a>.</p>
    </div>
</div>