<?php
  $title = 'Ficha de Programa';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Políticas y Gestión</a></li>
        <li><a href="#">Programas</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size8of10">
          <div class="Page">
            <div class="Page-body">

              <div class="Page-document">

                <span class="Page-subtitle">Información adicional</span>
                <h2 class="Page-title">Nombre del Programa</h2>

                <?php include "./inc/page-info.php"; ?>

                <p class="Page-description u-mb6">Resumen: descripción mínima que describe de qué se trata el programa, máximo 1000 caracteres. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque.</p>

                <h3>Objetivos</h3>
                <ul>
                  <li>Objetivo 1</li>
                  <li>Objetivo 2</li>
                  <li>Objetivo 3</li>
                </ul>

                <h3>Descripción</h3>
                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Nemo esse beatae, nihil doloribus dolor perferendis <em>quas voluptatem atque impedit</em> ab nulla omnis libero neque <a href="#">delectus veritatis laborum</a> consequatur repudiandae! Voluptatem?</p>
                <p>Integer semper interdum lorem, at accumsan dolor blandit eget. Quisque commodo, erat vel hendrerit tincidunt, neque lacus venenatis nisi, auctor mattis massa odio sed nisl. Aliquam augue ipsum, convallis eu lorem non, porta dapibus elit. In gravida, diam vitae scelerisque sollicitudin, lorem dolor ultricies nibh, eget molestie tortor lectus molestie nibh. Integer pharetra leo id ex varius, sit amet feugiat elit lacinia. Vivamus vel orci sapien. Duis vel libero id quam ultrices tristique.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo esse beatae, nihil doloribus dolor perferendis quas voluptatem atque impedit ab nulla omnis libero neque delectus veritatis laborum consequatur repudiandae! Voluptatem?</p>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                  <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget nisl turpis. Sed luctus ultrices eros, non faucibus turpis pulvinar eu.</li>
                </ul>

                <h3>¿A quién está dirigido?</h3>
                <p>Todo público</p>

                <h3>Metas y resultados</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend tincidunt tincidunt. Morbi ornare magna non nisl bibendum tincidunt. Nulla fermentum cursus ligula, sed finibus sem hendrerit porttitor. Quisque congue condimentum enim, non maximus nulla auctor eget. Quisque aliquet nibh sit amet lectus hendrerit vulputate sit amet ac lectus. Etiam id libero tristique, vulputate leo ac, dignissim sapien. Morbi eget tincidunt diam. Quisque sagittis hendrerit risus, vel vehicula diam hendrerit ac. Integer vestibulum felis non tristique laoreet.</p>

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
