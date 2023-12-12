<?php
  $title = 'Streaming';
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
        <li><a href="#">Nombre del evento</a></li>
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

                <span class="Page-subtitle">Nombre del evento</span>
                <h2 class="Page-title">Relacionarse de forma innovadora: la nueva responsabilidad de los gobiernos</h2>

               	<?php include "./inc/page-info.php"; ?>

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Event">
                  <div class="Event-info">
                    <div class="Media">
                      <div class="Media-image">
                        <div class="Date">
                          <span class="Date-month">Abr</span>
                          <span class="Date-day">22</span>
                        </div>
                      </div>
                      <div class="Media-body">
                        <a href="subhome.php" class="Event-name">Nombre del evento</a>
                        <p class="Event-description">Título de la actividad</p>
                        <ul class="Event-details">
                          <li>14:00 hs - 16:00 hs</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="Video u-mt0">
                    <div class="FlexEmbed FlexEmbed--16by9">
                      <iframe class="FlexEmbed-item" src="https://www.youtube-nocookie.com/embed/_SwHmlnDW_k?rel=0" title="Video"></iframe>
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
                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <h3>Audio</h3>
                <div class="Audio">
                  <audio src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls>
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="" class="Audio-link">Ver transcripción</a>
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
