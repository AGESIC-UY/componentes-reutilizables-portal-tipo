<?php
  $title = 'Ficha de datos';
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
              <li><a href="#">Encuestas</a></li>
          </ul>
      </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size8of10">
          <div class="Page">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title u-mb1">Título de datos</h2>
                <p class="u-textItalic">Tipo de datos: Microdatos/Datos/Estadísticas/Encuestas</p>

                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">22/06/2018</div>
                    </div>
                    <div class="Bar-cell">
                      <ul class="Page-actions">
                        <li>
                          <a href="#" class="Button Button--small">
                            <span class="Icon Icon--print Icon--small"></span>
                          </a>
                        </li>
                        <li>
                          <div class="Dropdown" tabindex="0">
                            <div class="Dropdown-trigger Button Button--small">
                              <span class="Icon Icon--share Icon--small"></span> Compartir
                            </div>
                            <div class="Dropdown-menu">
                              <div class="List">
                                <a href="#" class="List-item">Facebook</a>
                                <a href="#" class="List-item">Twitter</a>
                                <a href="#" class="List-item">Google +</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <h3>Desarrollo (Texto enriquecido)</h3>
                <ul>
                  <li><a href="documento-html-pu.php">Ir al formato de ejemplo: HTML Portal Unificado</a></li>
                </ul>
                
                <h3>Período</h3>
                <ul>
                  <li>Fecha de inicio: <strong>dd/mm/aaaa</strong></li>
                  <li>Fecha de fin: <strong>dd/mm/aaaa</strong></li>
                </ul>
                
                <h3>Datos de encuesta</h3>
                <ul>
                	<li>Estado: <strong>En análisis / En ejecución / En línea / Finalizada</strong></li>
                    <li>Unidad de análisis: <strong>Lorem ipsum</strong></li>
                    <li>Categoría de datos: <strong>Por muestreo</strong></li>
                </ul>
                
                <h3>Institución responsable</h3>
                <p>Lorem ipsum dolor sit amet</p>
                
                <h3>Objetivos</h3>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                  <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                </ul>
                
                <h3>Fundamentación (Texto enriquecido)</h3>
                <ul>
                  <li><a href="documento-html-pu.php">Ir al formato de ejemplo: HTML Portal Unificado</a></li>
                </ul>

                <h3>Archivos adjuntos</h3>
                <ul class="Page-downloads List">
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon"><span class="Icon Icon--download"></span></span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Nombre archivo 1 (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon"><span class="Icon Icon--download"></span></span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Nombre archivo 2 (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon"><span class="Icon Icon--download"></span></span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Nombre archivo 3 (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 12 MB)">
                      <div class="Media">
                        <div class="Media-body">
                          <span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 12 MB)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                
                <h3>Documentos relacionados</h3>
                <ul>
                  <li><a href="#">Lorem ipsum dolor sit.</a></li>
                  <li><a href="#">Libero eos voluptate nemo.</a></li>
                  <li><a href="#">Omnis exercitationem, itaque quibusdam!</a></li>
                </ul>
                
                <h3>Etiquetas</h3>
                <div class="Tags">
                  <a href="#" class="Tags-item">Datos</a>
                  <a href="#" class="Tags-item">Microdatos</a>
                  <a href="#" class="Tags-item">Estadísticas</a>
                  <a href="#" class="Tags-item">Encuestas</a>
                  <a href="#" class="Tags-item">Etiqueta</a>
                  <a href="#" class="Tags-item">Uruguay</a>
                  <a href="#" class="Tags-item">Palabra clave</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
