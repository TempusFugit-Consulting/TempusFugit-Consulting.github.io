<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege";
	$description = "Baumfällung&amp;#10004; Spezialfällung&amp;#10004; Baumpflege&amp;#10004; Baumkontrolle&amp;#10004; Dachrinnenreinigung&amp;#10004; Gewässerbau/-pflege&amp;#10004; Sturmschadenbeseitigung&amp;#10004; Baumstumpfäsen&amp;#10004; Garten- Landschaftsbau&amp;#10004; Heckenschnitt&amp;#10004; Baumverschnitt&amp;#10004; in Zwickau";
	$keywords = "zwickau, werdau, meerane, reinsdorf, lichtentanne, wilkau-haßlau, mülsen, chemnitz, erfurt, auerbach, kirchberg, schneeberg, hartenstein, aue, schneeberg, lengenfeld, reichenbach, treuen, neumark, fraureuth, glauchau, crimmitschau, lichtenstein, hohenstein-ernstthal, baumfällung, baumfäller, baumkontrolle, baumservice, baumstumpffräsen, zaunbau, gewässerbau, gewässerpflege, lkw, ladekran, unimog, 4x4, häcksler, spezialfahrzeuge, forst, winde, seilklettertechnik, baumkletterer, gartengestaltung, arborist, gärtner, sturmschaden, verschnitt, straßensperrung";
	include "functions/head.php";
	?>
	<!--Galerie-->
	<link rel="stylesheet" href="photoswipe.css">
    <link rel="stylesheet" href="default-skin/default-skin.css">
</head>
<body>
	<!-- Preloader -->
	<?php
	include "functions/preloader.php";
	?>
	<!-- Header -->
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
						<br><br>
						<!--Message of the Day-->
						<div class="d-inline-flex p-2 alert alert-warning fs-2 px-3 m-3">
							<i class="bi bi-exclamation-triangle-fill me-3"></i>Diese Website ist noch im Aufbau
						</div>
						<br><br><br>
						<h1 class="fw-bold">TempusFugit Consulting</h1>
						<p class="fw-bold fs-4">Ihr kompententer Partner für Consulting.</p>
						<div class="container-xxl mt-5">
							<div class="row row-cols-2 row-cols-lg-4"> 
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="https://wa.me/#">
										<i class="display-1 bi bi-whatsapp"></i>
										<p class="fs-4">WhatsApp</p> 
									</a>
								</button>
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="https://t.me/#">
										<i class="display-1 bi bi-telegram"></i>
										<p class="fs-4">Telegram</p>
									</a>
								</button>
								<button class="btn btn-link">
									<a class="text-white col text-decoration-none" href="tel:#">
										<i class="display-1 bi bi-telephone"></i>
										<p class="fs-4">Telefon</p>
									</a>
								</button>
								<!--div class="dropdown p-0">
									<div class="btn dropdown-toggle text-white fs-5 w-100 h-100 shadow-0" type="button" id="telefondropdown" data-mdb-toggle="dropdown" aria-expanded="false">
									<i class="display-1 bi bi-telephone"></i><br>
									<span class="fs-4">Telefon</span>
									</div>
									<ul class="dropdown-menu fs-2" aria-labelledby="dropdownMenu2">
										<li>
											<button class="dropdown-item" type="button">
												<a class="text-decoration-none py-3" href="tel:#">
													<i class="bi bi-buildings-fill pe-3"></i>037602 762873
												</a>
											</button>
										</li>
										<li>
											<button class="dropdown-item" type="button">
												<a class="text-decoration-none py-3" href="tel:+#">
													<i class="bi bi-phone-fill pe-3"></i>0176 2426 1311
												</a>
											</button>
										</li>
									</ul>
								</div-->
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
										<p class="fs-4">E-Mail</p>
									</a>
								</button>
							</div>
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
			include "functions/service.php";
			?>
		</section>		
		<!--Galerie-->
		<section id="Feature" class="py-5">
			<?php
			include "functions/feature.php";
			?>
		</section>
		<!--Client-->
		<section id="Partner" class="py-5 client-logo-area client-logo-one">
			<?php
			include "functions/client.php";
			?>
		</section>
		<!-- Testimonial -->
		<section id="Testimonial" class="py-5 bg-default">
			<?php
			include "functions/testimonial.php";
			?>
		</section>
		<!-- Team -->
		<section id="Team" class="py-5 bg-deafult">
			<?php
			include "functions/team.php";
			?>
		</section>
		<!--Standort-->
		<!--section class="bg-deafult">
            <div id="map"></div>
        </section-->
    </main>
	<?php 
	include "functions/footer.php";
	?>
</body>
</html>
