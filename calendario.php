<?php
  $title = 'Calendario';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Comunicación</a></li>
      </ul>
    </div>
  </div>

  <!-- contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
         <div class="Grid-item u-md-size1of4">
				 		<!-- Menú lateral -->
						<nav class="Page-nav Page-nav--mf Page-nav--only">
							<div class="Page-navWrap">
								<a class="Page-navTitle collapsed" data-toggle="collapse" href="#nav-target" role="button">Comunicación <span class="Page-navStatus"></span></a>
							</div>
							<ul id="nav-target" class="Page-navList collapse">
								<li><a href="#">Noticias</a></li>
                <li><a href="#">Campañas</a></li>
                <li><a href="#">Boletines</a></li>
                <li class="is-active"><a href="calendario.php">Calendario de actividades</a></li>
                <li><a href="#">Publicaciones</a></li>
							</ul>
						</nav>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

               <h2 class="Page-title">Calendario de próximas actividades</h2>

               <div class="Page-info u-mb6">
                  <div class="Bar">
                    <div class="Bar-cell">
                      <a href="calendario-pasado.php" class="Button Button--inverse Button--small">Ver actividades anteriores</a>
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


                <ul class="List List--media">
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
					 						<?php include "inc/moleculas/fecha-doble.php"; ?>
                    </div>
                    <div class="Media-body">
                      <a href="#" class="Event-name">Nombre del evento</a>
                      <span class="Box-info">19:30 - Lugar de la actividad</span>
                      <h3 class="Event-title"><a href="ficha-actividad.php">Capacitación: la gestión de riesgos y daños</a></h3>
                      <p>Dirigido a quienes trabajan en la ayuda de personas que consumen drogas.</p>
                      <div class="Live"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</div>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
					 						<?php include "inc/moleculas/fecha.php"; ?>
                    </div>
                    <div class="Media-body">
                      <a href="#" class="Event-name">Nombre del evento</a>
                      <span class="Box-info">19:30 - Lugar de la actividad</span>
                      <h3 class="Event-title"><a href="ficha-actividad.php">Lorem ipsum</a></h3>
                      <p>Aperiam laudantium possimus</p>
                      <div class="Live Live--now"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</div>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
					 						<?php include "inc/moleculas/fecha-doble.php"; ?>
                    </div>
                    <div class="Media-body">
                      <a href="#" class="Event-name">Nombre del evento</a>
                      <span class="Box-info">19:30 - Lugar de la actividad</span>
                      <h3 class="Event-title"><a href="ficha-actividad.php">Lorem ipsum</a></h3>
                      <p>Aperiam laudantium possimus</p>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
					 						<?php include "inc/moleculas/fecha.php"; ?>
                    </div>
                    <div class="Media-body">
                      <a href="#" class="Event-name">Nombre del evento</a>
                      <span class="Box-info">19:30 - Lugar de la actividad</span>
                      <h3 class="Event-title"><a href="ficha-actividad.php">Lorem ipsum</a></h3>
                      <p>Aperiam laudantium possimus</p>
                    </div>
                  </li>
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
					 						<?php include "inc/moleculas/fecha.php"; ?>
                    </div>
                    <div class="Media-body">
                      <a href="#" class="Event-name">Nombre del evento</a>
                      <span class="Box-info">19:30 - Lugar de la actividad</span>
                      <h3 class="Event-title"><a href="ficha-actividad.php">Lorem ipsum</a></h3>
                      <p>Aperiam laudantium possimus</p>
                    </div>
                  </li>
                </ul>


                <div class="Pagination">
                  <div class="Pagination-text">Mostrando 5 de 30 resultados</div>
                  <ul class="Pagination-links">
                    <li class="Pagination-prev"><a href="#">Anterior</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="is-selected"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">16</a></li>
                    <li class="Pagination-next"><a href="#">Siguiente</a></li>
                  </ul>
                </div>

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
