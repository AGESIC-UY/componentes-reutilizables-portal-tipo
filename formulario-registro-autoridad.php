<?php $title = 'Registro de autoridad'; ?>
    <?php $logged = false; ?>
        <?php include 'inc/head.php'; ?>

            <div id="contenido" class="u-main">
                <div class="Container">
                    <div class="Grid">
                        <div class="Grid-item Grid-item--center u-md-size8of10">
                            <div class="Page">
                                <h2 class="Page-title">Registro de autoridad / cargo</h2>
                                <div class="Grid">
                                    <div class="Grid-item u-md-size10of10">
                                        <form class="Form u-mt4" action="./">
                                            <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
                                            <fieldset>
                                                <legend>
                                                    <span>Datos del cargo</span>
                                                </legend>
                                                <div class="Form-group">
                                                    <label for="institucion" class="Form-label">Institución:*</label>
                                                    <select name="institucion" id="institucion" class="Form-widget">
                                                        <option value="0">Seleccioná una institución</option>
                                                        <option value="1">Opción 1</option>
                                                        <option value="2">Opción 2</option>
                                                        <option value="3">Opción 3</option>
                                                    </select>
                                                </div>
                                                <div class="Form-group">
                                                    <label for="cargo" class="Form-label">Cargo:*</label>
                                                    <select name="cargo" id="cargo" class="Form-widget">
                                                        <option value="0">Seleccioná un cargo</option>
                                                        <option value="1">Opción 1</option>
                                                        <option value="2">Opción 2</option>
                                                        <option value="3">Opción 3</option>
                                                    </select>
                                                    <div class="Form-hint u-mt0"><a href="#" class="Button Button--link Button--small" data-toggle="modal" data-target="#js-modal-nuevo-cargo">Crear nuevo cargo</a></div>
                                                </div>
                                                <div class="Form-group">
                                                    <label class="Form-label" for="autoridad">Autoridad:*</label>
                                                    <div class="u-relative" >
                                                      <input class="Form-widget Search-input js-search-input" name="autoridad" type="text" id="autoridad" placeholder="Buscar..." >
                                                      <div class="Typeahead js-typeahead Form-widget u-mt5 u-p0">
                                                        <ul class="Typeahead-list">
                                                          <li class="Typeahead-item"><a href="#">Resultado 1</a></li>
                                                          <li class="Typeahead-item"><a href="#">Resultado 2</a></li>
                                                          <li class="Typeahead-item"><a href="#">Resultado 3</a></li>
                                                        </ul>
                                                      </div>
                                                    </div>
                                                    <a href="#" class="Button Button--link Button--small" data-toggle="modal" data-target="#js-modal-nueva-autoridad">Crear nueva autoridad</a>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend>
                                                    <span>Ubicación y contacto</span>
                                                </legend>
                                                <div class="Form-group">
                                                    <label class="Form-label" for="direccion">Dirección:</label>
                                                    <input type="text" class="Form-widget" id="direccion" name="direccion">
                                                </div>
                                                <div class="Form-group">
                                                    <label class="Form-label" for="email">Correo electrónico:*</label>
                                                    <input class="Form-widget" name="email" type="text" id="email">
                                                </div>
                                                <div class="Form-group">
                                                    <label class="Form-label" for="telefono">Teléfono:</label>
                                                    <input type="tel" class="Form-widget Form-widget--medium" id="telefono" name="telefono">
                                                </div>
                                                <div class="Form-group">
                                                    <label class="Form-label" for="interno">Interno:</label>
                                                    <input type="tel" class="Form-widget Form-widget--small" id="interno" name="interno">
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

            <!-- MODAL NUEVO CARGO -->
            <div id="js-modal-nuevo-cargo" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="u-mt3">Crear nuevo cargo</h3>
                            <form class="Form u-mt4" action="./">
                                <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
                                <fieldset>
                                    <legend>
                                        <span>Datos del cargo</span>
                                    </legend>
                                    <div class="Form-group">
                                        <label class="Form-label" for="nombre-completo">Título:*</label>
                                        <input type="text" class="Form-widget" id="nombre-completo" name="nombre-completo">
                                    </div>
                                    <div class="Form-group">
                                        <label for="institucion" class="Form-label">Institución:*</label>
                                        <select name="institucion" id="institucion" class="Form-widget">
                                            <option value="0">Seleccioná una institución</option>
                                            <option value="1">Opción 1</option>
                                            <option value="2">Opción 2</option>
                                            <option value="3">Opción 3</option>
                                        </select>
                                    </div>
                                    <div class="Form-group">
                                        <label class="Form-label" for="descripcion-cargo">Descripción:*</label>
                                        <input type="text" class="Form-widget" id="descripcion-cargo" name="descripcion-cargo" value="ACÁ VA UN CAMPO DE TEXTO ENRIQUECIDO">
                                    </div>
                                </fieldset>
                            </form>
                            <div class="Form-actions u-mb4">
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
            <!-- MODAL NUEVO CARGO -->

            <!-- MODAL NUEVA AUTORIDAD -->
            <div id="js-modal-nueva-autoridad" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="u-mt3">Crear nueva autoridad</h3>
                            <form class="Form u-mt4" action="./">
                                <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
                                <fieldset>
                                    <legend>
                                        <span>Datos personales</span>
                                    </legend>
                                    <div class="Form-group">
                                        <label class="Form-label" for="nombre-completo">Nombre y Apellido:*</label>
                                        <input type="text" class="Form-widget" id="nombre-completo" name="nombre-completo">
                                    </div>
                                    <div class="Form-group">
                                        <label class="Form-label" for="">Foto:*</label>
                                        <input class="Form-widget" type="file">
                                        <div class="Form-hint">Se recortará en formato cuadrado de 480x480px</div>
                                    </div>
                                    <div class="Form-group">
                                        <label class="Form-label" for="texto-alternativo">Texto alternativo:*</label>
                                        <input type="tex" class="Form-widget" id="texto-alternativo" name="texto-alternativo">
                                        <div class="Form-hint"><strong>128</strong> caracteres restantes</div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>
                                        <span>Currículum</span>
                                    </legend>
                                    <div class="Form-group">
                                        <label for="fecha" class="Form-label">Última actualización:*</label>
                                        <input type="date" class="Form-widget Form-widget--medium">
                                    </div>
                                    <div class="Form-group">
                                        <label class="Form-label" for="profesion">Profesión:</label>
                                        <input type="text" class="Form-widget" id="profesion" name="profesion">
                                    </div>
                                    <div class="Form-group">
                                        <label class="Form-label" for="experiencia-uno">Experiencia:*</label>
                                        <input type="text" class="Form-widget" id="experiencia-uno" name="experiencia-uno" placeholder="Cargo/empleo anterior">
                                        <div class="Form-hint u-mt0"><a href="#" class="Button Button--link Button--small" data-toggle="modal" data-target="#js-modal-nuevo-cargo">+ Añadir otro cargo anterior</a></div>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="Form-actions u-mb4">
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
            <!-- MODAL NUEVA AUTORIDAD -->

            <?php include 'inc/foot.php'; ?>