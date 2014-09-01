<?php
	include "_header.php";
	if(isset($_GET['nr'])){
		$assignment = $_GET['nr'];
		if(file_exists("assignments/$assignment/index.php")){
			include "assignments/$assignment/index.php";
		}else{
			echo "<h3>Här fanns tyvärr inget, dubbelkolla adressen</h3>";	
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8">
			<h2>Inlämningsuppgifter</h2>
			<p>Här finns kursens inlämningsuppgifter samlade.</p>
			<div class="list-group">
				<div class="list-group-item"><a href="assignments.php?nr=1">Inlämningsuppgift 1</a></div>
                <!--
				<div class="list-group-item"><a href="assignments.php?nr=2">Inlämningsuppgift 2</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=3">Inlämningsuppgift 3</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=4">Inlämningsuppgift 4</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=5">Inlämningsuppgift 5</a></div>
                -->
			</div>			
		</div>
		<div class="col-lg-4">
			<!--<h2>Bra länkar</h2>-->
		</div>
	</div>
	<?php
	}
	include "_footer.php";
?>