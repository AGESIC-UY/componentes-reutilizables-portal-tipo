<?php
  $title = 'Datos estadísticos';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Datos y estadísticas</a></li>
        <li><a href="listado-datos-estadisticos.php">Estadísticas</a></li>
      </ul>
    </div>
  </div>

  <!-- CONENIDO -->
  <div class="u-main" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4">

                      <!-- FILTROS -->
                      <div class="Filtros">
                        <h2 class="Filtros-title collapsed" data-toggle="collapse" data-target="#filtros-target">
                          Filtros <div class="u-md-hide Filtros-status">+</div>
                        </h2>

                        <div class="collapse u-md-show" id="filtros-target">
                          <div class="Form">
                            <h6 class="Filtros-subtitle">
                              Buscar por palabra clave:
                            </h6>

                            <div class="u-mb3">
                              <input type="search" placeholder="Palabra clave">
                            </div>

                            <h6 class="Filtros-subtitle">
                              Filtro por colección:
                            </h6>

                            <div class="u-mb3">
                              <select name="coleccion" id="coleccion">
                                <option value="0">Todas las colecciones</option>
                                <option value="1">Metadatos Operaciones Estadísticas del INE</option>
                                <option value="2">Metadatos Operaciones Estadísticas del SEN</option>
                                <option value="3">Inventarios</option>
                              </select>
                            </div>

                            <h6 class="Filtros-subtitle">
                              Filtrar por año:
                            </h6>

                            <div class="u-mb3">
                              <div class="Grid">
                                <div class="Grid-item u-size1of2">
                                  <select name="Desde:">
                                    <option value="" disabled selected>Desde:</option>
                                    <option value="0">1995</option>
                                    <option value="1">1996</option>
                                    <option value="2">1997</option>
                                    <option value="3">1998</option>
                                    <option value="4">1999</option>
                                  </select>
                                </div>

                                <div class="Grid-item u-size1of2">
                                  <select name="Hasta:">
                                    <option value="" disabled selected>Hasta:</option>
                                    <option value="0">2014</option>
                                    <option value="1">2015</option>
                                    <option value="2">2016</option>
                                    <option value="3">2017</option>
                                    <option value="4">2018</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <h6 class="Filtros-subtitle">
                              Filtro por tipo de acceso a datos:
                            </h6>

                            <ul class="Form-checkboxes u-listReset">
                              <li>
                                <label for="TipoDato1">
                                  <input type="checkbox" id="TipoDato1" value="Todos" checked>
                                  <span>Todos</span>
                                </label>
                              </li>
                              <li>
                                <label for="TipoDato2">
                                  <input type="checkbox" id="TipoDato2" value="Acceso directo a los datos">
                                  <span>Acceso directo a los datos</span>
                                </label>
                              </li>
                              <li>
                                <label for="TipoDato3">
                                  <input type="checkbox" id="TipoDato3" value="Archivos de uso público">
                                  <span>Archivos de uso público</span>
                                </label>
                              </li>
                              <li>
                                <label for="TipoDato4">
                                  <input type="checkbox" id="TipoDato4" value="Archivos de datos con Licencia de acceso">
                                  <span>Archivos de datos con Licencia de acceso</span>
                                </label>
                              </li>
                              <li>
                                <label for="TipoDato5">
                                  <input type="checkbox" id="TipoDato5" value="Datos disponibles en repositorio externo">
                                  <span>Datos disponibles en repositorio externo</span>
                                </label>
                              </li>
                              <li>
                                <label for="TipoDato6">
                                  <input type="checkbox" id="TipoDato6" value="Datos no disponibles">
                                  <span>Datos no disponibles</span>
                                </label>
                              </li>
                            </ul>

                            <button class="Button Button--primary u-right u-mt4">Aplicar filtros</button>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">
                        <span class="Page-subtitle">Datos y estadísticas</span>
                        <h2 class="Page-title">Estadísticas</h2>

                        <!-- Aparece cuando hay filtros aplicados -->
                        <div class="Alert Alert--info">Hay filtros de búsqueda aplicados. <a href="#">Limpiar filtros</a></div>

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
                        </div>

                        <ul class="List List--media">
                          <li class="Media">
                            <div class="Media-image">
                              <span class="IconDataAccess IconDataAccess--dataNa" title="Datos no disponibles"></span>
                            </div>
                            <div class="Media-body">
                              <h3><a href="#">Activos de Reserva</a></h3>
                              <p class="u-textMedium">2013</p>
                              <p>Por: Banco Central del Uruguay (BCU) (Organismo responsable), Gerencia de Política Económica y Mercados (Servicio responsable), Area Política Monetaria y Programación Macroeconómica - Departamento.</p>
                              <p>Colección: <a href="#">Inventario de Operaciones Estadísticas del Sistema Estadístico Nacional</a></p>
                              <div class="u-textSmall u-textMute u-mt2">
                                <span class="u-pr3 u-inlineBlock">Creado el: 18 Feb, 2014</span>
                                <span class="u-pr3 u-inlineBlock">Última modificación: 01 Apr, 2014</span>
                                <span class="u-pr3 u-inlineBlock">Visitas: 23217</span>
                                <span class="u-pr3 u-inlineBlock">Descargas: 954</span>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <span class="IconDataAccess IconDataAccess--public" title="Archivos de uso público"></span>
                            </div>
                            <div class="Media-body">
                              <h3><a href="#">Encuesta de Usos de Tecnologías de la Información y Comunicación, Año 2013</a></h3>
                              <p class="u-textMedium">2013 - 2014</p>
                              <p>Por: Instituto Nacional de Estadísitica, División Normalización, Investigación y Proyectos, Departamento Proyectos.</p>
                              <p>Colección: <a href="#">Estadísticas Sociodemográficas - Encuestas Especiales a hogares</a></p>
                              <div class="Tags u-mb1">
                                <a href="#" class="Tags-item Tags-item--rar">RAR</a>
                                <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                                <a href="#" class="Tags-item Tags-item--pdf">PDF</a>
                              </div>
                              <div class="u-textSmall u-textMute u-mt2">
                                <span class="u-pr3 u-inlineBlock">Creado el: 28 Oct, 2014</span>
                                <span class="u-pr3 u-inlineBlock">Última modificación: 28 Oct, 2014</span>
                                <span class="u-pr3 u-inlineBlock">Visitas: 225518</span>
                                <span class="u-pr3 u-inlineBlock">Descargas: 4200</span>
                              </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <span class="IconDataAccess IconDataAccess--remote" title="Datos disponibles en repositorio externo"></span>
                            </div>
                            <div class="Media-body">
                                <h3><a href="#">Censos 2011, 8º censo de población, 4º censo de hogares, 6º censo de viviendas y 1° Entorno Urbanístico</a></h3>
                                <p class="u-textMedium">2007 -2011</p>
                                <p>Por: Instituto Nacional de Estadística</p>
                                <p>Colección: <a href="#">Censos</a></p>
                                <div class="u-textSmall u-textMute u-mt2">
                                  <span class="u-pr3 u-inlineBlock">Creado el: 18 Feb, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Última modificación: 01 Apr, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Visitas: 23217</span>
                                  <span class="u-pr3 u-inlineBlock">Descargas: 954</span>
                                </div>
                            </div>
                          </li>

                          <li class="Media">
                            <div class="Media-image">
                              <span class="IconDataAccess IconDataAccess--licensed" title="Archivos de datos con Licencia de acceso"></span>
                            </div>
                            <div class="Media-body">
                                <h3><a href="#">Directorio de Empresas y Establecimientos, Directorio Micro, Pequeña y Mediana Empresa 2016</a></h3>
                                <p class="u-textMedium">2016</p>
                                <p>Por: Instituto Nacional de Estadística, División Estadísticas Económicas, Directorio de Empresas y Establecimientos, Área Directorio.</p>
                                <div class="Tags u-mb1">
                                  <a href="#" class="Tags-item Tags-item--undefined">IMG</a>
                                  <a href="#" class="Tags-item Tags-item--xls">XLS</a>
                                  <a href="#" class="Tags-item Tags-item--csv">CSV</a>
                                  <a href="#" class="Tags-item Tags-item--undefined">API</a>
                                </div>
                                <div class="u-textSmall u-textMute u-mt2">
                                  <span class="u-pr3 u-inlineBlock">Creado el: 18 Feb, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Última modificación: 01 Apr, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Visitas: 23217</span>
                                  <span class="u-pr3 u-inlineBlock">Descargas: 954</span>
                                </div>
                            </div>
                          </li>
                          <li class="Media">
                            <div class="Media-image">
                              <span class="IconDataAccess IconDataAccess--direct" title="Acceso directo a los datos"></span>
                            </div>
                            <div class="Media-body">
                                <h3><a href="#">Censo General Agropecuario 2011</a></h3>
                                <p class="u-textMedium">2011 - 2012</p>
                                <p>Por: Estadísticas Agropecuarias - DIEA - Ministerio Ganaderia Agricultura y Pesca</p>
                                <p>Colección: <a href="#">Estadísticas del Ministerio de Ganadería, Agricultura y Pesca</a></p>
                                <div class="u-textSmall u-textMute u-mt2">
                                  <span class="u-pr3 u-inlineBlock">Creado el: 18 Feb, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Última modificación: 01 Apr, 2014</span>
                                  <span class="u-pr3 u-inlineBlock">Visitas: 23217</span>
                                  <span class="u-pr3 u-inlineBlock">Descargas: 954</span>
                                </div>
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
