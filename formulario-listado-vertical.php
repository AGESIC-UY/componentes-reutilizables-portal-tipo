<?php $title = 'Formulario Listado vertical'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
  <?php include 'inc/header.php'; ?>

  <div class="u-pt4">
    <div class="Container">
      
      <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-listado-vertical">
        Ingresar datos para un Listado vertical
      </a>

      <!-- Formulario de creación para un Listado vertical -->
      <div id="js-modal-listado-vertical" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h2 class="u-mt5 u-mb5">Listado vertical</h2>
              
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
                      <span class="label label-align-top">Carga de contenidos:*</span>
                      <ul class="group-list">
                        <li>
                          <label for="CargaAutomatica">
                            <input type="radio" id="CargaAutomatica" name="CargaContenidos" value="opcionUno" title="A partir de un listado existente" checked="" aria-checked="true">
                            <span>A partir de un listado existente</span>
                          </label>
                        </li>
                        <li>
                          <label for="CargaManual">
                            <input type="radio" id="CargaManual" name="CargaContenidos" value="opcionDos" title="Cada contenido de forma individual" aria-checked="false">
                            <span>Cada contenido de forma individual</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </fieldset>
                
                <!-- Usar fieldset en caso de elegir cargar conteidos de forma automática -->
                <fieldset>
                  <legend class="u-h5">Contenidos</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="url-enlace">Ubicación del listado:*</label>
                      <input id="url-enlace" type="text"> 
                      <div class="rol-validado">
                          <span class="icn icn-circle-success"></span>
                          <p>URL válida</p>
                      </div>
                      <span class="input-msg">Se cargarán los últimos contenidos del listado.</span>
                    </li>
                    <li>
                      <label for="cantidad_contenido">Cantidad:*</label>
                      <select id="cantidad_contenido" name="cantidad_contenido">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </li>
                  </ul>
                </fieldset>
                
                <fieldset>
                  <legend class="u-h5"><span class="Icon Icon--move move-fieldset"></span>Contenido</legend>
                  <div class="u-px2">
                  	<p class="u-h6 u-textNormal">Uruguay asumió presidencia de organización que reúne a gobiernos digitalmente más avanzados</p>
                    <a href="#" class="u-textBold u-mr5">Editar contenido<span class="u-ml1 caret"></span></a>
                    <a href="#">Eliminar contenido</a>
                  </div>
                </fieldset>
                
                <!-- Usar fieldset en caso de elegir cargar conteidos de forma manual -->
                <fieldset>
                  <legend class="u-h5"><span class="Icon Icon--move move-fieldset"></span>Contenido</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <label for="url-enlace">URL del contenido:*</label>
                      <input id="url-enlace" type="text">
                    </li>
                    <li>
                      <label for="fecha-publicacion">Fecha:*</label>
                      <input id="fecha-publicacion" type="date" class="campo-md">
                    </li>
                    <li>
                      <label for="nombre_direccion">Título:*</label>
                      <input id="nombre_direccion" name="nombre_direccion" maxlength="50" type="text" value="">
                      <span class="input-msg">Caracteres restantes <span class="caracter-restante">50</span></span>
                    </li>
                    <li>
                      <label class="textarea" for="resumen">Resumen:*</label>
                      <ul class="group-list">
                        <li>
                          <textarea id="resumen" name="textarea1" maxlength="1000"></textarea>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <label for="imagen">Imagen:*</label>
                      <input id="imagen" type="file">
                    </li>
                  </ul>
                  <fieldset class="u-mt4">
                    <legend>Archivo adjunto</legend>
                    <ul class="form-group-list">
                      <li>
                        <label for="adjunto">Adjuntar archivo:</label>
                        <input id="adjunto" type="file">
                      </li>
                      <li>
                        <label for="titulo-adjunto">Descripción:</label>
                        <input id="titulo-adjunto" type="text">
                      </li>
                    </ul>
                  </fieldset>
                  <span class="fieldset-msg"><a href="#">Adjuntar otro archivo</a></span>
                </fieldset>
                
                <span class="fieldset-msg u-textBold u-mb4"><a href="#">+ Agregar nuevo contenido</a></span>
                
                <fieldset>
                  <legend class="u-h5">Enlace al pie</legend>
                  <ul class="form-group-list u-px0">
                    <li>
                      <span class="label label-align-top">¿Agregar enlace?:</span>
                      <ul class="group-list">
                        <li>
                          <label for="EnlaceNo">
                            <input type="radio" id="EnlaceNo" name="EnlaceAlPie" value="opcionUno" title="No agregar enlace al pie"  checked="" aria-checked="true">
                            <span>No</span>
                          </label>
                        </li>
                        <li>
                          <label for="EnlaceSi">
                            <input type="radio" id="EnlaceSi" name="EnlaceAlPie" value="opcionDos" title="Agregar enlace al pie" aria-checked="false">
                            <span>Si</span>
                          </label>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <label for="url-enlace">URL del enlace:*</label>
                      <input id="url-enlace" type="text">
                    </li>
                    <li>
                      <label for="texto-enlace">Texto del enlace:*</label>
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
