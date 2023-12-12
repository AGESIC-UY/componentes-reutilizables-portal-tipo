<?php
  $title = 'Solicitud de acceso a la Información Pública';
  $form = false;
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

          <form class="Form" action="./">
            <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

            <fieldset>
              <legend>
                <span>Solicitud de acceso</span>
              </legend>

              <fieldset>
                <legend>
                  <span>Información personal</span>
                </legend>

                <div class="Form-group">
                  <label for="nombre" class="Form-label">Nombre completo: *</label>
                  <input type="text" id="nombre" name="nombre" class="Form-widget" placeholder="Escribí tu nombre completo">
                </div>

                <div class="Form-group">
                  <label for="documento" class="Form-label">Documento de identidad:</label>
                  <input type="text" id="documento" name="documento" class="Form-widget" placeholder="ej: 12345672">
                </div>

                <div class="Form-group">
                  <label for="direccion" class="Form-label">Dirección: *</label>
                  <input type="text" id="direccion" name="direccion" class="Form-widget">
                </div>

                <div class="Form-group">
                  <label for="telefono" class="Form-label">Teléfono (opcional):</label>
                  <input type="tel" id="telefono" name="telefono" class="Form-widget" placeholder="Teléfono para poder contactarte">
                </div>

                <div class="Form-group">
                  <label for="correo" class="Form-label">Correo electrónico: *</label>
                  <input type="email" id="correo" name="correo" class="Form-widget" placeholder="correo@dominio.com">
                </div>
              </fieldset>

              <fieldset>
                <legend>
                  <span>Datos de la solicitud</span>
                </legend>

                <div class="Form-group">
                  <label for="detalle" class="Form-label">Información solicitada: *</label>
                  <textarea name="detalle" id="detalle" class="Form-widget"></textarea>
                </div>

                <div class="Form-group">
                  <label for="options1" class="Form-label">Formato de la respuesta: *</label>

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
                  <legend>
                    <span>Cláusula de consentimiento informado</span>
                  </legend>

                  <div class="Form-content">
                    <p>
                      "De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de
                      Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted
                      quedarán incorporados en una base de datos, la cual será procesada exclusivamente
                      para la siguiente finalidad: **Objetivo del formulario**.
                    </p>

                    <p>
                      Los datos personales serán tratados con el grado de protección adecuado, tomándose
                      las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento
                      o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades
                      distintas para las que han sido solicitadas al usuario.
                    </p>

                    <p>
                      El responsable de la base de datos es **Titular de la base** y la dirección donde
                      podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o
                      supresión, es **Dirección del organismo**, según lo establecido en la LPDP".
                    </p>
                  </div>

                  <div class="Form-group">
                    <label for="terminos" class="Form-label">Términos de la cláusula: *</label>
                    <div class="Form-options">
                      <label for="acepto" class="Form-option">
                        <input type="radio" id="acepto" name="Acepto los término">
                        <span>Acepto los términos</span>
                      </label>
                      <label for="no-acepto" class="Form-option">
                        <input type="radio" id="no-acepto" name="No acepto los términos">
                        <span>No acepto los términos (no se enviará el mensaje)</span>
                      </label>
                    </div>
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
            </fieldset>

            <div class="Form-actions">
              <button type="button" class="Button Button--link">Cancelar</button>
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
