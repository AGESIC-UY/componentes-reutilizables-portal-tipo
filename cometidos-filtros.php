<?php
  $title = 'Cometidos';
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
                        <a class="Page-navTitle js-toggleLocalNav collapsed" data-toggle="collapse" href="#nav-target" aria-expanded="false">
                          Institucional
                          <span class="Page-navStatus"></span>
                        </a>
  
                        <ul id="nav-target" class="Page-navList collapse" aria-expanded="false" style="height: 0px;">
                          <li><a href="#">Creación y evolución histórica</a></li>
                          <li class="is-active"><a href="#">Cometidos</a></li>
                          <li><a href="#">Plan estratégico</a></li>
                          <li><a href="#">Estructura del organismo</a></li>
                          <li><a href="#">Recursos humanos</a></li>
                          <li><a href="#">Normativa</a></li>
                          <li><a href="#">Transparencia</a></li>
                          <li><a href="#">Contacto</a></li>
                        </ul>
                      </div>

                      <!-- FILTROS -->
                      <div class="Filters">
                        <h3 class="Filters-title" data-toggle="collapse" data-target="#filters-target" aria-expanded="true">Filtros <div class="u-md-hide Filters-status">+</div></h3>
                        <form action="./" class="Form Form--stacked Form--filters u-md-show collapse in" id="filters-target" aria-expanded="true">
                          <?php
                            $filter_name = "Dependencia";
                            $filter_id = "dependencia";
                            include "./inc/filtros/filtro-select.php";
                          ?>
                          <div class="Form-group">
                            <button type="button" class="Button Button--primary u-right">Aplicar filtrar</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <div class="Grid-item u-md-size3of4">
                        <div class="Page-body">

                            <div class="Page-document">

                                <h2 class="Page-title">Cometidos</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas diam quis magna commodo, eget euismod velit lacinia. Etiam eget faucibus nisi, id tempus massa. Aenean leo mauris, malesuada eget magna id, porta pulvinar nisi. Quisque interdum facilisis turpis, at rhoncus ex scelerisque ac. Nunc rhoncus nibh vitae accumsan pellentesque.</p>
                                <h3>Cometidos Sustantivos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas diam quis magna commodo, eget euismod velit lacinia. Etiam eget faucibus nisi, id tempus massa. Aenean leo mauris, malesuada eget magna id, porta pulvinar nisi. Quisque interdum facilisis turpis, at rhoncus ex scelerisque ac. Nunc rhoncus nibh vitae accumsan pellentesque.</p>
                                
                                 <h3>Otros cometidos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas diam quis magna commodo, eget euismod velit lacinia. Etiam eget faucibus nisi, id tempus massa. Aenean leo mauris, malesuada eget magna id, porta pulvinar nisi. Quisque interdum facilisis turpis, at rhoncus ex scelerisque ac. Nunc rhoncus nibh vitae accumsan pellentesque.</p>

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
