<html>
<head>
	<base href="/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>AngularJS</title>

	<!-- CSS -->
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/estilos.css">

	<!-- CORE JS -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/angular.js"></script>
	<!-- APP JS -->
	<script src="app.js"></script>
	
	<!-- COMPLEMENTOS ANGULAR -->
	<script src="js/dist/mask.js"></script>
	<script src="js/dist/angular-locale_pt-br.js"></script>
	<script src="js/dist/angular-route.js"></script>
	<script src="js/dist/angular-scroll.js"></script>


	<!-- CONTROLLERS -->
	<script src="controllers/inicioController.js"></script>
	<script src="controllers/listaTelefonicaController.js"></script>

	<!-- SERVICES -->
	<script src="services/listaTelefonicaService.js"></script>


</head>
<body ng-app="angularJS">
	<nav class="navbar navbar-primary bg-primary">
		<ul class="nav justify-content-center">
		  	<li class="nav-item">
		    	<a class="nav-link active" href="/">AngularJS</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link" href="/lista">Lista Telefônica</a>
		  	</li>
		</ul>
	</nav>

	<div ng-view></div>
</body>
</html>
