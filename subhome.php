<?php
  $title = 'Subhome';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Temas relevantes</a></li>
      </ul>
    </div>
  </div>

  <!-- contenido -->
  <div id="contenido" class="u-main">
    <div class="Container">
      
      <!-- Título normal 
      <h2 class="Page-title">Responsables de bases de datos</h2>
      -->

      <!-- Título con botón COMPARTIR -->
      <div class="Page-info u-my0">
        <div class="Bar u-mb5 u-mt2">
          <div class="Bar-cell u-md-size10of12">
            <h2 class="Page-title u-my0">Responsables de bases de datos</h2>
          </div>
          <div class="Bar-cell u-md-size2of12">
            <ul class="Page-actions">                     
              <li>
								<?php include "./inc/dropdown-compartir.php"; ?>  
              </li>
            </ul>
          </div>
        </div>
      </div>
      
       <!-- MODULO UNO -->
      <div class="Module Module--md">
        <div class="Grid">
          <div class="Grid-item u-md-size2of3">
            <div class="Module-item Module-item--full">
              <div class="Box Box--destacado1">
                <div class="Box-cover">
                  <img class="Box-image" src="./img/uruguay.jpg" width="845" height="510" alt="">
                </div>
                <div class="Box-overlay">
                  <span class="Box-info">Texto de soporte</span>
                  <a class="Box-title" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla architecto quaerat.</a>
                </div>
              </div>
            </div>
          </div>
          <div class="Grid-item u-md-size1of3">
            <div class="Module-item Module-item--1of3">
              <a href="#" class="Box Box--acceso Box--color1">
                <div class="Flag">
                  <div class="Flag-image">
                  	<img class="u-circle" src="./img/60x60.png" alt="">
                  </div>
                  <div class="Flag-body">
                    <span class="Box-title">Lorem ipsum dolor</span>
                    <span class="Box-info">Dolor incorrupte</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="Module-item Module-item--2of3">
              <div class="Box Box--center Box--destacado4">
                <div class="Box-body">
                  <a href="#">
                    <span class="Box-image">
                      <img class="u-circle" src="./img/150x150.png" alt="">
                    </span>
                    <span class="Box-title">Lorem ipsum</span>
                  </a>
                  <span class="Box-subtitle">Consectetur adipscing elit aliqua</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		<!-- MODULO DOS -->
      <div class="Module Module--xxl">
        <div class="Grid">
          <div class="Grid-item u-md-size2of3">
            <div class="Module-item">

              <div class="Box Box--mf Box--timeline Box--color3">
                <div class="Box-header">
                  <h3 class="Box-name">Cómo proceder para registrar una base de datos personales</h3>
									
									<div class="Box-timelineNav">
										<ul>
											<li><a href="#paso-1">Asesoramiento</a></li>
											<li><a href="#paso-2">Registro</a></li>
											<li><a href="#paso-3">Identificación</a></li>
										</ul>
									</div>
									
                </div>

                <div class="Box-body" id="paso-1">
                  <span class="timeline-mark"><span></span></span>
                  <div class="Box-subtitle">Asesoramiento</div>
                  <h3 class="Box-title">Consultas y asesoramiento</h3>
									<ul class="List">
										<li>Contacte telefónicamente al 2900 0065 o realice la consulta en línea para interiorizarse sobre cómo realizar el registro. <a href="#" class="Button Button--inverse Button--small u-mt2 u-mb0">Consultar en línea</a></li>
									</ul>
                </div>
								
								<div class="Box-body" id="paso-2">
                  <span class="timeline-mark"><span></span></span>
                  <div class="Box-subtitle">Registro</div>
                  <h3 class="Box-title">Registrarse en ID Uruguay</h3>
									<ul class="List">
										<li>Para poder registrar una base de datos es necesario estar identificado en ID Uruguay, sistema de acceso a todo el Estado uruguayo.<a href="#" class="Button Button--inverse Button--small u-mt2 u-mb0">Registrarse en ID Uruguay</a></li>
									</ul>
                </div>
								
								<div class="Box-body" id="paso-3">
                  <span class="timeline-mark"><span></span></span>
                  <div class="Box-subtitle">Identificación</div>
                  <h3 class="Box-title">Ayuda para conseguir empleo</h3>
									<ul class="List">
										<li>Ingresando en el sistema de registro usted podrá administrar sus bases registradas, recibir y enviar comunicaciones y hacer el seguimiento de sus registros.<a href="#" class="Button Button--inverse Button--small u-mt2 u-mb0">Ingresar al sistema</a></li>
									</ul>
                </div>
              </div>
            </div>
          </div>

          <div class="Grid-item u-md-size1of3">
            <div class="Box Box--event Box--color6">
              <div class="Box-header">
                <h3 class="Box-name">Próximas actividades</h3>
              </div>
              <div class="Box-inner">
                <a href="#" class="Box-subtitle u-mb2">Nombre del evento</a>
                <div class="Media">
                  <div class="Media-image">
                    <!-- Molécula: fecha -->
										<?php include "inc/moleculas/fecha.php"; ?>
                  </div>
                  <div class="Media-body">
                    <div class="Box-info">16:30 - Sala de Conferencias</div>
                    <a href="#" class="Box-title">Capacitación: la gestión de riesgos y daños en el ámbito laboral</a>
                  </div>
                </div>
                <p class="Box-text">Dirigido a quienes trabajan en la ayuda de personas que consumen drogas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="Box-body">
                <ul class="Box-mediaList Box-mediaList--small">
                  <li class="Media">
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
											<?php include "inc/moleculas/fecha.php"; ?>
                    </div>
                    <div class="Media-body">
                      <div class="Box-info">16:30 - Palacio Legislativo</div>
                      <a href="#" class="Box-title">Lorem ipsum blandit incorrupte</a>
                      <span class="Live"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</span>
                    </div>
                  </li>
                  <li class="Media">
                    <a href="#" class="Box-subtitle u-mb2">Nombre del evento</a>
                    <div class="Media-image">
                      <!-- Molécula: fecha -->
											<?php include "inc/moleculas/fecha-doble.php"; ?>
                    </div>
                    <div class="Media-body">
                      <div class="Box-info">16:30 - Sala de Conferencias</div>
                      <a href="#" class="Box-title">Lorem ipsum blandit</a>
                      <span class="Box-text">Aperiam laudantium possimus</span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="Box-footer">
                <a href="#" class="Box-more">Ver calendario completo</a>
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
