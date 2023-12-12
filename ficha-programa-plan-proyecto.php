<?php
  $title = 'Ficha de Programa/Plan/Proyecto';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Políticas y gestión</a></li>
        <li><a href="listado-programas-planes-proyectos.php">Programas, planes y proyectos</a></li>
				<li>Programa/Plan/Proyecto</li>
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

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Título del Programa/Plan/Proyecto</h2>

                <?php include "./inc/page-info.php"; ?> 

                <p class="Page-description u-mb6">Resumen: descripción mínima que describe de qué se trata el Programa/Plan/Proyecto, máximo 1000 caracteres. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque.</p>
								
								<h3>Descripción</h3>
                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
                <p>Integer semper interdum lorem, at accumsan dolor blandit eget. Quisque commodo, erat vel hendrerit tincidunt, neque lacus venenatis nisi, auctor mattis massa odio sed nisl. Aliquam augue ipsum, convallis eu lorem non, porta dapibus elit. In gravida, diam vitae scelerisque sollicitudin, lorem dolor ultricies nibh, eget molestie tortor lectus molestie nibh. Integer pharetra leo id ex varius, sit amet feugiat elit lacinia. Vivamus vel orci sapien. Duis vel libero id quam ultrices tristique.</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                  <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                </ul>

                <h3>Objetivos</h3>
                <ul>
                  <li>Objetivo 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius dolor quis enim rhoncus, et egestas ligula imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                  <li>Objetivo 2. Vestibulum varius dolor quis enim rhoncus, et egestas ligula imperdiet.</li>
                  <li>Objetivo 3. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                </ul>
								
								<h3>Período</h3>
								<ul>
									<li>Fecha de inicio: 20/04/2019</li>
									<li>Fecha de fin: 21/08/2022</li>
								</ul>
								
								<h3>Avance</h3>
								<p>20%</p>
								
								<h3>Presupuesto</h3>
								<p>[Valor campo tipo de moneda] 2.500.180</p>
               
                <h3>¿A quién está dirigido?</h3>
                <p>Todo público</p>
                <ul>
									<li>Multivaluado item uno</li>
									<li>Multivaluado item dos</li>
								</ul>
								
								<h3>Archivos adjuntos</h3>
								<ul class="Page-downloads List u-noPrint">
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Nombre de documento relacionado con el indicador (.pdf 354 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                      <div class="Media">
                        <div class="Media-image">
                          <span class="Download-icon">
                            <span class="Icon Icon--download"></span>
                          </span>
                        </div>
                        <div class="Media-body">
                          <div class="Download-title">Nombre de otro documento relacionado (.pdf 178 KB)</div>
                          <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 532 KB)">
                      <div class="Media">
                        <div class="Media-body">
                          <span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 532 KB)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
								
								<h3>Etiquetas</h3>
								<div class="Tags u-noPrint">
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
