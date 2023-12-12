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
         <li><a href="#">Campañas</a></li>
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
                  <li >
                      <a href="#">Noticias</a>
                  </li>
                  <li><a href="#">Calendario de actividades</a></li>
                  <li class="is-active" ><a href="#">Campañas</a></li>
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
                <h2 class="Page-title">Nombre de la campaña</h2>

                <?php include "./inc/page-info.php"; ?> 

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

              
                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>
               
                
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
                
               <h3>Contenidos relacionados</h3>
                <ul class="List List--media List--mediaRelated u-mt3">
                  <li class="Media">
                    <div class="Media-body">
                      <span class="Box-info">7 de mayo, 2020</span>
                      <h3 class="u-h5"><a href="#">Nombre de contenido relacionado sin imagen</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <img src="img/200x120.png" alt="">
                    </div>
                    <div class="Media-body">
                      <span class="Box-info">15 de abril, 2020</span>
                      <h3 class="u-h5"><a href="#">Nombre de contenido relacionado con imagen</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <div class="Date">
                        <span class="Date-month">May</span>
                        <span class="Date-day">28</span>
                      </div>
                    </div>
                    <div class="Media-body">
                      <span class="Box-info">19:30 horas - Sala de conferencias</span>
                      <h3 class="Event-title u-h5"><a href="#">Nombre de evento o actividad relacionada</a></h3>
                      <span class="Info">Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</span>
                    </div>
                  </li>
                  <li class="Media">
                    
                    <a class="Download Download--media" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <span class="Box-info">8 de abril, 2020</span>
                          <div class="Download-title u-h5">Nombre de descarga relacionada (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sit sunt ea eos blanditiis asperiores explicabo ullam quasi esse vitae consequuntur rem quia, doloremque numquam, a. Amet nulla, a nobis.</div>
                          <!--<p class="Download-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum sit sunt ea eos blanditiis asperiores explicabo ullam quasi esse vitae consequuntur rem quia, doloremque numquam, a. Amet nulla, a nobis.</p>-->
                        </div>
                      </div>
                    </a>
                  </li>
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
