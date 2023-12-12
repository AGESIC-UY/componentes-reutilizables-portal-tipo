<?php
  $title = 'Remuneraciones';
?>

<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
	<div class="Container">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="#">Institucional</a></li>
			<li><a href="#">Recursos humanos</a></li>
		</ul>
	</div>
</div>

<!-- Contenido -->
<main class="u-main" id="contenido">
	<div class="Container">

		<div class="Page Page--hasNav">
			<div class="Grid Grid--noGutter">
				
				<div class="Grid-item u-md-size1of4">
					<!-- Navegación local + filtros MF (contenido del include pegado acá para modificar etiquetas de filtros)-->
					
					<!-- Menú lateral -->
					<div class="Page-nav Page-nav--mf">
						<div class="Page-navWrap">
							<a class="Page-navTitle collapsed" data-toggle="collapse" href="#nav-target" role="button">Institucional <span class="Page-navStatus"></span></a>
							<!-- Cuando no hay filtros se debe eliminar el botón  -->
							<button type="button" class="Button Button--filters u-md-hide" data-toggle="modal" data-target="#modalFilters"><span class="Icon Icon--filtros"></span> Filtros</button>
						</div>
						<ul id="nav-target" class="Page-navList collapse" aria-expanded="false">
							<li><a href="#">Creación y evolución histórica</a></li>
							<li><a href="#">Cometidos</a></li>
							<li><a href="#">Plan estratégico</a></li>
							<li><a href="#">Estructura del organismo</a></li>
							<li>
								<a href="#">Recursos humanos</a>
								<ul class="Page-navSublist">
									<li><a href="#">Nómina</a></li>
									<li><a href="#">Remuneraciones</a></li>
								</ul>
							</li>
							<li class="is-active"><a href="#">Normativa</a></li>
							<li><a href="#">Transparencia</a></li>
							<li><a href="#">Contacto</a></li>
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
												$filter_name = "Año";
												$filter_id = "año";
												include "./inc/filtros/filtro-select.php";
												?>
												<?php
												$filter_name = "Mes";
												$filter_id = "mes";
												include "./inc/filtros/filtro-select.php";
												?>                
												<?php
												$filter_name = "Dependencia";
												$filter_id = "dependencia";
												include "./inc/filtros/filtro-select.php";
												?>
												<?php
												$filter_name = "Relación contractual";
												$filter_id = "relacion_contractual";
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
					<!-- -->
				</div>

				<div class="Grid-item u-md-size3of4">
					<div class="Page-body">
						<div class="Page-document">
							<h2 class="Page-title">Remuneraciones</h2>
							
							<?php include "./inc/page-info-no-date.php"; ?>
							
							<p class="u-textMute u-mb1">28/03/2023</p>
							<h3 class="u-mt1 u-h4">Jerarquía de Remuneraciones para [Inciso o UE]</h3>
							<ul class="List u-ml2 u-mb6">
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample1" aria-controls="collapseExample1">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

									</div>
									
									<div class="collapse" id="collapseExample1">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li>
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample2" aria-controls="collapseExample2">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>
									</div>
									
									<div class="collapse" id="collapseExample2">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li>
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample3" aria-controls="collapseExample3">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>
									</div>
									
									<div class="collapse" id="collapseExample3">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li> 
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample4" aria-controls="collapseExample4">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>
									</div>
									
									<div class="collapse" id="collapseExample4">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li> 
								
							</ul>
							
							<p class="u-textMute u-mb1">22/08/2020</p>
							<h3 class="u-mt1 u-h4">Jerarquía de Remuneraciones para [Inciso o UE]</h3>
							<ul class="List u-ml2 u-mb6">
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample6" aria-controls="collapseExample1">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

									</div>
									
									<div class="collapse" id="collapseExample6">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li>
								<li class="List-item u-py4">
									<p class="u-mb1 u-textSmall u-textMute">[Tipo de contratación]</p>
									<h4 class="u-mt0 u-mb2 u-h5">[Escalafón] - [Grado] - [Denominación]</h4>
									<div class="Grid">
											<div class="Grid-item u-sm-size2of6">Monto nominal total:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight u-textMedium"><strong>$200.000</strong></div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6">Monto nominal:</div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$125.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>

											<div class="Grid-item u-sm-size2of6"><a class="u-left collapsed" role="button" data-toggle="collapse" href="#collapseExample7" aria-controls="collapseExample2">Ver compensaciones <span class="caret"></span></a></div>
											<div class="Grid-item u-sm-size1of6 u-textRight">$75.000</div>
											<div class="Grid-item u-sm-size3of6 ">&ensp;</div>
									</div>
									
									<div class="collapse" id="collapseExample7">
										<div class="Table-wrapper u-mt2 u-mb1">
											 <table class="Table Table--responsive u-mb0">
											 <caption>Compensaciones de Grado/Denominación</caption>   
												<thead>
														<tr>
																<th scope="col">Categoría</th>
																<th scope="col">Monto</th>
														</tr>
												</thead>
												<tbody>
														<tr>
																<td data-title="Categoría">Recuperación Salarial Enero 2010</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Incentivo al rendimiento Ley N° 16.170 Art. 19</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Ley N° 18.172 Art. 166</td>

																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación MRREE Ley N° 18.834 Art. 145</td>
																<td data-title="Monto" class="u-textRight">$ 10.000</td>
														</tr>
														<tr>
																<td data-title="Categoría">Compensación escalafón A Gerencia permanente y especializada</td>
																<td data-title="Monto" class="u-textRight">$ 15.000</td>
														</tr>
												</tbody>
											</table>
										</div>
									</div>
								</li>
							</ul>
							
							<!---->
							<div class="Pagination">
								<div class="Pagination-text">Mostrando 10 de 48 resultados</div>
								<ul class="Pagination-links">
									<li class="Pagination-prev"><a href="#">Anterior</a></li>
									<li class="is-selected"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li class="Pagination-next"><a href="#">Siguiente</a></li>
								</ul>
							</div>
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