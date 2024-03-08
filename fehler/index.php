<!doctype html>
<html lang="de">
<head>
	<?php
	$title = "Treske Baum- & Landschaftspflege - Fehler";
	$description = "Fehler";
	$keywords = "Fehler, Server, Website";
	include "../templates/head.php";
	?>
</head>
<body>
<?php
include "../templates/header.php";
?>
<main>  
    <div class="container-xxl mx-auto margin120 pb-5">
    <?php
        function displayError($errorId, $short_message, $long_message) {
            ?>
            <div class="p-5 mt-5 mb-auto text-center">
            <i class="text-danger bi bi-x-circle display-1"></i>
            <?php
            echo "<h2 class='my-2'>Leider ist ein unerwarteter Fehler aufgetreten.</h2>";
            echo "<p>Der Server meldet: <strong>$errorId $short_message</strong></p>";
            echo "<p>$long_message</p>";
            ?>
            </div>
            <div class=" mb-auto text-center">
            <p>Sie werden in Kürze automatisch zur Startseite weitergeleitet. Sollte dies nicht funktionieren, klicken Sie bitte <a href="../index.php">hier</a>.</p>
            </div>
            <?php
        }

        if (isset($_GET['id']) && isset($_GET['short_message']) && isset($_GET['long_message'])) {
            displayError($_GET['id'], $_GET['short_message'], $_GET['long_message']);
        } else {
            displayError(500, "Interner Serverfehler", "Ein interner Serverfehler ist aufgetreten. Bitte versuchen Sie es später erneut."); // Standardfehler, wenn keine ID oder Nachricht angegeben ist
        }
        ?>
    </div>
</main>
	<?php 
	include "../templates/footer.php";
	?>
	<script>
        setTimeout(function(){
            window.location.href = '/index.php';
    	}, 10000);
    </script>
</body>
</html>