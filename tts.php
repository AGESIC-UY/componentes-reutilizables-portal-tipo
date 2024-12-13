<?php
  $title = 'Portal Tipo';
?>
<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
  <div class="Container">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li>Lector de textos</a></li>
    </ul>
  </div>
</div>



<div class="u-main">

    <div class="Container">

        <div class="Grid">
		

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">

                <div class="Page" id="TTS">
				<div class="Page-info">
					<div class="Bar">
						<div class="Bar-cell">
							<div class="Page-actions">
							<comp-texto-a-voz id="comp-texto-a-voz"></comp-texto-a-voz>
							</div>
						</div>		
					</div>
				</div>			
									<div class="Page-document">

                    <h2 class="Page-title">Componente lector de textos</h2>
										
										<p class="Page-description">Este documento describe la implementación de un lector de texto en un sitio web utilizando la API de SpeechSynthesis de JavaScript. La funcionalidad presentada permite a los usuarios escuchar el contenido textual de una página web. Este sistema ofrece la posibilidad de leer texto, pausar, reanudar y reiniciar la lectura.</p>
																		
										<h3>Descripción del Sistema</h3>
										<h4>Funcionalidades Principales</h4>
										<ul> 
											<li>Leer texto: Divide el contenido en fragmentos y los reproduce utilizando la API SpeechSynthesis.</li> 
											<li>Pausar y reanudar la lectura: Permite detener temporalmente la lectura y continuar desde el punto de pausa.</li> 
											<li>Reiniciar la lectura: Cancela cualquier lectura en progreso y reinicia desde el principio.</li> 
											<li>Automatización del flujo de lectura: Al finalizar un fragmento, el sistema pasa automáticamente al siguiente después de una breve pausa.</li> 
											<li>Manejo de navegación: Detiene la lectura si el usuario intenta abandonar la página.</li> 
										</ul>

										<h3>Cómo incorporar Text-to-Speech en un sitio web</h3>
										<p>Una vez vinculado el javascript del TTS, se debe asignar el id="TTS" al div que contenga el contenido de la página que desea ser leído.</p>

										<h4>Configuración Avanzada</h4>

										<ul> 
											<li>Cambiar idioma: Modifica el valor de utterance.lang según el idioma deseado (por ejemplo, en-US para inglés).</li> 
											<li>Personalizar voz: Usa speechSynthesis.getVoices() para listar las voces disponibles en el navegador.</li>
										</ul>

										<h3>Cómo incorporar Text-to-Speech como Web Component</h3>
										<ul>
											<li>Descomprimir el zip del componente en una carpeta.</li>
											<li>Incluir en el &lt;head&gt; de tu archivo HTML los siguientes scripts:
wcfManage.js y texto-a-voz.js</li>
											<li>Colocar el texto que se desea leer dentro de un elemento &lt;div&gt; con el atributo id="TTS". </li>
											<li>Pegar el siguiente código en la página donde se quiera usar el componente:
											<div>&lt;comp-texto-a-voz id="comp-texto-a-voz"&gt;&lt;/comp-texto-a-voz&gt;</div>
</li>
										</ul>

										<h3>Descargas</h3>

										<ul class="Page-downloads List">
											<li>
												<a class="Download" href="tts/texto-a-voz-20241205.zip" title="Descargar: Web Component (.zip 268 KB)">
													<div class="Media">
														<div class="Media-image">
															<span class="Download-icon">
																<span class="Icon Icon--download"></span>
															</span>
														</div>
														<div class="Media-body">
															<div class="Download-title">Web Component (.zip 268 KB)</div>
															<div class="Download-description"></div>
														</div>
													</div>
												</a>
											</li>
	
	
	
</ul>
										
										
                </div>
							</div>
            </div>
        </div>

    </div>

</div>

<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>