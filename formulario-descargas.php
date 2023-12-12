<?php $title = 'Formulario Descarga'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
  <?php include 'inc/header.php'; ?>

  <div class="u-py6">
    <div class="Container">

      <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-descarga-1">
        Cargar formato Descarga
      </a>

      <!-- Formulario de creación para un Listado vertical -->
      <div id="js-modal-descarga-1" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h2 class="u-mt5 u-mb5">Cargar formato descarga</h2>

              <form class="u-mt3">

                <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>

                <!-- Fieldset con información comprimida del archivo ya cargado -->
                <fieldset>
                  <legend class="u-h5">Archivo N°1</legend>
                  <a class="Download u-my2" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                    <div class="Media">
                      <div class="Media-image">
                        <span class="Download-icon">
                          <span class="Icon Icon--download"></span>
                        </span>
                      </div>
                      <div class="Media-body">
                        <div class="Download-title">Nombre del archivo adjunto (.pdf 354 KB)</div>
                        <div class="Download-description">Descripción del archivo adjunto</div>
                      </div>
                    </div>
                  </a>
                  <div class="u-pt2">
                    <a href="#" class="u-textBold u-mr5">Editar</a>
                    <a href="#">Eliminar</a>
                  </div>
                </fieldset>

                <!-- Fieldset con campos para subir cada archivo -->
                <fieldset>
                  <legend class="u-h5">Archivo N°2</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="nombre_direccion">Título del archivo:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label for="adjunto">Archivo:*</label>
                      <input id="adjunto" type="file">
                    </li>
                  </ul>
                </fieldset>

                <!-- Aparece debajo del último fieldset de carga de archivo -->
                <span class="fieldset-msg"><a href="#">+ Cargar otro archivo</a></span>

                <!-- Información general del listado - Aparece en caso de que se suban más de un archivo para descargar -->
                <fieldset>
                  <legend class="u-h5">Información general del listado</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="nombre_direccion">Título del listado:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label class="textarea" for="textarea1">Descripción del listado:</label>
                      <ul class="group-list">
                        <li>
                          <textarea id="textarea1" name="textarea1" placeholder="Campo extenso para desarrollo de texto"></textarea>
                        </li>
                      </ul>
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">300</span></span>
                    </li>
                  </ul>
                </fieldset>

                <fieldset>
                  <legend class="u-h5">Enlace en pie de contenedor</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="nombre_direccion">Título del enlace:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label for="nombre_direccion">URL del enlace:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" type="text" value="">
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
