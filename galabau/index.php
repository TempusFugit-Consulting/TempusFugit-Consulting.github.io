<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Garten- & Landschaftsbau";
	$description = "Garten- & Landschaftsbau";
	$keywords = "gartenpflege, zaunbau, zaunelemente, sichtschutz, wbc, doppelstabmatten, sichtschutz-elemente, sichtschutzstreifen, pfosten, rasen mähen, rasenpflege, vertikutieren, moos entfernen, rasen düngen, heckenverschnitt, strauch schneiden, schnittgut, pflegeschnitt, gartentor, grasnarbe, rasentraktor, baumpflanzung, wassersäcke, pfähle, jungbaumpflege, anwachspflege, entwicklungspflege, unterhaltspflege, neuanpflanzung, gartengestaltung, landschaftsgärtner, landschaftspflege, galabau";
	include "../templates/head.php";
	?>
</head>
<body>
	<?php
	include "../templates/header.php";
	?>
	<main>
        <div class="container-xxl mx-auto margin120 pb-5">
            <h1 class="h1 text-center pb-4">Garten- & Landschaftsbau</h1>
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3 justify-content-center">
					<!--Zaunbau-->
					<div class="col">
						<div class="card h-100">
							<picture>
								<source srcset="/resource/services/zaun.webp" type="image/webp">
								<source srcset="/resource/services/zaun.jp2" type="image/jp2">
								<img class="card-img" src="/resource/services/zaun.jpg" alt="Ein neu aufgebauter Zaun mit Lücken für Koniferen">
							</picture>
							<div class="card-body py-11 px-14">
								<h2 class="card-title">Zaunbau</h2><hr>
								<p class="card-text">Ihr alter Zaun hält nicht mehr wirklich stand, oder Sie wollen einfach eine neue Optik? Dann kontaktieren Sie uns für Ihr individuelles und kostenloses Angebot für ihren neuen Zaun!
								</p>
							</div>
							<div class="card-footer">
								<i class="bi bi-snow" title="In Wintermonaten möglich"></i>
								<i class="bi bi-brightness-high-fill" title="In Sommermonaten möglich"></i>
							</div>
						</div>
					</div>
					<!--Strauch- und Heckenschnitt-->
					<div class="col">
						<div class="card h-100">
							<picture>
								<source srcset="/resource/services/hecke.webp" type="image/webp">
								<source srcset="/resource/services/hecke.jp2" type="image/jp2">
								<img class="card-img" src="/resource/services/hecke.jpg" alt="Heckenschneider beim Schneiden in Nahaufnahme">
							</picture>
							<div class="card-body py-11 px-14">
								<h2 class="card-title">Strauch- und Heckenschnitt</h2><hr>
								<p class="card-text">Die Hecke dient als Sichtschutz sowohl als optisches Gestaltungselement. Daher gehört der Pflegeschnitt zur regelmäßigen Gartenpflege. Hecken können nur dann ein dichtes Blattwerk bilden, wenn sie 1-2 mal jährlich geschnitten werden. Durch den passenden Schnitt wird das Wachstum angeregt und störenden Löcher können nicht entstehen! So kann sich Ihre Hecke optimal entfalten und gesund wachsen. Wir schneiden Ihre Hecke jeden Typs unter Einhaltung aller gesetzlichen Vorschriften und entsorgen das Schnittgut fachgerecht.
								</p>
							</div>
							<div class="card-footer fs-3">
								<i class="bi bi-snow" title="In Wintermonaten möglich"></i>
								<i class="bi bi-brightness-high-fill" title="In Sommermonaten möglich"></i>
								<!--<a
								  id="popoverHeckeWinter"
								  tabindex="0"
								  class="btn btn-sm"
								  role="button"
								  data-mdb-toggle="popoverHeckeWinter"
								  data-mdb-trigger="focus"
								  title="In Wintermonaten möglich"
								  data-mdb-content="In Wintermonaten möglich"
								  ><i class="bi bi-snow fs-3"></i>
								</a>
								<a
								  id="popoverHeckeSommer"
								  tabindex="1"
								  class="btn btn-sm"
								  role="button"
								  data-mdb-toggle="popoverHeckeSommer"
								  data-mdb-trigger="focus"
								  title="In Sommmermonaten möglich"
								  data-mdb-content="In Sommmermonaten möglich"
								  ><i class="bi bi-brightness-high-fill fs-3"></i>
								</a>-->
							</div>
						</div>
					</div>
					<!--Gartenpflege-->
					<div class="col">
						<div class="card h-100">
							<picture>
								<source srcset="/resource/services/garten.webp" type="image/webp">
								<source srcset="/resource/services/garten.jp2" type="image/jp2">
								<img class="card-img" src="/resource/services/garten.jpg" alt="Kettensäge wurde auf Baumstamm abgelegt">
							</picture>
							<div class="card-body py-11 px-14">
								<h2 class="card-title">Gartenpflege</h2><hr>
								<p class="card-text">Wenn es um die Gartenpflege geht, sind wir natürlich auch der richtige Ansprechpartner für Sie! Um unliebsame Baumstümpfe loszuwerden und den Rasen in einem saftigen Grün erstrahlen zu lassen bieten wir Ihnen folgende Service:
									<ul class="list-unstyled">
										<li><i class="bi bi-check-lg pe-1"></i>Rasenpflege</li>
										<li><i class="bi bi-check-lg pe-1"></i>Vertikutieren</li> 
										<li><i class="bi bi-check-lg pe-1"></i>Rasen düngen</li> 
									</ul>
								</p>
							</div>
							<div class="card-footer">
								<i class="bi bi-snow" title="In Wintermonaten möglich"></i>
								<i class="bi bi-brightness-high-fill" title="In Sommermonaten möglich"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </main>
	<?php 
	include "../templates/footer.php";
	?>
</body>
</html>