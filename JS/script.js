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

function modalContacto() {
	document.getElementById("modalContacto").style.display="block";
	document.documentElement.style.overflow="hidden";

	let nombre = document.getElementById("formNombre").value;
	let email = document.getElementById("formCorreo").value;

	let mensaje;

	(function formCheck(){

		if (!document.getElementById("formCorreo").checkValidity() && !document.getElementById("formNombre").checkValidity()){
			mensaje = "Aún no haz ingresado tus datos.";
			document.getElementById("mensajeC").innerHTML = mensaje;
		}

		else if(!document.getElementById("formNombre").checkValidity()){
			mensaje = "No haz ingresado tu Nombre correctamente";
			document.getElementById("mensajeC").innerHTML = mensaje;
		}

		else if (!document.getElementById("formCorreo").checkValidity()){
			mensaje = "Datos Incorrectos<br>Verifica que el correo electrónico este escrito correctamente";
			document.getElementById("mensajeC").innerHTML = mensaje;
		}
		
		else {

			mensaje = nombre + "<br>"+" Muchas gracias por suscribirte!";

			document.getElementById("mensajeC").innerHTML = mensaje;

			//LINEA PARA PODER CERRAR EL MODAL CONTACTO CON EL TABULADOR
			document.getElementById("bottonCerrarMContacto").focus();
		}	

	})();
}

// FUNCION QUE NOS PERMITE CERRAR EL MODAL DEL FORMULARIO
function cerrarModalC(){
	document.getElementById("modalContacto").style.display="none";
	document.documentElement.style.overflow="auto";

	document.getElementById("formNombre").value="";
	document.getElementById("formCorreo").value="";

}

// Iniciar la animación del slideshow
setInterval(imagenSalienteAnim, 5000); // Cambiar imagen cada 5 segundos
