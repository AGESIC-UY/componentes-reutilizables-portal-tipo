<?php
  $title = 'Actividad';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Comunicación</a></li>
        <li><a href="#">Calendario de actividades</a></li>
      </ul>
    </div>
  </div>

  <!-- contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
         <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <?php include "inc/nav-local-header.php"; ?>

              <ul class="Page-navList">
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Campañas</a></li>
                <li><a href="#">Boletines</a></li>
                <li class="is-active"><a href="calendario.php">Calendario de actividades</a></li>
                <li><a href="#">Publicaciones</a></li>
              </ul>
            </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Calendario de actividades</span>
                <h2 class="Page-title">Capacitación: la gestión de riesgos y daños</h2>
				
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

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Event">
                  <div class="Event-info">
                    <div class="Media">
                      <div class="Media-image">
                        <div class="Date">
                          <span class="Date-month">Nov-Dic</span>
                          <span class="Date-day">28-3</span>
                        </div>
                      </div>
                      <div class="Media-body">
                        <a href="subhome.php" class="Event-name">Nombre del evento</a>

                        <ul class="Event-details">
                          <li>19:00 hs - Museo del Carnaval</li>
                          <li><span href="#" class="Live Live--now"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="Event-map">
                    <div class="FlexEmbed FlexEmbed--21by9">
                      <iframe src="https://peu.agesic.gub.uy/portaltipo18beta/portal/mapa-interactivo.html" allowfullscreen="" title="Mapa del evento"></iframe>
                    </div>
                  </div>
                </div>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <ul>
                  <li>Lorem ipsum dolor.</li>
                  <li>Maxime, nostrum, eos!</li>
                  <li>Molestias itaque, vitae!</li>
                  <li>Ab, eum, beatae.</li>
                  <li>Quas quod, error.</li>
                </ul>

                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>

                <h3>Video</h3>
                <span href="#" class="Live Live--now"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</span>
                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <h3>Audio</h3>

                <div class="Audio">
                  <div id="audioTitle1" class="Audio-title">Título del audio</div>
                  <audio aria-labelledby="audioTitle1" src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="#audioTitle1Transcription" class="Audio-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="audioTitle1Transcription">
                    <span>Ver transcripción</span>
                    <span class="u-hideVisually"> de Título del audio</span>
                  </a>

                  <div class="collapse" id="audioTitle1Transcription">
                    <div class="u-p3">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
                  </div>
                </div>

                <div class="Audio">
                  <div id="audioTitle2" class="Audio-title">Título del audio 2</div>
                  <audio aria-labelledby="audioTitle2" src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="#audioTitle2Transcription" class="Audio-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="audioTitle2Transcription">
                    <span>Ver transcripción</span>
                    <span class="u-hideVisually"> de Título del audio</span>
                  </a>

                  <div class="collapse" id="audioTitle2Transcription">
                    <div class="u-p3">
                      <p>Transcripción de Audio 2.</p>

                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
                  </div>
                </div>
								
								<!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>

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
