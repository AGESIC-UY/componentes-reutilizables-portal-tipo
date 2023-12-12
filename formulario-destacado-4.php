<?php $title = 'Formulario Destacado 4'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
  <?php include 'inc/header.php'; ?>

  <div class="u-pt4">
    <div class="Container">
      <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-nueva-direccion">
        Ingresar datos para un Destacado 4
      </a>


      <!-- Formulario de creación para un Destacado 4 -->
      <div id="js-modal-nueva-direccion" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">

              <h2 class="u-mt5 u-mb5">Destacado 4</h2>

              <form class="u-mt3">
                <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>
                <fieldset>
                  <legend class="u-h5">Configuración general</legend>

                  <ul class="form-group-list">
                    <li>
                      <span class="label label-align-top">Altura en filas:*</span>
                      <ul class="group-list">
                        <li>
                          <label for="unaFila">
                            <input type="radio" id="unaFila" name="altura" value="opcionUno" title="Una fila" aria-checked="false">
                            <span>Una fila</span>
                          </label>
                        </li>
                        <li>
                          <label for="dosFilas">
                            <input type="radio" id="dosFilas" name="altura" value="opcionDos" title="Dos filas" aria-checked="false">
                            <span>Dos filas</span>
                          </label>
                        </li>
                        <li>
                          <label for="tresFilas">
                            <input type="radio" id="tresFilas" name="altura" value="opcionDos" title="Tres filas" aria-checked="false">
                            <span>Tres filas</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <span class="label label-align-top">Color de fondo:*</span>
                      <ul class="group-list">
                        <li>
                          <label for="fondoSinColor">
                            <input type="radio" id="fondoSinColor" name="ColorDeFondo" value="opcionUno" title="Fondo sin color" checked="" aria-checked="true">
                            <span><span class="muestra-color muestra-color--blanco"></span>Sin color</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoColor1">
                            <input type="radio" id="fondoColor1" name="ColorDeFondo" value="opcionDos" title="Fondo color 1" aria-checked="false">
                            <span><span class="muestra-color Box--color1"></span>Color 1</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoColor2">
                            <input type="radio" id="fondoColor2" name="ColorDeFondo" value="opcionTres" title="Fondo color 2" aria-checked="false">
                            <span><span class="muestra-color Box--color2"></span>Color 2</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoColor3">
                            <input type="radio" id="fondoColor3" name="ColorDeFondo" value="opcionCuatro" title="Fondo color 3" aria-checked="false">
                            <span><span class="muestra-color Box--color3"></span>Color 3</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoColor4">
                            <input type="radio" id="fondoColor4" name="ColorDeFondo" value="opcionCinco" title="Fondo color 4" aria-checked="false">
                            <span><span class="muestra-color Box--color4"></span>Color 4</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                  </ul>

                </fieldset>

                <fieldset>
                  <legend class="u-h5">Contenido</legend>
                  <div class="Search u-mt3 u-mb5">
                    <form action="./">
                      <label for="search" class="u-hideVisually">Buscar:</label>
                      <input id="search" class="Search-input js-search-input" type="search" placeholder="Buscar en el Portal" />
                      <button class="Search-button">Buscar</button>
                      <div class="Typeahead js-typeahead">
                        <ul class="Typeahead-list">
                          <li class="Typeahead-item"><a href="#">Resultado 1</a></li>
                          <li class="Typeahead-item"><a href="#">Resultado 2</a></li>
                          <li class="Typeahead-item"><a href="#">Resultado 3</a></li>
                          <li class="Typeahead-title">Últimos "Destacado 4":</li>
                          <li class="Typeahead-item Flag">
                            <div class="Flag-image u-pl2 u-pr0">
                              <img class="u-circle" src="./img/60x60.png" width="32" height="32" alt="">
                            </div>
                            <div class="Flag-body">
                              <a href="#">Acuerdo del certificado sanitario para la apertura de Japón está prácticamente cerrado</a>
                            </div>
                          </li>
                          <li class="Typeahead-item Flag">
                            <div class="Flag-image u-pl2 u-pr0">
                              <img class="u-circle" src="./img/60x60.png" width="32" height="32" alt="">
                            </div>
                            <div class="Flag-body">
                              <a href="#">Gobierno avanza en política para mejorar la calidad del gasto en compras públicas</a>
                            </div>
                          </li>
                          <li class="Typeahead-item Flag">
                            <div class="Flag-image u-pl2 u-pr0">
                              <img class="u-circle" src="./img/60x60.png" width="32" height="32" alt="">
                            </div>
                            <div class="Flag-body">
                              <a href="#">Uruguay será sede en abril de 2019 de reunión internacional sobre productos químicos</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </form>

                  </div>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="nombre_direccion">Título:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label for="nombre_direccion">URL:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" type="text" value="">
                    </li>
                    <li>
                      <label class="textarea" for="textarea1">Resumen:</label>
                      <ul class="group-list">
                        <li>
                          <textarea id="textarea1" name="textarea1" maxlength="60"></textarea>

                        </li>
                      </ul>
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante excedido">-6</span></span>
                    </li>
                    <li>
                      <label for="archivos" class="labelButton">Imagen:</label>
                      <input type="file" name="archivos" id="archivos">
                      <span class="input-msg">En formato png, jpg, jpeg o gif</span>
                    </li>
                  </ul>

                </fieldset>
                <ul class="form-action-buttons">
                  <li class="action-buttons-primary">
                    <ul>
                      <li>
                        <button class="Button Button--primary u-right">Guardar</button>
                      </li>
                    </ul>
                  </li>
                  <li class="action-buttons-second">
                    <ul>
                      <li class="float-left">
                        <button class="btn-lg btn-link">Cancelar</button>
                      </li>
                    </ul>
                  </li>
                </ul>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


    </div>
  </div>

  <?php include 'inc/footer.php'; ?>
<?php include 'inc/foot.php'; ?>
