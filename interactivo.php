<?php
  $title = 'Componentes interactivos';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <style>
    .sticky {
      top: 0; /* es necesario definir el top */
      background-color: #555;
      color: #fff;
      border-radius: 6px;
      padding: 1rem;
      z-index: 5;
    }

    .sticky.pinned {
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .25);
    }
  </style>

  <div class="u-main">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <h1 class="Page-title">Componentes interactivos</h1>
            <p class="Page-description">El siguiente ejemplo muestra los casos más simples de componentes interactivos que requieren JavaScript pero se construyen mediante marcado HTML y son accesibles.</p>

            <h2 class="u-mb4">Sticky</h2>
            <p>La idea es utilizar <code>position: sticky;</code> si el navegador soporta y de lo contrario corre el plugin sticky.js</p>

            <div class="sticky" data-position="sticky">Sticky</div>

            <hr>

            <h2 class="u-mb4">Colapsable</h2>

            <a
              class="Button Button--primary collapsed"
              role="button"
              data-toggle="collapse"
              href="#collapseExample"
              aria-expanded="false"
              aria-controls="collapseExample"
            >
              Expandir colapsable <span class="caret"></span>
            </a>

            <div class="collapse" id="collapseExample">
              <div class="Alert Alert--info u-mt3 u-mb0">
                <p>Lorem ipsum dolor sit, <a href="#">amet consectetur adipisicing</a> elit. Culpa ratione expedita unde ipsum, fugiat eius impedit nostrum amet doloribus nihil rerum magnam laboriosam harum perspiciatis iure officiis officia delectus quibusdam!</p>
              </div>
            </div>

            <hr>

            <h2 class="u-mb4">Ventana modal</h2>

            <!-- Button trigger modal -->
            <button type="button" class="Button Button--secondary" data-toggle="modal" data-target="#modalExample">
              Abrir ventana modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="modalTitle">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus deleniti, possimus doloribus nulla aspernatur perspiciatis amet saepe quis deserunt cum eaque facilis odit quos officiis nihil ipsum dolorem explicabo reiciendis?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="Button" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="Button Button--primary u-ml2">Guardar cambios</button>
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <h2 class="u-mb4">Pestañas (Tabs)</h2>

            <div>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">1. Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2. Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">3. Messages</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">4. Settings</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">1. Home tab content</div>
                <div role="tabpanel" class="tab-pane fade" id="profile">2. Profile tab content</div>
                <div role="tabpanel" class="tab-pane fade" id="messages">3. Messages tab content</div>
                <div role="tabpanel" class="tab-pane fade" id="settings">4. Settings tab content</div>
              </div>
            </div>

            <hr>

            <h2 class="u-mb4">Desplegables (Dropdowns)</h2>


            <?php include "./inc/dropdown-compartir.php"; ?>

            <hr>

            <h2 class="u-mb4">Galería</h2>

            <!-- <p>Próximamente…</p> -->
            <div class="Carousel" tabindex="0">
              <div>
                <img src="img/720x350-yellow.png" alt="">
                <p class="Carousel-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div>
                <img src="http://placehold.it/300x200" alt="">
                <p class="Carousel-caption">Perferendis, doloribus nemo quae quis earum dignissimos rem!</p>
              </div>
              <div>
                <img src="http://placehold.it/800x900" alt="">
                <p class="Carousel-caption">Animi, necessitatibus. Quas dolor vel quidem magni iusto.</p>
              </div>
              <div>
                <img src="http://placehold.it/1200x100" alt="">
                <p class="Carousel-caption">Iure, sint possimus voluptatum hic temporibus ullam, natus.</p>
              </div>
              <div>
                <img src="http://placehold.it/843x377" alt="">
                <p class="Carousel-caption">Iure, sint possimus voluptatum hic temporibus ullam, natus.</p>
              </div>
              <div>
                <img src="http://placehold.it/400x400" alt="">
                <p class="Carousel-caption">Iure, sint possimus voluptatum hic temporibus ullam, natus.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->
<?php include "inc/footer.php"; ?>
<?php include "inc/foot.php"; ?>
