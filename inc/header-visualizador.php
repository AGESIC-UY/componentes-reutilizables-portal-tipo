<header class="Header Header--slim Header--visualizador Header--blue">

	<div class="Header-top">

    <div class="Container">

        <div class="Header-site">
					<a href="./" class="Parent">
						<img class="Logo-image" src="./assets/escudo.svg" alt="">
						<span>Organismo Responsable</span>
					</a>
        </div>

        <div class="Header-login">

					<?php if (isset($_GET['lang'])) : ?>

						<!-- Menú desplegable de idioma -->
						<?php include "inc/dropdown-lang.php"; ?>

					<?php endif ?>
					
					<div class="User user-access">

						<?php if(isset($_GET['user'])): ?>

							<button class="js-user">
								<span class="Comment-avatar Comment-avatar--small u-bgColor1"><span>MB</span></span>
							</button>

							<!-- Menú desplegable de usuario logueado -->
							<?php include "inc/dropdown-user.php"; ?>

						<?php else: ?>

							<!-- Botón -->
							<button class="js-user" tabindex="0" role="button">
								<span class="u-hideVisually">Usuario</span>    
								<span class="Icon Icon--user--blue"></span>
							</button>

							<!-- Desplegable --> 
							<div class="User-dropdown js-userDropdown">
								<a class="js-user close-dropdown-user">
									<img src="assets/icons/icon-close.svg" width="16"  height="16" alt="Ícono cerrar"/>
								</a>
								<div class="Dropdown-links">
									<h5 class="Dropdown-links-title">Ingresar</h5>
									<a href="?user">Perfil gub.uy</a>
									<a href="?user" class="u-alternativeLink">Área de usuario del Catálogo</a>
								</div>  
							</div>

						<?php endif; ?>

					</div>

        </div>

    </div>

	</div>

	<div class="Header-body">

    <div class="Container">

				<div class="Header-logo">
					<!-- Logo -->
					<a href="./">
						<div class="Logo">
							<!-- Puede llevar imagen o no (en ese caso no lleva la etiqueta img)-->
							<img class="Logo-image" src="./img/60x60.png" alt="">
							<div class="Logo-text">
								<h1 class="Logo-title">
									<span class="Logo-role">Visualizador</span>
									<span>de datos Abiertos y Estadísticas</span>
								</h1>
							</div>
						</div>
					</a>
				</div>

        <div class="Header-right">
					
					<div class="NavSearch-wrapper">

						<!-- Menú -->
						<nav class="Nav--flex js-navDropdown show" id="menu">
							<ul>
								<li>
									<a href="#" id="item-1">Institucional</a>
									<div class="subnav">
										<ul>
											<li><a href="#">Cometidos, creación y evolución histórica</a></li>
											<li><a href="#">Plan estratégico, indicadores y metas</a></li>
											<li><a href="#">Estructura y autoridades</a></li>
											<li><a href="#">Recursos humanos</a></li>
											<li><a href="#">Información de gestión</a></li>
											<li><a href="#">Llamados y concursos</a></li>
											<li><a href="#">Participación</a></li>
											<li><a href="#">Transparencia</a></li>
											<li><a href="#">Normativa</a></li>
											<li><a href="#">Dependencias</a></li>
											<li><a href="#">Contacto</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-2">Políticas y gestión</a>
									<div class="subnav">
										<ul>
											<li><a href="#">Sección uno</a></li>
											<li><a href="#">Sección dos</a></li>
											<li><a href="#">Sección tres</a></li>
											<li><a href="#">Sección n</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-3">Sin desplegable</a>
								</li>
								<li>
									<a href="#" id="item-4">Datos y estadísticas</a>
									<div class="subnav">
										<ul>
											<li><a href="#">Datos</a></li>
											<li><a href="#">Estadísticas</a></li>
											<li><a href="#">Microdatos</a></li>
											<li><a href="#">Datos abiertos</a></li>
											<li><a href="#">Observatorios</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-5">Comunicación</a>
									<div class="subnav">
										<ul>
											<li><a href="#">Noticias</a></li>
											<li><a href="#">Calendario de actividades</a></li>
											<li><a href="#">Campañas</a></li>
											<li><a href="#">Boletines</a></li>
											<li><a href="#">Publicaciones</a></li>
											<li><a href="#">Comunicados</a></li>
											<li><a href="#">Convocatorias</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
						
					</div>
					
					<!-- Botónes para llamar al menú/buscador en móvil -->
					<?php include "inc/nav-search-button-mobile.php"; ?>

        </div>
        
			</div>
    </div>
	</div>
</header>