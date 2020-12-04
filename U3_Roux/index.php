<?php
	require('abre_sesion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Roux Academy</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="contenido">
		<?php require('header.php'); ?>
		<?php require('navegador.php'); ?>
		<!-- fin header nav e imagen -->

		<div class="principal">

			<main>
				<section>
					<h2>About the event</h2>
					<p>The Roux Academy’s annual conference and exhibit is designed to foster a close-knit relationship amongst artists at various universities around the world. But sign up early, as this not-to-miss conference sells out quickly, and the waiting list is long. In addition, art students are encouraged to send in works from their school portfolios to be considered for hanging in the CAC exhibit halls, as well as to be selected as a Featured Artist.</p>
				</section>

				<section>
					<h2>Featured arists</h2>
					<p>The Roux Academy selects approximately 200 distinct pieces of contemporary art for display in their collective exhibit. Nine individuals are granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>

					<div class="fotos-artistas">
						<img src="images/artists/Barot_Bellingham_tn.jpg">
						<img src="images/artists/Constance_Smith_tn.jpg">
						<img src="images/artists/Hassum_Harrod_tn.jpg">
						<img src="images/artists/Hillary_Goldwynn_tn.jpg">
						<img src="images/artists/Jennifer_Jerome_tn.jpg">
						<img src="images/artists/Jonathan_Ferrar_tn.jpg">
						<img src="images/artists/LaVonne_LaRue_tn.jpg">
						<img src="images/artists/Riley_Rewington_tn.jpg">
						<img src="images/artists/Xhou_Ta_tn.jpg">
					</div><!-- fin de fotos de artistas -->
					<a href="artists.php" class="enlace-gris">View Artists Info</a>	
				</section>

				<section>
					<h2>The venue</h2>
					<h3>Hotel contempo</h3>
					<img src="images/hotel_contempo.jpg" class="flotante">
					<p>CAC speaking events and gallery exhibits take place inside Hotel Contempo, at 309 1st Avenue, in Downtown Seattle. Just a walk to the Space Needle, and a sampling of restaurants and shopping makes the venue a much sought-after location for conferences, year after year.

					Hotel Contempo is the perfect spot for a gathering of modern artists. Not only are the conference rooms and halls decked with breathtaking contemporary art and sculptures, but the individual rooms are as unique as the renowned artists who were commissioned to decorate them. From the Ross Monroe Purple suite filled wall to wall with paintings to the Tess Lessinger Sculpted Universe suite, with dozens of original sculptures, visitors are sure to be intrigued and comforted during their stay at Hotel Contempo.</p>
				</section>

			</main>

			<aside>
				
				<?php require("coming_to_the_event.php"); ?>

				<section>
					<h2>Schedule</h2>
					<h3 class="gris">Monday</h3>
					<p>The first day of CAC events is kicked off under the theme of Art in Full Color. From a demonstration in graffiti art on a wall of the Rousseau Room, to the exhibit of colorful glazed modern glassware in the Dover Hall.</p>

					<h3 class="gris">Tuesday</h3>
					<p>Water in Art is the theme for the second day, as art students gather at the Fountain of Intrigue to create ice sculptures, and art lecturers discuss the use of water as an art material, and water as an art subject.</p>
					<a href="schedule.php" class="enlace-gris">Full Schedule >></a>
				</section>

			</aside>
        </div> <!-- fin de la sección principal, incluye main y aside -->
        
        <?php require('footer.php'); ?>

	</div>	<!-- fin del div contenido -->

</body>
</html>