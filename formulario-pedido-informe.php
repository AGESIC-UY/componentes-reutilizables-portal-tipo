<?php $title = 'Pedido de informe'; ?>
    <?php $logged = false; ?>
        <?php $form = true; ?>
            <?php include 'inc/head.php'; ?>

                <div id="contenido" class="u-main">
                    <div class="Container">
                        <div class="Grid">
                            <div class="Grid-item Grid-item--center u-md-size8of10">
                                <div class="Page">
                                    <h2 class="Page-title">Pedido de informe</h2>
                                    <div class="Grid">
                                        <div class="Grid-item u-md-size10of10">
                                            <form action="./">
                                                <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>
                                                <fieldset>
                                                    <legend class="u-h5">Datos</legend>
                                                    <ul class="form-group-list">
                                                        <li>
                                                            <span class="label label-align-top">Tipo de pedido:*</span>
                                                            <ul class="group-list">
                                                                <li>
                                                                    <label for="pedido-informe">
                                                                        <input type="radio" id="pedido-informe" name="tipo-pedido" value="pedido-informe" title="Pedido de informe">
                                                                        <span>Pedido de informe</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="pedido-info">
                                                                        <input type="radio" id="pedido-info" name="tipo-pedido" value="pedido-info" title="Pedido de información pública">
                                                                        <span>Solicitud de información pública</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <label for="titulo">Título:*</label>
                                                            <input id="titulo" name="nombre_direccion" maxlength="120" type="text" value="">
                                                            <span class="input-msg">Caracteres restantes <span class="caracter-restante">120</span></span>
                                                        </li>
                                                        <li>
                                                            <label for="info-adicional">Información adicional:</label>
                                                            <input id="info-adicional" name="info-adicional" maxlength="30" type="text" value="">
                                                            <span class="input-msg">Caracteres restantes <span class="caracter-restante">30</span></span>
                                                        </li>
                                                        <li>
                                                            <label class="textarea" for="desarollo">Detalle:</label>
                                                            <ul class="group-list">
                                                                <li>
                                                                    <textarea id="desarollo" name="textarea1" placeholder="RICH TEXT"></textarea>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <label for="solicitante">Solicitante:*</label>
                                                            <input id="solicitante" type="text" />
                                                            <a href="#" class="input-msg">Agregar otro solicitante</a>
                                                        </li>
                                                        <li>
                                                            <label for="fecha-solicitud">Fecha de solicitud:*</label>
                                                            <input id="fecha-solicitud" type="date" class="campo-md" />
                                                        </li>
                                                        <li>
                                                            <label for="fecha-respuesta">Fecha de respuesta:</label>
                                                            <input id="fecha-respuesta" type="date" class="campo-md" />
                                                        </li>
                                                    </ul>
                                                    <fieldset>
                                                        <legend class="u-h5">Archivo adjunto</legend>
                                                        <ul class="form-group-list">
                                                            <li>
                                                                <label for="adjunto">Adjuntar archivo:</label>
                                                                <input id="adjunto" type="file" />
                                                            </li>
                                                            <li>
                                                                <label for="titulo-adjunto">Descripción:</label>
                                                                <input id="titulo-adjunto" type="text" />
                                                                <span class="input-msg">Caracteres restantes <span class="caracter-restante">60</span></span>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                    <span class="fieldset-msg"><a href="#">Agregar otro archivo adjunto</a></span>


                                                    <ul class="form-group-list">
                                                        <li>
                                                            <span class="label label-align-top">Público:</span>
                                                            <ul class="group-list">
                                                                <li>
                                                                    <label for="publico-uno">
                                                                        <input type="checkbox" id="publico-uno" name="opcionesCheck" value="opcionCheckUno" title="Opción uno checkbox">
                                                                        <span>Opción uno</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="publico-dos">
                                                                        <input type="checkbox" id="publico-dos" name="opcionesCheck" value="opcionCheckDos" title="Opción dos checkbox">
                                                                        <span>Opción dos</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="publico-tres">
                                                                        <input type="checkbox" id="publico-tres" name="opcionesCheck" value="opcionCheckDos" title="Opción dos checkbox">
                                                                        <span>Opción tres</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <span class="label label-align-top">Temas:</span>
                                                            <ul class="group-list">
                                                                <li>
                                                                    <label for="tema-uno">
                                                                        <input type="checkbox" id="tema-uno" name="opcionesCheck" value="opcionCheckUno" title="Opción uno checkbox">
                                                                        <span>Opción uno</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="tema-dos">
                                                                        <input type="checkbox" id="tema-dos" name="opcionesCheck" value="opcionCheckDos" title="Opción dos checkbox">
                                                                        <span>Opción dos</span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label for="tema-tres">
                                                                        <input type="checkbox" id="tema-tres" name="opcionesCheck" value="opcionCheckDos" title="Opción dos checkbox">
                                                                        <span>Opción tres</span>
                                                                    </label>
                                                                </li>
                                                            </ul>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL NUEVO EVENTO -->
                <div id="js-modal-nuevo-evento" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form class="u-mt3">
                                    <p class="form-required u-mt4">Los campos indicados con <span>*</span> son obligatorios</p>
                                    <fieldset>
                                        <legend>Nuevo evento</legend>
                                        <ul class="form-group-list">
                                            <li>
                                                <label for="titulo-evento">Título:*</label>
                                                <input id="titulo-evento" name="nombre_direccion" maxlength="120" type="text" value="">
                                                <span class="input-msg">Caracteres restantes <span class="caracter-restante">120</span></span>
                                            </li>
                                            <li>
                                                <label for="fecha-inicio-evento">Fecha de inicio:*</label>
                                                <input id="fecha-inicio-evento" type="date" class="campo-md" />
                                            </li>
                                            <li>
                                                <label for="fecha-fin-evento">Fecha de finalización:</label>
                                                <input id="fecha-fin-evento" type="date" class="campo-md" />
                                            </li>
                                            <li>
                                                <label for="url-evento">URL del evento:</label>
                                                <input id="url-evento" name="url-evento" type="text" value="">
                                            </li>
                                        </ul>
                                    </fieldset>
                                    <ul class="form-action-buttons">
                                        <li class="action-buttons-primary">
                                            <ul>
                                                <li>
                                                    <button class="Button Button--primary u-right">Crear y asignar</button>
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
                    </div>
                </div>
                <!-- MODAL NUEVO EVENTO -->

                <?php include 'inc/foot.php'; ?>
