<?php
  $title = 'Formularios - Portal Base';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- contenido -->
  <div class="u-main">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <h2 class="Page-title">Formularios (beta)</h2>

            <div class="Alert Alert--warning">
              Esta documentación está en fase de desarrollo por lo que puede presentar errores y está sujeto a cambios.
            </div>

            <hr>

            <h3 class="u-mb3 u-h5">Comentarios</h3>

            <ul class="u-mb5">
              <li>A diferencia de <a href="https://peu.agesic.gub.uy/portal-tipo/formulario-tipo.html">Formulario Tipo</a>, los estilos para formularios están incluidos en los estilos genéricos de Portal Unificado.</li>
              <li>Para indicar campos obligatorios el formato debe ser: <code>Nombre del campo: *</code> (con espacio entre <code>:</code> y <code>*</code>).</li>
              <li>Las etiquetas <code>legend</code> deben tener obligatoriamente una etiqueta <code>span</code> dentro.</li>
            </ul>

            <hr>

            <div class="Page-document">
              <!-- <h3 class="u-h2 u-mt5"><a href="bloque-index.php">Bloques</a></h3>
              <p class="u-mb1">Soluciones específicas para problemas complejos, transversales a todos los organismos.</p> -->

              <!-- <hr> -->

              <h3 class="u-h2 u-my5">Botones</h3>

              <div>
                <button class="Button">Por defecto</button>
                <button class="Button Button--primary">Primario</button>
                <button class="Button Button--secondary">Secundario</button>
                <button class="Button Button--inverse">Inverso</button>
                <button class="Button Button--link">Tipo Enlace</button>
              </div>

              <h4>Botones deshabilitados</h4>

              <div>
                <button class="Button" disabled>Por defecto</button>
                <button class="Button Button--primary" disabled>Primario</button>
                <button class="Button Button--secondary" disabled>Secundario</button>
                <button class="Button Button--inverse" disabled>Inverso</button>
                <button class="Button Button--link" disabled>Tipo Enlace</button>
              </div>

              <h4>Tamaños de botones</h4>

              <div>
                <button class="Button">Tamaño estándar</button>
                <button class="Button Button--small">Tamaño chico</button>
              </div>

              <!-- <h4>Botón con Ícono</h4>

              <div>
                <button class="Button"><span class="Icon Icon--download u-mr1"></span>Botón con ícono</button>
              </div> -->
            </div>

            <hr>


            <form class="Form u-mt4" action="./">
              <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

              <fieldset>
                <legend>
                  <span>Etiquetas y campos</span>
                </legend>

                <div class="Form-group">
                  <label class="Form-label" for="example">Etiqueta de campo común:</label>
                  <input class="Form-widget" name="example" type="text" id="example">
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="example">Etiqueta de campo mediano:</label>
                  <input class="Form-widget Form-widget--medium" name="example" type="text" id="example">
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="example">Etiqueta de campo chico:</label>
                  <input class="Form-widget Form-widget--small" name="example" type="text" id="example">
                </div>

                <div class="Form-group Form-group--disabled">
                  <label class="Form-label" for="example2">Etiqueta de campo deshabilitado:</label>
                  <input class="Form-widget" type="text" id="example2" name="example2" disabled>
                </div>

                <div class="Form-group">
                  <label for="example3" class="Form-label">Etiqueta de campo de área de texto:</label>
                  <textarea name="example3" id="example3" class="Form-widget"></textarea>
                </div>

                <div class="Form-group Form-group--error">
                  <label class="Form-label" for="example">Etiqueta de campo con error:</label>
                  <input class="Form-widget" name="example" type="text" id="example">
                  <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="example">Etiqueta de campo con ayuda:</label>
                  <input class="Form-widget" name="example" type="text" id="example">
                  <div class="Form-hint">Este es un texto de ayuda</div>
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="example">Etiqueta de campo con placeholder:</label>
                  <input class="Form-widget" name="example" type="text" id="example" placeholder="Este es un texto de soporte">
                </div>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                <legend>
                  <span>Selectores</span>
                </legend>

                <div class="Form-group">
                  <label for="combo1" class="Form-label">Etiqueta de combo:</label>
                  <select name="combo1" id="combo1" class="Form-widget">
                    <option value="0">Opción seleccionada de un combo</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                  </select>
                </div>
              </fieldset>

              <fieldset>
                <legend>
                  <span>Campos combinados</span>
                </legend>

                <div class="Form-group">
                  <label for="cedula" class="Form-label">Documento de Identidad:</label>
                  <div class="Grid Form-grid">
                    <div class="Grid-item u-size1of3">
                      <select name="cedula" id="cedula" class="Form-widget">
                        <option value="ci">C.I.</option>
                        <option value="pasaporte">Pasaporte</option>
                      </select>
                    </div>
                    <div class="Grid-item u-size2of3">
                      <input type="text" class="Form-widget">
                      <div class="Form-hint">Incluir dígito verificador</div>
                    </div>
                  </div>
                </div>

                <div class="Form-group Form-group--error">
                  <label for="cedula" class="Form-label">Documento de Identidad:</label>
                  <div class="Grid Form-grid">
                    <div class="Grid-item u-size1of3">
                      <select name="cedula" id="cedula" class="Form-widget">
                        <option value="ci">C.I.</option>
                        <option value="pasaporte">Pasaporte</option>
                      </select>
                    </div>
                    <div class="Grid-item u-size2of3">
                      <input type="text" class="Form-widget">
                      <div class="Form-hint">Incluir dígito verificador</div>
                    </div>
                  </div>
                  <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                </div>

              </fieldset>

              <fieldset>
                <legend>
                  <span>Fechas</span>
                </legend>

                <div class="Form-group">
                  <label for="fecha" class="Form-label">Fecha:</label>
                  <input type="date" class="Form-widget Form-widget--medium">
                </div>
                <div class="Form-group">
                  <label for="fecha" class="Form-label">Fecha:</label>
                  <div class="Grid Form-grid">
                    <div class="Grid-item u-size1of3 u-md-size1of5">
                      <div class="u-mt1"><em>Día</em></div>
                      <input type="number" class="Form-widget" placeholder="DD" min="1" max="31">
                    </div>
                    <div class="Grid-item u-size1of3 u-md-size1of5">
                      <div class="u-mt1"><em>Mes</em></div>
                      <input type="number" class="Form-widget" placeholder="MM" min="1" max="12">
                    </div>
                    <div class="Grid-item u-size1of3 u-md-size1of5">
                      <div class="u-mt1"><em>Año</em></div>
                      <input type="number" class="Form-widget" placeholder="AAAA" min="1900" max="2019">
                    </div>
                    <div class="Grid-item u-sizeFull u-md-size2of5">
                      <div class="Form-hint u-mt1 u-md-mt5">Ejemplo: 31 12 1980</div>
                    </div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>
                  <span>Archivos adjuntos</span>
                </legend>

                <div class="Form-group">
                  <label class="Form-label" for="">Archivos:</label>
                  <input class="Form-widget" type="file">
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="">Archivos:</label>
                  <input class="Form-widget" type="file">
                  <a href="#" class="Button Button--link Button--small">+ Agregar otro campo</a>
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="">Archivos:</label>
                  <input class="Form-widget" type="file">
                </div>
              </fieldset>

              <fieldset>
                <legend>
                  <span>Verificación de seguridad</span>
                </legend>

                <div class="Form-group">
                  <label for="captcha" class="Form-label">Comprobación de seguridad: *</label>

                  <div>
                    <div class="Form-subLabel">Escribe la tercera palabra de: <em>Hoy está lloviendo</em></div>
                    <input class="Form-widget" type="text" id="captcha" name="captcha">
                  </div>
                </div>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                <legend>
                  <span>Opciones</span>
                </legend>
                <div class="Form-group">
                  <label for="options1" class="Form-label">Grupo de opciones de radio button:</label>
                  <div class="Form-options">
                    <p class="u-mb1">Texto complementario para el grupo de opciones (opcional)</p>

                    <label for="opcion_1" class="Form-option">
                      <input type="radio" id="opcion_1" name="opciones">
                      <span>Opción 1</span>
                    </label>
                    <label for="opcion_2" class="Form-option">
                      <input type="radio" id="opcion_2" name="opciones">
                      <span>Opción 2</span>
                    </label>
                  </div>
                </div>

                <div class="Form-group">
                  <label for="options1" class="Form-label">Grupo de opciones de checkboxes:</label>
                  <div class="Form-options">
                    <p class="u-mb1">Texto complementario para el grupo de opciones (opcional)</p>

                    <label for="opcion_check_1" class="Form-option">
                      <input type="checkbox" id="opcion_check_1" name="opciones_check">
                      <span>Opción 1</span>
                    </label>
                    <label for="opcion_check_2" class="Form-option">
                      <input type="checkbox" id="opcion_check_2" name="opciones_check">
                      <span>Opción 2</span>
                    </label>
                  </div>
                </div>

                <div class="Form-group">
                  <label for="options1" class="Form-label">Grupo de opciones de checkboxes:</label>
                  <div class="Form-options">
                    <label for="opcion_check_3" class="Form-option">
                      <input type="checkbox" id="opcion_check_3" name="opciones_check_2">
                      <span>Opción 1</span>
                    </label>

                    <label for="opcion_check_4" class="Form-option">
                      <input type="checkbox" id="opcion_check_4" name="opciones_check_2">
                      <span>Opción 2</span>
                    </label>
                  </div>
                </div>



                <div class="Form-group Form-group--error">
                  <label for="options1" class="Form-label">Grupo de opciones con error:</label>
                  <div class="Form-options">
                    <label for="opcion_check_5" class="Form-option">
                      <input type="checkbox" id="opcion_check_5" name="opciones_check">
                      <span>Opción 1</span>
                    </label>
                    <label for="opcion_check_6" class="Form-option">
                      <input type="checkbox" id="opcion_check_6" name="opciones_check">
                      <span>Opción 2</span>
                    </label>
                  </div>

                  <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                </div>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                <legend><span>Grupo de campos solo lectura</span></legend>

                <div class="Form-group u-py1">
                  <div class="Form-label">Nombre completo:</div>
                  <div class="Form-widget Form-widget--read">Juan Ignacio Rodríguez</div>
                </div>

                <div class="Form-group u-py1">
                  <div class="Form-label">Documento de Identidad:</div>
                  <div class="Form-widget Form-widget--read">
                    <p>4.520.878-4</p>
                    <p>Otro valor para el mismo campo</p>
                  </div>
                </div>

                <div class="Form-group u-py1">
                  <div class="Form-label">Fecha de Nacimiento:</div>
                  <div class="Form-widget Form-widget--read">12/10/1990</div>
                </div>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                  <legend>
                    <span>Tipos de datos especiales</span>
                  </legend>

                <div class="Form-group">
                  <label class="Form-label" for="telefono">Teléfono:</label>
                  <input type="tel" class="Form-widget" id="telefono" name="telefono" />
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="correo">Correo electrónico:</label>
                  <input type="email" class="Form-widget" id="correo" name="correo" />
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="direccion_url">Dirección URL:</label>
                  <input type="url" class="Form-widget" id="direccion_url" name="direccion_url" />
                </div>
              </fieldset>

              <fieldset>
                <legend>
                  <span>Campos con indicadores</span>
                </legend>

                <div class="Form-group">
                  <label class="Form-label" for="direccion_url">Con tooltip de ayuda:</label>
                  <input type="url" class="Form-widget" id="direccion_url" name="direccion_url" />
                  <div class="Form-valid" title="Rol validado">
                    <span class="u-hideVisually">Rol Validado</span>
                  </div>
                </div>

                <div class="Form-group">
                  <label class="Form-label" for="direccion_url">Con tooltip de ayuda:</label>
                  <input type="url" class="Form-widget" id="direccion_url" name="direccion_url" />
                  <button class="Form-help" type="button">
                    <span aria-hidden="true">?</span>
                    <span class="u-hideVisually">Ayuda</span>
                  </button>
                </div>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                <legend><span>Grupo de campos anidados</span></legend>

                <div class="Form-group u-mb4">
                  <label for="example0" class="Form-label">Campo Padre:</label>
                  <input type="text" class="Form-widget" id="example0" name="example0">
                </div>

                <fieldset>
                  <legend><span>Grupo de campos hijo 1</span></legend>

                  <div class="Form-group">
                    <label for="example1" class="Form-label">Campo Hijo 1:</label>
                    <input type="text" class="Form-widget" id="example1" name="example1">
                  </div>
                </fieldset>

                <fieldset>
                  <legend><span>Grupo de campos hijo 2</span></legend>

                  <div class="Form-group">
                    <label for="example2" class="Form-label">Campo Hijo 2:</label>
                    <input type="text" class="Form-widget" id="example2" name="example2">
                  </div>
                </fieldset>

                <a href="#">+ Agregar otro grupo</a>
              </fieldset>
            </form>

            <form action="./" class="Form">
              <fieldset>
                <legend>
                  <span>Botón alineado con los campos</span>
                </legend>

                <div class="Form-group">
                  <label for="alineado" class="Form-label">Alineado:</label>
                  <input type="text" class="Form-widget" id="alineado" name="alineado">
                </div>

                <div class="Form-group">
                  <label for="alineado_2" class="Form-label">Otro campo:</label>
                  <input type="text" class="Form-widget" id="alineado_2" name="alineado_2">
                </div>

                <div class="Form-group Form-group--aligned">
                  <button class="Button Button--primary">Enviar</button>
                </div>
                <div class="Form-group Form-group--aligned">
                  <button class="Button Button--link">Cancelar</button>
                </div>
              </fieldset>
            </form>
          </div>

          <div class="Page">
            <h2 class="Page-title">Formulario apilado</h2>

            <form action="./" class="Form Form--stacked">
                <div class="Form-group">
                  <label for="ejemplo_stacked" class="Form-label">Etiqueta:</label>
                  <input type="text" class="Form-widget" id="ejemplo_stacked">
                </div>

                <div class="Form-group">
                  <label for="combo_stacked" class="Form-label">Etiqueta de combo:</label>
                  <select name="combo_stacked" id="combo_stacked" class="Form-widget">
                    <option value="0">Opción seleccionada de un combo</option>
                    <option value="1">Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3">Opción 3</option>
                  </select>
                </div>

                <div class="Form-group">
                  <label for="ejemplo_stacked_2" class="Form-label">Etiqueta:</label>
                  <input type="text" class="Form-widget" id="ejemplo_stacked_2">
                </div>

                <div class="Form-group">
                  <button type="button" class="Button Button--primary">Filtrar</button>
                </div>
            </form>
          </div>

          <div class="Page-document">
            <div class="Page">
              <h2 class="Page-title">Otros componentes</h2>

              <h3>Tablas</h3>

              <h4>Tabla con acciones</h4>

              <table class="Table Table--responsive Table--form">
                <thead>
                  <tr>
                    <th>Prestador</th>
                    <th>Vencimiento</th>
                    <th>Remover</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Prestador">Asociación Española</td>
                    <td data-title="Vencimiento">06/12/2018</td>
                    <td class="u-textCenter">
                      <button class="Button Button--primary Button--small">
                        <span class="u-hide u-md-show">-</span>
                        <span class="u-md-hide">Remover</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td data-title="Prestador">ASSE</td>
                    <td data-title="Vencimiento">06/05/2019</td>
                    <td class="u-textCenter">
                      <button class="Button Button--primary Button--small">
                        <span class="u-hide u-md-show">-</span>
                        <span class="u-md-hide">Remover</span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>

              <h4>Tabla con acciones y campos</h4>

              <table class="Table Table--responsive Table--form">
                <thead>
                  <tr>
                    <th>Prestador</th>
                    <th>Período de tiempo a compartir</th>
                    <th>Agregar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Prestador">Casa de Galicia</td>
                    <td data-title="Período de tiempo a compartir">
                      <select class="Form-widget" name="" id="">
                        <option value="siempre">Siempre</option>
                        <option value="anio">1 año</option>
                        <option value="semestre">6 meses</option>
                        <option value="mes">1 mes</option>
                        <option value="semana">1 semana</option>
                        <option value="dia">1 día</option>
                      </select>
                    </td>
                    <td class="u-textCenter">
                      <button type="button" class="Button Button--primary Button--small">
                        <span class="u-hide u-md-show">+</span>
                        <span class="u-md-hide">Agregar</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td data-title="Prestador">Casa de Galicia</td>
                    <td data-title="Período de tiempo a compartir">
                      <select class="Form-widget" name="" id="">
                        <option value="siempre">Siempre</option>
                        <option value="anio">1 año</option>
                        <option value="semestre">6 meses</option>
                        <option value="mes">1 mes</option>
                        <option value="semana">1 semana</option>
                        <option value="dia">1 día</option>
                      </select>
                    </td>
                    <td class="u-textCenter">
                      <button type="button" class="Button Button--primary Button--small">
                        <span class="u-hide u-md-show">+</span>
                        <span class="u-md-hide">Agregar</span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td data-title="Prestador">Casa de Galicia</td>
                    <td data-title="Período de tiempo a compartir">
                      <select class="Form-widget" name="" id="">
                        <option value="siempre">Siempre</option>
                        <option value="anio">1 año</option>
                        <option value="semestre">6 meses</option>
                        <option value="mes">1 mes</option>
                        <option value="semana">1 semana</option>
                        <option value="dia">1 día</option>
                      </select>
                    </td>
                    <td class="u-textCenter">
                      <button type="button" class="Button Button--primary Button--small">
                        <span class="u-hide u-md-show">+</span>
                        <span class="u-md-hide">Agregar</span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>

              <h4>Tabla editable</h4>

              <table class="Table Table--responsive Table--form">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Nombre"><input class="Form-widget" type="text" value="Juan Ignacio Rodríguez"></td>
                    <td data-title="Teléfono"><input class="Form-widget" type="tel" value="098123123"></td>
                    <td class="u-textCenter">
                      <button type="button" class="Button Button--small Button--link u-mr2">Cancelar</button>
                      <button type="button" class="Button Button--small Button--primary">Guardar</button>
                    </td>
                  </tr>
                  <tr>
                    <td data-title="Nombre">Beatriz Silvera</td>
                    <td data-title="Teléfono">099543123</td>
                    <td class="u-textCenter">
                      <button type="button" class="Button Button--small Button--inverse">Editar</button>
                    </td>
                  </tr>
                </tbody>
              </table>

              <h3>Pasos</h3>

              <div class="Steps">
                <div class="Steps-inner">
                  <a href="#" class="Steps-item is-finished">
                    <div>
                      <span class="Steps-number">1.</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#23C277">
                        <path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                      </svg>
                    </div>
                    <div>Nombre del paso completado</div>
                  </a>
                  <a href="#" class="Steps-item is-active">
                    <div>
                      <span class="Steps-number">2.</span>
                    </div>
                    <div>Nombre del paso actual</div>
                  </a>
                  <a href="#" class="Steps-item">
                    <div>
                      <span class="Steps-number">3.</span>
                    </div>
                    <div>Nombre del tercer paso</div>
                  </a>
                  <a href="#" class="Steps-item">
                    <div>
                      <span class="Steps-number">4.</span>
                    </div>
                    <div>Nombre del cuarto paso</div>
                  </a>
                </div>
              </div>


              <h3>Pestañas</h3>

              <!-- Nav tabs -->
              <div class="Tabs">
                <ul class="Tabs-nav" role="tablist">
                  <li role="presentation" class="Tabs-item active">
                    <a href="#tab-1" class="Tabs-link" aria-controls="tab-1" role="tab" data-toggle="tab">Pestaña 1</a>
                  </li>
                  <li role="presentation" class="Tabs-item">
                    <a href="#tab-2" class="Tabs-link" aria-controls="tab-2" role="tab" data-toggle="tab">Pestaña 2</a>
                  </li>
                  <li role="presentation" class="Tabs-item">
                    <a href="#tab-3" class="Tabs-link" aria-controls="tab-3" role="tab" data-toggle="tab">Pestaña 3</a>
                  </li>
                  <li role="presentation" class="Tabs-item">
                    <a href="#tab-4" class="Tabs-link" aria-controls="tab-4" role="tab" data-toggle="tab">Pestaña 4</a>
                  </li>
                </ul>
              </div>

              <!-- Tab panes -->
              <div class="Tabs-content">
                <div role="tabpanel" class="Tabs-pane fade in active" id="tab-1">Contenido de la Pestaña 1</div>
                <div role="tabpanel" class="Tabs-pane fade" id="tab-2">Contenido de la Pestaña 2</div>
                <div role="tabpanel" class="Tabs-pane fade" id="tab-3">Contenido de la Pestaña 3</div>
                <div role="tabpanel" class="Tabs-pane fade" id="tab-4">Contenido de la Pestaña 4</div>
              </div>

              <h3>Grupo de errores</h3>

              <div class="Alert Alert--dialog Alert--danger">
                <p class="u-textMedium">Hay <strong>3 errores</strong> en el formulario</p>

                <ol>
                  <li><a href="#">Debe ingresar una fecha</a></li>
                  <li><a href="#">Lorem ipsum ad his scripta</a></li>
                  <li><a href="#">Blandit incorrupte quaerendum in quo</a></li>
                </ol>
              </div>

              <h3>Acciones de formulario</h3>

              <div class="Form-actions">
                <div>
                  <button class="Button Button--link" type="button">Cancelar</button>
                </div>

                <div>
                  <button class="Button" type="button">Acción secundaria</button>
                  <button class="Button Button--primary">Acción primaria</button>
                </div>
              </div>

              <h3>Cuadros de diálogo</h3>

              <div class="Alert Alert--dialog Alert--success">
                <h4 class="Alert-title">Título de mensaje de validación exitosa</h4>
                <p>Mensaje de confirmación de que se ha realizado una acción en forma correcta.</p>
                <a href="#">Enlace de acción</a>
              </div>

              <div class="Alert Alert--dialog Alert--warning">
                <h4 class="Alert-title">Título de mensaje de advertencia</h4>
                <p>Mensaje deMensaje de aviso ante una situación determinada.</p>
                <a href="#">Enlace de acción</a>
              </div>

              <div class="Alert Alert--dialog Alert--danger">
                <h4 class="Alert-title">Título de mensaje de error</h4>
                <p>Mensaje que indica que se ha producido un error.</p>
                <a href="#">Enlace de acción</a>
              </div>

              <div class="Alert Alert--dialog Alert--info">
                <h4 class="Alert-title">Título de mensaje de notificación</h4>
                <p>Mensaje que notifica de alguna acción.</p>
                <a href="#">Enlace de acción</a>
              </div>

              <div class="Alert Alert--dialog">
                <h4 class="Alert-title">Título de mensaje de información</h4>
                <p>Mensaje que brinda información complementaria.</p>
                <a href="#">Enlace de acción</a>
              </div>


              <h3>Notificaciones</h3>

              <div class="Alert Alert--info">
                <p>Mensaje que notifica de alguna acción. (Se muestra 5 segundos, fijado debajo del cabezal, y luego se desvanece)</p>
              </div>

              <div class="Alert Alert--warning">
                <p>Mensaje que notifica de alguna acción. (Se muestra 5 segundos, fijado debajo del cabezal, y luego se desvanece)</p>
              </div>

              <h3>Spinner (indicadores de carga)</h3>

              <div class="Grid">
                    <div class="Grid-item u-md-size1of4">
                      <h5 class="u-mt0 u-mb2">Spinner (grande)</h5>
                      <div class="Spinner Spinner--large"></div>
                    </div>
                    <div class="Grid-item u-md-size1of4">
                      <h5 class="u-mt0 u-mb2">Spinner (estándar)</h5>
                      <div class="Spinner"></div>
                    </div>
                    <div class="Grid-item u-md-size1of4">
                      <h5 class="u-mt0 u-mb2">Spinner (chico)</h5>
                      <div class="Spinner Spinner--small"></div>
                    </div>
                    <div class="Grid-item u-md-size1of4">
                      <h5 class="u-mt0 u-mb2">Spinner (blanco)</h5>
                      <span class="u-bgColor1 u-p2 u-inlineBlock"><div class="Spinner Spinner--white"></div></span>
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
