<?php
  $title = 'Planes';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
    <div class="Breadcrumb">
        <div class="Container">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Políticas y gestión</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenido -->
    <main class="u-main" id="contenido">
        <div class="Container">
            <div class="Page Page--hasNav">
                <div class="Grid Grid--noGutter">
                    <div class="Grid-item u-md-size1of4">
                        <div class="Page-nav">
                            <?php $title = "Políticas y gestión"; include "inc/nav-local-header.php"; ?>

                            <ul class="Page-navList">
                                <li class="is-active"><a href="#">Planes</a></li>
                                <li><a href="#">Programas</a></li>
                                <li><a href="#">Proyectos</a></li>
                                <li><a href="#">Convenios</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="Grid-item u-md-size3of4">
                        <div class="Page-body">
                            <div class="Page-document">

                                <h2 class="Page-title"><?php echo $title; ?></h2>

                                <div class="List List--media">
                                  <div class="Media">
                                    <div class="Media-body">
                                      <h3 class="Media-title"><a href="#">At vero eos et accusamus</a></h3>
                                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                  </div>

                                  <div class="Media">
                                    <div class="Media-body">
                                      <h3 class="Media-title"><a href="#">At vero eos et accusamus</a></h3>
                                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>
                                    </div>
                                  </div>
                                </div>

                                <div class="Pagination">
                                  <div class="Pagination-text">
                                    <div class="Pagination-text center">Mostrando 1 - 2 de 2 resultados</div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
