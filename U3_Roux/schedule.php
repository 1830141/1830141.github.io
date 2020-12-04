<?php
	require('abre_sesion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Roux Conference: Schedule</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="contenido">
        
        <?php require('header.php'); ?>
        <?php require('navegador.php'); ?>

		<div class="principal">
			
			<main>
				<section>
					<h2>Schedule</h2>
					<p>With over 35 seminars and 60 exhibits at this year’s Roux Academy CAC, there is truly something for every art student. Learn about color, light, and texture; see spray paint tagging in a new light, as a breath-taking 20 ft high graffiti wall is built before your very eyes over the course of the week; and rub paint brushes with some of the most talented artists in the world.</p>
					<br>
					<hr>
				</section>

				<section>
					<h3>Monday, March 7, 2016</h3>
					<h2>Art in Full Color</h2>
					<p>The first day of CAC events and exhibits is kicked off under the theme of Art in Full Color From a demonstration in graffiti art on a wall of the Rousseau Room, to the exhibit of colorful glazed modern glassware in the Dover Hall, Art in Full Color will get CAC started in full swing!</p>
						
					<img src="images/artists/LaVonne_LaRue_tn.jpg" class="flotante-schedule">
					<h3>Art in Unexpected Places</h3>
					<h4>09:30-10:30am: Elizabeth Hall</h4>
					<p class="nice-p">Watch LaVonne L. LaRue, a Chicago graffiti artist share her love and skill of mural art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo, which will be finished at the end of the conference. Make sure to show up a bit early, as this session will be standing-room only.</p>

					<img src="images/artists/Constance_Smith_tn.jpg" class="flotante-schedule">
					<h3>Art in Full Bloom</h3>
					<h4>11:00am-1pm: Victoria Hall</h4>
					<p class="nice-p">Drawing and painting flowers may seem like a first-year art student’s assignment, but Constance Smith brings depth, shadows, light, and color to new heights with his unique technique of painting on canvas with ceramic glaze. This session is sure to be a hit with mixed media buffs.</p>
					
					<img src="images/artists/Riley_Rewington_tn.jpg" class="flotante-schedule">
					<h3>Still Life</h3>
					<h4>2:30-4:00pm: Dennison Hall</h4>
					<p class="nice-p">Grab your pencils, charcoal, acrylics, watercolors, or whatever painting tools suit your fancy, and participate in the capturing of various still life settings that are staged all around Dennison Hall. You won’t believe the wealth and depth of choices.</p>
					<br>
					<hr>
				</section>

				<section>
					<h3>Tuesday March 8, 2016</h3>
					<h2>Water in Art</h2>
					<p>Water in Art is the theme for the second day, as art students from around the world gather at the Fountain of Intrigue in the gardens of Hotel Contempo to create ice sculptures, and art lecturers discuss the use of water as an art material, and water as an art subject.</p>
				</section>
				
				<section>
					<img src="images/artists/Jennifer_Jerome_tn.jpg" class="flotante-schedule">
					<h3>Water in Art Kickoff Session</h3>
					<h4>09:30-10:30am: Elizabeth Hall</h4>
					<p class="nice-p">Jennifer Jerome, a native of New Orleans, whose work has centered around abstract images that depict flooding and rebuilding, will talk about how the floods inspired her artistically, and how, despite the sadness of devastation and lives lost, her work also depicts the hope and togetherness of a community that has persevered.</p>

					<img src="images/artists/Jonathan_Ferrar_tn.jpg" class="flotante-schedule">
					<h3>Ice Sculptures</h3>
					<h4>10:30am-1pm: Fountain of Intrigue</h4>
					<p class="nice-p">Get on your mittens and earmuffs, and join your fellow artists at the Fountain of Intrigue, in the Hotel Contempo gardens, where the ambient temperature has been turned down to allow the sculpting of ice into the most mysterious and beautiful of shapes. Richard Reed will share his secrets for chiseling ice into a shape that your imagination has envisioned. There is an extra fee of $25 for the rental of the tools needed to sculpt ice, if you plan to participate. And we hope you do!</p>

					<img src="images/artists/Hillary_Goldwynn_tn.jpg" class="flotante-schedule">
					<h3>Deep Sea Wonders</h3>
					<h4>2:30-4:00pm: Dennison Hall</h4>
					<p class="nice-p">Hillary Hewitt Goldwynn-Post has been inspiring deep sea divers to paint what they experience under water for nearly two decades. Not only does he explain texture, color, and tools, be he also explains methods for capturing your under sea explorations in your mind for future expulsion onto canvas.</p>
				</section>



			</main>
			<aside>
				
				<?php require('featured_artists.php'); ?>

				<?php require("coming_to_the_event.php"); ?>

			</aside>
		</div>

		<?php require('footer.php'); ?>

</body>
</html>