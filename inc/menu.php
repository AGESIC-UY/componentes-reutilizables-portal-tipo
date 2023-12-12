<div class="Menu js-parentNav" tabindex="-1">
  <div class="Menu-wrap">
    <div class="Menu-header">
      <div class="Menu-logo">
        <div class="u-inlineBlock">
          <a href="./">
            <img src="./assets/logo-gubuy-blanco.png" alt="gub.uy" />
          </a>
        </div>
      </div>

      <div class="Menu-close">
        <button class="js-menuClose">
          <svg fill="#ffffff" width="30" height="30" viewBox="0 0 24 24">
            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>

          <span class="u-hideVisually">Cerrar Menú</span>
        </button>
      </div>

      <div class="Menu-search Search Search--borderless">
        <form action="./">
          <input class="Search-input" type="search" placeholder="¿En qué podemos ayudarte?" title="Buscar">
          <button class="Search-button">Buscar</button>
        </form>
      </div>
    </div>

    <div class="Menu-breadcrumb Breadcrumb js-menuBreadcrumb is-visible">
      <div class="Container">
        <ul>
          <li id="js-breadcrumb-1" class="is-visible"><a href="#">gub.uy</a></li>
          <li id="js-breadcrumb-2" class="is-visible" data-target="#organismos"><a href="#">Organismos</a></li>
          <li id="js-breadcrumb-3" class="is-visible" data-target="#ministerios"><a href="#">Ministerios</a></li>
        </ul>
      </div>
    </div>

    <!-- NIVEL 1 -->
    <div class="Menu-root" id="organismos">
      <div class="Menu-item has-submenu js-organismosSubmenu">
        <span tabindex="0" role="button">Organismos</span>

        <div class="Menu-subNav u-p0">
          <ul class="List u-mb0">
            <li class="List-item has-submenu" data-target="#presidencia" tabindex="0">Presidencia</li>
            <li class="List-item has-submenu is-active" data-target="#ministerios" tabindex="0">Ministerios</li>
            <li class="List-item has-submenu" data-target="#entes-autonomos" tabindex="0">Entes autónomos</li>
            <li class="List-item has-submenu" data-target="#servicios-descentralizados" tabindex="0">Servicios Descentralizados</li>
            <li class="List-item has-submenu" data-target="#gobiernos-departamentales" tabindex="0">Gobiernos Departamentales</li>
            <li class="List-item has-submenu" data-target="#otros-organismos" tabindex="0">Otros organismos</li>
          </ul>
        </div>
      </div>

      <div class="Menu-item has-submenu">
        <span tabindex="0" role="button">Trámites y servicios</span>

        <div class="Menu-subNav Nav-subNav--tramites">
          <div class="Grid">
            <div class="Grid-item">
              <div class="u-h4 u-mb4 u-mt2">Trámites Destacados</div>

              <ul class="u-bullet">
                <li><a href="https://tramites.gub.uy/ampliados?id=307">Certificado de antecedentes judiciales</a></li>
                <li><a href="https://tramites.gub.uy/ampliados?id=261">Permiso para menor de edad </a></li>
                <li><a href="https://tramites.gub.uy/ampliados?id=276">Consultas laborales y salariales</a></li>
                <li><a href="https://tramites.gub.uy/ampliados?id=606">Solicitud de Pasaporte</a></li>
                <li><a href="https://tramites.gub.uy/ampliados?id=2275">Acuerdos voluntarios</a></li>
                <li><a href="https://tramites.gub.uy/ampliados?id=4703">Permiso de Reingreso </a></li>
              </ul>
            </div>
            <div class="Grid-item">
              <div class="u-textCenter u-mt4">
              	<div class="u-h4 u-mb3">Mi perfil</div>
                <a href="#" class="u-mb1 Button Button--inverse Button--primary">Ingresar</a>
                <div>
                  <p><small>¿Cómo podés empezar?</small></p>
                  <a href="#">Registrate</a>
                </div>
              </div>
            </div>
          </div>
          <div class="Menu-more"><a href="#">Ver todos los trámites y servicios</a></div>
        </div>
      </div>

      <div class="Menu-item has-submenu">
        <span tabindex="0" role="button">Temas</span>

        <div class="Menu-subNav Nav-subNav--temas">
          <div class="Grid u-mb3">
            <div class="Grid-item u-md-sizeFull">
              <ul class="u-md-mt2 u-bullet">
                <li><a href="#">Llamados y Concursos</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Medio Ambiente</a></li>
                <li><a href="#">Adultos Mayores</a></li>
                <li><a href="#">Discapacidad</a></li>
                <li><a href="#">Transporte</a></li>
                <li><a href="#">Agro</a></li>
                <li><a href="#">Emprendedores</a></li>
                <li><a href="#">Empresas</a></li>
                <li><a href="#">Uruguayos en el Exterior</a></li>
                <li><a href="#">Extranjeros</a></li>
                <li><a href="#">Turistas</a></li>
                <li><a href="#">Infancia</a></li>
                <li><a href="#">Pymes</a></li>
                <li><a href="#">Estudiantes</a></li>
              </ul>
            </div>
          </div>
          <div class="Grid">
            <div class="Grid-item u-md-size1of2">
              <div class="u-h4 u-mb2">Destacados</div>

              <ul class="Menu-flagList">
                <li>
                  <a href="#" class="Flag">
                    <span class="Flag-image">
                      <img class="u-circle" src="./img/40x40.png" alt="">
                    </span>
                    <span class="Flag-body">Migración</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="Flag">
                    <span class="Flag-image">
                      <img class="u-circle" src="./img/40x40.png" alt="">
                    </span>
                    <span class="Flag-body">Salud</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="Flag">
                    <span class="Flag-image">
                      <img class="u-circle" src="./img/40x40.png" alt="">
                    </span>
                    <span class="Flag-body">Educación</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="Flag">
                    <span class="Flag-image">
                      <img class="u-circle" src="./img/40x40.png" alt="">
                    </span>
                    <span class="Flag-body">Vivienda</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="Flag">
                    <span class="Flag-image">
                      <img class="u-circle" src="./img/40x40.png" alt="">
                    </span>
                    <span class="Flag-body">Trabajo</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="Menu-more"><a href="#">Ver todos los Temas</a></div>
        </div>
      </div>

      <a class="Menu-item" href="http://datos.gub.uy/">Datos y estadísticas</a>

      <div class="Menu-item has-submenu">
        <span tabindex="0" role="button">Participación</span>

        <div class="Menu-subNav u-p0">
          <ul class="List u-mb0">
            <li class="List-item"><a href="https://www.presidencia.gub.uy/gobiernodecercania/">Gobierno de Cercanía</a></li>
            <li class="List-item"><a href="http://gobiernoabierto.gub.uy/">Gobierno Abierto</a></li>
            <li class="List-item"><a href="http://participacionciudadana.gub.uy/">Participación Ciudadana</a></li>
          </ul>
        </div>
      </div>

      <a class="Menu-item" href="http://presidencia.gub.uy/">Prensa</a>
    </div>
    <!-- ./ NIVEL 1 -->

    <!-- NIVEL 2 -->
    <div class="Menu-page" id="presidencia" data-title="Presidencia">
      <h3 class="Menu-heading">
        <span>Presidencia</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Presidencia</strong></div>
              <span>Presidencia de la República Oriental del Uruguay</span>
            </a>
          </li>

          <li class="List-item Menu-subheading">Unidades Ejecutoras</li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>AGESIC</strong></div>
              <span>Agencia de Gobierno Electrónico y Sociedad de la Información y el Conocimiento</span>
            </a>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>SND</strong></div>
              <span>Secretaría Nacional de Deporte</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>INE</strong></div>
              <span>Instituto Nacional de Estadística</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>URSEA</strong></div>
              <span>Unidad Reguladora de Servicios de Energía y Agua</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ONSC</strong></div>
              <span>Oficina Nacional del Servicio Civil</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>URSEC</strong></div>
              <span>Unidad Reguladora de Servicios de Comunicaciones</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>OPP</strong></div>
              <span>Oficina de Planeamiento y Presupuesto</span>
            </a>
          </li>

          <li class="List-item Menu-subheading">Unidades Dependientes</li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ACCE</strong></div>
              <span>Agencia de Compras y Contrataciones del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>AUCI</strong></div>
              <span>Agencia Uruguaya de Cooperación Internacional</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>JND</strong></div>
              <span>Secretaría Nacional de Drogas</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>SDH</strong></div>
              <span>Secretaría de Derechos Humanos</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>SDHPR</strong></div>
              <span>Secretaría de Derechos Humanos para el Pasado Reciente</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>SENACLAFT</strong></div>
              <span>Secretaría Nacional para la Lucha Contra el Lavado de Activos y el Financiamiento del Terrorismo</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>SINAE</strong></div>
              <span>Dirección Nacional de Emergencias</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>UNASEV</strong></div>
              <span>Unidad Nacional de Seguridad Vial</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="Menu-page" id="ministerios" data-title="Ministerios">
      <h3 class="Menu-heading">
        <span>Ministerios</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MDN</strong></div>
              <span>Ministerio de Defensa Nacional</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mdn">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MEC</strong></div>
              <span>Ministerio de Educación y Cultura</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu is-active Menu-subitem">
            <a href="#">
              <div><strong>MEF</strong></div>
              <span>Ministerio de Economía y Finanzas</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MGAP</strong></div>
              <span>Ministerio de Ganadería, Agricultura y Pesca</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MI</strong></div>
              <span>Ministerio del Interior</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MIDES</strong></div>
              <span>Ministerio de Desarrollo Social</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MIEM</strong></div>
              <span>Ministerio de Industria, Energía y Minería</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MINTUR</strong></div>
              <span>Ministerio de Turismo</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MRREE</strong></div>
              <span>Ministerio de Relaciones Exteriores</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MSP</strong></div>
              <span>Ministerio de Salud Pública</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MTOP</strong></div>
              <span>Ministerio de Transporte y Obras Públicas</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MTSS</strong></div>
              <span>Ministerio de Trabajo y Seguridad Social</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>

          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>MVOTMA</strong></div>
              <span>Ministerio de Vivienda, Ordenamiento Territorial y Medio Ambiente</span>
            </a>

            <div class="Menu-badge">
              <a href="#" class="js-childItems" data-target="#mef">
                <strong>16 sitios más</strong> <span class="u-ml1"></span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="Menu-page" id="gobiernos-departamentales" data-title="Gobiernos Departamentales">
      <h3 class="Menu-heading">
        <!-- <a href="#" class="back-arrow js-backPageMenu"><span class="u-hideVisually">Ir atrás</span></a> -->
        <span>Gobiernos Departamentales</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item Menu-subheading">Intendencias</li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Artigas</strong></div>
              <span>Intendencia de Artigas</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Canelones</strong></div>
              <span>Intendencia de Canelones</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Cerro Largo</strong></div>
              <span>Intendencia de Cerro Largo</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>CI</strong></div>
              <span>Congreso Nacional de Intendentes</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Colonia</strong></div>
              <span>Intendencia de Colonia</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Durazno</strong></div>
              <span>Intendencia de Durazno</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Flores</strong></div>
              <span>Intendencia de Flores</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Florida</strong></div>
              <span>Intendencia de Florida</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Lavalleja</strong></div>
              <span>Intendencia de Lavalleja</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Maldonado</strong></div>
              <span>Intendencia de Maldonado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Montevideo</strong></div>
              <span>Intendencia de Montevideo</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Paysandú</strong></div>
              <span>Intendencia de Paysandú</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Río Negro</strong></div>
              <span>Intendencia de Río Negro</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Rivera</strong></div>
              <span>Intendencia de Rivera</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Rocha</strong></div>
              <span>Intendencia de Rocha</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Salto</strong></div>
              <span>Intendencia de Salto</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>San José</strong></div>
              <span>Intendencia de San José</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Soriano</strong></div>
              <span>Intendencia de Soriano</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Tacuarembó</strong></div>
              <span>Intendencia de Tacuarembó</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Treinta y Tres</strong></div>
              <span>Intendencia de Treinta y Tres</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="Menu-page" id="otros-organismos" data-title="Otros organismos">
      <h3 class="Menu-heading">
        <!-- <a href="#" class="back-arrow js-backPageMenu"><span class="u-hideVisually">Ir atrás</span></a> -->
        <span>Otros organismos</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item Menu-subheading">Gobierno Nacional</li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Asamblea General</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Cámara de Diputados</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Cámara de Senadores</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Cámara Permanente</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Corte Electoral</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Poder Judicial</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Poder Legislativo</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Suprema Corte de Justicia</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Tribunal de Cuentas</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>Tribunal de lo Contencioso Administrativo</strong></div>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="Menu-page" id="entes-autonomos" data-title="Entes autónomos">
      <h3 class="Menu-heading">
        <span>Entes autónomos</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>AFE</strong></div>
              <span>Administración de Ferrocarriles del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANCAP</strong></div>
              <span>Administración Nacional de Combustibles, Alcoholes y Portland</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANEP</strong></div>
              <span>Administración Nacional de Educación Pública</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>BCU</strong></div>
              <span>Banco Central del Uruguay</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>AFE</strong></div>
              <span>Administración de Ferrocarriles del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>BHU</strong></div>
              <span>Banco Hipotecario del Uruguay</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>AFE</strong></div>
              <span>Administración de Ferrocarriles del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>BPS</strong></div>
              <span>Banco de Previsión Social</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>BROU</strong></div>
              <span>Banco República</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>BSE</strong></div>
              <span>Banco de Seguros del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>INC</strong></div>
              <span>Instituto Nacional de Colonización</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>UDELAR</strong></div>
              <span>Universidad de la República</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>UTE</strong></div>
              <span>Administración Nacional de Usinas y Trasmisiones Eléctricas</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="Menu-page" id="servicios-descentralizados" data-title="Servicios descentralizados">
      <h3 class="Menu-heading">
        <span>Servicios Descentralizados</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANC</strong></div>
              <span>Administración Nacional de Correos</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANP</strong></div>
              <span>Administración Nacional de Puertos</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANTEL</strong></div>
              <span>Administración Nacional de Telecomunicaciones</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ANV</strong></div>
              <span>Agencia Nacional de Vivienda</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>ASSE</strong></div>
              <span>Administración de Servicios de Salud del Estado</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>FGN</strong></div>
              <span>Fiscalía General de la Nación</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>INAU</strong></div>
              <span>Instituto del Niño y el Adolescente del Uruguay</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>INISA</strong></div>
              <span>Instituto de Inclusión Social Adolescente</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>INUMET</strong></div>
              <span>Instituto Uruguayo de Metereología</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>JUTEP</strong></div>
              <span>Junta de Transparencia y Ética Pública</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-subitem">
            <a href="#">
              <div><strong>OSE</strong></div>
              <span>Obras Sanitarias del Estado</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- ./ NIVEL 2 -->

    <!-- NIVEL 3 -->
    <div class="Menu-subPage is-visible" id="mef">
      <h3 class="Menu-heading">
        <span>Ministerio de Economía y Finanzas</span>
        <a href="#" class="Menu-link">Ir al sitio</a>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>AIN</strong></div>
              <span>Auditoría Interna de la Nación</span>
            </a>
          </li>
          <li class="List-item has-submenu is-active Menu-item--3">
            <a href="#">
              <div><strong>CGN</strong></div>
              <span>Contaduría General de la Nación</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Casinos</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Catastro</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Comercio</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>DGI</strong></div>
              <span>Dirección General Impositiva</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>DGS</strong></div>
              <span>Dirección General de Secretaría</span>
            </a>
          </li>
        </ul>
      </div>

    </div>

    <div class="Menu-subPage" id="mdn">
      <h3 class="Menu-heading">
        <span>Ministerio de Defensa Nacional</span>
      </h3>
      <div class="Menu-body">
        <ul class="List u-mb0">
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>AIN</strong></div>
              <span>Auditoría Interna de la Nación</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>CGN</strong></div>
              <span>Contaduría General de la Nación</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Casinos</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Catastro</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>Dirección General de Comercio</strong></div>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>DGI</strong></div>
              <span>Dirección General Impositiva</span>
            </a>
          </li>
          <li class="List-item has-submenu Menu-item--3">
            <a href="#">
              <div><strong>DGS</strong></div>
              <span>Dirección General de Secretaría</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- ./ NIVEL 3 -->
  </div>
</div>
