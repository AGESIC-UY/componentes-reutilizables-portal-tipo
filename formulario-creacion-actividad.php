<?php $title = 'Actividad de agenda'; ?>
  <?php $logged = false; ?>
    <?php $form = true; ?>
      <?php include 'inc/head.php'; ?>

        <div id="contenido" class="u-main">
          <div class="Container">
            <div class="Grid">
              <div class="Grid-item Grid-item--center u-md-size8of10">
                <div class="Page">
                  <h2 class="Page-title">Actividad de agenda</h2>
                  <div class="Grid">
                    <div class="Grid-item u-md-size10of10">
                      <form action="./">
                        <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>
                        <fieldset>
                          <legend class="u-h5">Datos de la actividad</legend>
                          <ul class="form-group-list">
                            <li>
                              <label for="titulo">Título:*</label>
                              <input id="titulo" name="nombre_direccion" maxlength="120" type="text" value="">
                              <span class="input-msg">Caracteres restantes <span class="caracter-restante">120</span></span>
                            </li>
                            <li>
                              <label class="textarea" for="resumen">Resumen:</label>
                              <ul class="group-list">
                                <li>
                                  <textarea id="resumen" name="textarea1" maxlength="1000"></textarea>

                                </li>
                              </ul>
                              <span class="input-msg">Caracteres restantes <span class="caracter-restante excedido">-6</span></span>
                            </li>
                            <li>
                              <label for="fecha-inicio">Fecha de inicio:*</label>
                              <input id="fecha-inicio" type="date" class="campo-md" />
                            </li>
                            <li>
                              <label for="fecha-fin">Fecha de finalización:</label>
                              <input id="fecha-fin" type="date" class="campo-md" />
                            </li>
                            <li>
                              <label for="horario">Horario:*</label>
                              <select id="evento" class="campo-sm">
                                <option>00</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                              </select>
                              <select id="evento" class="campo-sm">
                                <option>00</option>
                                <option>05</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                                <option>35</option>
                                <option>40</option>
                                <option>45</option>
                                <option>50</option>
                                <option>55</option>
                              </select>
                            </li>
                            <li>
                              <label for="lugar">Lugar:</label>
                              <input id="lugar" type="text" />
                            </li>
                            <li>
                              <label for="direccion">Dirección:*</label>
                              <input id="direccion" type="text" />
                            </li>
                            <li>
                              <label for="telefono">Teléfono de contacto:</label>
                              <input id="telefono" type="tel" class="campo-md" />
                            </li>
                            <li>
                              <label for="interno">Interno:</label>
                              <input id="interno" type="tel" class="campo-sm" />
                            </li>
                            <li>
                              <label for="evento">Actividad en el marco de:</label>
                              <select id="evento">
                                <option>Evento uno</option>
                              </select>
                              <a href="#">Modificar evento</a>
                              <a href="#" class="input-msg" data-toggle="modal" data-target="#js-modal-nuevo-evento">Crear un nuevo evento</a>
                            </li>
                          </ul>
                        </fieldset>

                        <fieldset>
                          <legend class="u-h5">Contenido de la actividad</legend>
                          <ul class="form-group-list">
                            <li>
                              <label class="textarea" for="descripcion">Descripción:</label>
                              <ul class="group-list">
                                <li>
                                  <textarea id="descripcion" name="textarea1" placeholder="TEXTO ENRIQUECIDO"></textarea>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <label for="url-transmision">URL para transmisión en vivo:</label>
                              <input id="url-transmision" name="url-transmision" type="text" value="">
                            </li>
                            <li>
                              <label for="video">Video:</label>
                              <input id="video" type="text" placeholder="Ingrese URL del video" />
                              <a href="#" class="">Cargar video</a>
                              <a href="#" class="input-msg">Agregar otro video</a>
                            </li>
                            <li>
                              <label for="audio">Audio:</label>
                              <input id="audio" type="file" />
                              <a href="#" class="input-msg">Agregar otro audio</a>
                            </li>
                            <li>
                              <label for="imagen">Imagen:</label>
                              <input id="imagen" type="file" />
                              <a href="#" class="input-msg">Agregar otra imagen</a>
                            </li>
                          </ul>
                          <fieldset>
                            <legend class="u-h5">Enlace</legend>
                            <ul class="form-group-list">
                              <li>
                                <label for="url-enlace">URL del enlace:</label>
                                <input id="url-enlace" type="text" placeholder="Ingrese URL del enlace" />
                              </li>
                              <li>
                                <label for="texto-enlace">Texto del enlace:</label>
                                <input id="texto-enlace" type="text" />
                              </li>
                            </ul>
                          </fieldset>
                          <span class="fieldset-msg"><a href="#">Agregar otro enlace</a></span>
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
                      
                      <!-- COMENTO CAMPO MIENTRAS NO ESTÉ DISPONIBLE
                      
                      <li>
                        <label for="url-evento">URL del evento:</label>
                        <input id="url-evento" name="url-evento" type="text" value="">
                      </li> 
                      
                      !-->
                      
                      
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
