<?php
  $title = 'Documento con índice';
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
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
						<?php include 'inc/nav-local.php' ?>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">
              <div class="Page-document">
                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Estudiantes de UTU reflexionan y debaten sobre consumos problemáticos</h2>

                <?php include "./inc/page-info.php"; ?> 

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>

                <div class="Page-index Index js-pageIndex">
                <div class="Index-header">
                  <a href="#" accesskey="i" class="Index-trigger js-toggleIndex">
                    <span><u>Í</u>ndice</span> <span class="Index-close">Cerrar</span>
                  </a>
                </div>

                <div class="Index-body">
                  <div class="Index-search">
                    <div class="Search Search--small">
                      <form action="./">
                        <input class="Search-input" type="search" placeholder="Buscar…">
                        <button class="Search-button">Buscar</button>
                      </form>
                    </div>
                  </div>

                  <ul class="Index-nav">
                    <li><a href="#section1">Sección 1</a></li>
                    <li class="is-active"><a href="#section2">Sección 2</a></li>
                    <li>
                      <a href="#section3">Sección 3</a>
                      <ul class="Index-subnav">
                        <li><a href="#">Segundo nivel 1</a></li>
                        <li class="is-active"><a href="#">Segundo nivel 2</a></li>
                        <li><a href="#">Segundo nivel 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#section4">Sección 4</a></li>
                    <li><a href="#section5">Sección 5</a></li>
                    <li><a href="#section6">Sección 6</a></li>
                    <li><a href="#section7">Sección 7</a></li>
                    <li><a href="#section8">Sección 8</a></li>
                    <li><a href="#section9">Sección 9</a></li>
                    <li><a href="#section10">Sección 10</a></li>
                    <li><a href="#section11">Sección 11</a></li>
                    <li><a href="#section12">Sección 12</a></li>
                    <li><a href="#section13">Sección 13</a></li>
                    <li><a href="#section14">Sección 14</a></li>
                    <li><a href="#section15">Sección 15</a></li>
                  </ul>
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

                <h3 id="section1">Sección 1</h3>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

                <h3 id="section2">Sección 2</h3>

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

                <h3 id="section3">Sección 3</h3>


                <h3>Tabla</h3>

                <table class="Table Table--responsive">
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

                <div class="Audio">
                  <audio src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="" class="Audio-link">Ver transcripción</a>
                </div>

                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <h3 id="section4">Sección 4</h3>

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

                <h3 id="section5">Sección 5</h3>
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
