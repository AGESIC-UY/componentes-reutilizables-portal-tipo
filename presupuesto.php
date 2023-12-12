<?php
  $title = 'Presupuesto';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
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
              <?php $title = "Institucional"; include "inc/nav-local-header.php"; ?>

              <ul class="Page-navList">
                  <li><a href="#">El organismo</a></li>
                  <li><a href="#">Autoridades</a></li>
                  <li><a href="#">Estructura organizativa</a></li>
                  <li class="is-active"><a href="#">Presupuesto</a></li>
                  <li><a href="#">Plan estratégico</a></li>
                  <li><a href="#">Normativa</a></li>
                  <li><a href="#">Llamados y concursos</a></li>
                  <li><a href="#">Adquisiciones</a></li>
                  <li><a href="#">Participación</a></li>
                  <li><a href="#">Datos Abiertos</a></li>
                  <li><a href="#">Transparencia</a></li>
                  <li><a href="#">Preguntas frecuentes</a></li>
                  <li><a href="#">Contacto</a></li>
              </ul>
          </div>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Institucional</span>
                <h2 class="Page-title">Presupuesto</h2>

                <?php include "./inc/page-info.php"; ?>

                <p class="Page-description">Datos del presupuesto en el período 2016-2020. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis lorem eu lectus laoreet efficitur. In sit amet ante in mauris mattis sollicitudin.</p>

                <div class="Totales">
                  <div class="Totales-box">
                    <div class="Grid">
                      <div class="Grid-item u-md-size1of4">
                        <p class="u-mb0"><strong>Apertura</strong></p>
                        <p class="u-textLarge u-mb0"><strong>$40.050.376.253</strong></p>
                      </div>
                      <div class="Grid-item u-md-size1of4">
                        <p class="u-mb0">Afectado</p>
                        <p class="u-mb0"><strong>$40.050.376.253</strong></p>
                      </div>
                      <div class="Grid-item u-md-size1of4">
                        <p class="u-mb0">Comprometido</p>
                        <p class="u-mb0"><strong>$40.050.376.253</strong></p>
                      </div>
                      <div class="Grid-item u-md-size1of4">
                        <p class="u-mb0">Asignado</p>
                        <p class="u-mb0"><strong>$40.050.376.253</strong></p>
                      </div>
                    </div>
                  </div>
                  <div class="Totales-info">
                    <p>Vigencia: 00/00/0000</p>
                    <p class="u-right">Fuente: Lorem dolor sit amet in corrupte</p>
                  </div>
                </div>

                <h3>Distribución por Unidad ejecutora</h3>
                <div class="Page-info u-mb2">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <p class="u-textRight u-mb0 u-mr1">Mostrar datos del año:</p>
                    </div>
                    <div class="Bar-cell" style="width: 190px;">
                      <select class="Form-select">
                        <option value="0">2016</option>
                        <option value="1">2017</option>
                        <option value="2">2018</option>
                        <option value="3">2019</option>
                      </select>
                    </div>
                  </div>
                </div>

                <table class="Table Table--collapse js-tableCollapse Table--responsive Table--borderless Table--middle">
                  <thead>
                    <tr>
                      <th class="u-py2">Unidad ejecutora</th>
                      <th class="u-textRight u-py2">Ejecutado</th>
                      <th class="u-textRight u-py2">Progreso</th>
                      <th class="u-textRight u-py2">Asignado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="u-textBold" data-toggle="collapse" data-target="#direccion-general-secretaria" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        001 - Dirección General de Secretaría
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$645.376.253</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--warning" style="width: 89%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$723.224.072</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="direccion-general-secretaria" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-pl2 u-md-pl5">440 - Atención Integral de la Salud</td>
                                  <td data-title="Ejecutado">$105.362.373</td>
                                  <td data-title="Progreso">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 99%;"></div></div>
                                  </td>
                                  <td data-title="Asignado">$105.520.864</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-pl2 u-md-pl5">441 - Rectoría en Salud</td>
                                  <td data-title="Ejecutado">$531.222.448</td>
                                  <td data-title="Progreso">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--danger" style="width: 87%;"></div></div>
                                  </td>
                                  <td data-title="Asignado">$608.321.122</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">442 - Promoción en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$8.631.458</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 93%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$9.222.112</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">815 - Personal excedentario de ejercicios anteriores</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$159.974</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 100%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$159.974</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>

                    <tr class="u-textBold" data-toggle="collapse" data-target="#junta-nacional-salud" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        102 - Junta Nacional de Salud
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$3.678.053</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 95%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$3.832.197</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="junta-nacional-salud" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">440 - Atención Integral de la Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$1.894.643</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 99%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$1.907.333</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">441 - Rectoría en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$1.783.410</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 92%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$1.924.864</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>

                    <tr class="u-textBold" data-toggle="collapse" data-target="#direccion-general-salud" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        103 - Dirección General de la Salud
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$1.112.178.175</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 96%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$1.155.997.542</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="direccion-general-salud" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">440 - Atención Integral de la Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$57.556.332</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 95%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$60.578.253</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">441 - Rectoría en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$1.014.632.606</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 96%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$1.055.070.695</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">442 - Promoción en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$28.752.648</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 99%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$28.756.905</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">443 - Ciencia y Tecnología de la salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$11.236.589</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 96%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$11.591.689</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>

                    <tr class="u-textBold" data-toggle="collapse" data-target="#indt" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        104 - Instituto Nacional de Donación y Trasplante de Células, Tejidos y Órganos
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$98.403.942</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 93%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$104.693.649</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="indt" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">440 - Atención Integral de la Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$91.625.534</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 93%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$97.780.666</td>
                                </tr>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">443 - Ciencia y Tecnología de la salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$6.778.408</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 98%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$6.912.983</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                      <!-- -->

                    <tr class="u-textBold" data-toggle="collapse" data-target="#dgsnis" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        105 - Dirección General del Sistema Nacional Integrado de Salud
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$24.084.548</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--warning" style="width: 87%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$27.638.426</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="dgsnis" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">441 - Rectoría en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$24.084.548</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--warning" style="width: 87%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$27.638.426</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>

                    <tr class="u-textBold" data-toggle="collapse" data-target="#direccion-general-coordinacion" role="button" aria-expanded="false">
                      <td data-title="Unidad ejecutora" class="u-py2">
                        <span class="js-collapseStatus">+</span>
                        106 - Dirección General de Coordinación
                      </td>
                      <td data-title="Ejecutado" class="u-textRight u-py2">$2.910.063</td>
                      <td data-title="Progreso" class="u-textRight u-py2">
                        <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 99%;"></div></div>
                      </td>
                      <td data-title="Asignado" class="u-textRight u-py2">$2.923.309</td>
                    </tr>
                      <!-- Segundo nivel -->
                      <tr class="Table-rowTarget">
                        <td colspan="5" class="hiddenRow">
                          <div id="direccion-general-coordinacion" class="Table-target js-tableTarget collapse" aria-expanded="false">
                            <table class="Table Table--responsive Table--borderless Table--middle u-my0">
                              <tbody>
                                <tr>
                                  <td data-title="Unidad ejecutora" class="u-py2 u-pl6">441 - Rectoría en Salud</td>
                                  <td data-title="Ejecutado" class="u-textRight u-py2">$2.910.063</td>
                                  <td data-title="Progreso" class="u-textRight u-py2">
                                    <div class="Progress"><div class="Progress-bar Progress-bar--success" style="width: 99%;"></div></div>
                                  </td>
                                  <td data-title="Asignado" class="u-textRight u-py2">$2.923.309</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                  </tbody>
                </table>
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
