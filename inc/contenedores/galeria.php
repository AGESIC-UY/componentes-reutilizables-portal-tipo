<div class="Box Box--mf Box--galeria">
	<div class="Box-header">
		<h3 class="Box-name">Título del contenedor galería multimedia</h3>
		<!-- Ejemplo de título con enlace -->
		<!--<h3 class="Box-name"><a href="#">Título del contenedor galería multimedia con enlace</a></h3>-->
	</div>
	<div class="Box-multimedia">
		<span class="Box-info Box-info--absolute"><span class="item-number">1</span> / <span class="total-items"></span></span>
		<div class="Carousel Carousel--mf" tabindex="0">	
			<div class="item">
				<img src="./img/ruta.jpg" alt="Nombre imagen 1">
				<p class="Carousel-caption"><span>Ejemplo de imagen con proporción 3:2. Autor: <span class="u-textItalic">Nombre Apellido</span></span></p>
			</div>
			<div class="item">
				<div class="Event-map u-imgResponsive">
					<iframe src="https://www.youtube-nocookie.com/embed/ub4L2GVZnEA" title="Titulo del Video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
				<p class="Carousel-caption"><span>Ejemplo de video en la galería, con barrera para activar funcionamiento. Autor: <span class="u-textItalic">Nombre Apellido</span></span></p>
			</div>
			<div class="item no-caption">
				<img src="img/uruguay.jpg" alt="Nombre imagen 3">
				<p class="Carousel-caption"><span>Descripción corta de la imagen o video que se lee hasta en 2 líneas de móvil. Autor: <span class="u-textItalic">Nombre Apellido</span></span></p>
			</div>
			<div class="item">
				<img src="./img/panoramica-estadio-centenario.jpg" alt="Nombre imagen 4">
				<p class="Carousel-caption"><span>Ejemplo de imagen horizontal, se muestra centrada con el máximo ancho. Autor: <span class="u-textItalic">Nombre Apellido</span></span></p>
			</div>
			<div class="item">
				<img src="img/mural.jpg" alt="Nombre imagen 5">
				<p class="Carousel-caption"><span>Ejemplo de imagen vertical, se muestra centrada con la máxima altura. Autor: <span class="u-textItalic">Nombre Apellido</span></span></p>
			</div>
		</div>
	</div>
</div>

<!--
 * Clases modificadoras
	 - De color: Box--color1, Box--color2, Box--color3, Box--color4, Box--color5, Box--color6, Box--color7, Box--color8
	 - De diseño: .no-caption, se agrega en .item para no mostrar descripción y aprovechar mejor el espacio.

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Box-name: Óptimo 60 caracteres. Obligatorio.
	 - Carousel-caption: Óptimo 100 caracteres.
-->