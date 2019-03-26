<?php
	require_once 'config.php';



	if(!empty($_POST)){
		$inicio = formatdate($_POST['fecha_de_inicio']);
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

		$result = $query->execute([
		 'nombre' => $nombre,
		 'domicilio' => $domicilio,
		 'localidad' => $localidad,
		 'telefono' => $telefono,
		 'dni' => $dni,
		 'nacimiento' => $nacimiento,
		 'email' => $email,
		 'facebook' => $facebook,
		 'instagram' => $instagram,
		 'ocupacion' => $ocupacion,
		 'observacion' => $observacion,
		 'inicio' => $inicio
		]);
		}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
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
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="alumnos.php">Alumnos</a></li>
				<li><a href="deudas.php">Deudas</a></li>
                <li><a href="#">Crear alumno</a></li>
                <li><a href="balance.php">Balance</a></li>
                <li><a href="pagos.php">Pagos</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
		<li><a href="cursos.php">Cursos</a></li>
        <li><a href="alumnos.php">Alumnos</a></li>
		<li><a href="deudas.php">Deudas</a></li>
        <li><a href="#">Crear alumno</a></li>
        <li><a href="balance.php">Balance</a></li>
        <li><a href="pagos.php">Pagos</a></li>
        <li><a href="#">Cerrar sesión</a></li>
    </ul>

    <!--Forms-->
    <h4 class="center">Datos curso</h4>
    <div class="row">
        <form action="crear-alumno.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s4">
                    <input id="fecha_de_inicio" name="fecha_de_inicio" placeholder="Fecha de inicio" type="text" class="datepicker">
                    <label for="fecha_de_inicio">Fecha de inicio</label>
                </div>
                <div class="input-field col s4">
                    <input id="recibo" name="recibo" type="text" class="validate">
                    <label for="recibo">Recibo N°</label>
                </div>
                <div class="input-field col s4">
                    <input id="monto" name="monto" placeholder="$" type="text" class="validate">
                    <label for="monto">$</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Nivel/Curso" name="nivel" id="nivel" type="text" class="validate">
                    <label for="nivel">Nivel/Curso</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Dia y Horario" name="horario" id="horario" type="text" class="validate">
                    <label for="horario">Dia y horario</label>
                </div>
            </div>
            <div class="row">
                <h6 class="center">Como te enteraste del E-Klab?</h6>
                <div class="input-field col s6 l3">
                    <label for="checkboxRecom">
                        <input name="checkboxRecom" id="checkboxRecom" type="checkbox" class="filled-in"/>
                        <span>Recomendación</span>
                    </label>
                </div>
                <div class="input-field col s6 l3">
                    <label for="checkboxPub">
                        <input name="checkboxPub" id="checkboxPub" type="checkbox" class="filled-in"/>
                        <span>Publicidad</span>
                    </label>
                </div>
                <div class="input-field col s6 l3">
                    <label for="checkboxRedes">
                        <input name="checkboxRedes" id="checkboxRedes" type="checkbox" class="filled-in"/>
                        <span>Redes Sociales</span>
                    </label>
                </div>
                <div class="input-field col s6 l3">
                    <label for="checkboxOtros">
                        <input name="checkboxOtros" id="checkboxOtros" type="checkbox" class="filled-in"/>
                        <span>Otros</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Nombre y Apellido" name="p_name" id="p_name" type="text" class="validate">
                    <label for="p_name">Nombre y Apellido</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l8">
                    <input placeholder="Domicilio" name="p_domicilio" id="p_domicilio" type="text" class="validate">
                    <label for="p_domicilio">Domicilio</label>
                </div>
                <div class="input-field col s12 l4">
                    <input placeholder="Localidad" name="p_localidad" id="p_localidad" type="text" class="validate">
                    <label for="p_localidad">Localidad</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l4">
                    <input placeholder="Telefono" name="p_telefono" id="p_telefono" type="text" class="validate">
                    <label for="p_telefono">Telefono</label>
                </div>
                <div class="input-field col s12 l4">
                    <input placeholder="N° DNI" name="p_dni" id="p_dni" type="text" class="validate">
                    <label for="p_dni">N° DNI</label>
                </div>
                <div class="input-field col s12 l4">
                    <input id="p_fecha_nac" name="p_fecha_nac" placeholder="Fecha de Nacimiento" type="text" class="datepicker">
                    <label for="p_fecha_nac">Fecha de Nacimiento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l4">
                    <input id="p_email" name="p_email" type="email" class="validate">
                    <label for="p_email">Email</label>
                </div>
                <div class="input-field col s12 l4">
                    <input id="p_facebook" name="p_facebook" type="text" class="validate">
                    <label for="p_facebook">Facebook</label>
                </div>
                <div class="input-field col s12 l4">
                    <input id="p_instagram" name="p_instagram" type="text" class="validate">
                    <label for="p_instagram">Instagram</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6">
                    <input id="ocupacion" name="ocupacion" type="text" class="validate">
                    <label for="ocupacion">Ocupación Actual</label>
                </div>
                <div class="input-field col s12 l6">
                    <input id="observacion" name="observacion" type="text" class="validate">
                    <label for="observacion">Observación</label>
                </div>

            </div>
				<input type="submit" value="Guardar">
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker();
        });

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>