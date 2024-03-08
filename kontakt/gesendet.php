<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Kontakt";
	$description = "Kontakt";
	$keywords = "Kontakt, E-Mail, Anfrage";
	include "../templates/head.php";
	?>
</head>
<body>
	<?php
	include "../templates/header.php";
	?>
	<main>  
        <div class="container-xxl mx-auto margin120 pb-5">
			<div class="p-5 mt-5 mb-auto text-center">
			<i class="bi bi-check-circle display-1"></i>
			<h1 class="my-2">Vielen Dank für Ihre Nachricht!</h1>
			<p>Wir werden uns so schnell wie möglich bei Ihnen melden.</p>
			</div>
			<div class=" mb-auto text-center">
			<p>Sie werden in Kürze automatisch zur Startseite weitergeleitet.</p>
			</div>
		</div>
	</main>
	<?php 
	include "../templates/footer.php";
	?>
	<script>
        setTimeout(function(){
            window.location.href = '../index.php';
    	}, 10000);
    </script>
</body>
</html>