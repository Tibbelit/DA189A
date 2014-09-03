<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8">
			<?php
				$module = $_GET['module'];
				include "modules/$module/index.php";
			?>
		</div>
	</div>

<?php
	include "_footer.php";
?>