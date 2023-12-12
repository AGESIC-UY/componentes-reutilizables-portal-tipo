<?php
  $title = 'Documento';
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
  <div class="u-main" id="contenido">
    <div class="Container">

	  <div class="Alert Alert--dialog Alert--warning u-mt0 u-mb4">
        <h4 class="Alert-title">It was not possible to change languages</h4>
        <p>This page is not available in the selected language.</p>
        <!--<a href="#">Go to the homepage (EN)</a><br>-->
		<a href="#">Go to the English homepage</a>
      </div>

      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <?php include 'inc/nav-local-header.php' ?>

              <ul class="Page-navList">
                  <li><a href="#">El organismo</a></li>
                  <li><a href="autoridades.html">Autoridades</a></li>
                  <li><a href="autoridades.html">Estructura organizativa</a></li>
                  <li>
                      <a href="carpeta.html">Items</a>

                      <ul class="Page-navSublist">
                          <li><a href="documento.html">Item uno</a></li>
                          <li><a href="documento.html">Item dos</a></li>
                          <li><a href="documento.html">Item tres</a></li>
                          <li class="is-active"><a href="documento.html">Item cuatro</a></li>
                          <li><a href="documento.html">Item</a></li>
                          <li><a href="documento.html">Item</a></li>
                          <li><a href="documento.html">Item</a></li>
                          <li><a href="documento.html">Item</a></li>
                          <li><a href="documento.html">Item</a></li>
                      </ul>
                  </li>
                  <li><a href="normativa.html">Normativa</a></li>
                  <li><a href="concursos.html">Llamados y concursos</a></li>
                  <li><a href="adquisiciones.html">Adquisiciones</a></li>
                  <li><a href="participacion.html">Participación</a></li>
                  <li><a href="datos-abiertos.html">Datos Abiertos</a></li>
                  <li><a href="transparencia.html">Transparencia</a></li>
                  <li><a href="preguntas-frecuentes.html">Preguntas frecuentes</a></li>
                  <li><a href="contacto.html">Contacto</a></li>
              </ul>
          </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Lorem ipsum dolor sit</span>
                <h2 class="Page-title">Estudiantes de UTU reflexionan y debaten sobre consumos problemáticos</h2>

                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Creación: 22/11/2016</div>
<div class="Page-date">Última actualización: 15/10/2020</div>
                    </div>
                    <div class="Bar-cell">
                      <ul class="Page-actions">
                        <li>
                          <a href="javascript:window.print()" class="Button Button--small">
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

                <div class="Event">
                  <div class="Event-info">
                    <div class="Media">
                      <div class="Media-image">
                        <div class="Date">
                          <span class="Date-month">Nov</span>
                          <span class="Date-day">28</span>
                        </div>
                      </div>
                      <div class="Media-body">
                        <a href="#" class="Event-name">Nombre del evento</a>
                        <p class="Event-description">Lorem ipsum dolor sit.</p>

                        <ul class="Event-details">
                          <li>19:00 hs - Museo del Carnaval</li>
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

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
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

                <h3>Encabezado de segundo nivel</h3>

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

                <figure class="Image Image--left u-size1of4">
                  <img src="img/mural.jpg" alt="Mural">
                  <figcaption>Mural</figcaption>
                </figure>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

                <blockquote class="Blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nostrum iure quae ratione delectus suscipit aperiam eius iste sequi quaerat.</blockquote>

                <div class="Alert">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sapiente inventore fugiat velit, ipsam nemo recusandae corporis labore optio quas.
                </div>


                <div class="Alert">
                  <h3>Encabezado H3</h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eligendi asperiores assumenda atque impedit perferendis, quasi, ratione facere reprehenderit quia!</p>

                  <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Praesentium voluptates quos, alias.</li>
                    <li>Architecto deserunt ipsam, quasi.</li>
                    <li>Fugit molestias ad excepturi?</li>
                  </ul>
                </div>


                <h3>Tabla</h3>

                <table class="Table">
                  <thead>
                    <tr>
                      <th>Título Columna 1</th>
                      <th>Título Columna 2</th>
                      <th>Título Columna 3</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Título Columna 1">Fila 1 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 1 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 1 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 2 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 2 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 2 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 3 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 3 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 3 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 4 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                    </tr>
                  </tbody>
                </table>

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

                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <h3>Etiquetas</h3>

                <div class="Tags">
                  <a href="#" class="Tags-item">
      Etiqueta
    </a>
                  <a href="#" class="Tags-item">
      Uruguay
    </a>
                  <a href="#" class="Tags-item">
      Palabra clave
    </a>
                </div>

                <h3>Galería de imágenes</h3>
                <div class="Carousel" tabindex="0">
                  <div>
                    <img src="./img/720x350-yellow.png" alt="Nombre imagen 1">
                    <p class="Carousel-caption">
                      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 1</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/720x350-red.png" alt="Nombre imagen 2">
                    <p class="Carousel-caption">
                      <span>Perferendis, doloribus nemo quae quis earum dignissimos rem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas minima ipsam veniam nemo, odio similique, maiores unde aut architecto cum at saepe voluptatum quidem quo voluptatibus dicta sapiente sit.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 2</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/720x350-blue.png" alt="Nombre imagen 3">
                    <p class="Carousel-caption">
                      <span>Animi, necessitatibus. Quas dolor vel quidem magni iusto.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 3</span></span></a>
                    </p>
                  </div>
                  <div>
                    <img src="img/720x350-green.png" alt="Nombre imagen 4">
                    <p class="Carousel-caption">
                      <span>Iure, sint possimus voluptatum hic temporibus ullam, natus.</span>
                      <a href="#"><span class="Icon Icon--download u-mr1"></span><span>Descargar imagen<span class="u-hideVisually">: Nombre imagen 4</span></span></a>
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



                <h3>Enlaces relacionados</h3>

                <ul>
                  <li><a href="#">Lorem ipsum dolor sit.</a></li>
                  <li><a href="#">Libero eos voluptate nemo.</a></li>
                  <li><a href="#">Omnis exercitationem, itaque quibusdam!</a></li>
                </ul>

                <h3>Enlaces de descarga</h3>

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
                    <a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 12 MB)">
                      <div class="Media">
                        <div class="Media-body">
                          <span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 12 MB)</span>
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
