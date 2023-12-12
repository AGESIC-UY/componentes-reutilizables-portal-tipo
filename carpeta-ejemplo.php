<?php
  $title = 'Carpeta';
?>
<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
  <div class="Container">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li>Institucional</li>
    </ul>
  </div>
</div>

<!-- contenido -->
<div class="u-main" id="contenido">
  <div class="Container">
    <div class="Page Page--hasNav">
      <div class="Grid Grid--noGutter">
        <div class="Grid-item u-md-size1of4">
          
					<!-- Navegación local MF (sin filtros) -->
					<?php include 'inc/nav-local.php' ?>
					<!-- -->
					
        </div>

        <div class="Grid-item u-md-size3of4">
          <div class="Page-body">

            <span class="Page-subtitle">Info. adicional</span>
            <h2 class="Page-title">Formato carpeta: ejemplo combinado</h2>

            <div class="Page-info">
              <div class="Bar">

                <div class="Bar-cell">
                  <ul class="Page-actions">
                    <li>
                      <a href="#" class="Button Button--small">
                        <span class="Icon Icon--print Icon--small"></span>
                      </a>
                    </li>
                    <li>
                      <?php include "./inc/dropdown-compartir.php"; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <ul class="List List--media">
				
							<li class="Media">
								<?php include 'inc/moleculas/media-snippet-completo.php' ?>
							</li>	
							
              <li class="Media">
                <div class="Media-image">
                  <img src="img/uruguay.jpg" alt="">
                </div>
                <div class="Media-body">
                  <span class="Box-info">15/01/2023</span>
                  <h3><a href="documento.php">Título del formato genérico de una noticia con fecha, imagen y resumen</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
                </div>
              </li>
							
							<li class="Media">
								<div class="Media-image">
									<div class="Video">
										<iframe width="250" height="167" src="https://www.youtube-nocookie.com/embed/OynOXHi5F3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
									</div>
								</div>
								<div class="Media-body">
									<span class="Box-info">15/01/2023</span>
									<h3><a href="documento.php">Título del formato genérico de una noticia con fecha, video y resumen</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
								</div>
							</li>
							
							<li class="Media">
								<div class="Media-body">
									<h3>
										<a href="#">Título del formato genérico de un trámite</a>
									</h3>
									<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
									<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre de trámite por accesibilidad</span></a>
								</div>
							</li>
							
							<li class="Media">
								<div class="Media-body">
									<span class="Box-info">15/01/2023 - Estado [<strong>Vigente</strong> / No vigente]</span>
									<h3>
										<a href="documento.php">Título del formato genérico con descarga de archivo</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
									<a class="Download Download--small" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
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
								</div>
							</li>
							
							<li class="Media">
								<div class="Media-body">
									<span class="Box-info">15/01/2023 - Estado [<strong>Vigente</strong> / No vigente]</span>
									<h3>
										<a href="documento.php">Título del formato genérico con descarga de varios archivos</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
									<a class="Download Download--small" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
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
									<a class="Download Download--small" href="#" title="Descargar: Cronograma del evento (.pdf 189 KB)">
										<div class="Media">
											<div class="Media-image">
												<span class="Download-icon">
													<span class="Icon Icon--download"></span>
												</span>
											</div>
											<div class="Media-body">
												<div class="Download-title">Cronograma del evento (.pdf 189 KB)</div>
												<div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
											</div>
										</div>
									</a>
									<a class="Download-more" href="#">3 adjuntos más</a>
								</div>
							</li>
							
							<li class="Media">
								<div class="Media-body">
									<span class="Box-info">15/01/2023</span>
									<h3>
										<a href="documento.php">Título del formato genérico con fecha, categoría y descarga de archivo</a>
									</h3>
									<span class="Box-info"><strong>Reglamentos</strong></span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
									<a class="Download Download--small" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
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
								</div>
							</li>
							
							<li class="Media">
								<div class="Media-image">
                  <!-- Molécula: fecha -->
									<?php include "inc/moleculas/fecha.php"; ?>
                </div>
								<div class="Media-body">
									<span class="Box-info u-textUppercase u-textSmall u-textMute">19:30 - Lugar de la actividad</span>
									<!--<span class="Box-info">19:30 - Lugar de la actividad</span>-->
									<h3>
										<a href="documento.php">Título de un evento de agenda</a>
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
								</div>
							</li>
							
              <li class="Media">
                <span class="Box-info">15/01/2023</span>
                <a class="Download Download--media" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                  <div class="Media">
                    <div class="Media-image">
                      <span class="Download-icon">
                        <span class="Icon Icon--download"></span>
                      </span>
                    </div>
                    <div class="Media-body">
                      <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                      <div class="Download-description">Descripción del documento adjunto</div>
                      <p class="Download-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sit sunt ea eos blanditiis asperiores explicabo ullam quasi esse vitae consequuntur rem quia, doloremque numquam, a. Amet nulla, a nobis.</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
						
						<div class="Pagination">
							<div class="Pagination-text">Mostrando 5 de 19 resultados</div>
							<ul class="Pagination-links">
								<li class="Pagination-prev"><a href="#">Anterior</a></li>
								<li class="is-selected"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li class="Pagination-next"><a href="#">Siguiente</a></li>
							</ul>
						</div>
						
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
