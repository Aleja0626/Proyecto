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
                <h1>Mantén la Ropa de los Niños en Buen Estado Durante el Año</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo10.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Algunos cuidados adecuados</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img20.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    La ropa de los niños tiende a desgastarse rápidamente debido a su constante actividad,
                    las manchas y el lavado frecuente. Sin embargo, con algunos cuidados adecuados, 
                    puedes asegurarte de que las prendas se mantengan en buen estado durante todo el año,
                    alargando su vida útil y ahorrando dinero en el proceso. Aquí te dejamos algunos consejos
                    para mantener la ropa de los niños en perfecto estado
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Tips para mantener la ropa de los niños en buen estado</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Lavar las Ropas Correctamente</h5>
                                    Asegúrate de leer siempre las etiquetas de las prendas para conocer las instrucciones
                                     específicas de lavado                                
                                    </li>
                                <br>
                                <li>
                                    <h5>Evita la secadora</h5>
                                    
                                    Aunque la secadora puede ser tentadora por su rapidez, el calor extremo puede debilitar las fibras de la ropa y hacer que se encojan o pierdan forma. Para mantener la ropa en buen estado, es mejor: 
                                        - Secar al aire: Siempre que sea posible, seca la ropa de los niños al aire, especialmente las prendas más delicadas o aquellas que no se deben encoger.
                                        - Usar la secadora con moderación: Si usas la secadora, selecciona un ciclo de baja temperatura y evita secar las prendas por completo. Sácalas cuando estén ligeramente húmedas y déjalas secar al aire.
                                        - Evitar el sobrecalentamiento: No pongas demasiada ropa a la vez en la secadora, ya que esto puede generar fricción entre las prendas, lo que puede desgastarlas más rápido.
                               </li>
                                <br>
                                <li>
                                    <h5>Tratar las Manchas de Forma Rápida</h5>
                                    Los niños son expertos en ensuciarse, por lo que las manchas son una parte común del día a día.
                                    Cuanto más rápido trates la mancha, más fácil será quitarla. A menudo, los remedios caseros como el vinagre blanco, el bicarbonato de sodio o el limón pueden ser eficaces para eliminar 
                                    manchas de comida, tierra o hierba sin dañar la ropa.
                                    Frotar la mancha con fuerza puede dañar las fibras. En lugar de eso, dale golpecitos suaves con un paño 
                                    limpio o usa un cepillo suave.
                             </ul>
                             
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Inspeccionar la Ropa Regularmente</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img33.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> Revisa las prendas con regularidad para asegurarte de que no haya roturas, botones sueltos o 
                                cualquier otro daño que pueda empeorar con el tiempo. Arreglar los pequeños daños inmediatamente
                                 puede evitar que se conviertan en problemas más grandes, como roturas de costura o prendas irrecuperables.
                                    <br>
                                    <br>
                                    <h5>Refuerza las costuras: </h5> Si notas que una prenda está empezando a desgastarse en las costuras o los elásticos están flojos,
                                        refuerza esas áreas con puntos extras de costura antes de que empeoren.

                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo11.php"><img src="../../MEDIA/seccionArticulos/img6.jpg" id="imgTendencia" alt="">Ropa infantil sostenible</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo12.php"><img src="../../MEDIA/seccionArticulos/img8.jpg" id="imgTendencia" alt="">Tendencias en calzado infantil.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>