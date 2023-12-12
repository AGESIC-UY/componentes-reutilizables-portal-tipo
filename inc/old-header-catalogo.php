<header class="Header Header--minisitio Header--catalogo"> 
<!-- Cuando no tiene menu, agregar modificador Header--noNav -->
  <div class="Header-top">
    <div class="Container">
      
			<div class="Header-site">
        <div class="u-relative u-inlineBlock">
          <a class="Header-mainLink" href="./">
            <span class="Brand Brand--sm">
              <span class="Brand-text">gub.uy</span>
            </span>
          </a>
        </div>

        <button class="Header-explore js-parentMenuTrigger">
          <span class="u-hideVisually">Sitio oficial de la República Oriental del Uruguay</span>
          <span class="Header-arrow"></span>
        </button>

				<div class="Header-parent">
          <a href="./">Organismo <strong>de Portal Base</strong></a>
					<!-- Agregar cuando el sitio padre pertenece a gub.uy --> 
					<button class="Header-explore js-menuTrigger js-menuSitioTrigger">
						<span class="u-hideVisually">Menú del Organismo de Portal Base</span>
						<span class="Header-arrow"></span>
					</button>
        </div>
				
      </div>

      <div class="Header-login">
				<?php if (isset($_GET['lang'])) : ?>
        
				<!-- Menú desplegable de idioma -->
  			<?php include "inc/dropdown-lang.php"; ?>
        
				<?php endif; ?>
				
        <?php if (isset($_GET['user'])) : ?>
        
				<!-- Menú desplegable de usuario -->
  			<?php include "inc/dropdown-user.php"; ?>
				
        <?php else: ?>
        <a href="?user">
          <span class="u-md-hide">Perfil gub.uy</span>
          <span class="u-hide u-md-show">Ingresá a Perfil gub.uy</span>
        </a>
        <?php endif; ?>
      </div>
			
    </div>
		
		<div class="Container">
			<div class="Header-parent Header-parent--mobile u-md-hide">
			  <a href="./">Organismo <strong>de Portal Base</strong></a>
				<button class="Header-explore js-menuTrigger js-menuSitioTrigger">
					<span class="u-hideVisually">Menú del Organismo de Portal Base</span>
					<span class="Header-arrow"></span>
				</button>
			</div>
		</div>
		
  </div>
	
	<nav class="Nav js-mainNav" id="menu-padre">
		<div class="Container">
			<ul class="Nav-list">
				<li class="Nav-item">
					<a href="#" aria-expanded="false" id="item-1">Institucional</a>
					<div class="Nav-subnav">
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
				<li class="Nav-item">
					<a href="#" aria-expanded="false" id="item-2">Políticas y gestión</a>
					<div class="Nav-subnav">
						<ul>
							<li><a href="#">Sección uno</a></li>
							<li><a href="#">Sección dos</a></li>
							<li><a href="#">Sección tres</a></li>
							<li><a href="#">Sección n</a></li>
						</ul>
					</div>
				</li>
				<li class="Nav-item">
					<a href="#" aria-expanded="false" id="item-3">Trámites y servicios</a>
					<div class="Nav-subnav">
						<ul>
							<li><a href="#">Trámites</a></li>
							<li><a href="#">Servicios</a></li>
							<li><a href="#">Formularios</a></li>
						</ul>
					</div>
				</li>
				<li class="Nav-item">
					<a href="#" aria-expanded="false" id="item-4">Datos y estadísticas</a>
					<div class="Nav-subnav">
						<ul>
							<li><a href="#">Datos</a></li>
							<li><a href="#">Estadísticas</a></li>
							<li><a href="#">Microdatos</a></li>
							<li><a href="#">Datos abiertos</a></li>
							<li><a href="#">Observatorios</a></li>
						</ul>
					</div>
				</li>
				<li class="Nav-item">
					<a href="#" aria-expanded="false" id="item-5">Comunicación</a>
					<div class="Nav-subnav">
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
		</div>
	</nav>

  <div class="Header-body">
    <div class="Container">
      <div class="Header-logo u-md-size1of3 u-size3of4">
        <a href="./">
          <div class="Logo">
            <!--<img class="Logo-image" src="./assets/escudo-blanco.svg" alt="">-->
            <div class="Logo-text">
              <h1 class="Logo-title">
								<span class="Logo-role">Catálogo de</span>
								<span>Trámites y Servicios</span>
							</h1>
            </div>
          </div>
        </a>
      </div>

      <button class="Header-menuTrigger js-menuMinisitioTrigger u-md-hide">
        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
        <span>Menú</span>
      </button>

      <div class="Header-search">
        <div class="Search">
          <form action="./">
            <label for="search" class="u-hideVisually">Buscar:</label>
            <input id="search" class="Search-input" type="search" placeholder="Buscar trámites y servicios" />
            <button class="Search-button">Buscar</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</header>

<nav class="Nav js-minisitioNav" id="menu">
  <div class="Container">
		<ul class="Nav-list">
      <li class="Nav-item">
        <a href="#" id="item-1">Sobre el Catálogo</a>
        <div class="Nav-subnav">
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
			<li class="Nav-item">
        <a href="#" id="item-2">Trámites y servicios</a>
        <div class="Nav-subnav">
          <ul>
            <li><a href="#">Trámites</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Formularios</a></li>
          </ul>
        </div>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-3">Estadísticas</a>
        <div class="Nav-subnav">
          <ul>
            <li><a href="#">Sección uno</a></li>
            <li><a href="#">Sección dos</a></li>
            <li><a href="#">Sección tres</a></li>
            <li><a href="#">Sección n</a></li>
          </ul>
        </div>
      </li>
      <li class="Nav-item">
        <a href="#" id="item-4">Comunicación</a>
        <div class="Nav-subnav">
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
  </div>
</nav>
