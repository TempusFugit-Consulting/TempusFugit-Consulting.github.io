
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
			<h1>Kontakt</h1>
            <form id="contact-form" class="row mt-3" action="mail.php" method="POST">
				<!--Firma-->
				<div class="mb-4">
					<div class="form-outline">
						<input type="text" id="organization" name="organization" class="form-control" autocomplete="organization"/>
						<label class="form-label" for="organization">Firma</label>
					</div>
				</div>
				<!--Vorname-->
				<div class="col-md-6 mb-4">
					<div class="form-outline">
						<input type="text" id="given-name" name="given-name" class="form-control" autocomplete="given-name" />
						<label class="form-label" for="given-name">Vorname</label>
					</div>
				</div>
				<!--Nachname-->
				<div class="col-md-6 mb-4">
					<div class="form-outline">
						<input type="text" id="family-name" name="family-name" class="form-control" autocomplete="family-name" required/>
						<label class="form-label" for="family-name">Nachname</label>
					</div>
				</div>
				<!--Telefon-->
				<div class="col-md-6 mb-4">
					<div class="form-outline">
						<input type="tel" id="tel" name="tel" class="form-control" autocomplete="tel" required/>
						<label class="form-label" for="tel">Telefon</label>
					</div>
				</div>				
				<!--E-Mail-->
				<div class="col-md-6 mb-4">
					<div class="form-outline">
						<input type="email" id="email" name="email" class="form-control" autocomplete="email" required/>
						<label class="form-label" for="email">E-Mail</label>
					</div>
				</div>
				<!--Straße und Hausnummer-->
				<div class="mb-4">
					<div class="form-outline">
						<input type="text" id="address-line1" name="address-line1" class="form-control" autocomplete="address-line1" required/>
						<label class="form-label" for="address-line1">Straße und Hausnummer</label>
					</div>
				</div>
				<!--Postleitzahl-->
				<div class="col-md-3 mb-4">
					<div class="form-outline">
						<input type="number" id="postal-code" name="postal-code" class="form-control" autocomplete="postal-code"/>
						<label class="form-label" for="postal-code">Postleitzahl</label>
					</div>
				</div>
				<!--Ort-->
				<div class="col-md-9 mb-4">
					<div class="form-outline">
						<input type="text" id="address-level2" name="address-level2" class="form-control" autocomplete="address-level2" required/>
						<label class="form-label" for="address-level2">Ort</label>
					</div>
				</div>
				<!--Betreff-->
				<div class="form-outline mb-4">
					<input type="text" id="subject" name="subject" class="form-control" required/>
					<label class="form-label" for="subject">Betreff</label>
				</div>
				<!-- Nachricht -->
				<div class="form-outline mb-4 mt-3">
					<textarea class="form-control" id="message" name="message" rows="4"></textarea>
					<label class="form-label" for="message">Nachricht</label>
				</div>
				<!--Datenschutz-->
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required/>
					<label class="form-check-label" for="flexSwitchCheckDefault">Ich habe den <a id="datenschutzhinweis-link" href="https://baumpflege-treske.de/datenschutz/">Datenschutzhinweis</a> gelesen.</label><br><br>
				</div>
				<button id="submit-form" type="submit" class="btn btn-primary mb-4">
					Senden
				</button>
			</form>
        </div>
    </main>
	<?php 
	include "../functions/footer.php";
	?>
    <!-- Script Anzeige Auswahl und anzeigen der bestimmten Felder aufgrund ausgewählter Auswahl -->
    <script>
		document.querySelector('.select').addEventListener('change', function() {
			if (this.value === '2') {
				document.querySelector('.entfernung').style.display = 'block';
				document.querySelector('.geraetschaften').style.display = 'block';
			} else {
				document.querySelector('.entfernung').style.display = 'none';
				document.querySelector('.geraetschaften').style.display = 'none';
			}
		});
    </script>
    <!--Dynamisches Initialisieren von Eingabefeldern-->
    <script>
        document.querySelectorAll('.form-outline').forEach((formOutline) => {
        new mdb.Input(formOutline).init();
        });
    </script>
</body>
</html>