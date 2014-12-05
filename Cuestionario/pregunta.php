<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//colocar numero de la pregunta
	$number = (int) $_GET['n'];

	//Obtener el total de las preguntas en la DB.
	$query = "SELECT * FROM Preguntas";
	$resultados = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $resultados->num_rows;

	//obtener pregunta
	$query = "SELECT * FROM `Preguntas` WHERE numero_pregunta = $number ";
	//obtener resultado
				//$mysqli->query($query) metodo que ejecuta el query y se lo pasamos como variable.
	$resultado = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$pregunta = $resultado->fetch_assoc();
	//obtener las opciones de las preguntas.
	$query = "SELECT * FROM `Opciones` WHERE numero_pregunta = $number" ;

	$opciones = $mysqli->query($query) or die($mysqli->error.__LINE__);
	

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
				<div class="actual">Pregunta <?php echo $pregunta['numero_pregunta'];?> de <?php echo $total ; ?></div>
				<p class="pregunta">
					<?php echo $pregunta['texto']; ?>
				</p>
				<form method="post" action="process.php">
					<ul class="opciones">
						<?php while($row = $opciones->fetch_assoc()): ?>
							<li><input name="opcion" type="radio" value="<?php echo $row['id']; ?>"> <?php echo $row['texto']; ?> </li>
						<?php endwhile; ?>
					</ul>
					<input type="submit" value="Enviar" name="enviar" class="submit">
					<input tupe="hidden" name="numero" value="<?php echo $number; ?>">
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