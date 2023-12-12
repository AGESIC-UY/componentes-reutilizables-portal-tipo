<?php
  $title = 'Ficha de Publicación';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
      <div class="Container">
          <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="#">Comunicación</a></li>
              <li><a href="#">Publicaciones</a></li>
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
                <h2 class="Page-title u-mb1">Nombre de la publicación</h2>
				<p class="u-mb4">Tipo de publicación</p>

                <?php include "./inc/page-info.php"; ?>

                <p class="Page-description">Resumen: descripción mínima que describe de qué se trata la publicación, máximo 1000 caracteres. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque.</p>

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

                <h3>Video</h3>
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

                  <div class="collapse" id="audioTitle1Transcription" aria-expanded="false" style="height: 0px;">
                    <div class="u-p3">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
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
								
								<h3>Autores</h3>
								<ul class="List List--media u-pt1">
									<li class="Media">
										<div class="Flag Flag--top">
											<div class="Flag-image">
												<img class="u-circle" width="60" src="img/60x60.png" alt="Imagen de ítem 1">
											</div>
											<div class="Flag-body">
												<h5 class="u-mb1">Nombre Apellido</h5>
												<p class="u-textSmall">Nacimiento: 03/02/1980 - Montevideo, Uruguay</p>
												<a href="#" class="u-outerLink u-mr2">Sitio web<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Correo electrónico<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Red social<span class="u-hideVisually">Enlace externo</span></a>
											</div>
										</div>
									</li>
								  <li class="Media">
										<div class="Flag Flag--top">
											<div class="Flag-image">
												<img class="u-circle" width="60" src="img/60x60.png" alt="Imagen de ítem 1">
											</div>
											<div class="Flag-body">
												<h5 class="u-mb1">Nombre Apellido</h5>
												<p class="u-textSmall">Nacimiento: 03/02/1980 - Montevideo, Uruguay</p>
												<a href="#" class="u-outerLink u-mr2">Sitio web<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Correo electrónico<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Red social<span class="u-hideVisually">Enlace externo</span></a>
											</div>
										</div>
									</li>
									<li class="Media">
										<div class="Flag Flag--top">
											<div class="Flag-image">
												<img class="u-circle" width="60" src="img/60x60.png" alt="Imagen de ítem 1">
											</div>
											<div class="Flag-body">
												<h5 class="u-mb1">Nombre Apellido</h5>
												<p class="u-textSmall">Nacimiento: 03/02/1980 - Montevideo, Uruguay</p>
												<a href="#" class="u-outerLink u-mr2">Sitio web<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Correo electrónico<span class="u-hideVisually">Enlace externo</span></a>
												<a href="#" class="u-outerLink u-mr2">Red social<span class="u-hideVisually">Enlace externo</span></a>
											</div>
										</div>
									</li>
								</ul>
								
								<!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>

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
