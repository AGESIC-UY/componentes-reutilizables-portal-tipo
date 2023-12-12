<?php
  $title = 'Documento genérico';
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
            <div class="Page-nav">
              <?php include "inc/nav-local-header.php"; ?>

              <ul class="Page-navList">
								<li><a href="#">El organismo</a></li>
								<li><a href="#">Autoridades</a></li>
								<li><a href="#">Estructura organizativa</a></li>
								<li>
									<a href="#">Items</a>
									<ul class="Page-navSublist">
										<li><a href="#">Item uno</a></li>
										<li class="is-active"><a href="#">Item dos</a></li>
										<li><a href="#">Item tres</a></li>
										<li><a href="#">Item cuatro</a></li>
									</ul>
								</li>
								<li><a href="#">Normativa</a></li>
								<li><a href="#">Llamados y concursos</a></li>
								<li><a href="#">Adquisiciones</a></li>
								<li><a href="#">Participación</a></li>
								<li><a href="#">Datos Abiertos</a></li>
								<li><a href="#">Transparencia</a></li>
								<li><a href="#">Preguntas frecuentes</a></li>
								<li><a href="#">Contacto</a></li>
              </ul>
          	</div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Título del contenido genérico</h2>

                <?php include "./inc/page-info.php"; ?> 

                <p class="Page-description">Resumen del contenido genérico. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

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

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

                <blockquote class="Blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nostrum iure quae ratione delectus suscipit aperiam eius iste sequi quaerat.</blockquote>


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


                <h3>Galería de imágenes</h3>
                <div class="Carousel" tabindex="0">
                  <div>
                    <img src="./img/720x350-yellow.png" alt="">
                    <p class="Carousel-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                  <div>
                    <img src="img/720x350-red.png" alt="">
                    <p class="Carousel-caption">Perferendis, doloribus nemo quae quis earum dignissimos rem!</p>
                  </div>
                  <div>
                    <img src="img/720x350-blue.png" alt="">
                    <p class="Carousel-caption">Animi, necessitatibus. Quas dolor vel quidem magni iusto.</p>
                  </div>
                  <div>
                    <img src="img/720x350-green.png" alt="">
                    <p class="Carousel-caption">Iure, sint possimus voluptatum hic temporibus ullam, natus.</p>
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
