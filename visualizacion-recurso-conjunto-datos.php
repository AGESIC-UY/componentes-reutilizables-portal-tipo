<?php
  $title = 'Documento Single';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Datos y estadísticas</a></li>
        <li><a href="listado-conjuntos-datos.php">Datos abiertos</a></li>
        <li><a href="ficha-conjunto-datos.php">Conjunto de datos</a></li>
        <li><a href="recurso-conjunto-datos.php">Datos y recursos</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size3of4">
          <div class="Page">

              <div class="Page-document">

                <span class="Page-subtitle">Datos y recursos</span>
                <h2 class="Page-title">Metadatos de remuneraciones y compensaciones por concepto 2017</h2>

                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Última actualización: 28 Junio, 2018, 13:24 (UTC)</div>
                    </div>
                    <div class="Bar-cell">
                      <ul class="Page-actions">
                        <li>
                          <a href="#" class="Button Button--small">
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

                <!-- <p class="Page-description">Remuneraciones de funcionarios</p> -->
                <p>Esta herramienta tiene el propósito de facilitar la visualización del complejo marco institucional del agua en Uruguay y los diversos actores vinculados a la temática. A partir del mapeo realizado, que reúne más de 140 actores y se encuentra aún en construcción, agrupamos a los actores por competencias, tomando como referencia los respectivos marcos normativos. La información puede clasificarse por sector (gubernamental, academia, sociedad civil, entre otros) y ámbito territorial (nacional, regional, departamental, local e internacional), y está abierta a aportes.</p>

                <div class="Bar u-mt6 u-mb2">
                  <div class="Bar-cell">
                    <h3 class="u-mb0">Visualizador gráfico</h3>
                  </div>
                  <div class="Bar-cell">
                    <button class="Button Button--small u-right"><span class="Icon Icon--code Icon--small u-mr1"></span>Incrustar</button>
                  </div>
                </div>

                <div class="flourish-embed" data-src="visualisation/29013"></div><script src="https://public.flourish.studio/resources/embed.js"></script>
                <!--
                <iframe src="https://public.flourish.studio/visualisation/29013/" frameborder="0" width="100%" data-module="data-viewer" style="height: 600px;">
                  <p>Su navegador no soporta iframes.</p>
                </iframe>
                -->

              </div>
          </div>
        </div>

        <div class="Grid-item u-md-size1of4">

          <div class="Box">
            <div class="Box-header">
              <h3 class="Box-name">Datos abiertos</h3>
            </div>
            <div class="Box-body">
              <ul class="u-bullet">
                <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)">Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)</a>
                <ul class="u-pl3"><li><a href="visualizacion-recurso-conjunto-datos.php">Visualizador gráfico</a></li></ul>
                </li>
                <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)">Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)</a></li>
                <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)">Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)</a></li>
                <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)">Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)</a></li>
              </ul>
            </div>
          </div>

          <div class="Box Box--navLocal">
            <div class="Page-nav">
              <a class="Page-navTitle js-toggleLocalNav" href="#">Remuneraciones y compensaciones por concepto</a>
              <ul class="Page-navList">
                <li><a href="ficha-conjunto-datos.php">Datos y recursos</a>
                  <ul class="Page-navSublist">
                    <li class="is-active"><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2017 (.json 24 KB)">Metadatos de remuneraciones...</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2017 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Metadatos de remuneraciones y compensaciones por concepto 2018 (.json 24 KB)">Metadatos de remuneraciones..</a></li>
                    <li><a href="recurso-conjunto-datos.php" title="Montos de remuneraciones y compensaciones por concepto 2018 (.csv 24 KB)">Montos de remuneraciones..</a></li>
                  </ul>
                </li>
                <li><a href="#">Flujo de actividad</a></li>
                <li><a href="#">Categoría</a></li>
                <li><a href="#">Aplicaciones</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
