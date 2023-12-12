<?php
  $title = 'Ficha de servicio';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Trámites y servicios</a></li>
        <li><a href="#">Servicios</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Nombre del servicio / Aleros - Equipos de Proximidad</h2>

                <?php include "./inc/page-info.php"; ?>

                <p class="Page-description u-mb6">Resumen: descripción mínima que describe de qué se trata el servicio, máximo 1000 caracteres. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque.</p>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
                <p>Integer semper interdum lorem, at accumsan dolor blandit eget. Quisque commodo, erat vel hendrerit tincidunt, neque lacus venenatis nisi, auctor mattis massa odio sed nisl. Aliquam augue ipsum, convallis eu lorem non, porta dapibus elit. In gravida, diam vitae scelerisque sollicitudin, lorem dolor ultricies nibh, eget molestie tortor lectus molestie nibh. Integer pharetra leo id ex varius, sit amet feugiat elit lacinia. Vivamus vel orci sapien. Duis vel libero id quam ultrices tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque impedit ab nulla omnis libero neque delectus veritatis laborum consequatur repudiandae! Voluptatem?</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                  <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                </ul>

                <h3>A quién va dirigido</h3>
                <p>Todo público</p>

                <h3>Requisitos</h3>
                <ul>
                  <li>Requisito 1</li>
                  <li>Requisito 2</li>
                  <li>Requisito 3</li>
                </ul>

                <h3>Costo</h3>
                <p>$0.00</p>
								
								<h3>Dónde se presta el servicio</h3>
								
								<div class="Event-map">
									<div class="FlexEmbed FlexEmbed--16by9 u-mb3"><iframe src="https://peu.agesic.gub.uy/mapaAC/" allowfullscreen="" title="Puntos de Atención Ciudadana"></iframe>
									</div>
								</div>
								
								<a class="Button Button--primary collapsed u-mb1" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Ver listado de direcciones <span class="caret"></span>
								</a>	

								<div class="collapse u-ml3" id="collapseExample">
									<!-- Acá va el contenido del desplegable	-->
									<h5 class="u-mt2">Datos de ejemplo:</h5>
									<ul>
										<li>Dirección: <strong>Plaza Independencia 710</strong></li>
										<li>Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></li>
										<li>Teléfonos: <strong><a href="tel:29021237">2902 1237</a></strong> int. 105 - <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103 - <strong><a href="tel:29012345">2901 2345</a></strong> int. 432 - <strong><a href="tel:29241092">2924 1092</a></strong> int. 132</li>
										<li>Correo electrónico: <strong><a href="mailto:info@dependencia.gub.uy">info@dependencia.gub.uy</a></strong></li>
										<li><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 1</span></a></li>
									</ul>
									<h5 class="u-mt2">Aleros:</h5>
									<ul>
										<li>Dirección: <strong>Trabajo en calle</strong></li>
											<li>Teléfono: <strong><a href="#">*1020</a></strong></li>
											<li>Horario: <strong>Lunes a viernes de 9:30 a 17:30 hs.</strong></li>
									</ul>

									<h5 class="u-mt2">Otro lugar:</h5>
									<ul>
										<li>Dirección: <strong>Trabajo en calle</strong></li>
											<li>Teléfono: <strong><a href="#">*1020</a></strong></li>
											<li>Horario: <strong>Lunes a viernes de 9:30 a 17:30 hs.</strong></li>
									</ul>
									<!--	-->
								</div>

               
                                
								
								<h3>Enlaces</h3>
								<ul>
                  <li><a href="#">Solicitar servicio "Equipo de proximidad" en línea</a></li>
                </ul>

								<h3>Descargas</h3>
								<ul class="Page-downloads List">
									<li>
										<a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
											<div class="Media">
												<div class="Media-image">
													<span class="Download-icon">
														<span class="Icon Icon--download"></span>
													</span>
												</div>
												<div class="Media-body">
													<div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
													<div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
											<div class="Media">
												<div class="Media-image">
													<span class="Download-icon">
														<span class="Icon Icon--download"></span>
													</span>
												</div>
												<div class="Media-body">
													<div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
													<div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 754 KB)">
											<div class="Media">
												<div class="Media-image">
													<span class="Download-icon">
														<span class="Icon Icon--download"></span>
													</span>
												</div>
												<div class="Media-body">
													<div class="Download-title">Formulario para inscripción (.pdf 754 KB)</div>
													<div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 4 MB)">
											<div class="Media">
												<div class="Media-body">
													<span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 4 MB)</span>
												</div>
											</div>
										</a>
									</li>
								</ul>

								<h3>Etiquetas</h3>
								<div class="Tags">
									<a href="#" class="Tags-item">Etiqueta</a>
									<a href="#" class="Tags-item">Uruguay</a>
									<a href="#" class="Tags-item">Palabra clave</a>
								</div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
