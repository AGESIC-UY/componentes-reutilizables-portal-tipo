<?php
  $title = 'Dependencias con filtros';
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
        <li>Dependencias</li>
      </ul>
    </div>
  </div>
  
  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
      	<div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            <div class="Page-nav">
              <a class="Page-navTitle collapsed js-toggleLocalNav" data-toggle="collapse" href="#nav-target">
                Institucional
                <span class="Page-navStatus"></span>
              </a>
              <ul id="nav-target" class="Page-navList collapse">
                <li><a href="#">Creación y evolución histórica</a></li>
                <li><a href="#">Cometidos</a></li>
                <li><a href="#">Plan estratégico</a></li>
                <li><a href="#">Estructura del organismo</a></li>
                <li><a href="#">Recursos humanos</a></li>
                <li><a href="#">Normativa</a></li>
                <li><a href="#">Transparencia</a></li>
                <li class="is-active"><a href="#">Contacto</a></li>
              </ul>
            </div>
            <!-- FILTROS -->
            <div class="Filters">
              <h3 class="Filters-title" data-toggle="collapse" data-target="#filters-target" aria-expanded="true">Filtros <div class="u-md-hide Filters-status">+</div></h3>
              <form action="./" class="Form Form--stacked Form--filters u-md-show collapse in" id="filters-target" aria-expanded="true">
								<?php
									$filter_name = "Área / Unidad Ejecutora";
									$filter_id = "etiqueta1";
									include "./inc/filtros/filtro-select.php";
								?>
								<?php
									$filter_name = "Departamento";
									$filter_id = "etiqueta2";
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

              <h2 class="Page-title">Dependencias del organismo</h2>
              
							<?php include "./inc/page-info.php"; ?>
 
              <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
              
              <div class="Event-map">
                <div class="FlexEmbed FlexEmbed--21by9 u-mb6">
                  <iframe src="https://peu.agesic.gub.uy/portaltipo18beta/portal/mapa-interactivo.html" allowfullscreen="" title="Mapa del evento"></iframe>
                </div>
              </div>
  
              <ul class="List List--media">
                <li class="Media">
                  <div class="Media-image">
                    <img src="img/200x120.png" alt="">
                  </div>
                  <div class="Media-body">
                    <h3 class="u-mt0 u-h5"><a href="ficha-dependencia.php">Nombre dependencia 1</a></h3>
                    <p class="u-my0">Dirección: <strong>Plaza Independencia 710</strong></p>
                    <p class="u-my0">Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></p>
                    <p class="u-my0">Teléfonos: <strong><a href="tel:29021237">2902 1237</a></strong> int. 105 - <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103 - <strong><a href="tel:29012345">2901 2345</a></strong> int. 432 - <strong><a href="tel:29241092">2924 1092</a></strong> int. 132 - <a href="ficha-dependencia.php#internos">Directorio telefónico completo</a></p>         
                    <p class="u-my0">Correo electrónico: <strong><a href="mailto:info@presidencia.gub.uy">info@presidencia.gub.uy</a></strong></p>
                    <p class="u-my0"><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 1</span></a></p>
                  </div>
                </li>
                <li class="Media">
                  <div class="Media-image">
                    <img src="img/200x120.png" alt="">
                  </div>
                  <div class="Media-body">
                    <h3 class="u-mt0 u-h5"><a href="ficha-dependencia.php">Nombre dependencia 2</a></h3>
                    <p class="u-my0">Dirección: <strong>Plaza Independencia 710</strong></p>
                    <p class="u-my0">Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></p>
                    <p class="u-my0">Teléfono: <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103</p>
                    <p class="u-my0">Correo electrónico: <strong><a href="mailto:info@presidencia.gub.uy">info@presidencia.gub.uy</a></strong></p>
                    <p class="u-my0"><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 2</span></a></p>
                  </div>
                </li>
                <li class="Media">
                  <div class="Media-image">
                    <img src="img/200x120.png" alt="">
                  </div>
                  <div class="Media-body">
                    <h3 class="u-mt0 u-h5"><a href="ficha-dependencia.php">Nombre dependencia 3</a></h3>
                    <p class="u-my0">Dirección: <strong>Plaza Independencia 710</strong></p>
                    <p class="u-my0">Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></p>
                    <p class="u-my0">Teléfonos: <strong><a href="tel:29021237">2902 1237</a></strong> int. 105 - <strong><a href="tel:29012345">2901 2345</a></strong> int. 432 - <strong><a href="tel:29241092">2924 1092</a></strong> int. 132</p> 
                    <p class="u-my0">Correo electrónico: <strong><a href="mailto:info@presidencia.gub.uy">info@presidencia.gub.uy</a></strong></p>
                    <p class="u-my0"><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 3</span></a></p>
                  </div>
                </li>
                <li class="Media">
                  <div class="Media-image">
                    <img src="img/200x120.png" alt="">
                  </div>
                  <div class="Media-body">
                    <h3 class="u-mt0 u-h5"><a href="ficha-dependencia.php">Nombre dependencia 4</a></h3>
                    <p class="u-my0">Dirección: <strong>Plaza Independencia 710</strong></p>
                    <p class="u-my0">Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></p>
                    <p class="u-my0">Teléfono: <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103</p>
                    <p class="u-my0">Correo electrónico: <strong><a href="mailto:info@presidencia.gub.uy">info@presidencia.gub.uy</a></strong></p>
                    <p class="u-my0"><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 4</span></a></p>
                  </div>
                </li>
                <li class="Media">
                  <div class="Media-image">
                    <img src="img/200x120.png" alt="">
                  </div>
                  <div class="Media-body">
                    <h3 class="u-mt0 u-h5"><a href="ficha-dependencia.php">Nombre dependencia 5</a></h3>
                    <p class="u-my0">Dirección: <strong>Plaza Independencia 710</strong></p>
                    <p class="u-my0">Horario de atención: <strong>Lunes a Viernes de 9 a 17 hs.</strong></p>
                    <p class="u-my0">Teléfonos: <strong><a href="tel:29021237">2902 1237</a></strong> int. 105 - <strong><a href="tel:29033353">2903 3353</a></strong> int. 102 y 103 - <strong><a href="tel:29012345">2901 2345</a></strong> int. 432 - <strong><a href="tel:29241092">2924 1092</a></strong> int. 132 - <a href="ficha-dependencia.php#internos">Directorio telefónico completo</a></p> 
                    <p class="u-my0">Correo electrónico: <strong><a href="mailto:info@presidencia.gub.uy">info@presidencia.gub.uy</a></strong></p>
                    <p class="u-my0"><a href="contacto.php">Formulario de contacto<span class="u-hide">de Nombre dependencia 5</span></a></p>
                  </div>
                </li>
              </ul>
              <div class="Pagination">
                <div class="Pagination-text">Mostrando 5 de 9 resultados</div>
                <ul class="Pagination-links">
                    <li class="Pagination-prev"><a href="#">Anterior</a></li>
                    <li class="is-selected"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="Pagination-next"><a href="#">Siguiente</a></li>
                </ul>
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
