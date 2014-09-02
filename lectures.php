<?php
	include "_header.php";
	if(isset($_GET['type']) and isset($_GET['nr'])){
		$type = $_GET['type'];
		$nr = $_GET['nr'];
		$link2 = "lectures/$type/";
		$link = "lectures/$type/$nr/";
		if (file_exists("lectures/$type/$nr/index.php")) {
			include "lectures/$type/$nr/index.php";
		} else {
			echo "<h4>Oj, materialet du vill åt finns tyvärr inte...</h4>";
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8">
			<h2>Föreläsningar</h2>
			<p>Här finns ett index över de föreläsningar som kursen har. Indexet kommer att uppdateras i takt med att nya moduler publiceras.</p>
			<h3>JavaScript</h3>
			<h4>Skrivna föreläsningar</h4>
			<div class="list-group">
			  <a href="lectures.php?type=JavaScript&nr=1" class="list-group-item">Grunder <span class="desc">Komma igång med JavaScript</span></a>
			  <a href="lectures.php?type=JavaScript&nr=2" class="list-group-item">Grunder 2<span class="desc">Alert/prompt, objekt, loopar, if-satser</span></a>
			  <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/3.php" class="list-group-item">Arrays och funktioner<span class="desc">Datahantering & funktionsanrop</span></a>
			  <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/4.php" class="list-group-item">Programmeringsprinciper<span class="desc">Indentering, seperation av kod</span></a>
			  <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/5.php" class="list-group-item">Event-handlers<span class="desc">Enklaste typen av händelshantering</span></a>
			  <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/8.php" class="list-group-item">Event-listeners<span class="desc">Avancerad händelsehantering</span></a>
			  <a href="http://dvwebb.mah.se/tsanti/HT2012/DA122A/Material/JS/7.php" class="list-group-item">jQuery grunder<span class="desc">Exempel på ramverk</span></a>
			</div>
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
            	<a href="lectures.php?type=Intro&nr=dvwebb" class="list-group-item">Introduktion till dvwebb<span class="desc">MAHs webbpubliceringssystem</span></a>
               	<a href="lectures.php?type=Modul1&nr=Intro" class="list-group-item">Introduktion till <i>event listensers</i><span class="desc">Skillnader mot <i>event handlers</i></span></a>
               	<a href="lectures.php?type=Modul1&nr=Capturing-Bubbling" class="list-group-item">Bubbling/Captureing<span class="desc">Event listeners</span></a>
                <!--
                	Ska publiceras till Inl.2/5
			  	<a href="lectures.php?type=JavaScript&nr=v1" class="list-group-item">Nästslade arrayer<span class="desc">Mer avancerad datastruktur</span></a>
			  	<a href="lectures.php?type=JavaScript&nr=v2" class="list-group-item">jQuery<span class="desc">Introduktion till ramverket jQuery</span></a>
			  	<a href="lectures.php?type=JavaScript&nr=v5" class="list-group-item">Ajax<span class="desc">Introduktion till AJAX</span></a>
                -->
			</div>
			
            <!--
            	Ska publiceras till modul 3/4
			<h3>PHP</h3>
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
			  <a href="lectures.php?type=PHP&nr=v1" class="list-group-item">Kom igång med PHP<span class="desc">En snabb "crash course"</span></a>
			  <a href="lectures.php?type=PHP&nr=v2" class="list-group-item">PHP "include"<span class="desc">Smidig webbsideuppbyggnad med PHP</span></a>
			</div>
            -->
		</div>
		<div class="col-lg-4">
		</div>
	</div>	
	<?php
	}
	include "_footer.php";
?>