<?php
  $title = 'Tablas';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Ejemplo</a></li>
        <li><a href="#">Demostración</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">

            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Uso de tablas simples</h2>

                <div class="Page-info">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <div class="Page-date">24 de setiembre, 2020</div>
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
                
                <p class="Page-description">Todas las tablas van dentro de un div con la clase <code>Table-wrapper</code>, esto hace que en caso que deba mostrarse más ancha que su contenedor padre, se aplica un scroll horizontal. En el caso de mobile sigue funcionando, aunque es esperado que la tabla pase a su formato responsivo con el uso de la clase <code>Table--responsive</code>.</p>
                
                <h3>Modificadores de tablas</h3>
                <ul>
                  <li><code>Table--responsive</code></li>
                  <li><code>Table--striped</code></li>
                  <li><code>Table--borderless</code></li>
                  <li><code>Table--middle</code></li>
                  <li><code>Table--small</code></li>
                  <li>También se pueden aplicar modificadores de texto, a toda la tabla o por celda. Por ejemplo <code>u-textSmall</code>, <code>u-textRight</code>, etc.</li>
                </ul>
                
                <h3>Accesibilidad de tablas</h3>
                <p>Es indispensable diferenciar las tablas entre si, especialmente en las páginas donde puede encontrarse más de una. Para esto se tendrán en cuenta los elementos de HTML5 y el criterio de los lectores de pantalla.</p>
                <ul>
                  <li>El <span class="u-textBold">título de la tabla</span> irá dentro de la etiqueta <code>caption</code>, que se ubica justo después de la etiqueta <code>table</code>.</li>
                  <li>La <span class="u-textBold">descripción de la tabla</span> se ubicara en un elemento de párrafo, con un id específico que permita asociarlo a la tabla. Para esto se agrega en la etiqueta <code>table</code> lo siguiente: <code>aria-describedby="idDeLaDescripcion"</code>. Puede ubicarse por encima o por debajo, mientras cumpla la condición anterior.</li>
                  <li>Además de usar la estructura conocida de las tablas, se debe identificar las columnas como tales agregando <code>scope="col"</code> en los elementos del cabezal.</li>
                  <li>Se espera que los contenidos de las celdas "<code>td</code>" tengan asociado en nombre de la columna a la que pertenecen mediante <code>data-title="Nombre Columna"</code>.</li>  
                </ul>
                
                <h3>Ejemplos de tablas</h3>
                
                <div class="Table-wrapper">
                  <p id="descripcionTabla1">Descripción de la tabla 1 - Tabla con clase <code>Table--striped</code> </p>
                  <table class="Table Table--striped" aria-describedby="descripcionTabla1">
                    <caption>Tabla 1. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th scope="col">Hora</th>
                        <th scope="col">Temática</th>
                        <th scope="col">Disertantes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Hora" class="u-textRight">08:30</td>
                        <td data-title="Temática">Inscripción</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:00</td>
                        <td data-title="Temática">Apertura Autoridades de Gobierno</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:30</td>
                        <td data-title="Temática">La próxima Frontera para los Servicios de Gobierno</td>
                        <td data-title="Disertantes">Panel de CIOs del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:00</td>
                        <td data-title="Temática">Corte</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:30</td>
                         <td data-title="Temática">Principios Generales Para la era Digital</td>
                        <td data-title="Disertantes">Web Foundation Keynote</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">11:30</td>
                        <td data-title="Temática">Cooperación Internacional en la Era Digital</td>
                        <td data-title="Disertantes">Ministros del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">12:30</td>
                        <td data-title="Temática">Almuerzo</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <div class="Table-wrapper">
                  <p id="descripcionTabla2">Descripción de la tabla 2 - Tabla con clase <code>Table--striped</code> y <code>Table--responsive</code> </p>
                  <table class="Table Table--striped Table--responsive" aria-describedby="descripcionTabla2">
                    <caption>Tabla 2. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th scope="col">Hora</th>
                        <th scope="col">Temática</th>
                        <th scope="col">Disertantes</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Hora" class="u-textRight">08:30</td>
                        <td data-title="Temática">Inscripción</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:00</td>
                        <td data-title="Temática">Apertura Autoridades de Gobierno</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">09:30</td>
                        <td data-title="Temática">La próxima Frontera para los Servicios de Gobierno</td>
                        <td data-title="Disertantes">Panel de CIOs del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:00</td>
                        <td data-title="Temática">Corte</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">10:30</td>
                         <td data-title="Temática">Principios Generales Para la era Digital</td>
                        <td data-title="Disertantes">Web Foundation Keynote</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">11:30</td>
                        <td data-title="Temática">Cooperación Internacional en la Era Digital</td>
                        <td data-title="Disertantes">Ministros del D9</td>
                      </tr>
                      <tr>
                        <td data-title="Hora" class="u-textRight">12:30</td>
                        <td data-title="Temática">Almuerzo</td>
                        <td data-title="Disertantes"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="Table-wrapper">
                  
                  <table class="Table Table--responsive Table--striped" aria-describedby="descripcionTabla3">
                    <caption>Tabla 3. Título de tabla agregado con la etiqueta <code>caption</code></caption>
                    <thead>
                      <tr>
                        <th scope="col">Título Columna 1</th>
                        <th scope="col">Título Columna 2</th>
                        <th scope="col">Título Columna 3</th>
                        <th scope="col">Título Columna 4</th>
                        <th scope="col">Título Columna 5</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-title="Título Columna 1">Fila 1 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 1 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 1 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 1 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 1 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 2 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 2 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 2 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 2 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 2 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 3 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 3 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 3 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 3 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 3 Columna 5</td>
                      </tr>
                      <tr>
                        <td data-title="Título Columna 1">Fila 4 Columna 1</td>
                        <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                        <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                        <td data-title="Título Columna 4">Fila 4 Columna 4</td>
                        <td data-title="Título Columna 5">Fila 4 Columna 5</td>
                      </tr>
                    </tbody>
                  </table>
                  <p id="descripcionTabla3">Descripción de la tabla 3 - Tabla con clase <code>Table--responsive</code> y descripción abajo.</p>
                </div>

                <!-- Tabla con controles de comportamiento y zoom -->
  							<?php include "inc/tabla-controles.php"; ?>
								
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
