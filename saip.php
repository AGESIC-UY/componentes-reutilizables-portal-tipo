<?php
  $title = 'Tabla con Filtros';
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

  <!-- CONENIDO -->
  <div class="u-main" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4">
                    <div class="Page-nav">
                      <a class="Page-navTitle collapsed js-toggleLocalNav" data-toggle="collapse" href="#nav-target">
                        Institucional
                        <span class="Page-navStatus"></span>
                      </a>

                      <ul id="nav-target" class="Page-navList collapse">
                        <li><a href="#">Creación y evolución histórica</a></li>
                        <li><a href="#">Cometidos</a></li>
                        <li><a href="#">Plan estratégico</a></li>
                        <li><a href="#">Estructura del organismo</a></li>
                        <li><a href="#">Recursos humanos</a></li>
                        <li><a href="#">Normativa</a></li>
                        <li><a href="#">Transparencia</a></li>
                        <li><a href="#">Contacto</a></li>
                      </ul>
                    </div>

                    <!-- FILTROS -->
                    <div class="Filters">
                      <h3 class="Filters-title" data-toggle="collapse" data-target="#filters-target" aria-expanded="true">Filtros <div class="u-md-hide Filters-status">+</div></h3>
                      <form action="./" class="Form Form--stacked Form--filters u-md-show collapse in" id="filters-target" aria-expanded="true">
                        <?php
                          $filter_name = "Año";
                          $filter_id = "año";
                          include "./inc/filtros/filtro-select.php";
                        ?>
                        <?php
                          $filter_name = "Mes";
                          $filter_id = "mes";
                          include "./inc/filtros/filtro-select.php";
                        ?> 
                       
                        <div class="Form-group">
                          <button type="button" class="Button Button--primary u-right">Aplicar filtrar</button>
                        </div>
                      </form>
                    </div>
                    
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                        <span class="Page-subtitle">Transparencia</span>

                        <!-- Título se adapta a filtros-->
                        <h2 class="Page-title">Solicitudes de acceso a la información pública</h2>
						<!--
                        <div class="Page-info">
                          <div class="Bar">
                            <div class="Bar-cell">
                              <p class="u-textRight u-mb0 u-mr1">Ordenar por:</p>
                            </div>
                            <div class="Bar-cell" style="width: 190px;">
                              <select class="Form-select">
                                <option value="0">Relevancia</option>
                                <option value="1">Nombre ascendente</option>
                                <option value="2">Nombre descendente</option>
                                <option value="3">Última modificación</option>
                              </select>
                            </div>
                          </div>
                        </div> -->
				
						<p class="Page-description">Se detallan los informes solicitados en el marco de la ley 18.381, sobre acceso a la información pública.</p>
						
					<ul class="List List--media">
                      <li class="Media">
                                <div class="Media-body">
                                  <span class="Box-info">14/10/2020</span>
                                  <h3 class="Box-title"><a href="ficha-saip.php">Solicitud lorem ipsum blandit incorrupte sit amet consectetur</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam! Velit quam esse itaque eum maxime laboriosam atque culpa ut.</p>

                                  <a class="Download" href="#">
                                    <div class="Media">
                                      <div class="Media-image">
                                        <span class="Download-icon">
                                          <span class="Icon Icon--download"></span>
                                        </span>
                                      </div>
                                      <div class="Media-body">
                                        <div class="Download-title">Lorem iipsum dolor sit amet (.pdf 354 KB)</div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </li>
                              <li class="Media">
                                <div class="Media-body">
                                  <span class="Box-info">14/10/2020</span>
                                  <h3 class="Box-title"><a href="#">Solicitud lorem ipsum blandit incorrupte sit amet consectetur</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam! Velit quam esse itaque eum maxime laboriosam atque culpa ut.</p>

                                  <a class="Download" href="#">
                                    <div class="Media">
                                      <div class="Media-image">
                                        <span class="Download-icon">
                                          <span class="Icon Icon--download"></span>
                                        </span>
                                      </div>
                                      <div class="Media-body">
                                        <div class="Download-title">Lorem iipsum dolor sit amet (.pdf 354 KB)</div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </li>
                              <li class="Media">
                                <div class="Media-body">
                                  <span class="Box-info">14/10/2020</span>
                                  <h3 class="Box-title"><a href="#">Solicitud lorem ipsum blandit incorrupte sit amet consectetur</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam! Velit quam esse itaque eum maxime laboriosam atque culpa ut.</p>

                                  <a class="Download" href="#">
                                    <div class="Media">
                                      <div class="Media-image">
                                        <span class="Download-icon">
                                          <span class="Icon Icon--download"></span>
                                        </span>
                                      </div>
                                      <div class="Media-body">
                                        <div class="Download-title">Lorem iipsum dolor sit amet (.pdf 354 KB)</div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </li>
                              <li class="Media">
                                <div class="Media-body">
                                  <span class="Box-info">14/10/2020</span>
                                  <h3 class="Box-title"><a href="#">Solicitud lorem ipsum blandit incorrupte sit amet consectetur</a></h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam! Velit quam esse itaque eum maxime laboriosam atque culpa ut.</p>

                                  <a class="Download" href="#">
                                    <div class="Media">
                                      <div class="Media-image">
                                        <span class="Download-icon">
                                          <span class="Icon Icon--download"></span>
                                        </span>
                                      </div>
                                      <div class="Media-body">
                                        <div class="Download-title">Lorem iipsum dolor sit amet (.pdf 354 KB)</div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </li>
					</ul>
                      <div class="Pagination">
                        <div class="Pagination-text">Mostrando 5 de 19 resultados</div>
                        <ul class="Pagination-links">
                          <li class="Pagination-prev"><a href="#">Anterior</a></li>
                          <li class="is-selected"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
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
