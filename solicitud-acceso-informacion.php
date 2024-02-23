<?php
  $title = 'Solicitud de acceso a la Información Pública';
  $form = true;
?>
<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Contenido -->
<main class="u-main" id="contenido">
  <div class="Container">
    <div class="Grid">
      <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
        <div class="Page">
          <h2 class="Page-title">Solicitud de acceso a la Información Pública</h2>

          <p class="Page-description">Si desea realizar una solicitud de acceso a la información pública, puede completar y enviar el formulario que se adjunta en esta sección. Recuerde que el plazo para responder la solicitud es de 20 días hábiles a partir de la solicitud. El plazo podrá prorrogarse por otros 20 días hábiles en casos excepcionales.</p>

          <form class="Form--tipo" action="./">
            <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

            <fieldset>
              <legend>
                <span>Solicitud de acceso</span>
              </legend>

              <fieldset>
                <legend>
                  <span>Información personal</span>
                </legend>

                <div class="Form-group" >
                  <label class="Form-label" for="nombre">Nombre completo: *</label>
                  <input class="Form-widget" name="nombre" type="text" id="nombre" placeholder="Escribí tu nombre completo" >
                </div> 

                <div class="Form-group" >
                  <label class="Form-label" for="documento">Documento de identidad:</label>
                  <input class="Form-widget" name="documento" type="text" id="documento" placeholder="ej: 12345672">
                </div> 

                <div class="Form-group" >
                  <label class="Form-label" for="direccion">Dirección: *</label>
                  <input class="Form-widget" name="direccion" type="text" id="direccion" >
                </div> 

                <div class="Form-group" >
                    <label class="Form-label" for="telefono">Teléfono (opcional):</label>
                    <input class="Form-widget" name="telefono" type="text" id="telefono" placeholder="Teléfono para poder contactarte">
                  </div>

                  <div class="Form-group" >
                    <label for="correo" class="Form-label">Correo electrónico: *</label>
                    <input class="Form-widget" name="correo" type="text" id="correo" placeholder="correo@dominio.com" >
                  </div>

              </fieldset>

              <fieldset>
                <legend>
                  <span>Datos de la solicitud</span>
                </legend>


                <div class="Form-group">
                  <label for="detalle" class="Form-label">Información solicitada: *</label>
                  <textarea name="detalle" id="detalle" class="Form-widget" ></textarea>
                </div>



                <div class="Form-group" role="group"  aria-labelledby="grupo-radios" >
                  
                  <div id="grupo-radios" class="Form-label" >Formato de la respuesta: *</div>
                  
                  <div class="Form-options">
                  
                    <label for="via_email" class="Form-option">
                      <input type="radio" id="via_email" name="formato_respuesta">
                      <span>Mail con archivos adjuntos</span>
                    </label>
                    <label for="via_fotocopia" class="Form-option">
                      <input type="radio" id="via_fotocopia" name="formato_respuesta">
                      <span>Fotocopia</span>
                    </label>
                    <label for="via_cd" class="Form-option">
                      <input type="radio" id="via_cd" name="formato_respuesta">
                      <span>CD</span>
                    </label>
                  
                  </div>
                
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


                <fieldset >
                        <legend>
                          <span>Verificación de seguridad</span>
                        </legend>

                        <div class="Form-group" >
                          <label for="captcha" class="Form-label">Comprobación de seguridad: *</label>

                          <div>
                            <div class="Form-subLabel">Escribe la tercera palabra de: <em>Hoy está lloviendo</em></div>
                            <input class="Form-widget" type="text" id="captcha" name="captcha">
                          </div>
                        </div>
                      </fieldset>


            </fieldset>

            <div class="Form-actions">
                <button class="Button Button--link" type="button">Cancelar</button>

                <button class="Button Button--primary">Enviar solicitud</button>
              </div>            


          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
