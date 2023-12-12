<div class="Box Box--mf Box--destacadoFondo">
	<div class="Box Box-cover">
		<!-- Video de fondo + controles -->
		<video id="video-ejemplo" class="Hero-image" autoplay="" playsinline="" loop="" muted="" preload="metadata" width="900" height="360" poster="./img/fondo-destacado.jpg">
			<source src="./video/fondo-destacado.mp4" type="video/mp4"> 
		</video>
		<div class="Box-bgVideoControl">  
			<button id="boton-ejemplo" class="Button Button--play" title="Detener animación" onclick="bgVideoControl('video-ejemplo', 'boton-ejemplo')"> 
				<span class="play-pause"></span>
			</button>
		</div>
		<!-- Imagen de fondo -->
		<!-- <img class="Hero-image" src="./img/fondo-destacado.jpg" alt="Descripción de la imagen"> -->
	</div>
	<div class="Box-overlay">
		<div class="Grid Grid--noGutter">
			<div class="Grid-item">
				<div class="Box Box--mf">
					<div class="Box-header">
						<h3 class="Box-name"><a href="#">Título de contenedor Destacado con fondo multimedia</a></h3>
						<!-- Variante de título sin enlace -->
						<!-- <h3 class="Box-name">Título de contenedor Destacado con fondo multimedia</h3> -->
					</div>
					<div class="Box-body">
						<p class="Box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio deserunt officia tempore eius ab, est laboriosam sunt ipsa.</p>
						<div class="Box-actions">
							<button class="Button Button--primary">Acción principal</button>
							<button class="Button Button--link u-px3">Acción secundaria</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
 * Consideraciones y reglas
	 - Puede ser utilizado en 2 o 3 columnas.
	 - La grilla 3x3 no puede tener una altura mayor a "lg".
	 - El título puede ser enlace o no.
	 - Los botones no pueden repetir el enlace del título. No son obligatorios.

 * Clases modificadoras
	 - De diseño: Box--destacadoFondoRight (Invierte orden de escritorio)
	 - De color: Box--color1, Box--color2, Box--color3, Box--color4, Box--color5, Box--color6, Box--color7, Box--color8

 * Imagen o video
	 - Formato libre, se adpata al 3x3 en escritorio y al contenido en móvil. Uso decorativo, puede no verse en su totalidad

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Box-name: Óptimo 100 caracteres. Obligatorio.
 	 - Box-text: Óptimo 260 caracteres.
	 - Button: Óptimo 25 caracteres.
-->