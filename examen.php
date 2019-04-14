<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EXAMEN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
    <!-- Examen stilos -->
    <link rel="stylesheet" href="css/examen.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

    </head>
    
    <header>
        <div class="exam">
            <h1>Examen<h1>
        </div>
    </header>

    <body>
        <div class="instrucciones">Lee con atención cada una de las preguntas y escoge la opción que consideres adecuada. 
            Para resolver el examen tienes un tiempo máximo de 50 minutos. 
            No se requiere ningún instrumento (formulario, calculadora o tabla periódica).
        </div>
		<center><label id= "TiempoExamen">Tiempo de Exámen</label></center>
        <center><label id = "tiempo">50:00</label></center>

        <div class="preguntas">
        <form role="form"  onchange="javascript:detector()">
				<h4>1.- Son los sistemas de medidas que se usan comúnmente en las herramientas.</h4>
				<div  id="1">
					<label class="radio-inline">
				    <input name="a" type="radio" id="primer" value="Sistema decimal e ingles" required>
				    	a) Sistema decimal e inglés.
				    </label>
				    	<label class="radio-inline">
			  		<input name= "a" type="radio" id="primer" value="Sistema ingles y metrico" required>
			  			b) Sistema inglés y métrico.
			  		</label>
			  		<label class="radio-inline">
			  		<input name="a" type="radio" id="primer" value="Sistema vigesimal y decimal" required>
			  			c) Sistema vigesimal y decimal.
			  		</label>
				</div>				

				<!-- -->
				<h4>2.- Son las medidas de matracas, manerales, dados, extensiones y accesorios.</h4>
				<div id="2">
					<label class="radio-inline">
				    <input type="radio" id="segunda" name ="b" value="5/8, 13/16, 1/4 y 3/8" required>
				    	a) 5/8, 13/16, 1/4 y 3/8.  
						<br>
			  		<input type="radio" id="segunda" name ="b" value="1/5, 3/8, 10/16 y 7/8" required>
			  			b) 1/5, 3/8, 10/16 y 7/8.
			  			<br>
			  			<input type="radio" id="segunda" name ="b" value="1/4, 3/8, 1/2 y 3/4" required>
						  c) 1/4, 3/8, 1/2 y 3/4.
					</label>
				</div>
				<!-- -->
				<h4>3.- Son las herramientas para quitar y poner las bujías de 5/8 de un vehículo. </h4>
				<div id="3">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Dado 5/8 para bujías, matraca 3/8 ,extensión larga 3/8 y calibrador de bujías.   
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b)  Dado 5/8,matraca 1/2, extensión corta 1/2 y lainas.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Ninguna de las opciones.
				</div>
				<!-- -->
				<h4>4.- Son las herramientas para desarmar y armar una cabeza de motor con tornillos estándar.</h4>
				<div  id="4">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Dados estándar y accesorios, torquimetro, juego de desarmadores, llaves allen, pinzas y martillos.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) dados milimétricos, pinzas mecánicas y matracas.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Dados y accesorios. 
				</div>
				<!-- -->
				<h4>5.- Herramienta de medición que realiza mediciones de exteriores, interiores profundidad.</h4>
				<div  id="5">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Micrómetro.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) Flexómetro.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Vernier o pie de rey.
				</div>
				<!-- -->
				<h4>6.- Forma y color de los señalamientos de prohibición.</h4>
				<div  id="6">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>7.- Forma y color de los señalamientos obligación.</h4>
				<div  id="7">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>8.- Forma y color de los señalamientos advertencia.</h4>
				<div  id="8">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Triangulo, amarillo y negro.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) Circulo y línea en diagonal, rojo y blanco.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>9.- Forma y color de los señalamientos de vías de evacuación.</h4>
				<div  id="9">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Cuadrado o rectángulo, verde y blanco.
				    	<br>
			  		<input type="checkbox" id="checkbox2" value="option2">
			  			b) Cuadrado o rectángulo, rojo.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Círculo, azul y blanco.
				</div>
				<!-- -->
				<h4>10.- Forma y color de los señalamientos contra incendios.</h4>
				<div  id="10">
				    <input type="checkbox" id="checkbox1" value="option1">
				    	a) Cuadrado o rectángulo, verde y blanco.
				    	<br>
			  		<input type="checkbox"  id="checkbox2" value="option2">
			  			b) Cuadrado o rectángulo, rojo.
			  			<br>
			  			<input type="checkbox" id="checkbox3" value="option3">
			  			c) Círculo, azul y blanco.
				</div>
				<br>
				<!-- Boton para terminar examen-->
				<center><a href="index.html"><button type="button" class="btn btn-success" id="fin">Terminar.</button></a></center>	
			</form>	
						
</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    </body>

    </html>


    <!--Contador-->
	<script type="text/javascript">
	//
	//Respuestas seleccionadas
	function detector() {
		//Respuesta1
					var formulario = document.forms[0];
					for (var i = 0; i < formulario.a.length; i++) {
						if (formulario.primer[i].checked) {
							var respuesta1=formulario.primer[i].value+'.';
						//break;
						//alert('el marcado es: ' + formulario.primer[i].value + '.')
					   	//console.log('el marcado es: ' + formulario.primer[i].value + '.');
						}
						if (formulario.segunda[i].checked) {
							var respuesta2=formulario.segunda[i].value+'.';
						//break;
						}
					}
					console.log("R1"+respuesta1);
					console.log("R2"+respuesta2);
					}
					
					//
					//
					// Temporizador
		function redireccionar(){
			window.location.href="Segundoexamen.html";
			alert("Haz llegado al tiempo límite.");
		}

			var salida = document.getElementById("tiempo"),
				minutos = 50,
				segundos = 0,
				intervalo = setInterval(function(){
					if (--segundos < 0){
					    segundos = 59;
					    minutos--;
					    setTimeout("redireccionar()",3000000); //50 min - 3,000,000 ms

					}
					      
					if (!minutos && !segundos)
					    clearInterval(intervalo);
					    salida.innerHTML = minutos + ":" + (segundos < 10 ? "0" + segundos : segundos);
					}, 1000);
    </script>
       <!-- fin del contador -->