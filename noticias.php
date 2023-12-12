<?php
  $title = 'Noticias';
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
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <?php include "inc/nav-local-header.php"; ?>
              <ul class="Page-navList">
                  <li class="is-active" >
                      <a href="#">Noticias</a>
                  </li>
                  <li><a href="#">Calendario de actividades</a></li>
                  <li><a href="#">Campañas</a></li>
                  <li><a href="#">Boletines</a></li>
                  <li><a href="#">Publicaciones</a></li>
                  <li><a href="#">Comunicados</a></li>
                  <li><a href="#">Convocatorias</a></li>
              </ul>
            </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Estudiantes de UTU reflexionan y debaten sobre consumos problemáticos</h2>

                <?php include "./inc/page-info.php"; ?> 

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <!-- Formato a usar cuando se carga únicamente una imagen, en lugar de la galería de imágenes -->
                <!--
                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>
                -->
                
                <h3>Galería de imágenes</h3>
                <div class="Carousel" tabindex="0">
                  <div>
                    <img src="./img/720x350-yellow.png" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/720x350-red.png" alt="Nombre imagen 2">
                    <p class="Carousel-caption">
                      <span>Perferendis, doloribus nemo quae quis earum dignissimos rem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima ipsam veniam nemo, odio similique. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 2</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/720x350-blue.png" alt="Nombre imagen 3">
                    <p class="Carousel-caption">
                      <span>Animi, necessitatibus. Quas dolor vel quidem magni iusto. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 3</span></span></a>
                    </p>
                  </div>
                </div>

                <a class="Carousel-download Download" href="#" title="Descargar todas las imágenes (.zip 4 MB)">
                  <div class="Media u-textSmall">
                    <div class="Media-image">
                      <span class="Download-icon">
                        <span class="Icon Icon--download"></span>
                      </span>
                    </div>
                    <div class="Media-body">
                      <div class="Download-title">Descargar todas las imágenes (.zip 4 MB)</div>
                      <div class="Download-description">14 imágenes, 4 MB</div>
                    </div>
                  </div>
                </a>

                <h3>Descripción HTML (Texto enriquecido)</h3>
                <ul>
                  <li><a href="documento-html-pu.php">Ir al formato de ejemplo: HTML Portal Unificado</a></li>
                </ul>

                <h3>Audios</h3>
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


                <h3>Videos</h3>
                <div class="Video">
                  <div id="videoTitle1" class="Video-title">Título del video 1 - (Ejemplo: sin lenguaje de señas)</div>
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>
                <div class="Video">
                  <div id="videoTitle2" class="Video-title">Título del video 2 - (Ejemplo: con lenguaje de señas)</div>
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                  <span class="Video-signLanguage">
                    <span class="u-hideVisually">Lenguaje de Señas</span>
                  </span>
                </div>
                <div class="Video">
                  <div id="videoTitle3" class="Video-title">Título del video 3 - (Ejemplo: solo señas y audio)</div>
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                  <span class="Video-signLanguage Video-signLanguage--only">
                    Solo señas y audio
                  </span>
                </div>

                <!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>
								
              </div>
								
							<!-- Listado de contenidos relacionados -->
							<?php include "inc/relacionados-contenidos.php"; ?>
							
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
