<?php
	require('abre_sesion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Roux Conference: Venue</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<div class="contenido">
        
        <?php require('header.php'); ?>
        <?php require('navegador.php'); ?> 

		<div class="principal">
			<main>
				<div>
					<h2>The Venue</h2>
					<img src="images/hotel_contempo.jpg" class="flotante-venue">
					<p class="venue-p">Hotel Contempo is the perfect spot for a gathering of modern artists. Not only are the conference rooms and halls decked with breathtaking contemporary art and sculptures, but the individual rooms are as unique as the renowned artists who were commissioned to decorate them. From the Ross Monroe Purple suite filled wall to wall with paintings in his palette of violet and lavender to the Tess Lessinger Sculpted Universe suite, with dozens of original sculptures, including the bronze-casted toilet, visitors are sure to be intrigued and comforted during their stay at Hotel Contempo. For those who opt to stay at another location, there is no shortage of hotels in Downtown Seattle. Ranging from shabby chic to the ultimate in sophistication.</p>
					<br>
					<hr class="venue-hr">
				</div>

				<div>
					<img src="images/hotel_phillips.jpg" class="hotel-venue">
					<h3>Phillips of Bell town</h3>
					<p class="venue-p">Situated amongt the hip, youthful culture of Downtown Seattle, Phillips of Belltown is the place to be any time of the day or night. Choose from Jazz and Rock music at the various music venues, and shop until you drop at an assortment of thrift stores and upscale boutiques. The hotel itself is a historical gem, with architectural achievements in every beam, brick, and support.</p>
					<a href="venue.php" class="enlace-gris">Get Directions >></a>
					<br>
					<hr class="venue-hr">
				</div>

				<div>
					<img src="images/hotel_otter.jpg" class="hotel-venue">
					<h3>The Otter Renaissance Hotel</h3>
					<p class="venue-p">Hotel founder, Henry Chasings, had a love of otters, having been raised in an Alaskan village where otters played out his back door. As his tribute to the sea creatures of his early days, Henry was insistent upon having an otter in every hall, wall, and room inside the Otter Renaissance Hotel.</p>
					<a href="venue.php" class="enlace-gris">Get Directions >></a>
					<br>
					<hr class="venue-hr">
				</div>

				<div>
					<img src="images/hotel_rage.jpg" class="hotel-venue">
					<h3>The Rage Hotel</h3>
					<p class="venue-p">Seattle’s South Lake Union district plays home to the ultra modern Rage Hotel, that is outfitted with a state-of-the-art computer and printing facility in the penthouse, and draws tech professionals from all over the world for business conferences and vacations, alike.</p>
					<a href="venue.php" class="enlace-gris">Get Directions >></a>
					<br>
					<hr class="venue-hr">
				</div>

				<div>
					<img src="images/hotel_gwendoline.jpg" class="hotel-venue">
					<h3>Gwendoline’s Fancy</h3>
					<p class="venue-p">In the heart of the West Edge district in Seattle, Gwendoline’s Fancy, named after a Navy submarine that got lost at sea in 1910, is a central landing place for history buffs who can immerse themselves in the Museum of History located in the hotel mezzanine. For those travelers who aren’t into history, there are plenty of other nearby sights to keep them entertained, including Pike Place Market and the Seattle Art Museum.</p>
					<a href="venue.php" class="enlace-gris">Get Directions >></a>
				</div>

				
			</main>

			<aside>

				<?php require('featured_artists.php'); ?>

				<?php require("coming_to_the_event.php"); ?>
				
			</aside>

		</div>

        <?php require('footer.php'); ?>

	</div>

</body>
</html>