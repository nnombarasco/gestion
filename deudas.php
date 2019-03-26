<?php
	 require_once 'config.php';

	 $queryResult = $pdo->query("SELECT * FROM alumnos");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="css/styles.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Administracion</title>
</head>
<body>
    <!--Navbar-->

    <nav class="blue darken-1">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><img style="height:62px;" src="media/imgs/logoNegro.png"></a>
            <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="alumnos.php">Alumnos</a></li>
				<li><a href="#">Deudas</a></li>
                <li><a href="crear-alumno.php">Crear alumno</a></li>
                <li><a href="balance.php">Balance</a></li>
                <li><a href="pagos.php">Pagos</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
		<li><a href="cursos.php">Cursos</a></li>
		<li><a href="alumnos.php">Alumnos</a></li>
		<li><a href="#">Deudas</a></li>
        <li><a href="crear-alumno.php">Crear alumno</a></li>
        <li><a href="balance.php">Balance</a></li>
        <li><a href="pagos.php">Pagos</a></li>
        <li><a href="#">Cerrar sesión</a></li>
    </ul>

	<!--tabla-->
	<table class="centered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Meses atrasados</th>
				<th>-</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	


    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>