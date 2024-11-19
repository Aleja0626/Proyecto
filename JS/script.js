// REALIZACION DEL LLAMADO A HACER EL SLIDESHOW DEL HEROIMAGE 

let bgcont =0;
function heroSlideShow(){

	let listImgHero = [

		"url('MEDIA/Hero0.png')",
		"url('MEDIA/Hero1.jpeg')",
		"url('MEDIA/Hero2.jpg')",
		"url('MEDIA/Hero3.jpeg')",
		"url('MEDIA/Hero4.jpeg')"

		];

	bgcont++;

	if (bgcont == listImgHero.length) {

		bgcont =0;
	}

	document.getElementById("heroImage").style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3))," +  listImgHero [bgcont];
}

// Start the hero slideshow
setInterval(heroSlideShow, 5000); // Change image every 5 seconds

// CODIGO SLIDESHOW  CON ANIMACION DEL HERO IMAGE

let contAnim =0;
function imagenSalienteAnim() {

	let listImgHeroAnim = document.getElementsByClassName("fondoHero");

	contAnim++;
	let contMain = contAnim-1;

	if (contAnim == listImgHeroAnim.length){

		contAnim = 0;
	}

	if (contMain < 0){

		contMain = listImgHeroAnim.length-1;
	}

	for (let i=0; i<listImgHeroAnim.length; i++) {

		listImgHeroAnim[i].classList.remove("imagenEntrante");
		listImgHeroAnim[i].classList.remove("imagenSaliente");
		listImgHeroAnim[i].classList.remove("imagenSuelta");

		if(i==contAnim){

			listImgHeroAnim[i].classList.add("imagenEntrante");
		}

		else if(i== contMain){
			listImgHeroAnim[i].classList.add("imagenSaliente");
		}

		else {
			listImgHeroAnim[i].classList.add("imagenSuelta");
		}
	}	

}

// MODAL PARA ENVIAR LA CONFIRMACION DEL FORMULARIO

// Mostrar el modal después de la recarga si hay un mensaje de éxito o error
window.onload = function() {
    var success = new URLSearchParams(window.location.search).get('success');
    var error = new URLSearchParams(window.location.search).get('error');
    
    // Si se obtuvo el parámetro 'success=1', mostrar el modal con éxito
    if (success === "1") {
        document.getElementById("modalContacto").style.display = "block";
        document.documentElement.style.overflow = "hidden";  // Deshabilitar el desplazamiento
    }
    
    // Si se obtuvo el parámetro 'error=1', mostrar el modal con error
    if (error === "1") {
        document.getElementById("modalContacto").style.display = "block";
        document.documentElement.style.overflow = "hidden";  // Deshabilitar el desplazamiento
    }
};

// Función para cerrar el modal
function cerrarModal() {
    document.getElementById("modalContacto").style.display = "none";
    document.documentElement.style.overflow = "auto";  // Habilitar el desplazamiento
}

// Iniciar la animación del slideshow
setInterval(imagenSalienteAnim, 5000); // Cambiar imagen cada 5 segundos
