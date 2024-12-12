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

	<!-- NUNITO -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
	
	<!-- EDU AUC  -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&display=swap" rel="stylesheet">
	
	
	<!-- LISTA DE IMAGENES PRE-CARGADAS -->

	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>MEDIA/Hero0.png">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>MEDIA/Hero1.jpeg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>MEDIA/Hero2.jpg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>MEDIA/Hero3.jpeg">
	<link rel="preload" as="image" href="<?php echo BASE_URL; ?>MEDIA/Hero4.jpeg">

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
							<li class="elemSubMenu"><a href="#contenedorConsejo" onclick="">Moda</a></li>
							<li class="elemSubMenu"><a href="#consejoDos" onclick="">Aprende de Colorimetria</a></li>
							<li class="elemSubMenu"><a href="#consejoTres" onclick="">Evento BabyKid Spain</a></li>

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
					<h2 class="subtituloEncabezado">Tendencias Invierno<br>2024</h2>
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
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo8.php">Organizar el Armario Infantil:Maximizar el Espacio.</a>
						</div>

			<!-- ARTICULO 9	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art9.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo9.php">Prendas Infalibles: Todo Niño Necesita en su Armario</a>
						</div>

			<!-- ARTICULO 10	 -->

						<div class="articulo ">
							<div class="imagenArticulo ">
								<img src="<?php echo BASE_URL; ?>MEDIA/art10.jpg" alt="">
							</div>
							<a class ="nombreArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulo10.php" class="text">Cómo Mantener la Ropa en Buen Estado todo el Año</a>
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
				<a id="verArticulo" href="<?php echo BASE_URL; ?>views/Articulos/articulos.php" class="button">Ver Artículos</a>
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
				<ul>
					<li><strong>Sostenibilidad:</strong> Los productos ecológicos están ganando popularidad. Desde juguetes hasta ropa, hay una creciente demanda de artículos fabricados con materiales reciclados, biodegradables y no tóxicos.</li>
					
					<li><strong>Tecnología y Educación:</strong> La integración de la tecnología sigue siendo una tendencia fuerte, con un enfoque en juguetes interactivos y aplicaciones educativas.</li>
					
					<li><strong>Personalización:</strong> Los padres buscan productos únicos para sus hijos. Desde ropa hasta juguetes, la personalización (con nombres, colores y diseños exclusivos) está en auge.</li>
					
					<li><strong>Diversidad e Inclusión:</strong> Se están diseñando productos que reflejan una mayor diversidad en cuanto a etnias, géneros y habilidades. Esto promueve la inclusión desde la infancia.</li>
					
					<li><strong>Moda Infantil:</strong> La moda para niños sigue influenciada por las tendencias de adultos, pero con un toque práctico y lúdico. Se prioriza los colores vibrantes y estampados divertidos.</li>
					
					<li><strong>Fomento de la Creatividad:</strong> Juguetes y juegos que estimulan la imaginación y el juego libre están en auge.Promueven el aprendizaje por su capacidad para desarrollar habilidades cognitivas y creativas.</li>
				</ul>
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
					<br>
					<div class="textoTendencia">
					<p>Las tendencias del 2024 según expertos en diseño y moda, reflejan equilibrio entre la naturaleza y la tecnología.</p>
					<ul>
						<li><strong>Tonos Naturales y Terrosos:</strong> Colores como el terracota, verde oliva y marrones suaves siguen siendo protagonistas. Estos tonos de conexión profundos con la naturaleza y aportan calidez y serenidad.</li>
						
						<li><strong>Colores Pastel Modernos:</strong> Los pasteles no pasan de moda. Colores como el lavanda, el rosa suave y el azul claro siguen siendo populares, pero con un giro moderno: combina con metálicos o tonos más vibrantes.</li>
						
						<li><strong>Colores Vibrantes y Energéticos:</strong> En contraste con los tonos naturales, los colores vivos como el fucsia, naranja brillante y amarillo eléctrico aportan energía y optimismo.</li>
						
						<li><strong>Azul Cósmico:</strong> El azul profundo, casi cósmico, se destaca como el color del futuro. Este tono, cercano al azul marino pero con un matiz más vibrante, simboliza estabilidad, confianza y modernidad.</li>
						
						<li><strong>Neutros con Toques Metálicos:</strong> Los tonos neutros como el gris, blanco y beige continúan siendo una base fundamental, pero este año se mezclan con detalles metálicos, como el dorado o plateado.</li>
					</ul>
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
							"La moda infantil para 2024 se enfoca en un equilibrio entre estilo, comodidad y sostenibilidad. 
							<br>
							Los diseños se adaptan a las necesidades de los más pequeños, ofreciendo prendas que permiten la libertad de
							movimiento sin sacrificar el aspecto visual. A su vez, las marcas están cada vez más comprometidas con la 
							conciencia ecológica, utilizando materiales orgánicos y procesos de fabricación responsables. 
							<br>
							Este año, las tendencias apuestan por colores vibrantes, estampados creativos y un enfoque inclusivo, 
							donde la funcionalidad y el confort siguen siendo prioritarios."
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
							"La colorimetría, en el contexto de la moda infantil, juega un papel crucial 
							no solo en la estética de las prendas, sino también en el bienestar y el 
							desarrollo emocional de los niños. La selección y combinación de colores en la 
							ropa infantil puede influir en el estado de ánimo, la percepción social e incluso
							 en el aprendizaje de los más pequeños.
							 <br>
							 Al igual que en la moda adulta,los colores en la ropa de los niños tienen un poder significativo, pero en su
							  caso, la elección de los tonos también debe tener en cuenta la comodidad, 
							  la psicología infantil y las tendencias estacionales."
						</p>
					</div>
					<div class ="verConsejo">
						<a href="views/consejos/consejo2.php" class="button">Link</a>	
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
							"El evento BabyKid Spain + FIMI se ha consolidado como uno de los encuentros
							 más importantes para el sector infantil y juvenil en España. Esta cita, que reúne a marcas,
							  fabricantes, diseñadores y profesionales de la industria, se ha convertido en una plataforma
							   clave para mostrar las últimas tendencias en moda infantil, juguetes, productos para el 
							   cuidado del bebé y todo lo relacionado con el mundo de la infancia.
							   <br>
							    Además de ofrecer una visión completa del mercado, el evento se presenta como un punto de encuentro para la innovación,
							    el networking y el desarrollo de nuevas oportunidades de negocio. BabyKid Spain + FIMI atrae a miles de visitantes cada año,"
						</p>
					</div>
					<div class ="verConsejo">
						<a href="views/consejos/consejo3.php" class="button">Link</a>	
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
						
					</div>
				</div>
	
		</section>

		<footer>
			<?php include 'views/includes/footer.php'; ?>
		</footer>
		

</body>

</html>