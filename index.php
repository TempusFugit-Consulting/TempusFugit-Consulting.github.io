<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "TempusFugit Consulting";
	$description = "Ihr Kompententer Partner fuer Consulting. Wir bieten Ihnen eine Vielzahl von Dienstleistungen an. Von der Beratung bis zur Umsetzung.";
	$keywords = "Consulting, Beratung, Umsetzung, Dienstleistungen, TempusFugit";
	include "functions/head.php";
	?>
	<!--Galerie-->
	<link rel="stylesheet" href="photoswipe.css">
    <link rel="stylesheet" href="default-skin/default-skin.css">
</head>
<body>
	<?php
	include "functions/header.php";
	?>
    <main>
		<section>
			<!--Hero-->
			<div id="hero" class="bg-image vh-100 shadow-6-strong">
				<video autoplay loop muted playsinline webkit-playsinline poster="resource/titel.jpg" >
				<source class="h-100" src="resource/hero.mp4" type="video/mp4" />
				</video>
				<div class="mask" style="background-color: rgba(0, 0, 0, 0.15)">
					<div id="hero-text" class="px-2 px-md-4 py-5 text-center text-white">
						<h1 class="fw-bold">TempusFugit</h1>
						<p class="fw-bold fs-4"><!--Consulting Partner-->Ihr kompententer Partner für Consulting.</p>
						<div class="container-xxl mt-5">
							<div class="row row-cols-2 row-cols-lg-4"> 
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="https://wa.me/---">
										<i class="display-1 bi bi-whatsapp"></i>
										<p class="fs-4">N/A</p> 
									</a>
								</button>
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="https://t.me/---">
										<i class="display-1 bi bi-telegram"></i>
										<p class="fs-4">N/A</p>
									</a>
								</button>
								<div class="dropdown p-0">
									<div class="btn dropdown-toggle text-white fs-5 w-100 h-100 shadow-0" type="button" id="telefondropdown" data-mdb-toggle="dropdown" aria-expanded="false">
									<i class="display-1 bi bi-telephone"></i><br>
									<span class="fs-4">Telefon</span>
									</div>
									<ul class="dropdown-menu fs-2" aria-labelledby="dropdownMenu2">
										<li>
											<button class="dropdown-item" type="button">
												<a class="text-decoration-none py-3" href="tel:+4937602762873">
													<i class="bi bi-buildings-fill pe-3"></i>037602 762873
												</a>
											</button>
										</li>
										<li>
											<button class="dropdown-item" type="button">
												<a class="text-decoration-none py-3" href="tel:+4917624261311">
													<i class="bi bi-phone-fill pe-3"></i>0176 2426 1311
												</a>
											</button>
										</li>
									</ul>
								</div>
								<!--Button direkt für Festnetz-->
								<!--div class="btn btn-link">
									<a class="text-white col text-decoration-none" href="tel:+4937602762873">
										<i class="display-1 bi bi-telephone"></i>
										<p class="fs-4">037602 762873</p>
									</a>
								</div-->
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="mailto:info@baumpflege-treske.de?subject=Anfrage">
										<i class="display-1 bi bi-envelope"></i>
										<p class="fs-4">info@tempusfugit-consulting.de</p>
									</a>
								</button>
							</div>
						</div>
						<!--Message of the Day-->
						<div class="d-inline-flex p-2 alert alert-warning fs-2 px-3 m-3">
							<i class="bi bi-exclamation-triangle-fill me-3"></i>Diese Website ist noch im Aufbau
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		include "functions/stelle.php";
		?>
		<!--Dienstleistungen-->
        <section id="Dienstleistungen" class="py-5">
		<?php
		include "functions/dienstleistungen.php";
		?>
		</section>	
		<!--Team-->
		<section id="Team" class="py-5">
		<?php
		include "functions/team.php";
		?>
		</section>	
		<!--Galerie-->
		<section id="Galerie" class="shadow-6-strong">
		<?php
		include "functions/gallery.php";
		?>
		</section>

		<!--Standorte-->
		<section>
            <div id="maps">Google Maps</div>
        </section>
    </main>
	<?php 
	include "functions/footer.php";
	?>
<!-- Google Maps API - Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwv1HA-dZLfigSem636L0cS-n9rBHsGOU&callback=initMap&v=weekly&libraries=places" async></script>
<script src="/scripts/gmapssettings.js"></script>
<script src="/scripts/photoswipe.js"></script>
<script src="photoswipe.min.js"></script>
<script src="photoswipe-ui-default.min.js"></script>
</body>
</html>
