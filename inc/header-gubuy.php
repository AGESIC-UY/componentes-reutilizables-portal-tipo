<header class="Header Header--slim Header--gubUy Header--blue">

    <div class="Header-top">
        <div class="Container">
            <div class="Header-site">
							<span class="Parent">Sitio Oficial de la República Oriental del Uruguay</span>
            </div>

            <div class="Header-login">

							<?php if (isset($_GET['lang'])) : ?>

								<!-- Menú desplegable de idioma -->
								<?php include "inc/dropdown-lang.php"; ?>

							<?php endif ?>
							

							<!-- Usuario en móvil -->
          		<?php if(isset($_GET['user'])): ?>

              <div class="User user-access u-md-hide">

								<button class="js-user">
									<span class="Comment-avatar Comment-avatar--small u-bgColor2"><span>MB</span></span>
								</button>

								<!-- Menú desplegable de usuario logueado -->
								<?php include "inc/dropdown-user.php"; ?>

              </div>

              <?php else: ?>

              <div class="User user-access u-md-hide">
								
								<!-- Botón -->  
								<button class="User-name js-user" tabindex="0">
									<span class="u-hideVisually">Usuario</span>
									<span class="Icon Icon--user--white"></span>
								</button>

								<!-- Desplegable --> 
								<div class="User-dropdown js-userDropdown">
									<a class="js-user close-dropdown-user">
										<img src="assets/icons/icon-close.svg" width="16"  height="16" alt="Ícono cerrar"/>
									</a>
									<div class="Dropdown-links">
										<h5>Ingresar</h5>
										<a href="?gub-uy&user">Perfil gub.uy</a>
									</div>
								</div>
              </div>

              <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="Header-body">
        <div class="Container">
					
					<div class="Header-logo">
						<!-- Logo -->
						<a href="./">
							<div class="Logo">
								<div class="Brand Brand--white Brand--md">
									<h1 class="Brand-text">gub.uy</h1>
								</div>
							</div>
						</a>
						<!-- / Logo -->
					</div>

          <div class="Header-right">
						
						<div class="NavSearch-wrapper">
							
							<!-- Menú -->
							<nav class="Nav--flex js-navDropdown show" id="menu">
								<ul>
									<li>
										<a href="#" id="item-1">Organismos</a>
										<div class="subnav">
											<ul>
												<li><a href="#">Presidencia</a></li>
												<li><a href="#">Ministerios</a></li>
												<li><a href="#">Gobiernos Departamentales</a></li>
												<li><a href="#">Otros organismos</a></li>
												<li><a href="#">Iniciativas Interinstitucionales</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#" id="item-2">Servicios</a>
										<div class="subnav">
											<ul>
												<li><a href="#">Trámites y Servicios</a></li>
												<li><a href="#">Atención a la Ciudadanía</a></li>
												<li><a href="#">Información por temas</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#" id="item-3">Participación</a>
										<div class="subnav">
											<ul>
												<li><a href="#">Gobierno Abierto</a></li>
												<li><a href="#">Participación Ciudadana</a></li>
												<li><a href="#">Ciudadanía Digital</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#" id="item-4">Datos y Estadísticas</a>
										<div class="subnav">
											<ul>
												<li><a href="#">Datos Abiertos</a></li>
												<li><a href="#">Observatorios</a></li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#" id="item-5">Comunicación</a>
										<div class="subnav">
											<ul>
												<li><a href="#">Campañas</a></li>
												<li><a href="#">Uruguay Presidencia</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>

							<!-- Botón abrir buscador -->
							<div class="searchButtonWrap-md" id="searchButtonWrap-md">
								<button class="Button Button--inverse Button--w-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="20.28" height="20.279" viewBox="0 0 20.28 20.279">
										<path fill="#6D6E70" d="M8.361 16.722C3.75 16.722 0 12.971 0 8.361S3.75 0 8.361 0c4.611 0 8.363 3.75 8.363 8.361s-3.752 8.361-8.363 8.361zm0-15.222C4.578 1.5 1.5 4.578 1.5 8.361s3.078 6.861 6.861 6.861c3.784 0 6.863-3.078 6.863-6.861S12.145 1.5 8.361 1.5z"/>
										<path fill="#6D6E70" d="M14.2 13.139l6.08 6.08-1.06 1.06-6.08-6.08z"/>
									</svg> Buscar
								</button>
							</div>

							<!-- Buscador -->
							<div class="Header-search">
								<div class="navButtonWrap-md">
									<button class="Button Button--primary Button--w-icon" id="navButtonWrap-md">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 21" xml:space="preserve">
											<path d="M0,17.2v-1.7h20v1.7H0z M0,11.3V9.7h20v1.7H0z M0,5.5V3.8h20v1.7H0z"/>
										</svg>
										Menú
									</button>
								</div>

								<div class="search-form" id="search-form">
									<div class="Search">
										<form action="./">
											<label for="search" class="u-hideVisually">Buscar:</label>
											<input id="search" class="Search-input" type="search" placeholder="Buscar en Gubuy">
											<!--<label for="Search-checkbox" class="Search-checkboxLabel"><input type="checkbox" id="Search-checkbox" value="MGAP" checked="">Presidencia</label> -->
											<button class="Search-button">Buscar</button>
										</form>
									</div>
								</div>
							</div>

							</div>

							<!-- Botónes para llamar al menú/buscador en móvil -->
							<?php include "inc/nav-search-button-mobile.php"; ?>

							<!-- Usuario en escritorio -->
							<div class="User user-access">

							<?php if (isset($_GET['user'])) : ?>

								<a class="link-user-access js-user" tabindex="0" role="button">
									<span class="Comment-avatar u-bgColor2"><span>MB</span></span>
								</a>

								<!-- Menú desplegable de usuario logueado -->
								<?php include "inc/dropdown-user.php"; ?>

							<?php  else: ?>

								<a class="link-user-access js-user" tabindex="0" role="button">
									<span class="u-hideVisually">Acceso Gub.uy</span>
									<span class="Icon Icon--user--white"></span>
								</a>

								<div class="User-dropdown js-userDropdown">
									<a class="js-user close-dropdown-user">
										<img src="assets/icons/icon-close.svg" width="16"  height="16" alt="Ícono cerrar"/>
									</a>
									<div class="Dropdown-links">
										<h5 class="Dropdown-links-title">Ingresar</h5>
										<a href="?user">Perfil gub.uy</a>
									</div>
								</div>

							<?php  endif; ?>

					</div>

        </div>

			</div>
    </div>

</header>