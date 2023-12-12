<?php
  $title = 'Transparencia Activa';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Contenido -->
  <main class="u-main" id="contenido">

    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">

          <div class="Grid-item u-md-size1of4">

            <!-- FILTROS -->
            <div class="Filters">
              <h3 class="Filters-title" data-toggle="collapse" data-target="#filters-target" aria-expanded="true">Filtros <div class="u-md-hide Filters-status">+</div></h3>
              <form action="./" class="Form Form--stacked Form--filters u-md-show collapse in" id="filters-target" aria-expanded="true">
                <?php
                  $filter_name = "Dependencia";
                  $filter_id = "dependencia";
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

              <div class="Page-document">
                <h2 class="Page-title">Transparencia activa</h2>

                <div class="Page-info u-mb6">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <a href="#" class="Button Button--inverse Button--small">Ver en formato datos abiertos</a>
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

                <p class="Page-description">La información que se encuentra debajo corresponde con las obligaciones de transparencia activa impuestas por el artículo 5º de la Ley Nº 18.381 de Acceso a la Información Pública y del artículo 38 y siguientes del Decreto 232/010 de 2 de agosto de 2010.</p>

                <p class="u-textNormal u-mb6">Responsable: <strong>Nombre Apellido, correo electrónico</strong></p>

                <h3>Información institucional y gestión</h3>

                <ul>
                  <li><a href="evolucion-historica.php">Creación y evolución histórica</a></li>
                  <li><a href="cometidos.php">Cometidos</a></li>
                  <li><a href="autoridades.php">Estructura orgánica, Perfil de los diferentes puestos de trabajo</a></li>
                  <li><a href="normativa.php">Marco jurídico</a></li>
                  <li><a href="plan-estrategico.php">Estrategia o planificación anual</a></li>
                  <li><a href="#">Anteproyectos o proyectos de ley</a></li>
                  <li><a href="#">Calendario de reuniones</a></li>
                  <li><a href="#">Actas</a></li>
                  <li><a href="listado-tramites.php">Listado de trámites y servicios</a></li>
                  <li><a href="concursos.php">Convocatoria a Concursos</a></li>
                  <li><a href="contacto.php">Datos de contacto</a></li>
                  <li><a href="listado-estadisticas.php">Estadísticas, memorias anuales</a></li>
                </ul>

                <h3>RRHH</h3>
                <ul>
                  <li><a href="funcionarios.php">Listado de funcionarios</a></li>
                  <li><a href="funcionarios.php">Nómina de funcionarios que no pertenecen al organismo</a></li>
                  <li><a href="remuneraciones.php">Remuneración mensual</a></li>
                  <li><a href="#">Viáticos recibidos</a></li>
                  <li><a href="#">Listado de comisiones de servicio</a></li>
                </ul>

                <h3>Presupuesto</h3>
                <ul>
                  <li><a href="#">Ingresos por cualquier concepto</a></li>
                  <li><a href="presupuesto.php">Ingresos del presupuesto nacional</a></li>
                  <li><a href="#">Estados financieros y balances</a></li>
                  <li><a href="#">Auditorías</a></li>
                  <li><a href="listado-adquisiciones.php">Licitaciones</a></li>
                  <li><a href="#">Concesiones, licencias, permisos y autorizaciones</a></li>
                </ul>


                <h3>Otros</h3>
                <ul>
                  <li><a href="#">Listado solicitudes acceso</a></li>
                  <li><a href="transparencia.php">Responsables de transparencia activa</a></li>
                  <li><a href="transparencia.php">Responsables de transparencia pasiva</a></li>
                  <li><a href="terminos-de-uso.php">Términos de uso</a></li>
                </ul>


                <h3>No aplica</h3>
                <p>Los items que no se encuentran detallados en la información referida no aplican al presente organismo. Para consultar la información aplicable en formatos abiertos deberá consultarse el <a href="https://catalogodatos.gub.uy/">Catálogo Nacional de Datos Abiertos</a>.</p>
                <ul>
                  <li>Nombre de item que no aplica</li>
                  <li>Nombre de item que no aplica</li>
                  <li>Nombre de item que no aplica</li>
                  <li>Nombre de item que no aplica</li>
                  <li>Nombre de item que no aplica</li>
                  <li>Nombre de item que no aplica</li>
                </ul>

              </div>

            </div>

          </div>

         </div>
       </div>
    </div>

    <!--
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size8of10">
          <div class="Page">




          </div>
        </div>
      </div>
    </div>
    -->
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
