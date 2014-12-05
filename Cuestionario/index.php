<?php include 'database.php'; ?>
<?php 
	//numero total de preguntas
	$query = "SELECT * FROM `Preguntas`";

	$resultados = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$total = $resultados->num_rows;
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
				<h2>PROBAR CONOCIMIENTO PHP</h2>
				<p>Este es un cuestionario de opci&oacute;n multiple, para evaluar sus conocimientos de php.</p>
				<ul>
					<li><strong>Numero de Preguntas: </strong> <?php echo $total; ?> </li>
					<li><strong>Tipo: </strong>Opci&oacute;n Multiple</li>
					<li><strong>Tiempo estimado p/pregunta: </strong> <?php echo $total*1.5 ; ?> minutos.</li>
				</ul>
				<a href="pregunta.php?n=1" class="empezar">Empezar Cuestionario</a>
			</div>
		</main>
		<footer>
			<div class="Container">
				<h3>Copyright &copy; 2014, Erick Chali Inc.</h3>
			</div>
		</footer>
	</body>
</html>