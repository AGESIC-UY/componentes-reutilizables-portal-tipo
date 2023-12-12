<?php
  $title = 'Normativa';
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
                        <li class="is-active"><a href="#">Normativa</a></li>
                        <li><a href="#">Transparencia</a></li>
                        <li><a href="#">Contacto</a></li>
                      </ul>
                    </div>
                    
                    <!-- FILTROS -->
                    <div class="Filters">
                      <h3 class="Filters-title" data-toggle="collapse" data-target="#filters-target" aria-expanded="true">Filtros <div class="u-md-hide Filters-status">+</div></h3>
                      <form action="./" class="Form Form--stacked Form--filters u-md-show collapse in" id="filters-target" aria-expanded="true">
                        <?php
                          $filter_name = "Tipo";
                          $filter_id = "tipo";
                          include "./inc/filtros/filtro-select.php";
                        ?>
                        <?php
                          $filter_name = "Año de publicación";
                          $filter_id = "año_publicacion";
                          include "./inc/filtros/filtro-select.php";
                        ?> 
                        <?php
                          $filter_name = "Mes de publicación";
                          $filter_id = "mes_publicacion";
                          include "./inc/filtros/filtro-select.php";
                        ?>
                        <?php
                          $filter_name = "Tema";
                          $filter_id = "tema";
                          include "./inc/filtros/filtro-select.php";
                        ?>
                        <?php
                          $filter_name = "Subtema";
                          $filter_id = "subtema";
                          include "./inc/filtros/filtro-select.php";
                        ?>
                        <?php
                          $filter_name = "Público";
                          $filter_id = "publico";
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
                        <span class="Page-subtitle">Institucional</span>

                        <!-- Título se adapta a filtros-->
                        <h2 class="Page-title">Normativa 2012</h2>

                        <div class="Page-info">
                          <div class="Bar">
                            <div class="Bar-cell">
                              <p class="u-textRight u-mb0 u-mr1">Ordenar por:</p>
                            </div>
                            <div class="Bar-cell" style="width: 190px;">
                              <select class="Form-select">
                                <option value="0">Nombre ascendente</option>
                                <option value="1">Nombre descendente</option>
                                <option value="2">Última modificación</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <ul class="List List--media">
                          <li class="Media">
                            <div class="Media-body">
                            <div class="Box-info">23/06/2021</div>
                              <h3><a href="ficha-normativa.php">Tipo (Decreto o Decreto Ley) + Nº 0.000 (o s/n) + /000 (año) + Art. 0.000 (o vacío) + nombre de la norma</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-body">
                              <h3><a href="ficha-normativa.php">Tipo (Ley) + Nº 0.000 (o s/n) + Art. 0.000 (o vacío) + de fecha dd/mm/aaaa + nombre</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-body">
                              <span class="Box-info">Info adicional</span>
                              <h3><a href="https://www.impo.com.uy/bases/decretos/382-2018/1" target="_blank">Tipo (Resolución, Dictamen, Resolución Poder Ejecutivo, Ordenanza) + Nº 0.000 (o s/n) + /000 (año) + nombre</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-body">
                              <span class="Box-info">Info adicional</span>
                              <h3><a href="https://www.impo.com.uy/bases/decretos/382-2018/1" target="_blank">Tipo (Constitución) + Art. 0.000 (o vacío) + nombre</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-body">
                              <h3><a href="ficha-normativa.php">Tipo (Internacional, Misiones Oficiales, Proyectos de Ley, Comisiones de Servicio) + nombre</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-body">
                              <span class="Box-info">Info adicional</span>
                              <h3><a href="https://www.impo.com.uy/bases/decretos/382-2018/1" target="_blank">Tipo (Otros tipos de norma) + Nº 0.000 (o s/n) + de fecha dd/mm/aaaa + nombre</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis congue diam. Nunc eget mattis felis. Duis vel fringilla quam. Quisque commodo dolor ac lorem consequat blandit. Quisque volutpat lacus euismod dui vehicula pharetra.</p>
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
