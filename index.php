<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITULO DE LA PAGINA  -->
	<title>Un mundo de princesas</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="<?php echo BASE_URL; ?>public/js/script.js"></script>

	<!-- LINK DE LAS FUENTES -->

	<!-- NUNITO -->
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
	
	<!-- EDU AUC  -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" rel="stylesheet">

	
	<!-- LISTA DE IMAGENES PRE-CARGADAS -->

	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>public/media/Hero0.png">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>public/media/Hero1.jpeg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>public/media/Hero2.jpg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>public/media/Hero3.jpeg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>public/media/Hero4.jpeg">

</head>

<body>
    <header>
        <?php include 'views/includes/header.php'; ?>
    </header>
    <section id="encabezado">

	<!-- AQUI EMPIEZA EL MENU VERTICAL -->
	<div id="infoP">
		<nav>
			<ul id="menuV">
					<li class="elementoMenu"><a href="#encabezado">Inicio</li>
					<li class="elementoMenu"><a href="#artUno" onclick="">Articulos</li>
					<li class="elementoMenu"><a href="#tendUno"onclick="">Tendencias</li>
					<li class="elementoMenu"><a href="#consejoUno"onclick="">Consejos</li>
						<ul id="submenu">
							<li class="elemSubMenu"><a href="#ConsejoUno"></a>Moda</li>
							<li class="elemSubMenu"><a href="#consejoDos"></a>Aprende de Colorimetria</li>
							<li class="elemSubMenu"><a href="#ConsejoTres"></a>Eventos</li>
						</ul>
					<li class="elementoMenu"><a id="titTienda" href="https://darkorchid-badger-317144.hostingersite.com/"  target="_blank">Visita nuestra Tienda Online</li>
					<li class="elementoMenu"><a href="#formulario">Inscribete y recibe novedades</li>
				</ul> 
		</nav>
	

<!-- TITULO DE TENDENCIA -->

		<div id="articuloP">
			<div class="imagenP">
				<a href="#tendUno">
					<img src="<?php echo BASE_URL; ?>MEDIA/IMG-Art_Principal.jpg" alt="">
					<h2 class="subtituloEncabezado">Tendencias Otoño - Invierno<br>2024</h2>
				</a>
			</div>		
		</div>

<!-- LINK DE TIENDA ONLINE -->			
		<div id="tiendaOnline">
			<div class="imgLinkTienda ">
					<a href="https://darkorchid-badger-317144.hostingersite.com/" target="_blank">
							<img src="<?php echo BASE_URL; ?>MEDIA/logoLPF.PNG" alt="">		
						<div id="infoTienda">
					
							<h2 class="tituloTienda">Visita nuestra<br>Tienda Online</h2>	
						</div>	
					</a>	
			</div>
		</div>
	</div>		
	</section>


	<section id="heroImage">
			
			<div>
				
				<div class="fondoHero" id="fondoHero0"></div>
				<div class="fondoHero" id="fondoHero1"></div>
				<div class="fondoHero" id="fondoHero2"></div>
				<div class="fondoHero" id="fondoHero3"></div>
				<div class="fondoHero" id="fondoHero4"></div>

			</div>

		</section>

		<section id="artUno">
			
	<!-- AQUI EMPIEZA LA SECCION DE LOS ARTICULOS -->		
			<h2 id="tituloArticulos">Articulos</h2>
			<!-- ARTICULO 1	-->	

			<div class="contenedorArticulo" id="pestanaArticulo">
				
						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art1.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo1.php">Ropa para fiesta y Ocasiones Especiales</a>
						</div>

			<!-- ARTICULO 2	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art2.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo2.php">Aprende a escoger la talla adecuada</a>
						</div>

			<!-- ARTICULO 3	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art3.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo3.php">España, superpotencia en moda infantil</a>
						</div>

			<!-- ARTICULO 4	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art4.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo4.php">Ropa infantil en expansion por Europa</a>
						</div>

			<!--ARTICULO 5	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art5.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo5.php">Panorama actual de la Moda infantil</a>
						</div>

			<!--ARTICULO 6	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art6.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo6.php">¿Skincare para las niñas?como cuidar la piel infantil</a>
						</div>			
			</div>
		</section>


		<section id="artDos">
			
	<!-- AQUI EMPIEZA LA SEGUNDA SECCION DE LOS ARTICULOS -->		

			<!-- ARTICULO 7	-->	

			<div class="contenedorArticulo" id="pestanaArticulo">

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art7.jpeg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo7.php">La Moda Infantil de Segunda Mano: Ventajas y Consejos</a>
						</div>

			<!-- ARTICULO 8	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art8.jpeg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo8.php">Cómo Organizar el Armario Infantil: Consejos.</a>
						</div>

			<!-- ARTICULO 9	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art9.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo9.php">España, superpotencia en moda infantil</a>
						</div>

			<!-- ARTICULO 10	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art10.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo10.php" class="text">Ropa infantil en expansion por Europa</a>
						</div>

			<!--ARTICULO 11	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art11.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo11.php" class="text">Ropa Infantil sostenible: Cómo Escoger Prendas Ecológicas</a>
						</div>

			<!--ARTICULO 12	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art12.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo12.php" class="text">Tendencias en Calzado Infantil</a>
						</div>			
			</div>
			<div class="contenedorBoton">
				<a id="verArticulo" href="<?php echo BASE_URL; ?>views/articulos.php" class="button">Ver Artículos</a>
			</div>
		</section>

