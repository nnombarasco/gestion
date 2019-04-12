<?php
	 require_once 'config.php';

	 $queryResult = $pdo->query("SELECT * FROM cursos");

		if(isset($_POST['send'])){
			$nombre = $_POST['nombreCurso'];
			$dia1 = $_POST['dia1'];
			$desde1 = $_POST['desde1'];
			$hasta1 = $_POST['hasta1'];
			$dia2 = $_POST['dia2'];
			$desde2 = $_POST['desde2'];
			$hasta2 = $_POST['hasta2'];
			$detalle = $_POST['detalle'];
		
			$sql = "INSERT INTO cursos(nombreCurso, dia1, desde1, hasta1, dia2, desde2, hasta2, detalle) 
			VALUES(:nombreCurso, :dia1, :desde1, :hasta1, :dia2, :desde2, :hasta2, :detalle)";
			$query = $pdo->prepare($sql);

			$result = $query->execute([
			'nombreCurso' => $nombre,
			'dia1' => $dia1,
			'desde1' => $desde1,
			'hasta1' => $hasta1,
			'dia2' => $dia2,
			'desde2' => $desde2,
			'hasta2' => $hasta2,
			'detalle' => $detalle
			]);
		
		}


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
        <div class="nav-wrapper #1e88e5 blue darken-1">
            <a href="index.php" class="brand-logo"><img style="height:62px;" src="media/imgs/logoBlanco.png"></a>
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
			<form action="cursos.php" method="post" class="col s12">
				<div class="row">
					<div class="input-field col s12 offset-l4 l4">
						<input id="nombreCurso" name="nombreCurso" type="text" class="validate">
						<label for="nombreCurso">Nombre curso</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l8">
						<div class="col s6 l2">
							<p>
								<label>
								<input name="dia1" type="radio" value="lunes"/>
								<span>Lun</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label>
								<input name="dia1" type="radio" value="martes"/>
								<span>Mar</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mier1">
								<input name="dia1" id="mier1" type="radio" />
								<span>Mier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="jue1">
								<input name="dia1" id="jue1" type="radio" />
								<span>Jue</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="vier1">
								<input name="dia1" id="vier1" type="radio" />
								<span>Vier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="sab1">
								<input name="dia1" id="sab1" type="radio" />
								<span>Sab</span>
								</label>
							</p>
						</div>
					</div>
					<div class="col s6 l2">
						<label for="desde1">Desde</label>
						<input name="desde1" id="desde1" type="text" class="timepicker">
					</div>	
					<div class="col s6 l2">
						<label id="hasta1">Hasta</label>
						<input name="hasta1" id="hasta1" type="text" class="timepicker">
					</div>	
				</div>
				<div class="row">
					<div class="input-field col s12 l8">
						<div class="col s6 l2">
							<p>
								<label for="lun2">
								<input name="dia2" id="lun2" type="radio" />
								<span>Lun</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mar2">
								<input name="dia2" id="mar2" type="radio" />
								<span>Mar</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mier2">
								<input name="dia2" id="mier2" type="radio" />
								<span>Mier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="jue2">
								<input name="dia2" id="jue2" type="radio" />
								<span>Jue</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="vier2">
								<input name="dia2" id="vier2" type="radio" />
								<span>Vier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="sab2">
								<input name="dia2" id="sab2" type="radio" />
								<span>Sab</span>
								</label>
							</p>
						</div>
					</div>
					<div class="col s6 l2">
						<label for="desde2">Desde</label>
						<input name="desde2" id="desde2" type="text" class="timepicker">
					</div>	
					<div class="col s6 l2">
						<label for="hasta2">Hasta</label>
						<input name="hasta2" id="hasta2" type="text" class="timepicker">
					</div>	
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea name="detalle" id="detalle" class="materialize-textarea"></textarea>
						<label for="detalle">Detalle</label>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="modal-close waves-effect waves-green btn-flat" name="send" value="Aceptar">
				</div>
			</form>
		</div>
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
				//echo '<td>'.$row['alumnos'].'</td>';
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
			$('.timepicker').timepicker();
		});

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