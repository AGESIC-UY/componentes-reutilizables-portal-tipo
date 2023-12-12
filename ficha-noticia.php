<?php
  $title = 'Ficha de Noticia';
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
        <li><a href="#">Noticias</a></li>
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
                      <a href="carpeta.html">Noticias</a>
                  </li>
                  <li><a href="#">Calendario de actividades</a></li>
                  <li><a href="#">Publicaciones</a></li>
              </ul>
          </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
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

                <p class="Page-description">Resumen: descripción mínima que describe de qué se trata la noticia, máximo 1000 caracteres.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <blockquote class="Blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nostrum iure quae ratione delectus suscipit aperiam eius iste sequi quaerat.</blockquote>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <ul>
                  <li>Lorem ipsum dolor.</li>
                  <li>Maxime, nostrum, eos!</li>
                  <li>Molestias itaque, vitae!</li>
                  <li>Ab, eum, beatae.</li>
                  <li>Quas quod, error.</li>
                </ul>

                <figure class="Image Image--left u-size1of4">
                  <img src="img/mural.jpg" alt="Mural">
                  <figcaption>Mural</figcaption>
                </figure>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

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


                <h3>Video</h3>
                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
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
                      <span>Perferendis, doloribus nemo quae quis earum dignissimos rem!</span>
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


                <h3>Documentos adjuntos</h3>
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
                </ul>

                <h3>Enlaces relacionados</h3>
                <ul>
                  <li><a href="#">Lorem ipsum dolor sit.</a></li>
                  <li><a href="#">Libero eos voluptate nemo.</a></li>
                  <li><a href="#">Omnis exercitationem, itaque quibusdam!</a></li>
                </ul>

                <div class="u-mt6 Box--listadoHorizontal">
                  <div class="Box-header">
                    <h3 class="Box-name u-h4">Noticias relacionadas</h3>
                  </div>
                  <div class="Box-body">
                    <ul class="Box-gridList Grid Grid--rowSize3">
                      <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                        <a href="#">
                          <img class="Box-image" src="https://www.presidencia.gub.uy/wps/wcm/connect/pvpresidencia/5dbd6572-2d50-4ce9-b49c-c463169a0fc1/fcn+%282%29.png?MOD=AJPERES&amp;CACHEID=5dbd6572-2d50-4ce9-b49c-c463169a0fc1" alt="">

                          <span class="Box-info">31 de julio, 2018</span>
                          <h3 class="Box-title">En los últimos 7 años UTE regularizó 15.500 clientes y en 2018 estima formalizar otros 6.000</h3>
                        </a>
                      </li>
                      <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                        <a href="#">
                          <img class="Box-image" src="https://www.presidencia.gub.uy/wps/wcm/connect/pvpresidencia/5d5d952b-087a-4a64-a720-3621df85244a/fcn.png?MOD=AJPERES&amp;CACHEID=5d5d952b-087a-4a64-a720-3621df85244a" alt="">

                          <span class="Box-info">31 de julio, 2018</span>
                          <h3 class="Box-title">Instituto de la Leche registró un incremento de 6,3 % en la remisión a planta durante primer semestre de 2018</h3>
                        </a>
                      </li>
                      <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                        <a href="#">
                          <img class="Box-image" src="https://www.presidencia.gub.uy/wps/wcm/connect/pvpresidencia/212a1fe7-8bc4-4b83-8e8c-561de2dc695c/fcn.png?MOD=AJPERES&amp;CACHEID=212a1fe7-8bc4-4b83-8e8c-561de2dc695c" alt="">

                          <span class="Box-info">31 de julio, 2018</span>
                          <h3 class="Box-title">Banco de Previsión Social sumó 40 viviendas a las 10.000 soluciones habitacionales que tiene en Uruguay</h3>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

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
  </div>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
