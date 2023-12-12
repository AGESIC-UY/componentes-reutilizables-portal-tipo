<?php
  $title = 'Listado de trámites';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

	<!-- Breadcrumb -->	
	<div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Trámites y servicios</li>
				<li>Trámites</li>
      </ul>
    </div>
  </div>

  <!-- contenido -->
  <div class="u-main" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4">
										<!-- Ejemplo aplicado de inc/nav-local-filtros.php -->
										<!-- Menú lateral -->
										<div class="Page-nav Page-nav--mf">
											<div class="Page-navWrap">
												<a class="Page-navTitle collapsed" data-toggle="collapse" href="#nav-target" role="button">Trámites y servicios <span class="Page-navStatus"></span></a>
												<!-- Cuando no hay filtros se debe eliminar el botón  -->
												<button type="button" class="Button Button--filters u-md-hide" data-toggle="modal" data-target="#modalFilters"><span class="Icon Icon--filtros"></span> Filtros</button>
											</div>
											<ul id="nav-target" class="Page-navList collapse" aria-expanded="false">
												<li><a href="#">Servicios</a></li>
												<li class="is-active"><a href="#">Trámites</a></li>
												<li><a href="#">Formularios</a></li>
											</ul>
										</div>

										<div class="Filters Filters--mf">  
											<div class="modal fade modal--filters" id="modalFilters" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
												<div class="modal-dialog modal-sm u-md-my0" role="document">
													<div class="modal-content"> 
														<button type="button" class="close u-right u-p1 u-px2 u-md-hide" data-dismiss="modal" aria-label="Cerrar filtros"></button>
														<form action="./" class="Form Form--stacked Form--filters" id="filters-target">						
															<fieldset>
																<legend>
																	<h2 id="modalTitle" class="modal-title">Filtros</h2>
																</legend>
																 <?php
																		$filter_name = "Categoría";
																		$filter_id = "categoria";
																		include "./inc/filtros/filtro-select.php";
																	?>
																	<?php
																		$filter_name = "Dependencia";
																		$filter_id = "dependencia";
																		include "./inc/filtros/filtro-select.php";
																	?> 
															</fieldset>
															<div class="Form-actions u-mt3 u-md-mt2">
																<div class="u-mt2">
																	<button class="Button Button--link u-md-hide" type="button" data-dismiss="modal">Cancelar</button>
																</div>
																<div>
																	<button class="Button Button--primary" type="submit">Aplicar filtros</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
                      
                  </div>

                  <div class="Grid-item u-md-size3of4">
                      <div class="Page-body">

                          <h2 class="Page-title">Trámites</h2>

                          <ul class="List List--media">
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Título del formato genérico de un trámite</a>
																</h3>
																<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre de trámite por accesibilidad</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Asesoramiento en Derechos y Deberes de Usuarios de Servicios de Salud</a>
																</h3>
																<span class="Box-info">Ministerio de Salud Pública - Dirección General de la Salud</span>
																<p>El objetivo es asesorar sobre Derechos y Deberes de Usuarios de los Servicios de Salud, establecidos en la Ley N° 18.335 de 15/08/2008 y en su Decreto Reglamentario N° 274/010 del 08/09/2010.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Asesoramiento en Derechos y Deberes de Usuarios de Servicios de Salud</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Consultas a la Unidad Reguladora y de Control de Datos Personales</a>
																</h3>
																<span class="Box-info">Agencia de Gobierno Electrónico y Sociedad de la Información - Unidad Reguladora y de Control de Datos Personales</span>
																<p>Es el procedimiento administrativo por el cual la Unidad asesora a quienes lo requieran acerca de los alcances de la normativa vigente sobre Protección de Datos Personales y de los medios legales de que disponen para la defensa de los derechos que la Ley 18.331 de Protección de Datos Personales garantiza.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Consultas a la Unidad Reguladora y de Control de Datos Personales</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Solicitud de partidas</a>
																</h3>
																<span class="Box-info">Ministerio de Educación y Cultura - Dirección General del Registro de Estado Civil</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Solicitud de partidas</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Validación de identidad de Usuario gub.uy - ID Uruguay</a>
																</h3>
																<span class="Box-info">Agencia de Gobierno Electrónico y Sociedad de la Información</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Validación de identidad de Usuario gub.uy - ID Uruguay</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Nombre del trámite</a>
																</h3>
																<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre del trámite</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Nombre del trámite</a>
																</h3>
																<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre del trámite</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Nombre del trámite</a>
																</h3>
																<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre del trámite</span></a>
															</div>
														</li>
														<li class="Media">
															<div class="Media-body">
																<h3>
																	<a href="#">Nombre del trámite</a>
																</h3>
																<span class="Box-info">Nombre del organismo - Unidad ejecutora - Oficina</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis justo et vehicula bibendum. Nulla a euismod neque, eget dapibus ipsum. Phasellus lobortis ante in orci sagittis aliquet.</p>
																<a href="#" class="Button Button--inverse">Iniciar trámite en línea <span class="u-hideVisually">: Nombre del trámite</span></a>
															</div>
														</li>
														
													</ul>

                          <div class="Pagination">
                              <div class="Pagination-text">Mostrando 10 de 20 resultados</div>
                              <ul class="Pagination-links">
                                  <li class="Pagination-prev"><a href="#">Anterior</a></li>
                                  <li class="is-selected"><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li class="Pagination-next"><a href="#">Siguiente</a></li>
                              </ul>
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
