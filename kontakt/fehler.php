<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Kontakt";
	$description = "Kontakt";
	$keywords = "Kontakt, E-Mail, Anfrage";
	include "../functions/head.php";
	?>
</head>
<body>
	<?php
	include "../functions/header.php";
	?>
	<main>  
        <div class="container-xxl mx-auto margin120 pb-5">
			<div class="p-5 mt-5 mb-auto text-center">
			<i class="text-danger bi bi-x-circle display-1"></i>
			<h1 class="my-2">Leider konnte das Formular nicht gesendet werden.</h1>
			<p>Nutzen Sie bitte eine unserer anderen Kontaktmöglichkeiten.</p>
			</div>
			<div class=" mb-auto text-center">
    		<p>Sie werden in Kürze automatisch zur Kontaktseite weitergeleitet. Sollte dies nicht funktionieren, klicken Sie bitte <a href="/kontakt/index.php">hier</a>.</p>
			</div>
		</div>
	</main>
	<?php 
	include "../functions/footer.php";
	?>
	<script>
        setTimeout(function(){
            window.location.href = '/kontakt/index.php';
    	}, 10000);
    </script>
</body>
</html>