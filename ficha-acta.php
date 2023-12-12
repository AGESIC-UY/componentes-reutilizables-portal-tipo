<?php
  $title = 'Ficha de acta';
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
              <li><a href="#">Información de gestión</a></li>
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
                <h2 class="Page-title u-mb1">Acta N° AAAA</h2>
                <p class="u-mb4">Tipo de acta (Reuniones de Directorio / Consejos directivos)</p>

                <?php include "./inc/page-info.php"; ?>
				
                <p class="Page-description">Resumen - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>
                
                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
                <p>Integer semper interdum lorem, at accumsan dolor blandit eget. Quisque commodo, erat vel hendrerit tincidunt, neque lacus venenatis nisi, auctor mattis massa odio sed nisl. Aliquam augue ipsum, convallis eu lorem non, porta dapibus elit. In gravida, diam vitae scelerisque sollicitudin, lorem dolor ultricies nibh, eget molestie tortor lectus molestie nibh. Integer pharetra leo id ex varius, sit amet feugiat elit lacinia. Vivamus vel orci sapien. Duis vel libero id quam ultrices tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque impedit ab nulla omnis libero neque delectus veritatis laborum consequatur repudiandae! Voluptatem?</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                  <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                </ul>

                <h3>Descargas</h3>
                <ul class="Page-downloads List">
                    <li>
                        <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                            <div class="Media">
                                <div class="Media-image">
                                    <span class="Download-icon">
                                        <span class="Icon Icon--download"></span>
                                    </span>
                                </div>
                                <div class="Media-body">
                                    <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
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
                                    <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                                    <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 754 KB)">
                            <div class="Media">
                                <div class="Media-image">
                                    <span class="Download-icon">
                                        <span class="Icon Icon--download"></span>
                                    </span>
                                </div>
                                <div class="Media-body">
                                    <div class="Download-title">Formulario para inscripción (.pdf 754 KB)</div>
                                    <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="Download" href="#" title="Descargar todos los archivos adjuntos (.zip 4 MB)">
                            <div class="Media">
                                <div class="Media-body">
                                    <span class="Download-title u-textNormal u-textSmall">Descargar todos los archivos adjuntos (.zip 4 MB)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                
                <h3>Etiquetas</h3>
                <div class="Tags">
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
