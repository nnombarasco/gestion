<?php
	 require_once 'config.php';

	 $queryResult = $pdo->query("SELECT * FROM cursos");

	 	if(!empty($_POST)){
		$nombre = formatdate($_POST['nombreCurso']);
		$nRecibo = $_POST['recibo'];
		$monto = $_POST['monto'];
		$nivelCurso = $_POST['nivel'];
		$horario = $_POST['horario'];
		$nombre = $_POST['p_name'];
		$domicilio = $_POST['p_domicilio'];
		$localidad = $_POST['p_localidad'];
		$telefono = $_POST['p_telefono'];
		$dni = $_POST['p_dni'];
		$nacimiento = formatdate($_POST['p_fecha_nac']);
		$email = $_POST['p_email'];
		$facebook = $_POST['p_facebook'];
		$instagram = $_POST['p_instagram'];
		$ocupacion = $_POST['ocupacion'];
		$observacion = $_POST['observacion'];
		
		$sql = "INSERT INTO alumnos(nombre, domicilio, localidad, telefono, dni, nacimiento, email, facebook, instagram, ocupacion, observacion, inicio) 
		VALUES(:nombre, :domicilio, :localidad, :telefono, :dni, :nacimiento, :email, :facebook, :instagram, :ocupacion, :observacion, :inicio)";
		$query = $pdo->prepare($sql);
		$sql1 = "INSERT INTO curso(fechaInicio, numeroRecibo, monto, nivelCurso, horario, dniAlumno) VALUES(:fechaInicio, :numeroRecibo, :monto, :nivelCurso, :horario, :dniAlumno)";
		$query1 = $pdo->prepare($sql1);

		$result1 = $query1->execute([
		'fechaInicio' => $inicio,
		'numeroRecibo' => $nRecibo,
		'monto' => $monto,
		'nivelCurso' => $nivelCurso,
		'horario' =>$horario,
		'dniAlumno' => $dni
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
						<input placeholder="Placeholder" id="nombreCurso" type="text" class="validate">
						<label for="nombreCurso">Nombre curso</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l8">
						<div class="col s6 l2">
							<p>
								<label for="lun1">
								<input id="lun1" type="checkbox" />
								<span>Lun</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mar1">
								<input id="mar1" type="checkbox" />
								<span>Mar</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mier1">
								<input id="mier1" type="checkbox" />
								<span>Mier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="jue1">
								<input id="jue1" type="checkbox" />
								<span>Jue</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="vier1">
								<input id="vier1" type="checkbox" />
								<span>Vier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="sab1">
								<input id="sab1" type="checkbox" />
								<span>Sab</span>
								</label>
							</p>
						</div>
					</div>
					<div class="col s6 l2">
						<label for="desde1">Desde</label>
						<input id="desde1" type="text" class="timepicker">
					</div>	
					<div class="col s6 l2">
						<label id="hasta1">Hasta</label>
						<input id="hasta1" type="text" class="timepicker">
					</div>	
				</div>
				<div class="row">
					<div class="input-field col s12 l8">
						<div class="col s6 l2">
							<p>
								<label for="lun2">
								<input id="lun2" type="checkbox" />
								<span>Lun</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mar2">
								<input id="mar2" type="checkbox" />
								<span>Mar</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="mier2">
								<input id="mier2" type="checkbox" />
								<span>Mier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="jue2">
								<input id="jue2" type="checkbox" />
								<span>Jue</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="vier2">
								<input id="vier2" type="checkbox" />
								<span>Vier</span>
								</label>
							</p>
						</div>
						<div class="col s6 l2">
							<p>
								<label for="sab2">
								<input id="sab2" type="checkbox" />
								<span>Sab</span>
								</label>
							</p>
						</div>
					</div>
					<div class="col s6 l2">
						<label for="desde2">Desde</label>
						<input id="desde2" type="text" class="timepicker">
					</div>	
					<div class="col s6 l2">
						<label for="hasta2">Hasta</label>
						<input id="hasta2" type="text" class="timepicker">
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