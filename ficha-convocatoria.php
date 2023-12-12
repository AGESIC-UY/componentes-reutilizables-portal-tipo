<?php
  $title = 'Ficha Convocatoria';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Comunicación</a></li>
        <li><a href="listado-convocatorias.php">Convocatorias</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
    <div class="Grid">
      <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
        <div class="Page">
          <div class="Page-document">

            <span class="Page-subtitle">Información adicional</span>
            <h2 class="Page-title u-mb1">Título de la convocatoria</h2>
            <p class="u-mb4">Vigencia</p>
			  
						<div class="Page-info">
						  <div class="Bar">
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
			
            <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>            
            
            <h3>Instituciones convocantes</h3>
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit.</li>
              <li>Non faucibus turpis pulvinar eu.</li>
            </ul>


            <h3>Descripción</h3>
            <p>Descripción de la convocatoria. Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
            <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>


            <h3>Período</h3>
            <p class="u-mb1">Fecha de inicio: <strong>dd/mm/aaaa</strong></p>
            <p class="u-mb1">Fecha de finalización: <strong>dd/mm/aaaa</strong></p>


            <!-- Enlaces, Descargas y Etiquetas -->
						<?php include "inc/relacionados.php"; ?>


					</div>
				</div>
			</div>
		</div>
   </div>
  </div>
