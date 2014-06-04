	<html>
	<head>
	<title>ETSIIT magazine</title>
	<meta name="description" content="Periódico digital de la ETSIIT">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css">
</head>
	<body>

		<header class="cabecera">
			<section id="titulo">
				<?php
			 		//Llamada a funcion cabecera.php para que introduzca la cabecera definida en otro lugar.
			 		include 'cabecera.php';
			 	?>
			 	<h3>SECCIÓN DE ADMINISTRACIÓN</h3>
			</section>
			<section id="controlUsuario">
				<?php
					//Llamamos a la funcion para el control del usuario
				?>
			</section>
		</header>


		<h2>Publicación de artículos</h2>


		<section class="formularioSuscripcion">

			<form>
				<table>
					<tr>
						<td>Título</td>
						<td><input type="text" name="titulo" value=""></td>
					</tr>
					<tr>
						<td>Cabecera</td>
						<td><input type="text" name="cabecera" value=""></td>
					</tr>
					<tr>
						<td>Cuerpo</td>
						<td><input type="text" name="cuerpo" value=""></td>
					</tr>
					<tr>
						<td>Autor</td>
						<td><input type="text" name="mail" value=""></td>
					</tr>
					
					<tr>
						<td>Imagen</td>
						   	 <td><input name="userfile" type="file"></td>
					</tr>
   
					<tr>
						<td>Sección</td>
						<td>
							<input type="radio" name="seccion" value="general">General
							<input type="radio" name="seccion" value="docencia">Docencia
							<input type="radio" name="seccion" value="delegacion">Delegación
							<input type="radio" name="seccion" value="actividades">Actividades
							<input type="radio" name="seccion" value="opinion">Opinión

						</td>
					</tr>
				</table>

				<br>
				<input type="submit" value="Publicar">

			</form> 

		</section>

	</body>
	</html>