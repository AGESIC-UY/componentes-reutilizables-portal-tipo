<?php
  $title = 'Encuesta';
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
              <a class="Page-navTitle js-toggleLocalNav" href="#">
                  <span class="Caret u-md-hide"></span>Comunicación
              </a>

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

                <span class="Page-subtitle">Resultado de la encuesta</span>
                <h2 class="Page-title">Nombre de la encuesta</h2>

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Poll">
                  <div class="Poll-item">
                    <p class="Poll-text">
                      Excelente
                      <span>490 (49%)</span>
                    </p>

                    <div class="Poll-bar">
                      <div class="Poll-track">
                        <div class="Poll-fill" style="width: 49%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="Poll-item">
                    <p class="Poll-text u-textBold">
                      Muy buena
                      <span>240 (24%)</span>
                    </p>
                    <div class="Poll-bar ">
                      <div class="Poll-track">
                        <div class="Poll-fill u-textBold" style="width: 24%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="Poll-item">
                    <p class="Poll-text">
                      Buena
                      <span>120 (12%)</span>
                    </p>
                    <div class="Poll-bar">
                      <div class="Poll-track">
                        <div class="Poll-fill" style="width: 12%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="Poll-item">
                    <p class="Poll-text">
                      Regular
                      <span>100 (10%)</span>
                    </p>
                    <div class="Poll-bar">
                      <div class="Poll-track">
                        <div class="Poll-fill" style="width: 10%;"></div>
                      </div>
                    </div>
                  </div>

                  <div class="Poll-item">
                    <p class="Poll-text">
                      Mala
                      <span>50 (5%)</span>
                    </p>
                    <div class="Poll-bar">
                      <div class="Poll-track">
                        <div class="Poll-fill" style="width: 5%;"></div>
                      </div>
                    </div>
                  </div>

                  <p class="Poll-total">Total: 1.000</p>
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
