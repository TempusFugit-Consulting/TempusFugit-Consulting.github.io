<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Helfer (m/w/d) für Baumfällarbeiten";
	$description = "Bewerbungsauschreibung für Helfer (m/w/d) für Baumfällarbeiten";
	$keywords = "helfer, baumfällarbeiten, bewerbung, stellenangebot, arbeit";
	include "../templates/head.php";
	?>
</head>
<style>
/* Custom CSS */
:root {
	--border-radius: 15px;
	--tl-border-radius: 50px;
}
.glass-effect {
    background: hsla(0, 0%, 100%, 0.55);
    backdrop-filter: blur(30px);
    border-radius: var(--border-radius);
    border: none;
}

.shadow-5 {
    border-radius: var(--border-radius);
}

.card-body {
    padding: 20px;
}

.thin-line {
    border-top: 1px solid #ddd;
    border-radius: var(--tl-border-radius);
}

.small-image {
    width: 100px;  /* Oder jede andere Größe, die Sie bevorzugen */
    height: auto; /* Behält das Seitenverhältnis des Bildes bei */
}

.table {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    width: 100%;
}

.tr {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    width: 50%;
    border: none;
}

.th, .td {
    width: 100%;
    padding: 0.75rem 0;
    border: none;
}

#card-1 .td {
    font-weight: bold;
}

#card-1 .tr .th,
#card-1 .tr .td {
    line-height: 0.1; /* Oder ein anderer Wert, der Ihnen gefällt */
}
@media screen and (max-width: 576px) {
	.h1 {
		font-size: 1.5rem;
	}
}
@media screen and (max-width: 480px) {
	.h1 {
		font-size: 1.1rem;
	}
}
</style>
<body>
	<?php
	include "../templates/header.php";
	?>
	<main>
		<div class="container-xxl mx-auto margin120 pb-5 mb-5">
            <h1 class="h1 text-center pb-4">Helfer (m/w/d) für Baumfällarbeiten</h1>
			<div id="preview" class="preview">
				<div style="display: none;"></div>
				<div style="">
					<div data-draggable="true" class="mb-5 pb-5" style="position: relative;">
						<section draggable="false" class="overflow-hidden pt-0">
							<section class="m-1 text-center text-lg-start">
								<!-- Jumbotron --> 
								<div class="container py-5 mb-5"> 
									<div class="row align-items-center"> 
										<div class="mb-4S mb-lg-0"> 
											<div class="card mb-3 glass-effect" id="card-1"> 
												<div class="card-body px-4 p-5 px-md-5 shadow-5 text-black">
												<div class="d-flex justify-content-between align-items-center mb-2">
													<small>Helfer/in - Gartenbau</small>
													<small class="text-muted">Stand: 01.01.2022</small>
												</div>
												<hr class="thin-line" />
												<div class="d-flex justify-content-between align-items-center mb-2">
													<div>
														<h2>Kurzbeschreibung</h2>
														<small>Treske Baum- & Landschaftspflege GmbH</small>
													</div>
													<div class="small-image">
														<img src="../resource/bewerbung.jpg" alt="Bewerbungsfoto Bewerbung" class="small-image">
													</div>
												</div>
												<hr class="thin-line" />
													<div class="table align-items-center">
														<div class="tr">
															<div class="th">Attribut 1</div>
															<div class="td">Wert 1</div>
														</div>
														<div class="tr">
															<div class="th">Attribut 2</div>
															<div class="td">Wert 2</div>
														</div>
														<div class="tr">
															<div class="th">Attribut 2</div>
															<div class="td">Wert 2</div>
														</div>
														<div class="tr">
															<div class="th">Attribut 2</div>
															<div class="td">Wert 2</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Jumbotron --> 
							</section>
						</section>
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