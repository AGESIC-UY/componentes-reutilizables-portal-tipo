<?php $title = 'Contenedor'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>

<div class="u-py6">
  <div class="Container">

    <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-listado-vertical">
      Modal Contenedor
    </a>

    <!-- Formulario de creación para un Listado vertical -->
    <div id="js-modal-listado-vertical" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <form class="u-mt3">
              <fieldset>
                <legend class="u-h2">Contenedor</legend>

                <ul class="form-group-list u-pl2">
                  <li>
                    <label for="titulo_contenedor">Título del contenedor:*</label>
                    <input id="titulo_contenedor" name="titulo_contenedor" type="text">
                  </li>
                  <li>
                    <span class="label label-align-top">Método de carga:*</span>
                    <ul class="group-list">
                      <li>
                        <label for="carga_automatica">
                          <input type="radio" id="carga_automatica" name="metodo_carga" value="automatico" aria-checked="true" checked>
                          <span>Automático</span>
                        </label>
                      </li>
                      <li>

                      </li>
                      <li>
                        <label for="carga_manual">
                          <input type="radio" id="carga_manual" name="metodo_carga" value="manual" aria-checked="false">
                          <span>Manual</span>
                        </label>
                      </li>
                    </ul>
                  </li>
                </ul>
                <fieldset class="u-mt4">
                  <legend>Criterios</legend>
                  <ul class="form-group-list">


                    <!-- <li>
                      <label for="tipo_contenido">Tipo de contenido:*</label>
                      <select name="tipo_contenido" id="tipo_contenido">
                        <option value="noticias">Noticias</option>
                      </select>
                    </li> -->

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
                  </ul>
                </fieldset>
                <fieldset class="u-mt4">
                  <legend>Variantes</legend>
                  <ul class="form-group-list">
                    <li>
                      <label for="cantidad_items">Cantidad de items:*</label>
                      <input id="cantidad_items" name="cantidad_items" type="text" class="campo-sm" value="3">
                    </li>
                    <li>
                      <span class="label label-align-top">Tipo de contenedor:*</span>
                      <ul class="group-list">
                        <li>
                          <label for="carga_automatica">
                            <input type="radio" id="carga_automatica" name="metodo_carga" value="automatico" aria-checked="true" checked>
                            <span>Listado horizontal</span>
                          </label>
                        </li>
                        <li>

                        </li>
                        <li>
                          <label for="carga_manual">
                            <input type="radio" id="carga_manual" name="metodo_carga" value="manual" aria-checked="false">
                            <span>Listado vertical</span>
                          </label>
                        </li>
                      </ul>
                    </li>



                  </ul>
                </fieldset>

                <fieldset class="u-mt4">
                  <legend>Enlace al pie</legend>

                  <ul class="form-group-list">
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

                <fieldset class="u-mt4">
                  <legend>Expepciones</legend>

                  <ul class="form-group-list">

                    <li>
                      <label for="select">Excluir:</label>
                      <ul class="group-list">
                        <li>
                          <input id="texto-enlace" type="text" placeholder="URL del contenido a excluir">
                        </li>
                        <!-- <li>
                          <input id="texto-enlace" type="text">
                        </li> -->
                      </ul>
                      <a href="#" class="input-msg">Agregar otra excepción</a>
                    </li>
                  </ul>
                </fieldset>
              </fieldset>

              <ul class="form-action-buttons">
                <li class="action-buttons-primary">
                  <button class="Button Button--primary u-right">Guardar contenedor</button>
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
