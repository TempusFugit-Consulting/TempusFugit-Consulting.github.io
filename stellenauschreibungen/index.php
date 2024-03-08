<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Stellenauschreibungen";
	$description = "Stellenauschreibungen";
	$keywords = "stellenangebote, arbeit, job, karriere, bäume, weiterbilden, qualifikation, arbeitsplatz, arbeitsstelle, arbeitsverhältnis";
	include "../templates/head.php";
	?>
</head>
<body>
	<?php
	include "../templates/header.php";
	?>
	<main> 
        <div class="container-xxl mx-auto margin120 pb-5 mb-5">
            <?php
			include "../templates/stelle.php";
			?>
        </div>
    </main>
	<?php 
	include "../templates/footer.php";
	?>
</body>
</html>