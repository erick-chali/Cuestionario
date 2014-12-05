<?php include 'database.php'; ?>
<?php 
	if (isset($_POST['enviar'])) {
		$numero_pregunta = $_POST['pregunta_numero'];
		$texto = $_POST['pregunta_texto'];
		$opcion_correcta = $_POST['opcion_correcta'];

		$opciones = array();
		$opciones[1] = $_POST['op1'];
		$opciones[2] = $_POST['op2'];
		$opciones[3] = $_POST['op3'];
		$opciones[4] = $_POST['op4'];
		$opciones[5] = $_POST['op5'];

		$query = "INSERT INTO `Preguntas` (numero_pregunta, texto) VALUES ('$numero_pregunta', '$texto')";

		$insertar_fila = $mysqli->query($query) or die ($mysqli->error.__LINE__);

		if ($insertar_fila) {
			foreach ($opciones as $opcion => $value) {
				if ($value != '') {
					if ($opcion_correcta == $opcion) {
						$es_correcta=1;
					}else{
						$es_correcta=0;
					}
					$query = "INSERT INTO `Opciones` (numero_pregunta, es_correcto, texto) VALUES ('$numero_pregunta', '$es_correcta' , '$value')";
					$insertar_fila = $mysqli->query($query) or die ($mysqli->error.__LINE__);
					if ($insertar_fila) {
						continue;
					}else{
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$mensaje = 'La pregunta fue agragada.';
		}
	}
	//para que el numero de pregunta se llene automaticamente.
	$query = "SELECT * FROM `Preguntas`";
	$preguntas = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $preguntas->num_rows;
	$next = $total + 1;
?>
<!DOCTYPE html>
<html>
	<header>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
	</header>
	<body>	
		<header>
			<div class="contenedor">
				<h1>CUESTIONARIO PHP</h1>
			</div>
		</header>
		<main>
			<div class="container">
				<h2>Agregar pregunta</h2>

				<?php if (isset($mensaje)) {
					echo '<p>'.$mensaje.'</p>';
				}?>

				<form method="post" action="add.php">
					<p>
						<label>Numero de Pregunta</label>
						<input type="number" name="pregunta_numero" value="<?php echo $next; ?>">
					</p>
					<p>
						<label>Texto de la Pregunta</label>
						<input type="text" name="pregunta_texto">
					</p>
					<p>
						<label>Opci&oacute;n 1</label>
						<input type="text" name="op1">
					</p>
					<p>
						<label>Opci&oacute;n 2</label>
						<input type="text" name="op2">
					</p>
					<p>
						<label>Opci&oacute;n 3</label>
						<input type="text" name="op3">
					</p>
					<p>
						<label>Opci&oacute;n 4</label>
						<input type="text" name="op4">
					</p>
					<p>
						<label>Opci&oacute;n 5</label>
						<input type="text" name="op5">
					</p>
					<p>
						<label>Numero de Opci&oacute;n correcta</label>
						<input type="number" name="opcion_correcta">
					</p>
					<p>
						<input type="submit" name="enviar" class="submit">
					</p>

				</form>
			</div>
		</main>
		<footer>
			<div class="Container">
				<h3>Copyright &copy; 2014, Erick Chali Inc.</h3>
			</div>
		</footer>
	</body>
</html>