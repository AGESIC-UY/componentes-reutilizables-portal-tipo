<div class="Box Box--mf Box--listadoD4">
	<div class="Box-header">
		<h3 class="Box-name">Listado de Destacados 4</h3>
		<!-- Ejemplo de título con enlace -->
		<!--<h3 class="Box-name"><a href="#">Listado de Destacados 4</a></h3>-->
	</div>
	<div class="Box-body">
		<?php include "inc/contenedores/destacado4.php"; ?>
		<?php include "inc/contenedores/destacado4.php"; ?>
		<?php include "inc/contenedores/destacado4.php"; ?>
		<?php include "inc/contenedores/destacado4.php"; ?>
	</div>
</div>

<!--
 * Consideraciones y reglas
	 - Se utiliza el elemento "Module" pero sin altura, estará determinada por el contenido.
	 - Este contenedor usa el D4 y mantiene las mismas reglas de clases modificadoras, imágenes y textos. La adaptación se hace por CSS.
	 - Listado con mínimo de 2 y máximo de 4 elementos (D4).
	 - El título del contenedor puede ser un enlace, pero no puede ser igual a ninguno de los D4

	* Imagen de fondo
	 - Hereda reglas de D4

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Box-name: Óptimo 60 caracteres. Obligatorio.
	 - Hereda reglas de D4
-->