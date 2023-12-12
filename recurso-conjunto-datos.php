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
                <p>Datos de remuneraciones año 2017 que incluyen valor de encuestas realizadas y aprobadas según ubicación geográfica y datos de remuneraciones por compensaciones especiales o diferencias por subrogación a cargos superiores</p>

                <a href="#" class="Button Button--inverse u-mb2 u-mr1">Descargar datos (.json)</a>
                <a href="visualizacion-recurso-conjunto-datos.php" class="Button Button--primary u-mb2 u-mr1">Visualizador gráfico</a>

                <p>URL: <a href="https://catalogodatos.gub.uy/dataset/3f185c68-4c1d-4c9c-832a-dffe3f6164c4/resource/74fd2035-573f-403c-a3b8-c4cd331fbed1/download/metadatos_json_output.json">https://catalogodatos.gub.uy/dataset/3f185c68-4c1d-4c9c-832a-dffe3f6164c4/resource/74fd2035-573f-403c-a3b8-c4cd331fbed1/download/metadatos_json_output.json</a></p>

                <div class="Bar u-mt6">
                  <div class="Bar-cell">
                    <h3 class="u-mb0">Texto</h3>
                  </div>
                  <div class="Bar-cell">
                    <button class="Button Button--small u-right"><span class="Icon Icon--code Icon--small u-mr1"></span>Incrustar</button>
                  </div>
                </div>

                <iframe class="u-mt2" src="https://catalogodatos.gub.uy/dataset/compensaciones_remuneraciones_por_concepto/resource/74fd2035-573f-403c-a3b8-c4cd331fbed1/view/2fd9101f-6bb5-461c-ac05-c77a950500de" frameborder="0" width="100%" data-module="data-viewer" allowfullscreen="" style="height: 646px;">
                  <p>Su navegador no soporta iframes.</p>
                </iframe>

                <h3>Información adicional</h3>

                <table class="Table">
                  <thead>
                    <tr>
                      <th>Campo</th>
                      <th>Valor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Título Columna 1">Estado</td>
                      <td data-title="Título Columna 2">Activo</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Última actualización</td>
                      <td data-title="Título Columna 2">28 Junio, 2018, 13:24 (UTC)</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Creado</td>
                      <td data-title="Título Columna 2">28 Junio, 2018, 13:24 (UTC)</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Formato</td>
                      <td data-title="Título Columna 2">JSON</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Licencia</td>
                      <td data-title="Título Columna 2">Licencia de DAG de Uruguay</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Nivel de apertura</td>
                      <td data-title="Título Columna 2">0 de 5<br>Razón: Licencia no abierta<br>Comprobado: Julio 25, 2018</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Enlace</td>
                      <td data-title="Título Columna 2">El enlace está bien.<br>Verificado: Julio 25, 2018</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Copia en caché</td>
                      <td data-title="Título Columna 2"><a href="https://catalogodatos.gub.uy/dataset/3f185c68-4c1d-4c9c-832a-dffe3f6164c4/resource/74fd2035-573f-403c-a3b8-c4cd331fbed1/download/metadatos_json_output.json">Descargar nueva copia en caché</a><br>Tamaño: 2.3 kB<br>Última: Julio 25, 2018</td>
                    </tr>
                  </tbody>
                </table>

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
