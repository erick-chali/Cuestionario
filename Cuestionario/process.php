<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
	//Verificar el punteo
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;

	}
	if($_POST['enviar']){
		$number = $_POST['numero'];
		$opcion_seleccionada = $_POST['opcion'];
		$siguiente = $number +1;
		//OBTENER TOTAL DE PREGUNTAS EN LA DB
		$query = "SELECT * FROM Preguntas ";
		$resultados = $mysqli->query($query) or die ($mysqli->error.__LINE__);
		$total = $resultados->num_rows;

		$query = "SELECT * FROM `Opciones` WHERE numero_pregunta = $number AND es_correcto = 1 ";

		$resultado = $mysqli->query($query) or die ($mysqli->error.__LINE__);

		$row = $resultado->fetch_assoc();

		$respuesta_correcta = $row['id'];

		if($respuesta_correcta == $opcion_seleccionada){
			$_SESSION['score']++;
		}

		if($number == $total){
			header("Location: final.php");
			exit();
		}else{
			header("Location: pregunta.php?n=".$siguiente);
			exit();
		}

		//verificando que estemos agarrando los valores que selecciona el usuario.
		// echo $number.'</br>';
		// echo $opcion_seleccionada;
	}