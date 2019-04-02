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

    <nav>
        <div class="nav-wrapper #1e88e5 blue darken-1">
            <a href="index.php" class="brand-logo"><img style="height:62px;" src="media/imgs/logoBlanco.png"></a>
            <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="#">Alumnos</a></li>
				<li><a href="deudas.php">Deudas</a></li>
                <li><a href="crear-alumno.php">Crear alumno</a></li>
                <li><a href="balance.php">Balance</a></li>
                <li><a href="pagos.php">Pagos</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
		<li><a href="cursos.php">Cursos</a></li>
		<li><a href="#">Alumnos</a></li>
		<li><a href="deudas.php">Deudas</a></li>
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
				<th>Domicilio</th>
				<th>Dni</th>
				<th>-</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<?php
				while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
				echo '<td>'.$row['nombre'].'</td>';
				echo '<td>'.$row['domicilio'].'</td>';
				echo '<td>'.$row['dni'].'</td>';
				echo '<td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>';
				echo '</tr>';

				echo '<div id="modal1" class="modal">';
				echo '<div class="modal-content">';
								echo 'Nombre: ';
								echo $row['nombre'];
								echo '<br>';
								echo 'Direccion: ';
								echo $row['domicilio'];
								echo '<br>';
								echo 'Localidad: ';
								echo $row['localidad'];
								echo '<br>';
								echo 'Telefono: ';
								echo $row['telefono'];
								echo '<br>';
								echo 'DNI: ';
								echo $row['dni'];
								echo '<br>';
								echo 'Fecha de nacimiento: ';
								echo $row['nacimiento'];
								echo '<br>';
								echo 'Email: ';
								echo $row['email'];
								echo '<br>';
								echo 'Facebook: ';
								echo $row['facebook'];
								echo '<br>';
								echo 'Instagram: ';
								echo $row['instagram'];
								echo '<br>';
								echo 'Ocupacion: ';
								echo $row['ocupacion'];
								echo '<br>';
								echo 'Observacion: ';
								echo $row['observacion'];
								echo '<br>';
								echo 'Inicio de clases: ';
								echo $row['inicio'];
								echo '<br>';
								echo '<br>';
				echo '</div>';
				echo '<div class="modal-footer">';
				echo '	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>';
				echo '</div>';
				echo '</div>';
				}
			?>
		</tr>
		</tbody>
	</table>
	

	<script>
	
		 $(document).ready(function(){
			$('.modal').modal();
		  });

		
        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>