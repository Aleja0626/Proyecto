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
                <h1>La Moda Infantil de Segunda Mano</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo7.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Ventajas y Consejos para Comprar Ropa Usada de Calidad</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img17.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    La moda infantil de segunda mano es una opción cada vez más popular entre padres
                    conscientes de la sostenibilidad y el ahorro. Los niños crecen rápidamente y, a
                    menudo, la ropa apenas tiene uso antes de ser desechada o almacenada. La compra
                    de ropa de segunda mano no solo permite ahorrar dinero, sino que también contribuye
                    a la reducción de desechos y el impacto ambiental de la industria textil. Aquí te 
                    presentamos algunas ventajas y consejos para incorporar la moda de segunda mano en 
                    el armario de tus hijos.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Ventajas de Comprar Ropa Infantil de Segunda Mano</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <p>Una de las principales razones por las que los padres optan por la ropa de segunda
                                    mano es el ahorro significativo que pueden obtener. Las prendas de marcas 
                                    conocidas, a menudo con una vida útil de apenas unos meses, pueden encontrarse a 
                                    precios mucho más bajos en tiendas de segunda mano o en línea.</p>
                                    <br>
                                <li>
                                    <h5>Ropa de Alta Calidad a Precios Accesibles</h5>
                                    Muchas veces, la ropa de segunda mano está en excelentes condiciones, e incluso
                                     hay prendas que no se han usado casi nada. Comprar ropa de marcas reconocidas o de 
                                     alta calidad por un precio reducido puede ser una excelente inversión. Los niños, 
                                     por lo general, no usan la ropa por mucho tiempo, lo que significa que es probable 
                                     que encuentres prendas prácticamente nuevas.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Menor Impacto Ambiental</h5>
                                    
                                    La industria de la moda es una de las más contaminantes del mundo. Al elegir ropa de
                                     segunda mano, estás ayudando a reducir los desechos textiles, disminuyendo la demanda
                                      de ropa nueva y, en consecuencia, la producción y el consumo de recursos naturales.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Dato</h5>
                                    De acuerdo con un informe de la ONU, la industria de la moda representa aproximadamente el 10%
                                    de las emisiones globales de carbono. Comprar ropa de segunda mano es una manera de reducir tu
                                    huella de carbono.
                                </li>
                            </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Consejos para Comprar Ropa Infantil de Segunda Mano</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img30.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <h4>Revisa Bien las Condiciones de las Prendas</h4>
                            <li> Aunque la ropa de segunda mano puede estar en excelentes condiciones, es importante inspeccionar 
                                las prendas antes de comprarlas. Asegúrate de que no tengan manchas, roturas o daños importantes,
                                como costuras abiertas o botones faltantes.
                            </li>
                            <br>
                            <h4>Lava Siempre la Ropa Antes de Usarla</h4>
                            <li> Esto no solo asegura que la prenda esté completamente limpia, sino que también elimina cualquier
                                 residuo de productos químicos o bacterias que puedan haber quedado en la prenda durante su 
                                 almacenamiento o transporte.
                            </li>
                            
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo8.php"><img src="../../MEDIA/seccionArticulos/img1.jpg" id="imgTendencia" alt="">Organiza el armario de los niños</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo9.php"><img src="../../MEDIA/seccionArticulos/img3.jpg" id="imgTendencia" alt="">Prendas infalibles en el closet infantil.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>