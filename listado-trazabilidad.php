<?php
  $title = 'Seguimiento de trámites';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Trámites y servicios</a></li>
        <li><a href="#">Trámites</a></li>
        <!-- <li><a href="#">Seguimiento</a></li> -->
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
                        <?php $title = "Trámites y servicios"; include "inc/nav-local-header.php"; ?>

                          <ul class="Page-navList">
                              <li><a href="#">Trámites</a>
                                <ul class="Page-navSublist">
                                  <li><a href="#">Listado alfabético</a></li>
                                  <li class="is-active"><a href="#">Seguimiento</a></li>
                                </ul>
                              </li>
                              <li><a href="autoridades.html">Servicios</a></li>
                              <li><a href="autoridades.html">Formularios</a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                      <h2 class="Page-title">Seguimiento de trámites</h2>

                      <div class="Search">
                        <form action="./">
                          <input class="Search-input" type="search" placeholder="Ingresa el código de seguimiento del trámite" title="Buscar">
                          <button class="Search-button">Buscar</button>
                        </form>
                      </div>

                      <div class="Tracking List">
                        <div class="List-item">
                          <span class="Tracking-code">Código de seguimiento: 3BP66UI7I</span>
                          <h3 class="Tracking-title en-proceso"><a href="ficha-trazabilidad.php">Certificado Migratorio</a></h3>
                          <ul class="Tracking-info">
                            <li><span>Estado:</span> EN PROCESO</li>
                            <li><span>Inicio</span> 22/03/2018</li>
                            <li><span>Organismo:</span> Ministerio del Interior</li>
                          </ul>
                        </div>

                        <div class="List-item">
                          <span class="Tracking-code">Código de seguimiento: 6HASD812H</span>
                          <h3 class="Tracking-title en-proceso"><a href="ficha-trazabilidad.php">Lorem ipsum dolor sit amet consectetur</a></h3>
                          <ul class="Tracking-info">
                            <li><span>Estado:</span> EN PROCESO</li>
                            <li><span>Inicio</span> 12/02/2018</li>
                            <li><span>Organismo:</span> Ministerio de Vivienda, Ordenamiento Territorial y Medio Ambiente</li>
                          </ul>
                        </div>

                        <div class="List-item">
                          <span class="Tracking-code">Código de seguimiento: HAJ81H3OP</span>
                          <h3 class="Tracking-title en-proceso"><a href="ficha-trazabilidad.php">Ullam voluptate provident soluta veniam explicabo eaque</a></h3>
                          <ul class="Tracking-info">
                            <li><span>Estado:</span> EN PROCESO</li>
                            <li><span>Inicio</span> 08/02/2018</li>
                            <li><span>Organismo:</span> Ministerio de Salud Pública</li>
                          </ul>
                        </div>
                      </div>

                      <div class="Pagination">
                        <ul class="Pagination-links">
                          <li class="Pagination-prev"><a href="#">Anterior</a></li>
                          <li class="is-selected"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="Pagination-next"><a href="#">Siguiente</a></li>
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
