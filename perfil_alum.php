<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CONALEP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    </head>
    <header>
        <div class="exam">
            <h1>Examen<h1>
            <a style="float:right" href="login.php"><i class="material-icons">exit_to_app</i></a>
        </div>

    </header>
	<body>
		
	<div class="qbootstrap-loader"></div>
    <div style="padding:0 20%;">

    <h3>Datos generales del alumno</h3>
    <hr>
        <label for="inputName"class="control-label" >Nombre del alumno: </label>
        <input type="text" class="form-control" id="alumno" placeholder="Nombre del alumno" disabled>
        <label for="inputName"class="control-label" >Grupo: </label>
        <input type="text" class="form-control" id="grupo" placeholder="Nombre del alumno" disabled>
        <label for="inputName"class="control-label" >Nombre del alumno: </label>
        <select name="materia" id="materia">
        <option></option>
        <option value="1">Primer materia</option>
        <option value="2">Segunda materia</option>
        </select>
        <hr>
        <p style="color:red;">*Si alguno de los campos es incorrecto, notificalo a tu profesor.</p>

        <div style="text-align:center;">  
		    <button id="comenzar" class="btn btn-primary">COMENZAR CON LA PRUEBA</button>
		</div>

        <div class="modal fade" id="prueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">   
                  <div id="page" style="padding:10% 20%;">
                    <nav class="qbootstrap-nav" role="navigation">
                    <!-- Formulario-->
                                    <div class="form-group">
                                        <label for="inputName"class="control-label" >Nombre del alumno: </label>
                                        <input type="text" class="form-control" id="alumno" placeholder="Nombre del alumno" disabled>
                                    </div>
                                        <div class="form-group">
                                            <label for="inputName" class="control-label">Profesor: </label>
                                            <input type="text" class="form-control" id="profesor" placeholder="Complete Name" disabled>
                                        </div>
                                                                <div class="form-group">
                                            <label for="inputName" class="control-label">Materia: </label>
                                            <input type="text" class="form-control" id="materia" placeholder="Subject-matter" disabled>
                                        </div>

                                        <div class="form-group">
                                                <label for="inputName" class="control-label">Grupo: </label>
                                            <input type="text" class="form-control" id="grupo" placeholder="Subject-matter" disabled>
                                            </div>
                    <div style="text-align:center;">  
                        <a href="examen.php"><button type="submit" class="btn btn-primary">COMENZAR CON LA PRUEBA</button></a>
                    </div>
                    </nav>
                    </div>
                    <!--Fin Formulario-->
                  </div>
                </div>
                </div>
    </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/examen.js"></script>

	</body>
</html>

