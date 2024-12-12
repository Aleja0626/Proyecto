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
                <h1>Guía Completa de Skincare para los Más Pequeños</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo6.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Cuidado de la Piel Infantil</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img16.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                        El cuidado de la piel infantil es una de las preocupaciones más importantes para los padres, 
                        ya que la piel de los niños es mucho más delicada y sensible que la de los adultos. Desde el 
                        nacimiento, la piel de un bebé es muy vulnerable a factores externos, como el clima, los productos
                        de higiene y las irritaciones. Por ello, es fundamental conocer los mejores productos y prácticas 
                        para mantenerla sana, hidratada y protegida. En este artículo, te ofrecemos una guía completa sobre
                        el skincare infantil, para que puedas brindarle el mejor cuidado a la piel de tu hijo.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Por Qué la Piel Infantil Necesita un Cuidado Especial</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Más delgada y permeable</h5>
                                    La epidermis (capa superficial de la piel) de los niños es más delgada que la de los adultos, lo que facilita la penetración de irritantes y patógenos.                                 
                                </li>
                                <br>
                                <li>
                                    <h5>Menos barrera protectora</h5>
                                    
                                    El manto ácido de la piel, que protege contra bacterias y contaminantes, está menos desarrollado en los niños pequeños, por lo que su piel es más susceptible a infecciones y alergias.
                                </li>
                                <br>
                                <li>
                                    <h5>Mayor sensibilidad</h5>
                                    La piel infantil es más sensible a los cambios de temperatura, la exposición al sol, y las sustancias químicas de los productos cosméticos o de higiene.
                                    Por todo esto, es crucial elegir productos adecuados para su piel y seguir rutinas de cuidado que aseguren su salud y bienestar.
                             </ul>
                             <br>
                             <h3>Consejos Adicionales </h3>
                             <ul>
                                <li>
                                    <p>Evitar el Uso de Productos con Fragancias Fuertes</p>
                                </li>
                                <li>
                                    <p>Evitar la Exposición Prolongada al Sol</p>
                                </li>
                                <li>
                                   <p>Mantener la Piel Hidratada en Climas Secos</p> 
                                </li>
                                <li>
                                   <p>Ropa Adecuada para la Piel Infantil</p> 
                                </li>
                                <li>
                                   <p>Revisar la Piel Regularmente</p> 
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
						<img src="../../MEDIA/seccionArticulos/img29.jpg" alt="">
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
                    <a href="articulo7.php"><img src="../../MEDIA/seccionArticulos/img12.jpg" id="imgTendencia" alt="">La Moda Infantil de Segunda Mano</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo8.php"><img src="../../MEDIA/seccionArticulos/img11.jpg" id="imgTendencia" alt="">Organiza el armario infantil.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>