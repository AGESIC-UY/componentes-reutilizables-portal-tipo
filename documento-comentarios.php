<?php
  $title = 'Documento con Comentarios';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Institucional</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <div class="u-main" id="contenido">
    <div class="Container">
      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
						<?php include 'inc/nav-local.php' ?>
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title u-mb1">Estudiantes de UTU reflexionan y debaten sobre consumos problemáticos</h2>
                <p class="u-mb4">Autor: <a href="#">Nombre Apellido</a></p>

                <?php include "./inc/page-info.php"; ?> 

                <div class="Event">
                  <div class="Event-info">
                    <div class="Media">
                      <div class="Media-image">
                        <?php include "inc/moleculas/fecha.php"; ?>
                      </div>
                      <div class="Media-body">
                        <a href="#" class="Event-name">Nombre del evento</a>
                        <p class="Event-description">Lorem ipsum dolor sit.</p>

                        <ul class="Event-details">
                          <li>19:00 hs - Museo del Carnaval</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="Event-map">
                    <div class="FlexEmbed FlexEmbed--21by9">
                      <iframe src="https://peu.agesic.gub.uy/portaltipo18beta/portal/mapa-interactivo.html" allowfullscreen="" title="Mapa del evento"></iframe>
                    </div>
                  </div>
                </div>

                <p class="Page-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione pariatur, corporis. Aperiam laudantium possimus autem magni, perspiciatis sapiente reiciendis corrupti.</p>

                <div class="Page-image">
                  <img src="img/uruguay.jpg" alt="Uruguay">
                </div>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <ul>
                  <li>Lorem ipsum dolor.</li>
                  <li>Maxime, nostrum, eos!</li>
                  <li>Molestias itaque, vitae!</li>
                  <li>Ab, eum, beatae.</li>
                  <li>Quas quod, error.</li>
                </ul>

                <h3>Encabezado de segundo nivel</h3>

                <a class="Download" href="#" title="Descargar: Formulario para inscripción (.pdf 354 KB)">
                  <div class="Media">
                    <div class="Media-image">
                      <span class="Download-icon">
                        <span class="Icon Icon--download"></span>
                      </span>
                    </div>
                    <div class="Media-body">
                      <div class="Download-title">Formulario para inscripción (.pdf 354 KB)</div>
                      <div class="Download-description">Lorem ipsum dolor sit amet consectetur</div>
                    </div>
                  </div>
                </a>

                <figure class="Image Image--left u-size1of4">
                  <img src="img/mural.jpg" alt="Mural">
                  <figcaption>Mural</figcaption>
                </figure>

                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>

                <p>Consectetur adipisicing elit. Iste quae, <strong>odit natus molestiae neque quam dolor eum</strong>, repellat ad id hic architecto rerum cum est suscipit <a href="#">laudantium quibusdam expedita tempore</a> recusandae optio dolorum, illo? <strong>Quas Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Beatae distinctio tempore, laborum hic doloribus? Dolores facilis eum, accusantium non eveniet!</p>

                <p>Lorem ipsum, <strong>consectetur adipisicing elit</strong>. Dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque consequatur repudiandae! Voluptatem?</p>

                <blockquote class="Blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et nostrum iure quae ratione delectus suscipit aperiam eius iste sequi quaerat.</blockquote>

                <div class="Alert">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sapiente inventore fugiat velit, ipsam nemo recusandae corporis labore optio quas.
                </div>

                <div class="Alert">
                  <h3>Encabezado H3</h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eligendi asperiores assumenda atque impedit perferendis, quasi, ratione facere reprehenderit quia!</p>

                  <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Praesentium voluptates quos, alias.</li>
                    <li>Architecto deserunt ipsam, quasi.</li>
                    <li>Fugit molestias ad excepturi?</li>
                  </ul>
                </div>


                <h3>Tabla</h3>

                <table class="Table Table--responsive">
                  <thead>
                    <tr>
                      <th>Título Columna 1</th>
                      <th>Título Columna 2</th>
                      <th>Título Columna 3</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-title="Título Columna 1">Fila 1 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 1 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 1 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 2 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 2 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 2 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 3 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 3 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 3 Columna 3</td>
                    </tr>
                    <tr>
                      <td data-title="Título Columna 1">Fila 4 Columna 1</td>
                      <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                      <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                    </tr>
                  </tbody>
                </table>
								
								<div class="Audio">
                  <div id="audioTitle1" class="Audio-title">Título del audio</div>
                  <audio aria-labelledby="audioTitle1" src="https://archive.org/download/testmp3testfile/mpthreetest.mp3" preload="none" controls="">
                    Su navegador no permite reproducir este archivo de audio.
                  </audio>
                  <a href="#audioTitle1Transcription" class="Audio-link collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="audioTitle1Transcription">
                    <span>Ver transcripción</span>
                    <span class="u-hideVisually"> de Título del audio</span>
                  </a>

                  <div class="collapse" id="audioTitle1Transcription">
                    <div class="u-p3">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque perspiciatis accusamus, officia possimus ea voluptatem adipisci a vel veritatis deserunt!</p>

                      <p>Lorem ipsum dolor sit, <strong>amet consectetur adipisicing</strong> elit. Reprehenderit animi nulla facere. Aliquam eius voluptate perspiciatis deserunt, corrupti placeat facere? Assumenda voluptate velit distinctio commodi dolor. Quae ea ab eligendi!</p>

                      <p>Lorem ipsum dolor sit amet <em>consectetur adipisicing elit</em>. Incidunt itaque atque optio unde delectus perferendis porro, animi quis, dolorem aspernatur saepe natus sint nostrum labore. Quibusdam vero saepe pariatur dolorum.</p>
                    </div>
                  </div>
                </div>

                <div class="Video">
                  <div class="FlexEmbed FlexEmbed--16by9">
                    <iframe class="FlexEmbed-item" src="https://www.youtube.com/embed/JYKje4jO-iY?rel=0" title="Video"></iframe>
                  </div>
                </div>

                <!-- Enlaces, Descargas y Etiquetas -->
								<?php include "inc/relacionados.php"; ?>
								
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="Page Page--hasNav">
        <div class="Grid Grid--noGutter">
          <div class="Grid-item u-md-size1of4">
            &nbsp; <!-- columna invisible -->
          </div>

          <div class="Grid-item u-md-size3of4">
            <div class="Page-body">
              <h3 class="u-mb5">Comentarios</h3>

              <div class="Comments">
                <div class="Comments-box">
                  <div class="Media">
                    <div class="Media-image u-mr2">
                      <div class="Comment-avatar u-bgColor2"><span>PR</span></div>
                    </div>
                    <div class="Media-body">
                      <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escribe su comentario"></textarea>
                      <div class="u-textRight u-mt1">
                        <button class="Button Button--primary" data-toggle="modal" data-target="#js-modal-comentar">Enviar</button>
                      </div>
                    </div>
                  </div>

                  <div id="js-modal-comentar" class="modal  fade" role="dialog">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4 class="modal-title u-my3">Espacio de Intercambio</h4>

                          <h5>Objetivo</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae et ipsum ab porro nulla alias quas praesentium deserunt ea, suscipit animi voluptatum laborum voluptatibus, quam molestias esse eveniet, atque numquam?</p>

                          <h5>Perfil</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate adipisci optio neque magni est minima doloremque voluptatum ratione provident explicabo, doloribus labore iste, minus ad. Non eaque amet aliquam minima.</p>

                          <h5>Por qué me interesa participar *</h5>
                          <form action="./">
                            <textarea class="Comments-textarea" name="motivos" id="motivos" placeholder="Explique sus razones"></textarea>
                            <div class="u-textRight u-my3 u-cfx">
                              <button type="button" class="u-right u-ml4 Button Button--primary">Solicitar acceso</button>
                              <a href="#" class="u-right u-pt1" data-dismiss="modal">Cancelar</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <ul class="Comments-list">
                  <li class="Comment">
                    <div class="Comment-header">
                      <div class="Flag">
                        <div class="Flag-image">
                          <div class="Comment-avatar Comment-avatar--small u-bgColor1"><span>IM</span></div>
                        </div>
                        <div class="Flag-body">Nombre Usuario</div>
                      </div>

                      <div class="Comment-info">12/03/2019 - 21:53</div>
                    </div>
                    <div class="Comment-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem aliquam nemo obcaecati laudantium. Alias, quas accusantium. Iure, accusantium perspiciatis provident ipsa, repellendus qui, natus laborum accusamus nam vero veritatis?
                    </div>
                    <div class="Comment-actions">
                      <a href="#response-1" data-toggle="collapse">Responder</a>
                      <a href="#comments-1" data-toggle="collapse"><span class="Icon Icon--small Icon--reply"></span><span>2 respuestas</span></a>
                    </div>

                    <div class="collapse" id="response-1">
                      <div class="Media u-mt3">
                        <div class="Media-image u-mr2">
                          <div class="Comment-avatar Comment-avatar--small u-bgColor2"><span>PR</span></div>
                        </div>
                        <div class="Media-body">
                          <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escriba su respuesta"></textarea>
                          <div class="u-textRight u-mt1">
                            <button class="Button Button--primary" data-toggle="modal" data-target="#js-modal-comentar">Enviar</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <ul class="Comments-sublist collapse" id="comments-1">
                      <li class="Comment">
                        <div class="Comment-header">
                          <div class="Flag">
                            <div class="Flag-image">
                              <div class="Comment-avatar Comment-avatar--small u-bgColor4"><span>JL</span></div>
                            </div>
                            <div class="Flag-body">Nombre Usuario</div>
                          </div>

                          <div class="Comment-info">12/03/2019 - 21:53</div>
                        </div>
                        <div class="Comment-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem aliquam nemo obcaecati laudantium. Alias, quas accusantium. Iure, accusantium perspiciatis provident ipsa, repellendus qui, natus laborum accusamus nam vero veritatis?
                        </div>
                        <div class="Comment-actions">
                          <a href="#response-2" data-toggle="collapse">Responder</a>
                          <a href="#comments-2" data-toggle="collapse"><span class="Icon Icon--small Icon--reply"></span><span>1 respuestas</span></a>
                        </div>

                        <div class="collapse" id="response-2">
                          <div class="Media u-mt3">
                            <div class="Media-image u-mr2">
                              <div class="Comment-avatar Comment-avatar--small u-bgColor2"><span>PR</span></div>
                            </div>
                            <div class="Media-body">
                              <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escriba su respuesta"></textarea>
                              <div class="u-textRight u-mt1">
                                <button class="Button Button--primary" data-toggle="modal" data-target="#js-modal-comentar">Enviar</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <ul class="Comments-sublist collapse" id="comments-2">
                          <li class="Comment">
                            <div class="Comment-header">
                              <div class="Flag">
                                <div class="Flag-image">
                                  <div class="Comment-avatar Comment-avatar--small u-bgColor3"><span>MC</span></div>
                                </div>
                                <div class="Flag-body">Nombre Usuario</div>
                              </div>

                              <div class="Comment-info">12/03/2019 - 21:53</div>
                            </div>
                            <div class="Comment-body">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem aliquam nemo obcaecati laudantium. Alias, quas accusantium. Iure, accusantium perspiciatis provident ipsa, repellendus qui, natus laborum accusamus nam vero veritatis?
                            </div>
                            <div class="Comment-actions">
                              <a href="#response-3" data-toggle="collapse">Responder</a>
                            </div>

                            <div class="collapse" id="response-3">
                              <div class="Media u-mt3">
                                <div class="Media-image u-mr2">
                                  <div class="Comment-avatar Comment-avatar--small u-bgColor2"><span>PR</span></div>
                                </div>
                                <div class="Media-body">
                                  <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escriba su respuesta"></textarea>
                                  <div class="u-textRight u-mt1">
                                    <button class="Button Button--primary" data-toggle="modal" data-target="#js-modal-comentar">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>

                      <li class="Comment">
                        <div class="Comment-header">
                          <div class="Flag">
                            <div class="Flag-image">
                              <div class="Comment-avatar Comment-avatar--small u-bgColor3"><span>AP</span></div>
                            </div>
                            <div class="Flag-body">Nombre Usuario</div>
                          </div>

                          <div class="Comment-info">12/03/2019 - 21:53</div>
                        </div>
                        <div class="Comment-body">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam rem aliquam nemo obcaecati laudantium. Alias, quas accusantium. Iure, accusantium perspiciatis provident ipsa, repellendus qui, natus laborum accusamus nam vero veritatis?
                        </div>
                        <div class="Comment-actions">
                          <a href="#response-4" data-toggle="collapse">Responder</a>
                        </div>

                        <div class="collapse" id="response-4">
                          <div class="Media u-mt3">
                            <div class="Media-image u-mr2">
                              <div class="Comment-avatar Comment-avatar--small u-bgColor2"><span>PR</span></div>
                            </div>
                            <div class="Media-body">
                              <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escriba su respuesta"></textarea>
                              <div class="u-textRight u-mt1">
                                <button class="Button Button--primary" data-toggle="modal" data-target="#js-modal-comentar">Enviar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/portal-unificado.js"></script>
</body>
</html>

