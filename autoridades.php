<?php
$title = 'Autoridades';
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
            <?php include 'inc/nav-local-header.php' ?>

            <ul class="Page-navList">
              <li><a href="cometidos.php">Cometidos, creación y evolución histórica</a></li>
              <li><a href="#">Plan Estratégico, indicadores y metas</a></li>
              <li class="is-active"><a href="autoridades.php">Estructura del organismo</a></li>
              <li><a href="normativa.php">Normativa</a></li>
              <li><a href="contacto.php">Contacto</a></li>
            </ul>
          </div>
        </div>

        <div class="Grid-item u-md-size3of4">
          <div class="Page-body">
            <h2 class="Page-title">Estructura del Organismo</h2>
            
            <div class="Page-info">
              <div class="Bar">
                <div class="Bar-cell">
                  <div class="Page-date">Última actualización: 22/11/2016</div>
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

            <div class="Tree">
              <ul>
                <li class="lvlOne">
                  <div class="itemContent hasChilds">

                  	<h3>Organismo nivel 1</h3>

                    <div class="Flag">
                      <div class="Flag-image">
                        <img class="u-circle" width="150" src="img/75x75.png" alt="Imagen de ítem 1">
                      </div>
                      <div class="Flag-body">
                        <h4>
                          <a href="#">Cargo</a>
                        </h4>
                        <h5>
                          <a href="perfil.php">Dr. Nombre Apellido</a>
                        </h5>
                        <h6>Cargo en otro organismo</h6>
                      </div>
                    </div>

                    <div class="Flag">
                      <div class="Flag-image">
                        <img class="u-circle" width="150" src="img/75x75.png" alt="Imagen de ítem 1">
                      </div>
                      <div class="Flag-body">
                        <h4>
                          <a href="#">Cargo</a>
                        </h4>
                        <h5>
                          <a href="perfil.php">Dr. Nombre Apellido</a>
                        </h5>
                        <h6><a href="#">Cargo en otro organismo</a></h6>
                      </div>
                    </div>
                  </div>

                  <ul>
                    <li>
                      <div class="itemContent">
                        <div class="Flag">
                          <div class="Flag-body">
                            <h3><a href="#">Organismo nivel 2</a></h3>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="itemContent hasChilds">
                        <h3>Organismo nivel 2</h3>

                        <div class="Flag">
                          <div class="Flag-image">
                            <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                          </div>

                          <div class="Flag-body">
                            <h4><a href="#">Cargo</a></h4>
                            <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                            <h6>Cargo en otro organismo</h6>
                          </div>
                        </div>
                      </div>

                      <ul>
                        <li>
                          <div class="itemContent">
                            <div class="Flag">
                              <div class="Flag-body">
                                <h3><a href="#">Organismo nivel 3</a></h3>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="itemContent">
                            <h3>Organismo nivel 3</h3>
                            <div class="Flag">
                              <div class="Flag-image">
                                <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                              </div>
                              <div class="Flag-body">
                                <h4><a href="#">Cargo</a></h4>
                                <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                <h6><a href="#">Cargo en otro organismo</a></h6>
                              </div>
                            </div>
                          </div>

                          <ul>
                            <li>
                              <div class="itemContent">
                                <div class="Flag">
                                  <div class="Flag-body">
                                    <h3><a href="#">Organismo nivel 4</a></h3>
                                  </div>
                                </div>
                              </div>
                            </li>

                            <li>
                              <div class="itemContent">
                                <h3>Organismo nivel 4</h3>
                                <div class="Flag">
                                  <div class="Flag-image">
                                    <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                  </div>
                                  <div class="Flag-body">
                                    <h4><a href="#">Cargo</a></h4>
                                    <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                    <h6>Cargo en otro organismo</h6>
                                  </div>
                                </div>
                                <div class="Flag">
                                  <div class="Flag-image">
                                    <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                  </div>
                                  <div class="Flag-body">
                                    <h4><a href="#">Cargo</a></h4>
                                    <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                    <h6><a href="#">Cargo en otro organismo</a></h6>
                                  </div>
                                </div>
                                <div class="Flag">
                                  <div class="Flag-image">
                                    <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                  </div>
                                  <div class="Flag-body">
                                    <h4><a href="#">Cargo</a></h4>
                                    <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                    <h6><a href="#">Cargo en otro organismo</a></h6>
                                  </div>
                                </div>
                                <div class="Flag">
                                  <div class="Flag-image">
                                    <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                  </div>
                                  <div class="Flag-body">
                                    <h4><a href="#">Cargo</a></h4>
                                    <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                    <h6><a href="#">Cargo en otro organismo</a></h6>
                                  </div>
                                </div>
                              </div>

                              <ul>
                                <li>
                                  <div class="itemContent">
                                    <div class="Flag">
                                      <div class="Flag-body">
                                        <h3><a href="#">Organismo nivel 5</a></h3>
                                      </div>
                                    </div>
                                  </div>
                                </li>

                                <li>
                                  <div class="itemContent">
                                    <h3>Organismo nivel 5</h3>
                                    <div class="Flag">
                                      <div class="Flag-image">
                                        <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                      </div>
                                      <div class="Flag-body">
                                        <h4><a href="#">Cargo</a></h4>
                                        <h5><a href="perfil.php">Dr. Nombre Apellido</a></h5>
                                        <h6><a href="#">Cargo en otro organismo</a></h6>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              </ul>

                            </li>
                          </ul>

                        </li>
                      </ul>

                    </li>

                    <li>
                      <div class="itemContent">
                        <div class="Flag">
                          <div class="Flag-body">
                            <h3>Comité de Organismo</h3>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="itemContent">
                        <div class="Flag">
                          <div class="Flag-body">
                            <h3><a href="#">Comisión Nacional de Organismo</a></h3>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="itemContent hasChilds">
                        <h3>Dirección General del Organismo</h3>

                        <div class="Flag">
                          <div class="Flag-image">
                            <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                          </div>
                          <div class="Flag-body">
                            <h4><a href="#">Directora</a></h4>
                            <h5><a href="RaquelRosa.html">Dr. Nombre Apellido</a></h5>
                            <h6><a href="#">Cargo en otro organismo</a></h6>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="itemContent hasChilds">
                        <h3>Junta Nacional de Organismo</h3>
                        <div class="Flag">
                          <div class="Flag-image">
                            <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                          </div>
                          <div class="Flag-body">
                            <h4><a href="#">Presidente</a></h4>
                            <h5><a href="ArturoEchevarria.html">Dr. Nombre Apellido</a></h5>
                            <h6><a href="#">Cargo en otro organismo</a></h6>
                          </div>
                        </div>
                      </div>

                      <ul>
                          <li>
                            <div class="itemContent">
                              <h3>Dirección General del Organismo</h3>

                              <div class="Flag">
                                <div class="Flag-image">
                                  <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                </div>
                                <div class="Flag-body">
                                  <h4><a href="#">Directora</a></h4>
                                  <h5><a href="RaquelRosa.html">Dr. Nombre Apellido</a></h5>
                                  <h6><a href="#">Cargo en otro organismo</a></h6>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li>
                            <div class="itemContent">
                              <h3>Dirección General del Organismo</h3>

                              <div class="Flag">
                                <div class="Flag-image">
                                  <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                                </div>
                                <div class="Flag-body">
                                  <h4><a href="#">Directora</a></h4>
                                  <h5><a href="RaquelRosa.html">Dr. Nombre Apellido</a></h5>
                                  <h6><a href="#">Cargo en otro organismo</a></h6>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                    </li>

                    <li>
                      <div class="itemContent hasChilds">
                        <h3><a href="#">Dirección General de Organismo</a></h3>
                        <div class="Flag">
                          <div class="Flag-image">
                            <img class="u-circle" src="img/75x75.png" alt="Imagen de ítem 1">
                          </div>
                          <div class="Flag-body">
                            <h4><a href="#">Directora</a></h4>
                            <h5><a href="AdrianaBrescia.html">Dr. Nombre Apellido</a></h5>
                            <h6><a href="#">Cargo en otro organismo</a></h6>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="itemContent">
                        <div class="Flag">
                          <div class="Flag-body">
                            <h3>Instituto Nacional del Organismo</h3>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="itemContent">
                        <div class="Flag">
                          <div class="Flag-body">
                            <h3>Dirección General del Organismo</h3>
                          </div>
                        </div>
                      </div>
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
