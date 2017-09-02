<?php // Inicio de documento PHP

	/* Mostrar algo */ 
	//echo "Hola mundo!"; 


	$_POST["nombre"]; // Recibimos variables con datos

	if (isset($_POST["nombre"])) {
		// isset: La variable debe ser distinta de nula, distinta de vacia: "" y que debe existir 
?>
		<h1>Hola mundo!</h1>
<?php
	}else{
?>
		<h1>Cae aqui</h1>
<?php
	}
// Cierra de documento 
?>