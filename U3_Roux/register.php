<?php
	require('abre_sesion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Roux Conference: Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="contenido">

        <?php require('header.php'); ?>
        <?php require('navegador.php'); ?>

		<div class="principal">
			 <main>
                <h2>Register</h2>
                <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.</p>
                
                
              	<div class="registro">
	                <section>
	                    <h3>Personal Info</h3>
	                    <div>
	                        <label for="">Name:</label>
	                        <input type="text" name="nombre" placeholder="Last, First" required>
	                    </div>
	                    <div>
	                        <label for="">Company Name:</label>
	                        <input type="text" name="companyName "  required>
	                    </div>
	                    <div>
	                        <label for="">Email:</label>
	                        <input type="email" name="EMAIL "  required>
	                    </div>
	                    <div>
	                        <label for="">Request Type</label>

	                        <ul style="list-style: none;">
	                            <li><input type="radio" name="Question" value="Question" >Question</li>
	                            <li><input type="radio" name="Comment" value="Comment">Comment</li>
	                        </ul>
	                        
	                    </div>

	                    <div>
	                        <label for="">Descripcion:</label>
	                        <textarea name="descripcion" ></textarea>
	                    </div>

	                    <div>  
	                        <input type="checkbox" name="pasatiempos" value="suscribir">Subscribe to our mailing list?
	                    </div>

	                    <div>
	                        <label for="">How did you hear about us?</label>
	                        <select name="color" id="">
	                            <option value="1">A friend</option>
	                            <option value="2">Facebook</option>
	                            <option value="4">Twitter</option>
	            
	                        </select>                    
	            
	                    </div>  

	                    <div>
	                        <input type="submit" name="boton" value="Enviar">

	                    </div>
	                </section>
	           
               </div>

            </main>

			<aside>
				<?php require('featured_artists.php'); ?>
			</aside>
		</div>

		<?php require('footer.php') ?>

	</div>
</body>
</html>