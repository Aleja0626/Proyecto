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
                <h1>Prendas infalibles: Todo niño necesita en su Armario</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo9.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Comodidad en los niños</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img19.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    Cuando se trata de moda infantil, lo más importante es combinar estilo, comodidad y funcionalidad.
                     Los niños necesitan ropa que les permita moverse libremente, jugar y disfrutar de sus actividades diarias.
                      Sin embargo, también es crucial que esas prendas sean fáciles de combinar y resistentes al desgaste. 
                      <br>
                      Recuerda que, además de la estética, es importante priorizar la comodidad y la durabilidad, ya que los niños 
                      están en constante movimiento y su ropa debe resistir su energía.
                      A continuación, te presentamos una lista de prendas infalibles que todo niño debería tener en su armario.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Listado de prendas infalibles</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Camisetas Básicas de Algodón</h5>
                                    . Son cómodas, transpirables y fáciles de lavar. Opta por colores neutros como blanco, gris y azul marino,
                                     ya que combinan con casi todo. Además, las camisetas con estampados divertidos de personajes o temas que 
                                     les gusten también son una excelente opción para los días de juegos                                
                                </li>
                                <br>
                                <li>
                                    <h5>Pantalones Elásticos o Jeans Resistentes</h5>
                                    
                                    Los pantalones deben ser prácticos y cómodos para que los niños puedan moverse con libertad.
                                     Los pantalones elásticos o con cintura ajustable son ideales para niños de todas las edades,
                                      ya que ofrecen comodidad y se ajustan a su crecimiento                                
                                </li>
                                <br>
                                <li>
                                    <h5>Chaqueta o Suéter Agradable</h5>
                                    son prendas esenciales en el armario infantil. No solo brindan abrigo cuando el clima se enfría, 
                                    sino que también aportan estilo a cualquier conjunto. Los suéteres con diseños divertidos o estampados
                                    son perfectos para niños más pequeños, mientras que una chaqueta impermeable es ideal para los días 
                                    lluviosos.
                                </li>   
                             </ul>
                             <br>
                             <h3>Consejos adicionales</h3>
                             <ul>
                                <li>
                                    <p>Las zapatillas de velcro son ideales, les permiten ponerse y quitarse el calzado sin ayuda</p>
                                </li>
                                <li>
                                    <p>Pijamas de Algodón son esenciales para garantizar que los niños puedan descansar.
                                         </p>
                                </li>
                                <li>
                                   <p>Los sombreros o gorras con viseras son especialmente útiles para los días
                                     soleados</p> 
                                </li>
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">La piel infantil requiere atención</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img32.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> El cuidado de la piel infantil requiere atención, paciencia y la elección adecuada de productos.
                                Asegurarse de usar productos suaves, naturales y formulados específicamente para la piel sensible
                                de los niños es fundamental para mantener su dermis sana, hidratada y protegida. Al seguir una 
                                rutina de skincare diaria adaptada a las necesidades de los más pequeños, se puede minimizar el
                                riesgo de irritaciones y alergias, y asegurar que la piel de los niños se mantenga suave, 
                                saludable y bien cuidada durante su crecimiento.
                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo10.php"><img src="../../MEDIA/seccionArticulos/img5.jpg" id="imgTendencia" alt="">Mantén la ropa en buen estado.</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo11.php"><img src="../../MEDIA/seccionArticulos/img7.jpg" id="imgTendencia" alt="">Ropa infantil sostenible.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>