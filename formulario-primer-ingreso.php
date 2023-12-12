<?php $title = 'Primer ingreso'; ?>
  <?php $logged = false; ?>
      <?php include 'inc/head.php'; ?>

        <div id="contenido" class="u-main">
          <div class="Container">
            <div class="Grid">
              <div class="Grid-item Grid-item--center u-md-size8of10">
                <div class="Page">
                  <div class="Grid">
                    <div class="Grid-item u-md-size10of10">
                      <form class="Form u-mt4" action="./">
                          <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
                          <fieldset>
                            <legend>
                              <span>Acceso de usuarios</span>
                            </legend>
                            <div class="Alert Alert--dialog Alert--info u-mt0">
                              <h4 class="Alert-title u-ml0">Usuario pendiente de aprobación</h4>
                              <p>Ingresá tu correo para recibir un aviso cuando haya sido aprobada o cuando se requiera una acción de tu parte en algún contenido dentro del portal.</p>
                            </div>
                            <div class="Form-group">
                              <label class="Form-label" for="email">Correo electrónico:*</label>
                              <input class="Form-widget" name="email" type="text" id="email">
                            </div>
                            <div class="Form-group">
                              <label for="organismo" class="Form-label">Organismo:*</label>
                              <select name="organismo" id="organismo" class="Form-widget">
                                <option value="0">Selecioná un organismo</option>
                                <option value="1">Opción 1</option>
                                <option value="2">Opción 2</option>
                                <option value="3">Opción 3</option>
                              </select>
                            </div>
                            
                          </fieldset>
                        </form>
                        <div class="Form-actions">
                          <div>
                            <button class="Button Button--link" type="button">Cancelar</button>
                          </div>

                          <div>
                            <button class="Button Button--primary">Guardar</button>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php include 'inc/foot.php'; ?>