<!-- AQUI EMPIEZA LA SECCION DE LAS TENDENCIAS -->
		<section id="tendUno" >
				
				<h2 id="tituloTendencia">Tendencias 2024</h2>
				<h3 class="titSeccionTen">Tendencia infantil según ASEPRI</h3>
			
			<div class="contenedorTendencia">

				<div class="columTendencia">
					<img src="<?php echo BASE_URL; ?>MEDIA/tendencia1.jpeg" id="imgTendencia" alt="">
				</div>

				<div class="textoTendencia">
					<p>
						"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
						Especializados en vestidos para cumpleaños y ocasiones especiales.
						<br></br>
						Estamos a la vanguardia de la moda infantil, tendencias.
						Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
						<br></br>		
						Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
						
					</p>
				</div>
			</div>
		</section>


<!-- AQUI EMPIEZA LA SEGUNDA SECCION DE LAS TENDENCIAS -->	

		<section id="tendDos">
			
				<h2 class="titSeccionTen">Colores tendencia el 2024</h2>
			
			<div class="contenedorTendencia">

				<div class="columTendencia">
					<img src="<?php echo BASE_URL; ?>MEDIA/tendencia2.jpeg" id="imgTendencia" alt="">
				</div>

					<div class="textoTendencia">
						<p>
							"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
							Especializados en vestidos para cumpleaños y ocasiones especiales.
							<br></br>
							Estamos a la vanguardia de la moda infantil, tendencias.
							Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
							<br></br>		
							Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
							
						</p>
					</div>
			</div>
		</section>

<!-- AQUI EMPIEZA LA SECCION DE LOS CONSEJOS -->
		<section id="consejoUno">
			
			<h2 class="titSeccionCons">MODA</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="<?php echo BASE_URL; ?>MEDIA/consejo1.jpeg" alt="">
					</div>

					<div class="txtConsejo">
						<p>
							"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
							Especializados en vestidos para cumpleaños y ocasiones especiales.
							<br></br>
							Estamos a la vanguardia de la moda infantil, tendencias.
							Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
							<br></br>		
							Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
							
						</p>
					</div>
				</div>
				<div class ="verConsejo">
					<a href="views/consejos/consejo1.php" class="button">Link</a>	
				</div>	
				
		</section>

<!-- AQUI EMPIEZA LA SEGUNDA SECCION DE LOS CONSEJOS -->

		<section id="consejoDos">
			
			<h2 class="titSeccionCons">Aprende de Colorimetria</h2>
					
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="<?php echo BASE_URL; ?>MEDIA/consejo2.jpeg" alt="">
				</div>

					<div class="txtConsejo">
						<p>
							"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
							Especializados en vestidos para cumpleaños y ocasiones especiales.
							<br></br>
							Estamos a la vanguardia de la moda infantil, tendencias.
							Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
							<br></br>		
							Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
							
						</p>
					</div>
					<div class ="verConsejo">
						<a href="consejo2.php" class="button">Link</a>	
					</div>	
		</section>


<!-- AQUI EMPIEZA LA TERCERA SECCION DE LOS CONSEJOS -->

		<section id="consejoTres">
			
			<h2 class="titSeccionCons">Evento BabyKid Spain+ FIMI</h2>
					
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="<?php echo BASE_URL; ?>MEDIA/consejo3.jpeg" alt="">
				</div>

					<div class="txtConsejo">
						<p>
							"Somos una tienda de ropa exclusiva para niñas brindando a sus clientas altos estándares de calidad.
							Especializados en vestidos para cumpleaños y ocasiones especiales.
							<br></br>
							Estamos a la vanguardia de la moda infantil, tendencias.
							Fomentamos valores positivos y una cultura de autoestima saludable entre las niñas, enseñándoles a expresarse a través de la moda y la creatividad, y contribuyendo así a su desarrollo integral.
							<br></br>		
							Nos aseguramos de la durabilidad de las prendas y estamos comprometidos con la sostenibilidad en los procesos de producción y distribución, contribuyendo así al cuidado del medio ambiente "
							
						</p>
					</div>
					<div class ="verConsejo">
						<a href="consejo3.php" class="button">Link</a>	
					</div>	
		</section>
<!-- AQUI EMPIEZA EL FORMULARIO -->		
		<section id="formulario">
		<form id="formu" action="procesarFormulario.php" method="POST" data-aos="zoom-out-down">
        <p id="textoForm">¡Entérate de las últimas tendencias!</p>
        <input id="formNombre" type="text" name="Nombre" placeholder="Escribe tu Nombre y Apellidos" required>
        <input id="formCorreo" type="email" name="Correo" placeholder="Escribe tu Email" required>
        <input id="botonEnviar" value="Suscríbete" type="submit" onclick="enviarFormulario()">
    </form>
</section>

<!-- MODAL DE CONTACTO -->
<div id="modalContacto" class="modal" style="display: none;">
    <div class="modal-content">
       
		<?php
                // Mostrar mensaje de éxito si se ha enviado correctamente
                if (isset($_GET['success']) && $_GET['success'] == 1) {
					echo  '<p class="mensajeC">Querido Usuario:</p>';
					?>
					<br>
					<?php
                    echo '<p class="mensajeC">¡Gracias por suscribirte!</p>';
                } elseif (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo "Hubo un error al procesar tu solicitud. Inténtalo de nuevo.";
                }
            ?>
			<br>
			
        <button id="bottonCerrarMContacto" onclick="cerrarModal()" class="btnCerrar">Entendido</button>
		<footer>
			<?php include 'views/includes/footer.php'; ?>
		</footer>
    </div>
</div>
		

</body>

</html>