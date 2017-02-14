<html>
<head>
	<base href="/">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>AngularJS</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/estilos.css">

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/angular.js"></script>
	<!-- APP JS -->
	<script src="app.js"></script>

	<script src="js/dist/mask.js"></script>
	<script src="js/dist/angular-locale_pt-br.js"></script>
	<script src="js/dist/angular-route.js"></script>
	<script src="js/dist/angular-scroll.js"></script>
	<!-- CONTROLLERS -->
	<script src="controllers/inicioController.js"></script>
	<script src="controllers/listaTelefonicaController.js"></script>
	<script src="services/listaTelefonicaService.js"></script>


</head>
<body ng-app="angularJS">
	<div ng-view></div>
</body>
</html>
