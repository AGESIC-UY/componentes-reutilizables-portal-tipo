<?php
  $title = 'Dependencia';
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
        <li><a href="#">Contacto</a></li>
        <li><a href="listado-dependencias.php">Dependencias</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <div class="Page-body">

              <div class="Page-document">

                <!-- <span class="Page-subtitle">Info. adicional</span>-->
                <h2 class="Page-title">Nombre de dependencia</h2>

                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">Creación: 22/11/2016</div>
											<div class="Page-date">Última actualización: 15/10/2020</div>
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

                <p class="Page-description">Descripción corta de la dependencia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Event-map">
                  <div class="FlexEmbed FlexEmbed--21by9">
                    <iframe src="https://peu.agesic.gub.uy/portaltipo18beta/portal/mapa-interactivo.html" allowfullscreen="" title="Mapa del evento"></iframe>
                  </div>
                </div>

                <h3>Datos de contacto</h3>
                <ul>
                  <li>Dirección: <strong>Plaza Independencia 710</strong></li>
                  <li>Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></li>
                  <li>Teléfonos: <strong><a href="tel:29021237">2902 1237</a></strong> int. 105 - <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103 - <strong><a href="tel:29012345">2901 2345</a></strong> int. 432 - <strong><a href="tel:29241092">2924 1092</a></strong> int. 132</li>
                  <li>Correo electrónico: <strong><a href="mailto:info@dependencia.gub.uy">info@dependencia.gub.uy</a></strong></li>
                  <li><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 1</span></a></li>
                </ul>

                <h3 id="internos">Directorio telefónico</h3>
                <table class="Table Table--borderless Table--middle Table--striped">
                  <thead>
                    <tr>
                      <th class="u-py2">Oficina</th>
                      <th class="u-py2 u-px1">Teléfono</th>
                      <th class="u-py2 u-textCenter">Interno</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td data-title="" class="u-py2"><a href="#">Nombre Oficina</a></td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923704">2292 3704</a></td>
                        <td data-title="" class="u-py2 u-textCenter">101</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2"><a href="#">Nombre Oficina</a></td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923704">2292 3704</a></td>
                        <td data-title="" class="u-py2 u-textCenter">102</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2">Nombre Oficina</td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923704">2292 3704</a></td>
                        <td data-title="" class="u-py2 u-textCenter">201</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2">Nombre Oficina</td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923704">2292 3704</a></td>
                        <td data-title="" class="u-py2 u-textCenter">202</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2">Nombre Oficina</td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923720">2292 3720</a></td>
                        <td data-title="" class="u-py2 u-textCenter">3020</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2">Nombre Oficina</td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923720">2292 3720</a></td>
                        <td data-title="" class="u-py2 u-textCenter">4020</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2"><a href="#">Nombre Oficina</a></td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923720">2292 3720</a></td>
                        <td data-title="" class="u-py2 u-textCenter">5020</td>
                      </tr>
                      <tr>
                        <td data-title="" class="u-py2">Nombre Oficina</td>
                        <td data-title="" class="u-py2 u-px1"><a href="tel:22923720">2292 3720</a></td>
                        <td data-title="" class="u-py2 u-textCenter">4006</td>
                      </tr>
                  </tbody>
                </table>

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
