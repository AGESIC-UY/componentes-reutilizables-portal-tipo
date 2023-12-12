<?php $title = 'Formulario URL'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>

<div class="u-py6">
  <div class="Container">

    <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-listado-vertical">
      Generar nuevo enlace
    </a>

    <!-- Formulario de creación para un Listado vertical -->
    <div id="js-modal-listado-vertical" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form class="u-mt3">
              <fieldset>
                <legend class="u-h2">Enlace al pie</legend>
                <ul class="form-group-list u-pl2">
                  <li>
                    <span class="label label-align-top">Enlace al pie:*</span>
                    <ul class="group-list">
                      <li>
                        <label for="no-tiene">
                          <input type="radio" id="no-tiene" name="enlace-al-pie" value="opcionDos" title="No tiene enlace" checked aria-checked="true">
                          <span>Sin enlace</span>
                        </label>
                      </li>
                      <li>
                        <label for="enlace-existente">
                          <input type="radio" id="enlace-existente" name="enlace-al-pie" value="opcionUno" title="Enlace existente" aria-checked="false">
                          <span>Enlace existente</span>
                        </label>
                      </li>
                      <li>
                        <label for="generar-enlace">
                          <input type="radio" id="generar-enlace" name="enlace-al-pie" value="opcionDos" title="Generar enlace" aria-checked="false">
                          <span>Generar enlace</span>
                        </label>
                      </li>
                    </ul>
                  </li>
                </ul>
                <fieldset class="u-mt4">
                  <legend>Enlace existente</legend>
                  <ul class="form-group-list">
                    <li>
                      <label for="url-enlace">Dirección del enlace:*</label>
                      <input id="url-enlace" type="text">
                    </li>
                    <li>
                      <label for="texto-enlace">Texto del enlace:*</label>
                      <input id="texto-enlace" type="text">
                    </li>
                  </ul>
                </fieldset>
                <fieldset class="u-mt4">
                  <legend>Generar enlace</legend>
                  <ul class="form-group-list">
                    <li>
                      <label for="select-temas">Temas:</label>
                      <ul class="group-list">
                        <li>
                          <select id="select-temas" name="select">
                            <option selected="">Tema seleccionado</option>
                            <option>Opción</option>
                            <option>Opción</option>
                          </select>
                        </li>
                      </ul>
                      <a href="#" class="input-msg">Agregar otro tema</a>
                    </li>

                    <li>
                      <label for="select">Tipos de contenidos:</label>
                      <ul class="group-list">
                        <li>
                          <select id="select" name="select">
                            <option selected="">Tipo de contenido seleccionado</option>
                            <option>Opción</option>
                            <option>Opción</option>
                          </select>
                        </li>
                        <li>
                          <select id="select" name="select">
                            <option selected="">Opción seleccionada de un combo</option>
                            <option>Opción</option>
                            <option>Opción</option>
                          </select>
                        </li>
                      </ul>
                      <a href="#" class="input-msg">Agregar otro tipo de contenido</a>
                    </li>

                    <li>
                      <span class="label label-align-top">Perfiles:</span>
                      <ul class="group-list">
                        <li>
                          <label for="opcionCheckUno">
                            <input type="checkbox" id="opcionCheckUno" name="opcionesCheck" value="opcionCheckUno" title="Opción uno checkbox">
                            <span>Perfil 1</span>
                          </label>
                        </li>
                        <li>
                          <label for="opcionCheckDos">
                            <input type="checkbox" id="opcionCheckDos" name="opcionesCheck" value="opcionCheckDos" title="Opción dos checkbox" checked="">
                            <span>Perfil 2</span>
                          </label>
                        </li>
                        <li>
                          <label for="opcionCheckTres">
                            <input type="checkbox" id="opcionCheckTres" name="opcionesCheck" value="opcionCheckTres" title="Opción tres checkbox">
                            <span>Perfil 3</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <label for="url-enlace">Dirección del enlace generada:</label>
                      <input id="url-enlace" type="text" value="/tematica/tipo-de-contenido/tipo-de-contenido-2">
                    </li>
                    <li>
                      <label for="texto-enlace">Texto del enlace:*</label>
                      <input id="texto-enlace" type="text">
                    </li>
                  </ul>
                </fieldset>
              </fieldset>

              <ul class="form-action-buttons">
                <li class="action-buttons-primary">
                  <button class="Button Button--primary u-right">Guardar enlace</button>
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
