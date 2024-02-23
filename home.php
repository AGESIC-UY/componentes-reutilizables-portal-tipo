<?php
  $title = 'Home';
?>
<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
				<li><a href="formatos.php">Formatos</a></li>
        <li>Home</li>
      </ul>
    </div>
</div>

<!-- contenido -->
<div id="contenido" class="u-main">
  <div class="Container">
		
		<h2 class="Page-title u-hideVisually">Página principal</h2>
    
		<div class="Module">
			<div class="Grid">
				<div class="Grid-item u-md-size3of3">
						<div class="Module-item">
							<div class="Box Box--mf Box--microaccesos Box--microaccesos-noTitle">
								<div class="Box-header">
									<h3 class="Box-name">Lista de microaccesos</h3>
								</div>
								<div class="Box-body">
									<div class="Microaccesos-item">
									 <a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Microacceso destacado</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Microacceso 2</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Acceso 3</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
									 <a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Microacceso número 4</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
										<a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Microacceso 5</span>
												</div>
											</div>
										</a>
									</div>
									<div class="Microaccesos-item">
										<a href="#">	
											<div class="Flag">
												<div class="Flag-image">
														<img src="./img/60x60.png" alt="">
												</div>
												<div class="Flag-body">
														<span class="Box-title">Microacceso 6</span>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

    <div class="Module Module--md">
      <div class="Grid">
        <div class="Grid-item u-md-size2of3">
          <div class="Module-item Module-item--full">
            <?php include "inc/contenedores/destacado1.php"; ?>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--full">
            <div class="Box Box--listadoTramites Box--color1">
              <div class="Box-header">
                <h3 class="Box-name">Trámites destacados</h3>
              </div>

              <div class="Box-body">
                <div class="Box-item">
                  <h4 class="Box-title"><a href="#">Solicitud de partida de nacimiento</a></h4>
                  <span class="Box-info">Lorem ipsum dolor sit amet consectetur</span>
                  <a href="#" class="Button Button--primary Button--inverse Button--small">Iniciar Trámite en Línea</a>
                </div>

                <div class="Box-item">
                  <h4 class="Box-title"><a href="#">Duplicado de Factura de UTE</a></h4>
                  <span class="Box-info">Lorem ipsum dolor sit amet consectetur</span>
                  <a href="#" class="Button Button--primary Button--inverse Button--small">Iniciar Trámite en Línea</a>
                </div>

                <div class="Box-item">
                  <h4 class="Box-title"><a href="#">Pago de Patente de Rodados</a></h4>
                  <span class="Box-info">Lorem ipsum dolor sit amet consectetur</span>
                  <a href="#" class="Button Button--primary Button--inverse Button--small">Iniciar Trámite en Línea</a>
                </div>
              </div>

              <div class="Box-footer">
                <a href="#" class="Box-more">Ver más Trámites</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="Module Module--md">
      <div class="Grid">
        <div class="Grid-item u-md-size2of3">
          <div class="Module-item Module-item--full">
            <div class="Box Box--listadoHorizontal Box--color6">
              <div class="Box-header">
                <h3 class="Box-name">Novedades</h3>
              </div>
              <div class="Box-body">
                <ul class="Box-gridList Grid Grid--rowSize4">
                  <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                    <a href="#">
											<div class="Image-cover">
												<img class="Box-image" src="https://images.unsplash.com/photo-1576328842079-95ef7deedc89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80" alt="">
											</div>
											<span class="Box-info">Suscipit eligendi corrupti</span>
											<span class="Box-title">Lorem ipsum dolor sit amet, consectetur elit adipisicing nulla architecto quaerat</span>
										</a>
                  </li>
                  <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                    <a href="#">
											<div class="Image-cover">
												<img class="Box-image" src="https://images.unsplash.com/photo-1576244106577-1dd915e7fd2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=80" alt="">
											</div>
											<span class="Box-info">Suscipit eligendi corrupti</span>
											<span class="Box-title">Lorem ipsum dolor sit amet, consectetur elit adipisicing nulla architecto quaerat</span>
										</a>
                  </li>
                  <li class="Grid-item u-sm-size1of2 u-md-size1of3">
                    <a href="#">
											<div class="Image-cover">
												<img class="Box-image" src="https://images.unsplash.com/photo-1517775587378-db68ff39502f?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="">
											</div>
											<span class="Box-info">Suscipit eligendi corrupti</span>
											<span class="Box-title">Lorem ipsum dolor sit amet, consectetur elit adipisicing nulla architecto quaerat</span>
										</a>
                  </li>
                </ul>
              </div>
              <div class="Box-footer">
                <a href="#">Ver más novedades</a>
              </div>
            </div>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--full">
            <div class="Box Box--event Box--color4">
              <div class="Box-header">
                <h3 class="Box-name">Próxima actividad</h3>
              </div>
              <div class="Box-inner">
                <a href="#" class="Box-subtitle u-mb2">Nombre del evento</a>
                <div class="Media">
                  <div class="Media-image">
                    <!-- Molécula: fecha -->
										<?php include "inc/moleculas/fecha.php"; ?>
                  </div>
                  <div class="Media-body">
                    <div class="Box-info">16:30 - Sala de Conferencias</div>
                    <a href="#" class="Box-title">Capacitación: la gestión de riesgos y daños en el ámbito laboral</a>
                  </div>
                </div>
                <p class="Box-text">Dirigido a quienes trabajan en la ayuda de personas que consumen drogas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac gravida auenean cursus.</p>
              </div>
              <div class="Box-body u-textCenter">
                <a href="#" class="u-textSmall">4 actividades más para hoy</a>
              </div>
              <div class="Box-footer">
                <a href="calendario.php" class="Box-footerLink">Ver calendario completo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<div class="Module">
			<div class="Grid">
				<div class="Grid-item u-md-size3of3">
						<div class="Module-item">
								<?php include "inc/contenedores/microaccesos.php"; ?>
						</div>
				</div>
			</div>
		</div>

    <div class="Module Module--md">
      <div class="Grid">
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item">
            <div class="Box Box--mf Box--destacado2 Box--solid Box--solidBottom">
							<div class="Box-cover">
									<img class="Box-image" src="https://images.unsplash.com/photo-1535207010348-71e47296838a" alt="">
							</div>
							<div class="Box-overlay">
									<a href="#" class="Box-title">Título del D2 con fondo sólido</a>
									<p class="Box-text">Lorem ipsum dolor sit amet, consectetur aicing elit eos eveniet, repellat, vero rerum hic reiciendis.</p>
									<a href="#" class="Box-button Button Button--secondary">Acción principal</a>
							</div>
						</div>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--2of3">
						<?php include "inc/contenedores/destacado3.php"; ?>
          </div>

          <div class="Module-item Module-item--1of3">
            <a href="#" class="Box Box--mf Box--acceso Box--color2">
							<div class="Flag">
								<div class="Flag-image">
									<img src="https://i.pinimg.com/236x/7f/e0/ff/7fe0fff9bdb847e5904e8e5826a4812d.jpg" alt="">
								</div>
								<div class="Flag-body">
									<span class="Box-title">Título del acceso destacado</span>
									<span class="Box-info">Información adicional del acceso destacado</span>
								</div>
							</div>
						</a>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--full">
            <div class="Box Box--video Box--color7">
              <div class="Box-header">
                <h3 class="Box-name">Contenedor de video</h3>
              </div>
              <div class="Box-video">
                <div class="Video">
                  <iframe class="u-sizeFull" src="https://www.youtube.com/embed/C-EZa_Palj0?rel=0&amp;showinfo=0" title="Titulo del Video"></iframe>
                </div>
              </div>
              <div class="Box-body u-mt3">
                <p class="Box-text">El ministro de Salud Pública, Jorge Basso, <a href="#">señaló que cada vez se realizan</a> más estudios de detección del VIH. A pesar de aumentar el número de chequeos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="Module Module--md">
      <div class="Grid">
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--full">
						<?php include "inc/contenedores/destacado4.php"; ?>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--full">
            <div class="Box Box--mf Box--listadoEnlaces Box--color4">
								<div class="Box-header">
									<h3 class="Box-name">Lista de enlaces</h3>
								</div>
								<div class="Box-body">
									<p class="Box-text">Lorem ipsum dolor sit amet, consectetur aicing elit eos eveniet, repellat, vero rerum hic reiciendis recusandae debitis est fugit tempore.</p>
									<ul class="u-bullet">
										<li><a href="#">Lorem ipsum dolor sit.</a></li>
										<li><a href="#">Deleniti adipisci, consequuntur libero.</a></li>
										<li><a href="#">Vero aperiam illum consequatur.</a></li>
									</ul>
								</div>
								<div class="Box-footer">
										<a class="Box-footerLink" href="#">Ver más</a>
								</div>
						</div>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Module-item Module-item--1of3">
            <a href="#" class="Box Box--mf Box--acceso Box--color1">
							<div class="Flag">
								<div class="Flag-image">
									<img src="./img/60x60.png" alt="">
								</div>
								<div class="Flag-body">
									<span class="Box-title">Acceso destacado sin información adicional</span>
								</div>
							</div>
						</a>
          </div>
          <div class="Module-item Module-item--1of3">
            <a href="#" class="Box Box--mf Box--acceso Box--accesoCentrado Box--color3">
							<div class="Flag">
								<div class="Flag-image">
									<img src="./img/60x60.png" alt="">
								</div>
								<div class="Flag-body">
									<span class="Box-title">Título del acceso destacado</span>
									<span class="Box-info">Información adicional</span>
								</div>
							</div>
						</a>
          </div>
          <div class="Module-item Module-item--1of3">
            <a href="#" class="Box Box--mf Box--acceso Box--accesoCentrado Box--color6">
							<div class="Flag">
								<div class="Flag-image">
									<img src="./img/60x60.png" alt="">
								</div>
								<div class="Flag-body">
									<span class="Box-title">Título del acceso destacado</span>
									<span class="Box-info">Información adicional</span>
								</div>
							</div>
						</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
