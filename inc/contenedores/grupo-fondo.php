<div class="Group Group--color1 Group--fondo">
	<div class="Group-cover">
			<img src="./img/fondo-recoleccion.jpg" alt="Descripción de la imagen">
	</div>
	<div class="Container">
		<div class="Module Module--xs">
			<div class="Grid">
				<div class="Grid-item u-md-size1of3 u-sm-size1of2">
					<div class="Module-item Module-item--full">
						<?php include "inc/contenedores/destacado3.php"; ?>
						<!-- Ver contenedores posibles en las consideraciones -->
					</div>
				</div>
				<div class="Grid-item u-md-size1of3 u-sm-size1of2">
				</div>
				<div class="Grid-item u-md-size1of3 u-sm-size1of2">
				</div>
			</div>
		</div>
	</div>	
</div>

<!--
 * Consideraciones y reglas
	 - Se utiliza el formato de los grupos con un fondo de imagen.
	 - La grilla 3x3 no puede tener una altura mayor a "lg".
	 - La grilla 3x3 debe completar una de las columnas (1/3).
	 - Los contenedores y variantes que se pueden agregar son los que permiten su uso en 1/3 de la grilla y no tienen imagen de fondo hasta los bordes. Se detallan: Acceso destacado, Destacado 3, Destacado 4, Formato completo, Agenda, Listado de enlaces, Listado de accesos, Lista de descargas, Listado de trámites y Datos numéricos.

	* Imagen de fondo
	 - Se recomienda formato 1920x760px aprox. 
	 - Las imágenes en este tamaño suelen ser muy pesadas, se recomienda poner límite de peso para que sean tratadas específicamente para el uso web.

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Hereda comportamiento y reglas de los contenedores que sean utilizados.
-->