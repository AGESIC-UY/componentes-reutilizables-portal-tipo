<?php
  $title = 'Documento Externo con Comentarios';
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
                <h2 class="Page-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>

                <?php include "./inc/page-info.php"; ?>

                <div class="Card">
                  <div class="Card-image">
                    <a href="#"><img src="http://placehold.it/200x200" alt=""></a>
                  </div>
                  <div class="Card-body">
                    <a href="#"><h3 class="Card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h3></a>
                    <p class="Card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti amet magni odit asperiores reprehenderit porro quam, fugiat debitis, repellendus labore laboriosam? Asperiores placeat ipsam explicabo quo modi provident accusamus excepturi.</p>
                    <div class="Card-source">
                      Fuente: <a href="#">The New York Times</a>
                    </div>
                    <div class="Card-source">
                      Autor: <a href="#">Nombre Apellido</a>
                    </div>
                  </div>
                </div>
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
                      <textarea class="Comments-textarea" name="comentario" id="comentario" placeholder="Escriba su comentario"></textarea>
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

