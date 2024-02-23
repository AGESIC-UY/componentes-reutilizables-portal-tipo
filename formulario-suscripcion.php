<?php
  $title = 'Suscripción al boletín';
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
        <li>Suscripción al boletín</li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
      <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <h2 class="Page-title">Suscripción al boletín</h2>

            <p class="Page-description">El boletín de noticias se enviará regularmente [N] veces al mes y en todo momento se podrá eliminar la suscripción a la lista de distribución.</p>

            <form class="Form--tipo" action="./">
              
              <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

              <fieldset>

                  <legend>
                    <span>Datos de suscripción</span>
                  </legend>
                  

                <fieldset>
                  <legend>
                    <span>Información personal</span>
                  </legend>

                  <div class="Form-group" >
                    <label for="correo" class="Form-label">Correo electrónico: *</label>
                    <input class="Form-widget" name="correo" type="text" id="correo" placeholder="correo@dominio.com" required>
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

              <div class="Form-actions">
                <button class="Button Button--link" type="button">Cancelar</button>

                <button class="Button Button--primary">Confirmar suscripción</button>
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
