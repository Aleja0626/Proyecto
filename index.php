<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITULO DE LA PAGINA  -->
	<title>Un mundo de princesas</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="JS/script.js"></script>

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

	<link rel="preload" as="image" href="MEDIA/Hero0.png">
	<link rel="preload" as="image" href="MEDIA/Hero1.jpeg">
	<link rel="preload" as="image" href="MEDIA/Hero2.jpg">
	<link rel="preload" as="image" href="MEDIA/Hero3.jpeg">
	<link rel="preload" as="image" href="MEDIA/Hero4.jpeg">

</head>

<body>
<?php
	include "includes/header.php";
?>
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
					<li class="elementoMenu"><a id="titTienda" href="#tiendaOnline">Visita nuestra Tienda Online</li>
					<li class="elementoMenu"><a href="#formulario">Inscribete y recibe novedades</li>
				</ul> 
		</nav>
	

<!-- TITULO DE TENDENCIA -->

		<div id="articuloP">
			<div class="imagenP">
				<img src="Media/IMG-Art_Principal.jpg" alt="">
				<a href="#Tendencias"></a>
				<h2 class="subtituloEncabezado">Tendencias Otoño - Invierno<br>2024</h2>	
			</div>		
		</div>

<!-- LINK DE TIENDA ONLINE -->			
		<div id="tiendaOnline">
			<div class="imgLinkTienda ">
				<img src="Media/logoLPF.PNG" alt="">
				<div id="infoTienda">
					<a href="#tiendaOnline"></a>
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
								<img src="Media/art1.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo1.php">Ropa para fiesta y Ocasiones Especiales</a>
						</div>

			<!-- ARTICULO 2	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art2.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo2.php">Aprende a escoger la talla adecuada</a>
						</div>

			<!-- ARTICULO 3	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art3.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo3.php">España, superpotencia en moda infantil</a>
						</div>

			<!-- ARTICULO 4	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art4.jpeg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo4.php">Ropa infantil en expansion por Europa</a>
						</div>

			<!--ARTICULO 5	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art5.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo5.php">Panorama actual de la Moda infantil</a>
						</div>

			<!--ARTICULO 6	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art6.jpg" alt="">
							</div>
							<a class="nombreArticulo" href="Articulos/articulo6.php">¿Skincare para las niñas?como cuidar la piel infantil</a>
						</div>			
			</div>
		</section>


		<section id="artDos">
			
	<!-- AQUI EMPIEZA LA SEGUNDA SECCION DE LOS ARTICULOS -->		

			<!-- ARTICULO 7	-->	

			<div class="contenedorArticulo" id="pestanaArticulo">

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art7.jpeg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo7.php">Ropa para fiesta y Ocasiones Especiales</a>
						</div>

			<!-- ARTICULO 8	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art8.jpeg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo8.php">Aprende a escoger la talla adecuada</a>
						</div>

			<!-- ARTICULO 9	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art9.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo9.php">España, superpotencia en moda infantil</a>
						</div>

			<!-- ARTICULO 10	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art10.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo10.php" class="text">Ropa infantil en expansion por Europa</a>
						</div>

			<!--ARTICULO 11	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art11.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo11.php" class="text">Panorama actual de la Moda infantil</a>
						</div>

			<!--ARTICULO 12	-->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="Media/art12.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="Articulos/articulo12.php" class="text">¿Skincare para las niñas?como cuidar la piel infantil?</a>
						</div>			
			</div>
			<div class="contenedorBoton">
				<a id="verArticulo" href="Articulos/articulos.php" class="button">Ver Artículos</a>
			</div>
		</section>

<!-- AQUI EMPIEZA LA SECCION DE LAS TENDENCIAS -->
		<section id="tendUno">
				
				<h2 id="tituloTendencia">Tendencias 2024</h2>
				<h3 class="titSeccionTen">Tendencia infantil según ASEPRI</h3>
			
			<div class="contenedorTendencia">

				<div class="columTendencia">
					<img src="Media/tendencia1.jpeg" id="imgTendencia" alt="">
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
					<img src="Media/tendencia2.jpeg" id="imgTendencia" alt="">
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
						<img src="Media/consejo1.jpeg" alt="">
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
					<a href="consejos.html" class="button">Link</a>	
				</div>	
				
		</section>

<!-- AQUI EMPIEZA LA SEGUNDA SECCION DE LOS CONSEJOS -->

		<section id="consejoDos">
			
			<h2 class="titSeccionCons">Aprende de Colorimetria</h2>
					
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="Media/consejo2.jpeg" alt="">
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
						<a href="consejos.html" class="button">Link</a>	
					</div>	
		</section>


<!-- AQUI EMPIEZA LA TERCERA SECCION DE LOS CONSEJOS -->

		<section id="consejoTres">
			
			<h2 class="titSeccionCons">Evento BabyKid Spain+ FIMI</h2>
					
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="Media/consejo3.jpeg" alt="">
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
						<a href="consejos.html" class="button">Link</a>	
					</div>	
		</section>


		<section id="formulario">
			
			<form action="#" id="formu" data-aos="zoom-out-down">


				<p id="textoForm" >¡Entèrate de las ùltimas tendencias!</p>

				<input id="formNombre" type="text" name ="Nombre" placeholder="Escribe tu Nombres y Apellidos" required>

				<input id="formCorreo" type="Email" name ="Correo" placeholder="Escribe tu Email" required>

				<input id ="botonEnviar" onclick="modalContacto()" Value="Suscríbete" type="button">


			</form>

		<!-- MODAL DE CONTACTO -->

	<div id="modalContacto">
		<div id="modalBoxC">
			<h1>Querido Usuario:</h1>
			<h2 id="mensajeC">¡Gracias por suscribirte!</h2>
			<button id="bottonCerrarMContacto" onclick="cerrarModalC()">Entendido</button>
		</div>
	</div>
<footer id="pie">
		
		<div id="rssPie">

				<!-- ENLACE DE WHATSAPP -->
				<div class="iconosPie">
					 	<a href="https://wa.me/573114060044?text=Hola%20Bienvenid%40s%20a%20Chikiticas%20pero%20lindas%2C%20encantados%20de%20conocerte%2C%20%C2%BFen%20qu%C3%A9%20podemos%20ayudarte%3F" target="_blank" rel="noopener noreferrer">
					      <img src="MEDIA/whatsapp.png" alt="">
						</a>

			    <!-- ENLACE DE FACEBOOK -->
			 
					  	<img src="MEDIA/facebook.png" alt="">
					  	<a href="https://www.facebook.com/profile.php?id=100086729575474&locale=es_ES" target="_blank" rel="noopener noreferrer">
						</a>
					   
					    <!-- ENLACE DE INSTAGRAM -->
					   
					  	<a href="https://www.instagram.com/chikiticasperolindas?igsh=MW05enMzNTBtMmZ1NQ==" target="_blank" rel="noopener noreferrer">
							<img src="MEDIA/instagram.png" alt="">
						</a>
				</div>
	 		 </div>

	</footer>
		</section>


	
</body>
</html>