<?php
  $title = 'Seguimiento de trámites';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Trámites y servicios</a></li>
        <li><a href="#">Trámites</a></li>
        <li><a href="listado-trazabilidad.php">Seguimiento</a></li>
      </ul>
    </div>
  </div>

  <!-- contenido -->
  <div class="u-main" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4">
                      <div class="Page-nav">


                      <?php $title = "Trámites y servicios"; include "inc/nav-local-header.php"; ?>

                          <ul class="Page-navList">
                              <li><a href="#">Trámites</a>
                                <ul class="Page-navSublist">
                                  <li><a href="#">Listado alfabético</a></li>
                                  <li class="is-active"><a href="#">Seguimiento</a></li>
                                </ul>
                              </li>
                              <li><a href="autoridades.html">Servicios</a></li>
                              <li><a href="autoridades.html">Formularios</a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">

                        <div class="Bar Bar--mdBlocks">
                          <div class="Bar-cell u-mb1">Código de seguimiento: <strong>08JN01AOH</strong></div>
                          <div class="Bar-cell">
                            <div class="Search u-textSmall">
                              <form action="#">
                                <input class="Search-input" type="search" title="Buscador" placeholder="Buscá otro código de seguimiento">
                                <input class="Search-button" type="submit" value="Buscar">
                              </form>
                            </div>
                          </div>
                        </div>

                        <h2 class="Page-title u-mt6 u-mb6">Certificado de Antecedentes Judiciales</h2>

                        <div class="Bar Bar--mdBlocks u-mb6">
                          <div class="Bar-cell u-mb2">Estado: <strong>EN PROCESO</strong></div>
                          <div class="Bar-cell u-textCenter u-md-size3of5 u-lg-size2of5">
                            <p class="u-mb0">Última actividad hace <strong>2 semanas, 4 días</strong></p>
                            <p class="Alert u-p1 u-mb0 u-mt1 u-textSmall">Iniciado hace <strong>2 meses, 3 semanas</strong></p>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: Completo (dos fechas) -->
                        <div class="Seguimiento Seguimiento--success">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">6</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">24/06/2018</span>
                              <span class="u-textSmall">9:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Vigilancia en salud</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                              <span class="u-textMedium u-textBold u-mt1">03/07/2018</span>
                              <span class="u-textSmall">10:00 hs.</span>
                            </div>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: Completo (una fecha) -->
                        <div class="Seguimiento Seguimiento--success">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">5</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textMedium u-textBold">18/06/2018</span>
                              <span class="u-textSmall">7:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Vigilancia en salud</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: En proceso (una fecha) -->
                        <div class="Seguimiento Seguimiento--warning">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">4</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">21/05/2018</span>
                              <span class="u-textSmall">14:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección Nacional de Policía Técnica<br>
                              <strong class="u-textMedium">Reservar agenda</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-en-proceso-img"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: En proceso (una fecha) -->
                        <div class="Seguimiento Seguimiento--warning">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">3</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">15/05/2018</span>
                              <span class="u-textSmall">11:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Control Sanitario</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-en-proceso-img"></span>
                            </div>
                          </div>
                          <!-- Snippet trazabilidad - Subnivel 1 - En proceso -->
                          <div class="Seguimiento-wrap Seguimiento-wrap--nivel1">
                            <div class="Seguimiento-numero u-md-size1of12">3.1</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">15/05/2018</span>
                              <span class="u-textSmall">11:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección Nacional de Policía Técnica<br>
                              <strong class="u-textMedium">Reservar agenda</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-en-proceso-img"></span>
                            </div>
                          </div>
                          <!-- Snippet trazabilidad - Subnivel 2 - Completo -->
                          <div class="Seguimiento-wrap Seguimiento-wrap--nivel2 Seguimiento--success">
                            <div class="Seguimiento-numero u-md-size1of12">3.1.1</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">15/05/2018</span>
                              <span class="u-textSmall">11:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección Nacional de Policía Técnica<br>
                              <strong class="u-textMedium">Reservar agenda</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                            </div>
                          </div>
                          <!-- Snippet trazabilidad - Subnivel 2 - En proceso -->
                          <div class="Seguimiento-wrap Seguimiento-wrap--nivel2">
                            <div class="Seguimiento-numero u-md-size1of12">3.1.2</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">15/05/2018</span>
                              <span class="u-textSmall">11:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección Nacional de Policía Técnica<br>
                              <strong class="u-textMedium">Reservar agenda</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-en-proceso-img"></span>
                            </div>
                          </div>
                          <!-- Snippet trazabilidad - Subnivel 1 - Completo -->
                          <div class="Seguimiento-wrap Seguimiento-wrap--nivel1 Seguimiento--success">
                            <div class="Seguimiento-numero u-md-size1of12">3.2</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">15/05/2018</span>
                              <span class="u-textSmall">11:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Vigilancia en salud</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: Completo (una fecha) -->
                        <div class="Seguimiento Seguimiento--success">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">2</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textMedium u-textBold">02/05/2018</span>
                              <span class="u-textSmall">10:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Vigilancia en salud</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Snippet trazabilidad: Completo (dos fechas) -->
                        <div class="Seguimiento Seguimiento--success">
                          <div class="Seguimiento-wrap">
                            <div class="Seguimiento-numero u-md-size1of12">1</div>
                            <div class="Seguimiento-recibido u-md-size3of12">
                              <span class="u-textSmall">Recibido</span>
                              <span class="u-textSmall">10/04/2018</span>
                              <span class="u-textSmall">9:00 hs.</span>
                            </div>
                            <div class="Seguimiento-referencia u-md-size6of12">Dirección General de la Salud<br>
                              <strong class="u-textMedium">Vigilancia en salud</strong>
                            </div>
                            <div class="Seguimiento-estado u-md-size2of12">
                              <span class="Seguimiento-enviado-img"></span>
                              <span class="u-textMedium u-textBold u-mt1">02/05/2018</span>
                              <span class="u-textSmall">10:00 hs.</span>
                            </div>
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
