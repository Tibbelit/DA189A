<?php
	include "_header.php";
	if(isset($_GET['module'])){
		$exercises = $_GET['title'];
		
		if(file_exists("exercises/".$_GET['module']."/$exercises/index.php")){
			include "exercises/".$_GET['module']."/$exercises/index.php";
		}else{
			echo "<h3>Här fanns tyvärr inget, dubbelkolla adressen</h3>";	
		}
	}else{
		echo "<h3>Här fanns tyvärr inget, dubbelkolla adressen</h3>";	
	}
	include "_footer.php";
?>