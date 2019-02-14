<?php
 require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

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
            <a href="index.php" class="brand-logo">Logo</a>
            <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="alumnos.php">Alumnos</a></li>
                <li><a href="crear-alumno.php">Crear alumno</a></li>
                <li><a href="balance.php">Balance</a></li>
                <li><a href="#">Pagos</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="alumnos.php">Alumnos</a></li>
        <li><a href="crear-alumno.php">Crear alumno</a></li>
        <li><a href="balance.php">Balance</a></li>
        <li><a href="#">Pagos</a></li>
        <li><a href="#">Cerrar sesión</a></li>
    </ul>

	<from action="">
		<div class="row">
			<div class="input-field col s6 l4 offset-l3">
				<p>El alumno: </p>
			  <input placeholder="Nombre" type="text" id="autocomplete-input" class="autocomplete">
			</div>
			<div class="input-field col s6 l1">
				<p>con dni: </p>
				<input placeholder="DNI" name="p_dni" id="p_dni" type="text" class="validate">
			</div>
			<div class="input-field col s6 l1">
				<p>a la fecha: </p>
				<input id="p_fecha_nac" name="p_fecha_nac" placeholder="Fecha de pago" type="text" class="datepicker">
			</div>
		</div>
		<div class="row">
			<div class="col s12 l4 offset-l4">En concepto de: </div>
			<div class="col s6 l1 offset-l4">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Cuota mensual</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Suscripcion</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Vacante</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Materiales</span>
				  </label>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col s6 offset-l4 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Examen de clasificacion</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Curso intensivo</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
				  <label>
					<input type="checkbox" />
					<span>Descuento</span>
				  </label>
				</p>
			</div>
			<div class="col s6 l1">
				<p>
					<label>
						<input type="checkbox" id="otrosCb"/>
						<span>Otros</span>
					</label>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 l4 offset-l4">
			  <input disabled value="Otros" id="otros" type="text" class="validate">
			  <label for="otros">Disabled</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6 l1 offset-l4">
				<input placeholder="Total" id="total" type="text" class="validate">
				 <label for="total">Total $</label>
			</div>
		</div>
		<div class="center">
			<button class="btn-large waves-effect waves-light" type="submit" name="action">Enviar
				<i class="material-icons right">send</i>
			</button>
		</div>
	</from>


    <script>
		$(document).ready(function(){
			$('input.autocomplete').autocomplete({
				data: {
				<?php
					echo '"Apple": null,"Microsoft": null,"Google": null';
					?>
				},
			});
		});

		$(document).ready(function () {
            $('.datepicker').datepicker();
        });

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });

		$(document).ready(function() {
			enable_cb();
			$("#otrosCb").click(enable_cb);
		});

		function enable_cb() {
			if (this.checked) {
				$("#otros").removeAttr("disabled");
			} else {
				$("#otros").attr("disabled", true);
			}
		}
    </script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>