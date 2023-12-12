<?php
  $title = 'Documento con iframe';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
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
						<?php include 'inc/nav-local.php' ?>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Estudiantes de UTU reflexionan y debaten sobre consumos problemáticos</h2>

                <?php include "./inc/page-info.php"; ?> 
				  
                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>
								
								<iframe src="https://public.flourish.studio/visualisation/29013/" title="Título de lo que se esta mostrando en el iframe" frameborder="0" width="100%" height="910">
										<div class="Alert"><strong>Atención:</strong> No es posible mostrar el contenido ya que su navegador no soporta iframes.</div>
								</iframe>
								
                <!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>

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
