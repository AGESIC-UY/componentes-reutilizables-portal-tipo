<?php
  $title = 'Contacto con dependencia';
  $form = true;
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>
  
  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Institucional</a></li>
        <li>Contacto</li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item u-md-size7of10">
          <div class="Page">
            <h2 class="Page-title">Contacto</h2>

            <p class="Page-description">Podés contactar con nosotros por medio del formulario de esta página, se
              te enviará una copia del mensajea la casilla de correo electrónico que
              ingreses.</p>

            <form class="Form--tipo" action="./">
              
              <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

              <fieldset>
                
                <legend>
                  <span>Datos de contacto</span>
                </legend>

                <!-- <div class="Form-group u-mt1 u-mb4">
                  <label for="combo1" class="Form-label">Área / Unidad ejecutora:</label>
                  <select name="combo1" id="combo1" class="Form-widget">
                    <option value="0">Nombre Organismo</option>
                    <option value="1">Unidad ejecutora 1</option>
                    <option value="2">Unidad ejecutroa 2</option>
                    <option value="3">Unidad ejecutora 3</option>
                  </select>
                </div> -->

                <div class="Form-group"  >
                          
                    <label for="combo-1" class="Form-label">Área / Unidad ejecutora:</label>
                       
                    <select name="combo-1" id="combo-1" class="Form-widget">
                            
                            <option value="0">Nombre Organismo</option>
                            <option value="1">Unidad ejecutora 1</option>
                            <option value="2">Unidad ejecutroa 2</option>
                            <option value="3">Unidad ejecutora 3</option>
                    
                    </select>
                      
                </div>

                <fieldset>
                  
                  <legend>
                    <span>Información personal</span>
                  </legend>

                  <!-- <div class="Form-group">
                    <label for="nombre" class="Form-label">Nombre completo: *</label>
                    <input type="text" id="nombre" name="nombre" class="Form-widget" placeholder="Escribí tu nombre completo">
                  </div> -->

                  <div class="Form-group" >
                      <label class="Form-label" for="nombre">Nombre completo: *</label>
                      <input class="Form-widget" name="nombre" type="text" id="nombre" placeholder="Escribí tu nombre completo" required>
                  </div> 

                  <!-- <div class="Form-group">
                    <label for="telefono" class="Form-label">Teléfono (opcional):</label>
                    <input type="tel" id="telefono" name="telefono" class="Form-widget" placeholder="Teléfono para poder contactarte">
                  </div> -->

                  <div class="Form-group" >
                    <label class="Form-label" for="telefono">Teléfono (opcional):</label>
                    <input class="Form-widget" name="telefono" type="text" id="telefono" placeholder="Teléfono para poder contactarte">
                  </div>

                  <!-- <div class="Form-group">
                    <label for="correo" class="Form-label">Correo electrónico: *</label>
                    <input type="email" id="correo" name="correo" class="Form-widget" placeholder="correo@dominio.com">
                  </div> -->

                  <div class="Form-group" >
                    <label for="correo" class="Form-label">Correo electrónico: *</label>
                    <input class="Form-widget" name="correo" type="text" id="correo" placeholder="correo@dominio.com" required>
                  </div>

                  <!-- <div class="Form-group">
                    <label for="consulta" class="Form-label">Consulta: *</label>
                    <textarea id="consulta" name="consulta" class="Form-widget" placeholder="Escribí tu consulta"></textarea>
                  </div> -->

                  <div class="Form-group">
                    <label for="consulta" class="Form-label">Consulta: *</label>
                    <textarea name="consulta" id="consulta" class="Form-widget" placeholder="Escribí tu consulta" required></textarea>
                  </div>

                  <!-- <div class="Form-group">
                    <label for="archivo" class="Form-label">Archivo (opcional):</label>
                    <input type="file" id="archivo" name="archivo" class="Form-widget" placeholder="Máximo 20 MB.">
                  </div> -->

                  <div class="Form-group"  >
                    <label class="Form-label" for="archivo">Archivo (opcional):</label>
                    <input class="Form-widget" type="file" name="archivo" id="archivo" placeholder="Máximo 20 MB.">
                  </div>


                </fieldset>

                <fieldset>
          
                    <legend><span>Cláusula de consentimiento informado:</span></legend>

                    <p>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted quedarán incorporados en una base de datos, la cual será procesada exclusivamente para la siguiente finalidad: **Objetivo del formulario**.</p>

                    <p>Los datos personales serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades distintas para las que han sido solicitadas al usuario.</p>

                    <p>El responsable de la base de datos es **Titular de la base** y la dirección donde podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o supresión, es **Dirección del organismo**, según lo establecido en la LPDP".</p>


                    <div class="Form-group" role="group" aria-labelledby="grupo-terminos">
                        
                        <div id="grupo-terminos" class="Form-label">Términos de la cláusula:*</div>
                        
                        <div class="Form-options">
                        
                            <label for="acepto" class="Form-option">
                            
                                <input type="radio" id="acepto" name="concentimiento">
                                <span>Acepto los términos</span>
                            
                            </label>
                            
                            <label for="no-acepto" class="Form-option">
                            
                                <input type="radio" id="no-acepto" name="concentimiento">
                                <span>No acepto los términos. (No se enviará el mensaje)</span>
                            
                            </label>
                        
                        </div>
                    
                    </div>

                </fieldset>

              <!-- <div class="Form-actions">
                <button class="Button Button--link" type="button">Cancelar</button>

                <button class="Button Button--primary">Enviar formulario</button>
              </div> -->

              <div class="Form-actions">
                <div>
                  <button class="Button Button--link" type="button">Cancelar</button>
                </div>

                <div>
                  <button class="Button Button--primary">Enviar formulario</button>
                </div>
              </div>


            </form>
          </div>
        </div>

        <div class="Grid-item u-md-size3of10">
          <div class="Box">
            <div class="Box-info">Atención presencial y telefónica</div>
            <div class="Box-body">
              <h3 class="Box-title">Agencia de Gobierno Electrónico y Sociedad de la Información y del Conocimiento</h3>
              <!--
              <div class="Box-image u-mb3">
                <img src="img/mapa.jpg" alt="Mapa Organismo">
              </div>
              -->
              <div class="Event-map u-mb3">
                <div class="FlexEmbed FlexEmbed--4by3">
                  <iframe src="https://peu.agesic.gub.uy/portaltipo18beta/portal/mapa-interactivo.html" allowfullscreen="" title="Mapa del evento"></iframe>
                </div>
              </div>
              <span class="Box-subtitle"><span class="Icon Icon--phone Icon--small u-mr1"></span><strong>(+595 2) 1503935</strong></span>
              <dl class="Box-definitions">
                <dt>Dirección:</dt>
                <dd>Plaza Independencia 710</dd>
                <dt>Horario de atención:</dt>
                <dd>Lunes a viernes de 12:30 a 18:00 hs.</dd>
                <dt>Correo electrónico:</dt>
                <dd><a href="mailto:contacto@agesic.gub.uy">contacto@agesic.gub.uy</a></dd>
              </dl>
            </div>
            <div class="Box-footer">
              <a href="listado-dependencias-filtros.php">Ver todas las dependencias</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
