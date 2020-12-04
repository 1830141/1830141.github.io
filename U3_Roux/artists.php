<?php
	require('abre_sesion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Roux Conference: Artists</title>
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
					<h2>About the Event</h2>
					<p>Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees. It is truly an honor to be a CAC Featured Artist and many past students artists who were featured at CAC have gone on to brilliant careers in art.</p>
				</section>
				
				<hr class="punteado">
				<?php 
				
					$servidor = "localhost";
					$usuario = "root";
					$contrasena = "";
					$bd = "ejemplo";
					$clase_img = 'class="flotante-derecha"';
					$clase_hr = 'class="punteado"';

					$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

					if(!$conexion){
						die("Conexion a la base de datos " . $bd . "falló" . mysqli_connect_error());
					}
					
					$consulta = "SELECT url_imagen, nombre_artista, descripcion FROM artistas";
					$resultados = mysqli_query($conexion, $consulta);
					if($resultados->num_rows>0){
						while($fila = $resultados->fetch_assoc()){
							echo "<div>";
							echo "<h3>" . $fila["nombre_artista"] . "</h3>";
							echo "<img src=" . $fila["url_imagen"] . " $clase_img>";
							echo "<p>" . $fila["descripcion"] . "</p>";
							echo "</div>";
							echo "<br>";
							echo "<hr $clase_hr>";	
						}
					}
				?>
				
			</main>
			<aside>
				<section>
					<h2>The Art</h2>
					<p>This year’s art pieces will inspire thought, conversation, imagination, and even criticism, as modern art often does. From critically-acclaimed works created by our Featured Artists, to a vast assortment of works by talented art students in schools across the world.</p>
					<div class="fotos-artistas">
						<img src="images/art/arte01.jpg">
						<img src="images/art/arte02.jpg">
						<img src="images/art/arte03.jpg">
						<img src="images/art/arte04.jpg">
						<img src="images/art/arte05.jpg">
						<img src="images/art/arte06.jpg">
						<img src="images/art/arte07.jpg">
						<img src="images/art/arte08.jpg">
						<img src="images/art/arte09.jpg">
					</div>	<!-- fin fotos de arte -->

				</section>
				<?php require("coming_to_the_event.php"); ?>
			</aside>

		</div>

		<?php require('footer.php'); ?>

	</div>

</body>
</html>