<?php
  $title = 'Perfil de Cargo';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <div class="Page-document">
              <span class="Page-subtitle">Ministro de Salud Pública</span>

              <h2 class="Page-title">Dr. Nombre Apellido</h2>

              <div class="Page-info">
                <div class="Bar">
                  <div class="Bar-cell">
                    <div class="Page-date">Última actualización: 22/11/2016</div>
                  </div>
                  <div class="Bar-cell">
                    <ul class="Page-actions">
                      <li>
                        <a href="javascript:window.print()" class="Button Button--small">
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

              <div class="Grid">
                <div class="Grid-item u-md-size1of3">
                  <img class="u-circle u-mb3 u-mr3 u-imgResponsive" src="./img/foto-perfil.jpg" alt="Dr. Jorge Basso">

                  <p class="u-mt1">
                    Correo electrónico: <br> <strong><a href="mailto:nombremail@jnd.gub.uy">nombremail@jnd.gub.uy</a></strong>
                  </p>
                  <p class="u-mt1">
                    Dirección: <br><strong>18 de Julio 1892, 2do piso, oficina 202</strong><br>
                  </p>
                  <p class="u-mt1">
                   <div>Teléfonos:</div>
                   <span class="u-inlineBlock"><strong><a href="tel:1934">1934</a> int. 2072/2074/2075</strong></span>
                   <span class="u-inlineBlock"><strong><a href="tel:1934">1934</a> int. 2072/2074/2075</strong></span>
                  </p>
                </div>
                <div class="Grid-item u-md-size2of3 u-mt3 u-md-mt0">
                  <h4 class="u-mt1">Profesión</h4>

                  <ul>
                    <li>Es Doctor en Medicina y Especialista en Administración de Servicios de Salud</li>
                    <li>Asistente de Medicina Interna de la Facultad de Medicina Grado (2)</li>
                  </ul>  

                  <h4>Experiencia:</h4>

                  <ul>
                    <li>Es Doctor en Medicina y Especialista en Administración de Servicios de Salud de la Escuela de Graduados de la Facultad de Medicina. </li>
                    <li>Ocupa el cargo de Asistente de Medicina Interna de la Facultad de Medicina Grado (2) referido a la Clínica Semiológica y Clínica Médica A hasta el año 1989</li>
                    <li>Director de la División Salud y Bienestar Social de la Intendencia Municipal de Montevideo entre 1990 y 1995</li>
                    <li>Secretario y Presidente del Centro de Asistencia del Sindicato Médico del Uruguay (Casmu) entre el año 1997 y el año 2000)</li>
                    <li>Director de la Región Oeste de Descentralización de la Intendencia Municipal de Montevideo del año 2003 al 2004</li>
                    
                    <li>y Director General del Departamento de Gestión Humana y Recursos Materiales de la Intendencia Municipal de Montevideo entre 2010 y 2015</li>
                    <li>Ministro de Salud Pública desde el 1º de marzo de 2015</li>
                  </ul>
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
