<div class="gubuy-mega-menu" id="gubuy-mega-menu">
	<div class="Container">

		<div class="head-mega-menu">    
			<a href="#" class="close-mega-menu">
				<span class="Icon Icon--close--white"></span>
				<span class="u-hideVisually">Cerrar menú</span>
			</a>     
		</div>

		<div class="body-mega-menu">
			<div class="Grid">
					<div class="Grid-item u-md-size3of4">
						<div class="Grid search-gubuy">
							<div class="Grid-item u-md-size1of5">
								<a href="./home-gubuy.php">
									<span class="Brand Brand--white">
										<span class="Brand-text">gub.uy</span>
									</span>
								</a>
							</div>
							<div class="Grid-item u-md-size4of5">
								<form action="./">
									<input class="Search-input" type="search" placeholder="Buscar en gub.uy" title="Buscar">
									<button class="Search-button">Buscar en gub.uy</button>
								</form>
							</div>
						</div>

						<div class="Nav-megamenu js-navDropdown" id="nav-menu">
							<ul>
								<li>
									<a href="#" id="item-meg-1">Organismos</a>
									<div class="subnav">
											<ul>
												<li><a href="">Presidencia</a></li>
												<li><a href="">Ministerios</a></li>
												<li><a href="">Gobierno departamental</a></li>
												<li><a href="">Otros organismos</a></li>
												<li><a href="">Iniciativas Interinstitucionales</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-2">Servicios</a>
									<div class="subnav">
											<ul>
												<li><a href="">Trámites y servicios</a></li>
												<li><a href="">Atención a la ciudadanía</a></li>
												<li><a href="">Información por temas</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-3">Participación</a>
									<div class="subnav">
											<ul>
												<li><a href="">Gobierno Abierto</a></li>
												<li><a href="">Participación ciudadana</a></li>
												<li><a href="">Ciudadanía Digital</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-4">Datos y estadísticas</a>
									<div class="subnav">
											<ul>
													<li><a href="">Datos abiertos</a></li>
													<li><a href="">Observatorios</a></li>
											</ul>
									</div>
								</li>
								<li>
									<a href="#" id="item-meg-5">Comunicación</a>
									<div class="subnav">
											<ul>
													<li><a href="">Campañas</a></li>
													<li><a href="">Uruguay Presidencia</a></li>
											</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="Grid-item u-md-size1of4 user-gubuy">

						<?php if (isset($_GET['user'])) : ?>

						<!-- Menú desplegable de usuario logueado -->
						<?php include "inc/dropdown-user.php"; ?>

						<?php else: ?>

						<a href="?user" class="link-gubuy-access">
							<span class="Icon Icon--user--white"></span>
							<span>Ingresar a Perfil gub.uy</span>
						</a>

						<?php endif; ?>
						
					</div>
				
				</div>
			</div>

	</div>
</div>