<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>CSS/style.css">
</head>
<body>
    <header>
        <?php include '../includes/header.php'; ?>
    </header>
      <!--PRIMERA SECCION --> 
  <div class="container">
        <section class="articulos">
            <div class="pPrincipal">
                <h1>¿Cómo organizar el armario infantil?</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo6.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Máximiza el espacio</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img18.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    el armario de los niños no solo ayuda a mantener el hogar ordenado, sino que también
                     facilita las tareas diarias de vestirse, además de asegurar que la ropa se conserve
                      en buen estado. A medida que los niños crecen rápidamente y sus ropas cambian de 
                      temporada, tener un sistema de organización eficiente puede marcar la diferencia. 
                      Aquí te damos algunos consejos prácticos para aprovechar al máximo el espacio del 
                      armario infantil y mantener la ropa bien cuidada.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Consejos prácticos</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Separa por Categoría</h5>
                                    Puedes organizar la ropa por tipo: camisas, pantalones, suéteres,
                                     vestidos, pijamas, etc. O también por uso: ropa para la escuela, 
                                     ropa para salir, ropa de dormir, ropa de deporte. Esto hace que sea 
                                     mucho más fácil encontrar lo que necesitas y reduce el tiempo que 
                                     los niños pasan buscando lo que se van a poner.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Aprovecha las Estanterías y Cajones</h5>
                                    
                                    El espacio vertical es una de las mejores maneras de aprovechar al máximo
                                    el armario infantil. Instalar estanterías adicionales o usar cajones para
                                    almacenar ropa de temporada o accesorios (sombreros, guantes, bufandas) 
                                    te ayudará a maximizar el espacio disponible.                                 
                                </li>
                                <br>
                                <li>
                                    <h5>. Coloca las Ropas Según la Frecuencia de Uso</h5>
                                    Las prendas que tu hijo usa con más frecuencia deben estar a la altura de los
                                    ojos o en los primeros niveles del armario, para que sean fáciles de alcanzar.
                                    Las prendas de temporada o las que no se usan tan seguido (como abrigos o ropa
                                    de fiesta) pueden guardarse en los estantes más altos o en cajas en la parte 
                                    inferior del armario.
                                </li>   
                             </ul>
                             <br>
                             <h3>Consejos Adicionales </h3>
                             <ul>
                                <li>
                                    <p>Usa perchas de tamaño adecuado para la ropa de los niños, 
                                        de esta forma evitarás que la ropa se caiga o se estire innecesariamente.</p>
                                </li>
                                <li>
                                    <p>Cuando guardes la ropa de una temporada, asegúrate de que esté 
                                        limpia y libre de manchas. </p>
                                </li>
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Mantener un armario infantil organizado</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img31.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> Con una organización adecuada, el armario infantil no solo se verá más ordenado,
                                sino que también se prolongará la vida útil de la ropa y será más fácil para los
                                niños elegir qué ponerse. Aprovechando al máximo el espacio, manteniendo la ropa
                                organizada por categorías y asegurándose de que las prendas estén en buen estado,
                                crearás un sistema que facilite tanto las tareas de vestirse como el mantenimiento
                                del guardarropa.
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo9.php"><img src="../../MEDIA/seccionArticulos/img2.jpg" id="imgTendencia" alt="">Prendas infalibles en el closet infantil.</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo10.php"><img src="../../MEDIA/seccionArticulos/img4.jpg" id="imgTendencia" alt="">Mantén la ropa en buen estado.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>