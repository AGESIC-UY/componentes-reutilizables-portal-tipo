<header class="Header Header--slim">

    <div class="Header-top">

        <div class="Container">

            <div class="Header-site"></div>
            
            <div class="Header-login">

							<?php if (isset($_GET['lang'])) : ?>

								<!-- Menú desplegable de idioma -->
								<?php include "inc/dropdown-lang.php"; ?>

							<?php endif ?>

            </div>
					
        </div>

    </div>

    <div class="Header-body">

        <div class="Container">

            <div class="Header-logo">

                <!-- Logo -->
                <a href="./">
									<div class="Logo">
										<img class="Logo-image" src="./assets/escudo.svg" alt="">
										<div class="Logo-text">
											<h1 class="Logo-title">
												<!--<span class="Logo-role">Portal Tipo</span>-->
												<span>Portal Tipo</span>
												<!--<span>HTML, CSS, JS para portales estatales</span>-->
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
											<a href="#" id="item-1">Sobre Portal Tipo</a>
											<div class="subnav">
												<ul>
													<li><a href="acerca-de.php">Acerca de</a></li>
													<li><a href="grilla.php">Grilla</a></li>
													<li><a href="layout.html">Módulo 3x3</a></li>
												</ul>
											</div>	
										</li>
										<li>
											<a href="#" id="item-2">Componentes de diseño</a>
											<div class="subnav">
												<ul>
													<li><a href="atomos-y-moleculas.php">Átomos y moléculas</a></li>
													<li><a href="#">Cabezal y pie</a></li>
													<!--<li><a href="#">Grilla</a></li>
													<li><a href="#">Módulo 3x3</a></li>
													-->
													<li><a href="contenedores.php">Contenedores</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" id="item-3">Formatos y Contenidos</a>
											<div class="subnav">
												<ul>
													<li><a href="formatos.php">Formatos</a></li>
													<li><a href="contenidos.php">Contenidos</a></li>
													<li><a href="#">Arquitectura de la información</a></li>
												</ul>
											</div>
										</li>
										<li>
											<a href="#" id="item-4">Formularios</a>
											<div class="subnav">
												<ul>
													<li><a href="#">A definir</a></li>
													<!--
													<li><a href="#">Estadísticas</a></li>
													<li><a href="#">Microdatos</a></li>
													<li><a href="#">Datos abiertos</a></li>
													<li><a href="#">Observatorios</a></li>
													-->
												</ul>
											</div>
										</li>
									</ul>
								</nav>

							</div>

							<!-- Disparador del menú en móvil -->
							<div class="navButtonWrap u-md-hide">
								<button class="js-navTrigger Button--w-icon">
									<svg fill="#000000"  class="menu" height="14" width="14"  xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 14 14">
										<path d="M13.1,7.7H0.9C0.5,7.7,0.2,7.4,0.2,7s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,7.7,13.1,7.7z"/>
										<path d="M13.1,11.8H0.9c-0.4,0-0.8-0.3-0.8-0.8s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,11.8,13.1,11.8z"/>
										<path d="M13.1,3.7H0.9C0.5,3.7,0.2,3.4,0.2,3s0.3-0.8,0.8-0.8h12.1c0.4,0,0.8,0.3,0.8,0.8S13.5,3.7,13.1,3.7z"/>
									</svg>
									<svg fill="#000000" class="close" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 14 14">
										<path d="M1.9,12.7c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.2-0.6,0-0.9L11.6,1.5c0.2-0.2,0.6-0.2,0.9,0c0.2,0.2,0.2,0.6,0,0.9L2.4,12.5 C2.3,12.6,2.1,12.7,1.9,12.7z"/>
										<path d="M12,12.6c-0.2,0-0.3-0.1-0.4-0.2l-10-10c-0.2-0.2-0.2-0.6,0-0.9s0.6-0.2,0.9,0l10,10c0.2,0.2,0.2,0.6,0,0.9 C12.3,12.5,12.1,12.6,12,12.6z"/>
									</svg>
									<span>Menú</span>
								</button>
							</div>

            </div>

        </div>

    </div>
	
	<!-- Megamenú de Gubuy 
	<?php include "inc/gubuy-megamenu.php"; ?>
	-->

</header>