<?php
$title = 'Jerárquico institucional';
?>
  <?php include "inc/head.php"; ?>

    <!-- Cabezal -->
    <?php include "inc/header.php"; ?>

      <!-- Contenido -->
      <div class="u-main" id="contenido">
        <div class="Container">
          <div class="Page Page--hasNav">
            <div class="Grid Grid--noGutter">
              <div class="Grid-item u-md-size1of4">
                <div class="Page-nav">
                  <?php $title = "Institucional"; include "inc/nav-local-header.php"; ?>

                  <ul class="Page-navList">
                    <li><a href="cometidos.php">Cometidos, creación y evolución histórica</a></li>
                    <li><a href="#">Plan Estratégico, indicadores y metas</a></li>
                    <li class="is-active"><a href="#">Remuneraciones</a></li>
                    <li><a href="normativa.php">Normativa</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                  </ul>
                </div>
              </div>

              <div class="Grid-item u-md-size3of4">
                <div class="Page-body">
                  <h2 class="Page-title">Remuneraciones por Unidad Ejecutora</h2>

                  <div class="Tree">
                    <ul>

                      <li class="lvlOne u-mb4">
                        <div class="itemContent hasChilds">
                          <div class="Flag">
                            <div class="Flag-image">
                              <img class="u-circle" width="150" src="http://placehold.it/150x150" alt="Imagen de ítem 1">
                            </div>
                            <div class="Flag-body">
                              <h4><a href="#">Inciso</a></h4>
                              <p class="u-mb0">Complemento del nombre</p>
                            </div>
                          </div>
                        </div>
                        <ul>
                          <li>
                            <div class="itemContent hasChilds">
                              <div class="Flag">
                                <div class="Flag-image">
                                  <img class="u-circle" width="150" src="http://placehold.it/150x150" alt="Imagen de ítem 1">
                                </div>
                                <div class="Flag-body">
                                  <h4><a href="#">Unidad Ejecutora Uno</a></h4>
                                  <p class="u-mb0">Complemento del nombre</p>
                                </div>
                              </div>
                            </div>
                            <ul>
                              <li>
                                <div class="itemContent">
                                  <div class="Flag">
                                    <div class="Flag-body">
                                      <h4><a href="#">Área Uno - Unidad Ejecutora Uno</a></h4>
                                      <p class="u-mb0">Complemento del nombre</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="itemContent hasChilds">
                              <div class="Flag">
                                <div class="Flag-image">
                                  <img class="u-circle" width="150" src="http://placehold.it/150x150" alt="Imagen de ítem 1">
                                </div>
                                <div class="Flag-body">
                                  <h4><a href="#">Unidad Ejecutora Dos</a></h4>
                                  <p class="u-mb0">Complemento del nombre</p>
                                </div>
                              </div>
                            </div>
                            <ul>
                              <li>
                                <div class="itemContent">
                                  <div class="Flag">
                                    <div class="Flag-body">
                                      <h4><a href="#">Área uno - Unidad Ejecutora Dos</a></h4>
                                      <p class="u-mb0">Complemento del nombre</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="itemContent">
                                  <div class="Flag">
                                    <div class="Flag-body">
                                      <h4><a href="#">Área dos - Unidad Ejecutora Dos</a></h4>
                                      <p class="u-mb0">Complemento del nombre</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <div class="itemContent hasChilds">
                              <div class="Flag">
                                <div class="Flag-image">
                                  <img class="u-circle" width="150" src="http://placehold.it/150x150" alt="Imagen de ítem 1">
                                </div>
                                <div class="Flag-body">
                                  <h4><a href="#">Unidad Ejecutora Tres</a></h4>
                                  <p class="u-mb0">Complemento del nombre</p>
                                </div>
                              </div>
                            </div>
                            <ul>
                              <li>
                                <div class="itemContent">
                                  <div class="Flag">
                                    <div class="Flag-body">
                                      <h4><a href="#">Área uno - Unidad Ejecutora Tres</a></h4>
                                      <p class="u-mb0">Complemento del nombre</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="itemContent">
                                  <div class="Flag">
                                    <div class="Flag-body">
                                      <h4><a href="#">Área dos - Unidad Ejecutora Tres</a></h4>
                                      <p class="u-mb0">Complemento del nombre</p>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
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
