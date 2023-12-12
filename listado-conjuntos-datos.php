<?php
  $title = 'Carpeta Single';
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
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size3of4">
          <div class="Page">

            <span class="Page-subtitle">Datos abiertos</span>

              <h2 class="Page-title">24 conjuntos de datos abiertos</h2>

              <div class="Page-info">
                <div class="Bar">
                  <div class="Bar-cell">
                    <p class="u-textRight u-mb0 u-mr1">Ordenar por:</p>
                  </div>
                  <div class="Bar-cell" style="width:190px;">
                    <div class="Search">
                      <select class="Search-input">
                        <option value="0">Relevancia</option>
                        <option value="1">Nombre ascendente</option>
                        <option value="2">Nombre descendente</option>
                        <option value="3">Última modificación</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <ul class="List List--media">
                  <li class="Media">
                      <div class="Media-body">
                          <h3><a href="ficha-conjunto-datos.php">Presupuesto</a></h3>
                          <p>Datos de la ejecución presupuestal</p>
                          <div class="Tags u-mb1">
                            <a href="#" class="Tags-item Tags-item--json">JSON</a>
                            <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                          </div>
                          <p><strong>Última actualización: </strong>6 de julio de 2018, 14:45 (UTC-03:00)</p>
                      </div>
                  </li>
                  <li class="Media">
                      <div class="Media-body">
                          <h3><a href="ficha-conjunto-datos.php">Remuneraciones y compensaciones por concepto</a></h3>
                          <p>Remuneraciones de funcionarios</p>
                          <div class="Tags u-mb1">
                            <a href="#" class="Tags-item Tags-item--json">JSON</a>
                            <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                          </div>
                          <p><strong>Última actualización: </strong>4 de julio de 2018, 11:58 (UTC-03:00)</p>
                      </div>
                  </li>
                  <li class="Media">
                      <div class="Media-body">
                          <h3><a href="ficha-conjunto-datos.php">Encuesta Continua de Hogares 2012</a></h3>
                          <p>Microdatos de la Encuesta Continua de Hogares año 2012</p>
                          <div class="Tags u-mb1">
                            <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                            <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                          </div>
                          <p><strong>Última actualización: </strong>2 de julio de 2018, 14:56 (UTC-03:00)</p>
                      </div>
                  </li>
                  <li class="Media">
                    <div class="Media-body">
                      <h3><a href="ficha-conjunto-datos.php">Encuesta Continua de Hogares año 2013</a></h3>
                      <p>Microdatos, cuestionarios, diccionario de variables y notas de la Encuesta Continua de Hogares año 2013</p>
                      <div class="Tags u-mb1">
                        <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                        <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                        <a href="#" class="Tags-item Tags-item--pdf">PDF</a>
                      </div>
                      <p><strong>Última actualización: </strong>2 de julio de 2018, 14:55 (UTC-03:00)</p>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-body">
                      <h3><a href="ficha-conjunto-datos.php">Encuesta Continua de Hogares 2008</a></h3>
                      <p>Microdatos de la Encuesta Continua de Hogares 2008. Se adjuntan dos datasets, el primero correspondiente a los datos del hogar encuestado y el segundo contiene los datos de las personas integrantes de cada hogar.</p>
                      <div class="Tags u-mb1">
                        <a href="#" class="Tags-item Tags-item--json">JSON</a>
                        <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                        <a href="#" class="Tags-item Tags-item--html">HTML</a>
                        <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                        <a href="#" class="Tags-item Tags-item--pdf">PDF</a>
                        <a href="#" class="Tags-item Tags-item--zip">ZIP</a>
                        <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                        <a href="#" class="Tags-item Tags-item--xml">XML</a>
                        <a href="#" class="Tags-item Tags-item--txt">TXT</a>
                        <a href="#" class="Tags-item Tags-item--undefined">UNDEFINED</a>
                      </div>
                      <p><strong>Última actualización: </strong>24 de abril de 2017, 21:00 (UTC-03:00)</p>
                    </div>
                  </li>
              </ul>

              <div class="Pagination">
                  <div class="Pagination-text">Mostrando 5 de 24 resultados</div>
                  <ul class="Pagination-links">
                      <li class="Pagination-prev"><a href="#">Anterior</a></li>
                      <li class="is-selected"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li class="Pagination-next"><a href="#">Siguiente</a></li>
                  </ul>
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
                <li><a href="listado-conjuntos-datos.php">Conjuntos de datos abiertos</a></li>
                <li><a href="#">Flujo de actividad</a></li>
              </ul>
            </div>
          </div>

          <div class="Box Box--navLocal">
            <div class="Page-nav">
              <a class="Page-navTitle js-toggleLocalNav" href="#">Datos abiertos</a>
              <ul class="Page-navList">
                <li class="is-active"><a href="#">Conjuntos de datos abiertos</a></li>
                <li><a href="#">Flujo de actividad</a></li>
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
