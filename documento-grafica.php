<?php
  $title = 'Tabla con Filtros';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Breadcrumb -->
  <div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Institucional</a></li>
      </ul>
    </div>
  </div>

  <!-- CONENIDO -->
  <div class="u-main" id="contenido">
      <div class="Container">
          <div class="Page Page--hasNav">
              <div class="Grid Grid--noGutter">
                  <div class="Grid-item u-md-size1of4">
										
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
																		$filter_name = "Año desde";
																		$filter_id = "año_desde";
																		include "./inc/filtros/filtro-select.php";
																	?>
																	<?php
																		$filter_name = "Mes desde";
																		$filter_id = "mes_desde";
																		include "./inc/filtros/filtro-select.php";
																	?> 
																	<?php
																		$filter_name = "Año hasta";
																		$filter_id = "año_hasta";
																		include "./inc/filtros/filtro-select.php";
																	?>
																	<?php
																		$filter_name = "Mes hasta";
																		$filter_id = "mes_hasta";
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
                        <span class="Page-subtitle">Indicadores</span>

                        <h2 class="Page-title">Índice de Precios del Consumo (IPC)</h2>

                        <div class="Page-info">
                          <div class="u-right">
                            <a href="./documento-tabla-filtros.php" class="Button u-mr2">
                              <span>Ver tabla</span>
                            </a>

                            <button class="Button" type="button">
                              <span class="Icon Icon--download Icon--small"></span>
                              <span>Descargar datos</span>
                            </button>
                          </div>
                        </div>

                        <div class="Graph">
                          <canvas id="grafica-1"></canvas>

                          <div class="Graph-controls">
                            <button class="Button Button--small js-zoomOut" type="button" title="Alejar">-</button>
                            <button class="Button Button--small js-zoomReset" type="button" title="Reestablecer">=</button>
                            <button class="Button Button--small js-zoomIn" type="button" title="Acercar">+</button>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/portal-unificado.js"></script>

<!-- Scripts para Grafica -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script>
  var ctx = document.getElementById('grafica-1').getContext('2d');

  Chart.scaleService.updateScaleDefaults('linear', {
    // Iniciar los valores del eje y en 0
    ticks: {
      min: 0
    }
  });

  var xAxesData = [
    'OCT 18', 'NOV 18', 'DIC 18', 'ENE 19', 'FEB 19', 'MAR 19', 'ABR 19', 'MAY 19', 'JUN 19', 'JUL 19', 'AGO 19', 'SEP 19'
  ];

  var yAxesData = [
    10.62, 12.37, 8.41, 2.5, 4.8, 9.12, 11.01, 6.89, 9.22, 10.54, 11, 8.67
  ];

  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: xAxesData,
      datasets: [{
          label: 'IPC',
          backgroundColor: 'rgb(255, 99, 132, .35)',
          borderColor: 'rgb(255, 99, 132)',
          data: yAxesData
      }]
    },
    options: {
      elements: {
        line: {
            tension: 0
        }
      },
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 1.35,
      title: {
        display: true,
        text: 'IPC (Var. 12 meses)'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Meses'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Valor del IPC'
          }
        }]
      }
    }
  });

  var zoomLevel = xAxesData.length;

  $('.js-zoomIn').on('click', function() {
    if (zoomLevel > 3) {
      zoomLevel--;
      var inicio = xAxesData.length - zoomLevel;
      var fin = xAxesData.length;
      chart.data.labels = xAxesData.slice(inicio, fin);
      chart.data.datasets[0].data = yAxesData.slice(inicio, fin);
      chart.update();
    }
  });

  $('.js-zoomOut').on('click', function() {
    if (zoomLevel < xAxesData.length) {
      zoomLevel++;
      var inicio = xAxesData.length - zoomLevel;
      var fin = xAxesData.length;
      chart.data.labels = xAxesData.slice(inicio, fin);
      chart.data.datasets[0].data = yAxesData.slice(inicio, fin);
      chart.update();
    }
  });

  $('.js-zoomReset').on('click', function() {
    zoomLevel = xAxesData.length;
    chart.data.labels = xAxesData;
    chart.data.datasets[0].data = yAxesData;
    chart.update();
  });
</script>
</body>
</html>
