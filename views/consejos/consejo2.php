<?php
define('BASE_URL', 'http://localhost/Proyecto/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejos</title>
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
                <h1>Aprende de Colorimetria</h1>
                <img src="../../MEDIA/consejos/img5.jpg" alt="">
            </div>
<!--SEGUNDA SECCION --> 
<!--  AQUI EMPIEZA EL ARTICULO  -->	 

        <section class="seccionConsejoA">
            <h2 id="tituloTendencia">Cómo afectan los colores</h2>
            <div class="contenedorTendencia">
                <div class="columTendencia">
                    <img src="../../MEDIA/consejos/img6.jpg" id="imgTendencia" alt="">
                </div>
                <div class="textoTendencia">
                    <p>
                    Cada persona tiene un tono de piel único que puede ser clasificado generalmente en tres categorías: cálido, frío o neutro. Conocer tu tono de piel te ayudará a elegir los colores que te favorecen y que resaltan tu aspecto. Aquí te doy algunos pasos para empezar:"
                    Usa los colores según la temporada de colorimetría: La colorimetría también tiene que ver con las estaciones. Se agrupan en:
                    </p>
                     <ul>
                     <br>
                        <li>
                            <h5>Primavera</h5>
                            Colores frescos y claros como el coral, melón, aqua, amarillo pastel, verde menta.
                        </li>
                        <br>
                        <li>
                            <h5> Verano</h5>
                            Colores suaves y apagados como el lavanda, azul pálido, rosa claro, gris perla.
                        </li>
                        <br>
                        <li>
                            <h5>Otoño</h5>
                            Colores cálidos y terrosos como el burdeos, marrón, mostaza, oliva, cobre.
                        </li>
                        <br>
                        <li>
                            <h5>Invierno</h5>
                            Colores intensos y contrastantes como el blanco puro, negro, azul marino, rojo cereza, verde esmeralda.
                        </li>
                     </ul>
                    </p>   
                </div>
            </div>
        </section>
<!-- TERCERA SECCION  -->        
        <section class="seccionConsejoB">
			
			<h2 id="consejos" class="titSeccionCons">Combinaciones de colores</h2>
				
				<div id="contenedorConsejo">

					<div class="txtConsejo">
						<p>
                        "Aprender cómo combinar colores es esencial para crear armonía. Aquí hay algunas recomendaciones:"
                        </p>
                        <ul>
                        <li>
                            Colores complementarios: Como el rojo y verde o el azul y naranja, crean un contraste llamativo. Es útil para ocasiones especiales donde quieras destacar.

                        </li>
                        <li>
                            Colores análogos: Usar colores que estén junto en el círculo cromático (como el rosa, el morado y el azul) da como resultado combinaciones suaves y elegantes.

                        </li>
                        <li>
                            Colores neutros: Los colores neutros como el blanco, negro, gris, y beige son esenciales en cualquier guardarropa y combinan bien con casi cualquier color.

                        </li>
                        <li>
                            Consejo clave: Siempre ten en cuenta el impacto psicológico del color. Por ejemplo, el rojo transmite energía y poder, mientras que el azul genera una sensación de calma y profesionalismo. Usa el color de forma estratégica según lo que desees expresar con tu estilo.

                        </li>
                    </ul>
	
				</div>
			</div>	
		</section>

     
    <!-- CUARTA SECCION -->
         
        <section class="seccionConsejoA">	
            <h2 id="tituloTendencia">Quizás te interese:</h2>
            <div class="contArtExtras">
                <div class="columArtExtras">
                    <a href="consejo1.php">
                    <img src="../../MEDIA/consejos/img7.jpg" id="imgTendencia" alt="">Moda infantil del 2024
                    </a>
                </div>
                <div class="columArtExtras">
                    <a href="consejo3.php">
                    <img src="../../MEDIA/consejos/img8.jpg" id="imgTendencia" alt=""> Evento BabyKid Spain + FIMI 2025
                    </a>
                </div>
            </div>
            <a id="verArticulo" href= "./articulos.php" class="button">Página Principal </a>
        </section> 
    <footer>
    <?php include '../includes/footer.php'; ?>
    </footer>
</body>
</html>