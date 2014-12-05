<?php session_start(); ?>

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
				<h2>Ha terminado!</h2>
				<p>Feliciadades, su resultado se muestra abajo.</p>
				<p>Punteo: <?php echo $_SESSION['score']; ?></p>
				<a href="pregunta.php?n=1" class="empezar">Repetir el cuestionario</a>
				<?php $_SESSION['score']=0;?>
			</div>
		</main>
		<footer>
			<div class="Container">
				<h3>Copyright &copy; 2014, Erick Chali Inc.</h3>
			</div>
		</footer>
	</body>
</html>