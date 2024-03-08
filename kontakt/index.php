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
						<input type="text" id="postal-code" name="postal-code" class="form-control" autocomplete="postal-code" required/>
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
				<!--Auswahl-->
				<div class="col-md-3 mb-4">
					<select class="select" data-mdb-auto-select="true" required>
					<option value="1">Allgemein</option>
					<option value="2">Baumstumpffräsen</option>
					</select>
					<label class="form-label select-label">Anfrageart</label>
				</div>

				<!--Entfernung-->
				<div class="entfernung form-outline" style="display: none;">
					<h2>Stubbenfräsen</h2>
					<span>
						<strong>Wie weit ist es Fußläufig von der Zufahrtmöglichkeit bis zum Baumstumpf?</strong>
					</span>
					<div class="form-outline mt-2 mb-4">
						<input type="number" id="entfernung" class="form-control" autocomplete="no" min="0" step="1" />
						<label class="form-label" for="entfernung">Entfernung in Meter</label>
					</div>
				</div>
				<!-- Gerätschaften -->
				<div class="geraetschaften form-outline" style="display: none;">
					<span>
						<strong>Kommt man mit Gerätschaften von der letzen Zufahrt bis zum Baumstumpf?</strong> <br>
						D.h. der Weg ist durchgehend mindestens 2m breit und keine Torpfosten o.ä. versperren den Weg.<br>
					</span>
					<div class="form-check form-check-inline mt-2 mb-4">
					<input class="form-check-input" type="radio" name="weg" id="wegja" value="Ja"/>
					<label class="form-check-label" for="wegja"> Ja </label>
					</div>
					<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="weg" id="wegnein" value="Nein"/>
					<label class="form-check-label" for="wegnein"> Nein </label>
					</div>
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
	include "../templates/footer.php";
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