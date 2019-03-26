<?php
	 require_once 'config.php';

	 $queryResult = $pdo->query("SELECT * FROM cursos");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Administracion</title>
</head>
<body>
    <!--Navbar-->

    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><img style="height:62px;" src="media/imgs/logoNegro.png"></a>
            <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Cursos</a></li>
                <li><a href="alumnos.php">Alumnos</a></li>
				<li><a href="deudas.php">Deudas</a></li>
                <li><a href="crear-alumno.php">Crear alumno</a></li>
                <li><a href="balance.php">Balance</a></li>
                <li><a href="pagos.php">Pagos</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
		<li><a href="#">Cursos</a></li>
        <li><a href="alumnos.php">Alumnos</a></li>
		<li><a href="deudas.php">Deudas</a></li>
        <li><a href="crear-alumno.php">Crear alumno</a></li>
        <li><a href="balance.php">Balance</a></li>
        <li><a href="pagos.php">Pagos</a></li>
        <li><a href="#">Cerrar sesión</a></li>
    </ul>

	<!--Buttons-->
	<div class="row padding-top-5">
		<div class="col s6 offset-s3 l2 offset-l5">
			<a class="waves-effect waves-light btn-large modal-trigger" href="#modal2">Crear nuevo curso</a>
		</div>
	</div>

	<!--new curse-->
<div id="modal2" class="modal">
	<div class="modal-content">
		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12 l4">
						<input placeholder="Placeholder" id="nombreCurso" type="text" class="validate">
						<label for="nombreCurso">Nombre curso</label>
					</div>
					<div class="input-field col s12 l8">
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Lun</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Mar</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Mier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Jue</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Vier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input type="checkbox" />
								<span>Sab</span>
								</label>
							</p>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
						<label for="textarea1">Textarea</label>
					</div>
				</div>
			</form>
		</div>
	</div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a><a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
  </div>


	<!--tabla-->
	<table class="centered">
		<thead>
			<tr>
				<th>Curso</th>
				<th>Horario</th>
				<th>Cupos</th>
				<th>-</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<?php
				while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
				echo '<td>'.$row['curso'].'</td>';
				echo '<td>'.$row['horario'].'</td>';
				echo '<td>'.$row['alumnos'].'</td>';
				echo '<td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">More info</a>';
				echo '</tr>';

				echo '<div id="modal1" class="modal">';
				echo '<div class="modal-content">';
				

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