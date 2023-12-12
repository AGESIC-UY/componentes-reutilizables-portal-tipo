<?php $title = 'Formulario Grupo de contenedores'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
  <?php include 'inc/header.php'; ?>

  <div class="u-pt4">
    <div class="Container">
      
      <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-nuevo-grupo">
        Ingresar datos para un Grupo de contenedores
      </a>
      
      <!-- Formulario de creación para un grupo de contenedores -->
      <div id="js-modal-nuevo-grupo" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h2 class="u-mt5 u-mb5">Grupo de contenedores</h2>
              
              <form class="u-mt3">
                <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>
                <fieldset>
                  <legend class="u-h5">Configuración general</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="nombre_direccion">Título:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label for="altura_contenido">Altura:*</label>
                      <select id="altura_contenido" name="altura_contenido">
                        <option>XS</option>
                        <option>SM</option>
                        <option>MD</option>
                        <option>LG</option>
                        <option>XL</option>
                      </select>
                    </li>
                    <li>
                      <span class="label label-align-top">Color de fondo:*</span>
                      <ul class="group-list">             
                        <li>
                          <label for="fondoGris">
                            <input type="radio" id="fondoGris" name="ColorDeFondo" value="opcionUno" title="Fondo gris" checked="" aria-checked="true">
                            <span><span class="muestra-color Group--color2" style="background: #eee;"></span>Gris</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoCeleste">
                            <input type="radio" id="fondoCeleste" name="ColorDeFondo" value="opcionDos" title="Fondo celeste" aria-checked="false">
                            <span><span class="muestra-color Group--color1"></span>Celeste</span>
                          </label>
                        </li>
                        <li>
                          <label for="fondoVioleta">
                            <input type="radio" id="fondoVioleta" name="ColorDeFondo" value="opcionTres" title="Fondo violeta" aria-checked="false">
                            <span><span class="muestra-color Group--color2"></span>Violeta</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </fieldset>
                <fieldset>
                  <legend class="u-h5">Enlace al pie</legend>
                  <ul class="form-group-list">
                    <li>
                      <span class="label label-align-top">¿Agregar enlace?:*</span>
                      <ul class="group-list">
                        <li>
                          <label for="EnlaceNo">
                            <input type="radio" id="EnlaceNo" name="EnlaceAlPie" value="opcionUno" title="No agregar enlace al pie" aria-checked="false">
                            <span>No</span>
                          </label>
                        </li>
                        <li>
                          <label for="EnlaceSi">
                            <input type="radio" id="EnlaceSi" name="EnlaceAlPie" value="opcionDos" title="Agregar enlace al pie" checked="" aria-checked="true">
                            <span>Si</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <label for="url-enlace">URL del enlace:</label>
                      <input id="url-enlace" type="text">
                    </li>
                    <li>
                      <label for="texto-enlace">Texto del enlace:</label>
                      <input id="texto-enlace" type="text">
                    </li>
                  </ul>
                </fieldset>
                <ul class="form-action-buttons">
                  <li class="action-buttons-primary">
                    <button class="Button Button--primary u-right">Guardar</button>
                  </li>
                  <li class="action-buttons-second">
                    <button class="btn-lg btn-link float-left">Cancelar</button>
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
