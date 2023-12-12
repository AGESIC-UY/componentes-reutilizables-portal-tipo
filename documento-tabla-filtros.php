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
										
										<!-- Navegación local + filtros MF -->
										<?php include 'inc/nav-local-filtros.php' ?>
										<!-- -->
                   
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                        <span class="Page-subtitle">Indicadores</span>

                        <!-- Título se adapta a filtros-->
                        <h2 class="Page-title">Índice de Precios del Consumo (IPC)</h2>
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
				
												<p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>
						
                        <div class="Page-info">
                          <div class="u-right">
                            <a href="./documento-grafica.php" class="Button u-mr2">
                              <span>Ver gráfica</span>
                            </a>

                            <button class="Button" type="button">
                              <span class="Icon Icon--download Icon--small"></span>
                              <span>Descargar datos</span>
                            </button>
                          </div>
                        </div>

                       <table class="Table Table--striped Table--responsive Table--middle u-textSmall">
                        <thead>
                          <tr>
                            <th>Indicador</th>
                            <th>Año</th>
                            <th>Mes</th>
                            <th>Índice</th>
                            <th>Valor mensual</th>
                            <th>Acumulado año</th>
                            <th>Acumulado 12 meses</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                          <tr>
                            <td data-title="Indicador">IPC</td>
                            <td data-title="Año">2019</td>
                            <td data-title="Mes">Agosto</td>
                            <td data-title="Índice" class="u-textRight">199,69</td>
                            <td data-title="Valor mensual" class="u-textRight">0.88</td>
                            <td data-title="Acumulado año" class="u-textRight">6.07</td>
                            <td data-title="Acumulado 12 meses" class="u-textRight">7.76</td>
                          </tr>
                        </tbody>
                       </table>

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
