<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inicio de sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="QBOOTSTRAP.COM" />
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
    <link rel="stylesheet" href="css/login.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<header>
    <div>
    <h1>
    BIENVENIDO
    </h1>
    </div>
</header>
<body>
	<div class="sesion">
		<input id="usuario" type="tex" placeholder="USUARIO"><br><br>
		<input id="password" type="password" placeholder="CONTRASEÑA"><br><br>
		<button id="ingresar" onClick="login()" class="btn-success">INGRESAR</button>
	</div>
</body>
<script>
	function login(){
		var usuario =  document.getElementById("usuario").value;
		var password = document.getElementById("password").value;
		console.log(usuario);
	}
</script>
</html>