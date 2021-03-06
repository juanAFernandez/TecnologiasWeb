<!DOCTYPE html>
<html lang="es">

<head>
	<title>ETSIIT magazine</title>
	<meta name="description" content="Periódico digital de la ETSIIT">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

<section class="todo">

	<aside class="publicidadIzquierda">
		<img src="imagenes/bannerIzquierdo.gif" width="100px" height="1000px">
	</aside>
	<aside class="publicidadDerecha">
		<img src="imagenes/bannerDerecho.gif" width="100px" height="1000px">
	</aside>

	<section class="cuerpo">
		
		<section class="publicidadArriba">
			<img src="imagenes/bannerSuperior.gif" width="800px" height="70px">
		</section>

		<!--Cabecera de la página [TITULO] -->
		<header class="cabecera">
			<section id="titulo">
				<?php
			 		//Llamada a funcion cabecera.php para que introduzca la cabecera definida en otro lugar.
			 		include 'cabecera.php';
			 	?>
			</section>
			<section id="controlUsuario">
				<?php
					//Llamamos a la funcion para el control del usuario
				?>
			</section>
		</header>



		<?php include 'menu.php'; ?>

		<section class="noticiasIzquierda">

			<article>
				<header>
					<a class="identificacionSeccionGeneral" href="noticia.html">El misterio de los bancos</a>
				</header>
				Aunque desde la dirección aseguran que sólo se trata de un 
				pequeño retraso en la instalación varios estudiantes aseguran haber 
				visto como los profesores meriendan sentados en ellos.
				<footer class="autor">
					F. Padilla
				</footer>
				<img src="imagenes/banco.jpg">
				<section id="pieImagen">
					Banco de la entrada principal
				</section>
				<section class="fecha">02-04-2014</section>
			</article>

			<article>
				<header>
					<a class="identificacionSeccionOpinion" href="noticia.html">Fraude en Londres</a>
				</header>
				"Hemos sido victimas de una oferta de trabajo engañosa donde se nos prometió un 
				salario que no era real y al que se aplicaron sucesivas reducciones hasta convertirse
				en el mínimo que la legistlación inglesa permitía."
				<footer class="autor">
					R. Martinez
				</footer>
				<section class="fecha">05-04-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionActividades" href="noticia.html">Fiesta en la escuela</a>
				</header>
				Sumándose a la famosa fiesta de la primavera, los estudiantes
				de la ETSIIT la hacen a su manera. El resultado no podía 
				ser distinto, 100kg de basura recogida por el servicio de limpieza.
				<footer class="autor">
					F. Padilla
				</footer>
				<img src="imagenes/botellon.jpg">
				<section id="pieImagen">
					Estado del suelo a la mañana siguiente.
				</section>
				<section class="fecha">02-04-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionGeneral" href="noticia.html">El misterio de los bancos</a>
				</header>
				Aunque desde la dirección aseguran que sólo se trata de un 
				pequeño retraso en la instalación varios estudiantes aseguran haber 
				visto como los profesores meriendan sentados en ellos.
				<footer class="autor">
					F. Padilla
				</footer>
				<section class="fecha">02-04-2014</section>

			</article>


			<article>
				<header>
					<a class="identificacionSeccionDelegacion" href="noticia.html">Nos cambiamos de lugar</a>
				</header>
				Desde el dia 1 de Mayo el despacho de delgación será oficialmente la antigua sala de usos
				múltiples del edificio A (despachos y secreataría). Ampliamos los servicios y el espacio para 
				acoger desde asociaciones hasta grupos de trabajo en mejores instalaciones.
				<footer class="autor">
					J.A. Fernández
				</footer>
				<img src="imagenes/escuela.jpeg">
				<section id="pieImagen">
					Vista del aula de usos múltiples.
				</section>				
				<section class="fecha">02-04-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionDocencia" href="noticia.html">Clases al fresco</a>
				</header>
				Acercándose la Semana Santa vemos como las faltas a clase se multiplican. Los profesores optan
				por cambiar las formas y deciden dar clases a los que han quedado de forma muy personal y
				con un trato muy cercano en los bancos y lugares de recreo de la escuela. Los resultados no se
				han hecho esperar.
				<footer class="autor">
					M. Mesas
				</footer>
				<img src="imagenes/banco.jpg">
				<section id="pieImagen">
					Banco de la entrada principal
				</section>				
				<section class="fecha">02-04-2014</section>
			</article>



		</section>

		<section class="noticiasCentro">
			
			<article>
				<header>
					<a class="identificacionSeccionDelegacion" href="noticia.html">Erasmus PRO</a>
				</header>
				Desde delegación seguimos muy cerca la estancia de algunos de los estudiantes 
				de Erasmus que nos representan en el exterior, algunos de ellos dejando el liston 
				muy alto. Ahora intentamos que se les reconozca su esfuerzo y se crean premios 
				especiales para los que mejor resultados traigan a su vuelta.
				<footer class="autor">
					M. Mesas
				</footer>
				<section class="fecha">02-03-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionDocencia" href="noticia.html">Examenes a la vuelta de la esquina</a>
				</header>
				Dejando atrás la Semana Santa de poco descanso para la mayoría
				empieza la cuenta atrás para los exámenes de junio. Nervios, café y
				complejos vitamínicos pueden ser el peor aliado de los estudiantes
				que cada vez se planifican peor.
				<footer class="autor">
					J.A. Fernández 
				</footer>
				<img src="imagenes/examen.jpg">
				<section id="pieImagen">
					Aula 1.3, donde se realizan muchos exámenes.
				</section>
				<section class="fecha">12-03-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionDelegacion" href="noticia.html">Erasmus PRO</a>
				</header>
				Desde delegación seguimos muy cerca la estancia de algunos de los estudiantes 
				de Erasmus que nos representan en el exterior, algunos de ellos dejando el liston 
				muy alto. Ahora intentamos que se les reconozca su esfuerzo y se crean premios 
				especiales para los que mejor resultados traigan a su vuelta.
				<footer class="autor">
					M. Mesas
				</footer>
				<section class="fecha">02-03-2014</section>

			</article>

			<article>
				<header>
					<a class="identificacionSeccionGeneral" href="noticia.html">Junio se acerca</a>
				</header>
				Dejando atrás la Semana Santa de poco descanso para la mayoría
				empieza la cuenta atrás para los exámenes de junio. Nervios, café y
				complejos vitamínicos pueden ser el peor aliado de los estudiantes
				que cada vez se planifican peor.
				<footer class="autor">
					L. Carmona
				</footer>
				<img src="imagenes/erasmus.jpg">
				<section id="pieImagen">
					Aula 1.3, donde se realizan muchos exámenes.
				</section>
				<section class="fecha">12-03-2014</section>


			</article>
		</section>

		<section class="noticiasDerecha">
			

			<section class="ultimasNoticias">

				<article>
					<header>
						<h1>noticia flash!</h1>
						<a class="identificacionSeccionDocencia" href="noticia.html">Alteración de Matrícula</a>
					</header>
					Los incidentes ocurridos en peridodo de alteración de matrícula
					hacen perder los nervios al personal de administración. 
					"El sistema inormático es un desastre" -Maria Ester- Coordinadora
					General
					<footer class="autor">
					L. Carmona
				</footer>
					<section class="fecha">12-03-2014</section>
				</article>

				<article>
					<header>
						<h1>noticia flash!</h1>
						<a class="identificacionSeccionGeneral" href="noticia.html">Becas para erasmus</a>
					</header>
					Una nueva inyección económica hace posible que la beca Erasmus
					llegue a 50 estudiantes más. Europa del este y Estados Unidos los
					principales objetivos de nuestra fuga de cerebros temporal.
					<footer class="autor">
					L. Carmona
				</footer>
					<section class="fecha">12-03-2014</section>
				</article>
				<article>
					<header>
						<h1>noticia flash!</h1>
						<a class="identificacionSeccionDocencia" href="noticia.html">Alteración de Matrícula</a>
					</header>
					Los incidentes ocurridos en peridodo de alteración de matrícula
					hacen perder los nervios al personal de administración. 
					"El sistema inormático es un desastre" -Maria Ester- Coordinadora
					General
					<footer class="autor">
					L. Carmona
				</footer>
					<section class="fecha">12-03-2014</section>
				</article>

				<article>
					<header>
						<h1>noticia flash!</h1>
						<a class="identificacionSeccionGeneral" href="noticia.html">Becas para erasmus</a>
					</header>
					Una nueva inyección económica hace posible que la beca Erasmus
					llegue a 50 estudiantes más. Europa del este y Estados Unidos los
					principales objetivos de nuestra fuga de cerebros temporal.
					<footer class="autor">
					L. Carmona
				</footer>
					<section class="fecha">12-03-2014</section>
				</article>

			</section>

			<section class="anunciosDerecha">
				
				<img src="imagenes/publiColumna.jpeg" width="250px" height="500px">

			</section>


		</section>


		<?php include 'pie.php' ?>

	</section>




</section>

</body>
</html>