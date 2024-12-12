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
                <h1>Ropa Infantil y Sostenibilidad:Escoger Prendas Ecológicas</h1>
                <img src="../../MEDIA/seccionArticulos/pArticulo11.jpg" alt="">
            </div>

<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="articulosC">
            <h2 id="tituloTendencia">Cuidado de la Piel Infantil</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/seccionArticulos/img21.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    La moda sostenible está ganando cada vez más atención, y es importante que los padres se 
                    informen sobre cómo elegir ropa ecológica para sus hijos. La industria textil es una de las
                     más contaminantes del mundo, por lo que elegir prendas sostenibles no solo beneficia al medio
                      ambiente, sino que también puede ser una opción más saludable para la piel de los niños. 
                      Aquí te ofrecemos algunos consejos sobre cómo elegir ropa infantil ecológica y sostenible.
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="articulosD">
			
			<h2 id="consejos" class="titSeccionCons">Opta por Materiales Orgánicos</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
                            <ul>
                                <li>
                                    <h5>Algodón orgánico:</h5>
                                    l algodón orgánico es uno de los materiales más populares para la ropa infantil ecológica. 
                                    Se cultiva sin químicos y es mucho más suave que el algodón convencional.
                                     Además, tiene menos impacto en el medio ambiente.
                                </li>
                                <br>
                                <li>
                                    <h5>Lino orgánico:</h5>
                                    
                                    El lino es una opción ecológica ideal para climas cálidos, ya que es un material ligero, transpirable y biodegradable.
                                     Además, el lino requiere menos agua que el algodón convencional para su cultivo.                                
                                </li>
                                <br>
                                <li>
                                    <h5>Bambú:</h5>
                                    El bambú es otra opción sostenible que se utiliza para la fabricación de ropa infantil. 
                                    Es naturalmente hipoalergénico y antibacteriano, lo que lo hace ideal para la piel sensible de los niños.
                                     Además, el bambú crece rápidamente y no requiere el uso de pesticidas.
                             </ul>
                             <br>
                             <h3>Revisa las Certificaciones Ecológicas</h3>
                             <ul>
                                <li>
                                    <p>GOTS (Global Organic Textile Standard)</p>
                                </li>
                                <li>
                                    <p>OEKO-TEX Standard 100</p>
                                </li>
                                <li>
                                   <p>Fair Trade (Comercio Justo)</p> 
                                </li>
                                <li>
                                   <p>Evita los Materiales Sintéticos</p> 
                                </li>
                                <li>
                                   <p>Considera la Durabilidad de la Ropa</p> 
                                </li>
                             </ul>
					</div>
				</div>	
		</section>
<!--CUARTA SECCION --> 
        <section class="articulosC">
			
			<h2 class="titSeccionCons">Ropa de Segunda Mano o Reciclada</h2>
				
				<div id="contenedorConsejo">

					<div class="imgConsejo">
						<img src="../../MEDIA/seccionArticulos/img35.jpg" alt="">
					</div>

					<div class="txtConsejo">
						<ul>
                            <p> Una de las formas más sostenibles de vestir a tus hijos es optar por ropa de segunda mano. Las tiendas de 
                                segunda mano y los mercados de ropa vintage son una excelente opción para encontrar ropa infantil de buena
                                 calidad que ya no se fabrica, lo que reduce el impacto ambiental. Además, la ropa usada a menudo está 
                                 en excelentes condiciones y ha sido lavada varias veces, lo que la hace aún más suave.Otra opción es buscar marcas
                                  que utilicen materiales reciclados para confeccionar sus prendas, como el poliéster reciclado o el nylon
                                   reciclado. Al elegir ropa reciclada, se reduce la cantidad de desechos textiles que terminan en los 
                                   vertederos.

                            </p>
                            
					</div>
				</div>	
				
		</section>
     
    <!-- QUINTA SECCION -->
         
        <section class="articulosD">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="articulo12.php"><img src="../../MEDIA/seccionArticulos/img9.jpg" id="imgTendencia" alt="">Tendencias en calzado infantil</a>
                </div>
                <div class="columArtExtras">
                    <a href="articulo1.php"><img src="../../MEDIA/seccionArticulos/img11.jpg" id="imgTendencia" alt="">Ropa para fiesta y ocasiones especiales.</a>
                </div>
            </div>
            <a class="verArticuloD" href= "./articulos.php">Ver todos los Artículos</a>
        </section>
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>