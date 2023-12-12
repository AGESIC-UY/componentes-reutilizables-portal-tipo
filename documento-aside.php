<?php
  $title = 'Documento Aside';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Institucional</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
    <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size7of10">
          <div class="Page">
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
								<div class="Page-image">
                  <img src="img/panoramica-estadio-centenario.jpg" alt="Uruguay">
									<div class="Page-image-caption">Ejemplo de imagen con proporción menor a 3:2 (panorámica). Autor: <span class="u-textItalic">Fulano López</span></div>
                </div>
								
								<div class="Page-image Page-image--vertical">
                  <img src="img/mural.jpg" alt="Uruguay">
									<div class="Page-image-caption">Ejemplo de imagen vertical (proporción mayor a 3:2), se muestra centrada y con un alto máximo de 460px. Autor: <span class="u-textItalic">Fulano López</span></div>
                </div>

                <h3>Galería de imágenes</h3>
                <div class="Carousel" tabindex="0">
									<div>
                    <img src="./img/ruta.jpg" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Ejemplo de imagen 3:2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia possimus ea voluptatem adipisci a vel veritatis deserunt. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
									<div>
                    <img src="https://medios.presidencia.gub.uy/tav_portal/2021/noticias/AH_866/fgr_22.jpg" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Ejemplo de imagen 3:2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia possimus ea voluptatem adipisci. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
									<div>
										<img src="./img/panoramica-estadio-centenario.jpg" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Ejemplo de imagen horizontal. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
									<div>
                    <img src="./img/720x350-yellow.png" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Ejemplo de imagen 720 x 350px. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
									<div>
                    <img src="img/mural.jpg" alt="Nombre imagen 2">
                    <p class="Carousel-caption">
                      <span>Ejemplo imagen vertical. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 2</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/250x150.png" alt="Nombre imagen 3">
                    <p class="Carousel-caption">
                      <span>Ejemplo imagen más chica que el mínimo. Autor: <span class="u-textItalic">Nombre Apellido</span></span>
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


                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <ul>
                  <li>Lorem ipsum dolor.</li>
                  <li>Maxime, nostrum, eos!</li>
                  <li>Molestias itaque, vitae!</li>
                  <li><a href="#">Libero eos voluptate nemo.</a></li>
                  <li><a href="#">Omnis exercitationem</a></li>
                </ul>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <div class="Page-image">
                  <img src="img/ambito-participacion-principal.jpg" alt="Ambito de participación ciudadana">
                </div>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <figure class="Image Image--left u-size1of4">
                  <img src="img/mural.jpg" alt="Mural">
                  <figcaption>Mural</figcaption>
                </figure>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <blockquote class="Blockquote">Cita: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nostrum iure quae ratione delectus suscipit aperiam eius iste sequi quaerat.</blockquote>

                <h3>Encabezado de segundo nivel</h3>

                <div class="Table-wrapper">
                  <p id="descripcionTabla1">Descripción de la tabla 1 - Tabla con clase <code>Table--striped</code> </p>
                  <table class="Table Table--striped" aria-describedby="descripcionTabla1">
                    <caption>Tabla 1. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th scope="col">Hora</th>
                        <th scope="col">Temática</th>
                        <th scope="col">Disertantes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Hora" class="u-textRight">08:30</td>
                        <td data-title="Temática">Inscripción</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:00</td>
                        <td data-title="Temática">Apertura Autoridades de Gobierno</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:30</td>
                        <td data-title="Temática">La próxima Frontera para los Servicios de Gobierno</td>
                        <td data-title="Disertantes">Panel de CIOs del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:00</td>
                        <td data-title="Temática">Corte</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:30</td>
                         <td data-title="Temática">Principios Generales Para la era Digital</td>
                        <td data-title="Disertantes">Web Foundation Keynote</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">11:30</td>
                        <td data-title="Temática">Cooperación Internacional en la Era Digital</td>
                        <td data-title="Disertantes">Ministros del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">12:30</td>
                        <td data-title="Temática">Almuerzo</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <div class="Table-wrapper">
                  
                  <table class="Table Table--responsive" aria-describedby="descripcionTabla2">
                    <caption>Tabla 2. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th>Título Columna 1</th>
                        <th>Título Columna 2</th>
                        <th>Título Columna 3</th>
                        <th>Título Columna 4</th>
                        <th>Título Columna 5</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Título Columna 1">Fila 1 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 1 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 1 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 1 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 1 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 2 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 2 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 2 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 2 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 2 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 3 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 3 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 3 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 3 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 3 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 4 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 4 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 4 Columna 5</td>
                      </tr>
                    </tbody>
                  </table>
                  <p id="descripcionTabla3">Descripción de la tabla 2 - Tabla con clase <code>Table--responsive</code> y descripción abajo.</p>
                </div>



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

								<h3>Video</h3>
                <div class="Video">
                  <div id="videoTitle1" class="Video-title">Título del video</div>
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>
                
								
                <!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>



              </div>

            </div>
          </div>
        </div>

          <div class="Grid-item u-md-size3of10">

            <?php include "inc/contenedores/listado-accesos.php"; ?>
            
            <?php include "inc/contenedores/destacado2.php"; ?>	

          </div>
       </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
