<?php
  $title = 'Gráficas';
?>
<?php include "inc/head.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- contenido -->
  <div id="contenido" class="u-main">
    <div class="Container">

      <div class="Grid">
        <div class="Grid-item u-md-size1of3">
          <div class="Box">
            <div class="Box-header">
              <h3 class="Box-name">
                Últimos indicadores
              </h3>
            </div>
            <div class="Box-body">
              <select name="indicadores" id="indicadores" class="Form-select u-textSmall ">
                <option value="ipc">IPC (Var. 12 meses)</option>
                <option value="ippn">IPPN (Var. 12 meses)</option>
                <option value="icc">ICC (Var. 12 meses)</option>
                <option value="ims">IMS (Var. 12 meses)</option>
                <option value="desempleo">Desempleo (Tasa)</option>
              </select>
            </div>
            <div class="Graph">
              <canvas id="grafica-1"></canvas>

              <div class="Graph-controls" id="controls-grafica-1">
                <button class="Button Button--small js-zoomOut" type="button" title="Alejar">-</button>
                <button class="Button Button--small js-zoomReset" type="button" title="Reestablecer">=</button>
                <button class="Button Button--small js-zoomIn" type="button" title="Acercar">+</button>
              </div>
            </div>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
          <div class="Box">
            <div class="Box-header">
              <h3 class="Box-name">
                Cotización del dólar
              </h3>
            </div>
            <div class="Box-body">
              <!-- <select name="indicadores" id="indicadores" class="Form-select u-textSmall ">
                <option value="ipc">IPC (Var. 12 meses)</option>
                <option value="ippn">IPPN (Var. 12 meses)</option>
                <option value="icc">ICC (Var. 12 meses)</option>
                <option value="ims">IMS (Var. 12 meses)</option>
                <option value="desempleo">Desempleo (Tasa)</option>
              </select> -->
            </div>
            <div class="Graph">
              <canvas id="grafica-2"></canvas>

              <div class="Graph-controls" id="controls-grafica-2">
                <button class="Button Button--small js-zoomOut" type="button" title="Alejar">-</button>
                <button class="Button Button--small js-zoomReset" type="button" title="Reestablecer">=</button>
                <button class="Button Button--small js-zoomIn" type="button" title="Acercar">+</button>
              </div>
            </div>
          </div>
        </div>
        <div class="Grid-item u-md-size1of3">
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
      aspectRatio: 1.15,
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

  $g1 = $('#controls-grafica-1');

  $g1.find('.js-zoomIn').on('click', function() {
    if (zoomLevel > 3) {
      zoomLevel--;
      var inicio = xAxesData.length - zoomLevel;
      var fin = xAxesData.length;
      chart.data.labels = xAxesData.slice(inicio, fin);
      chart.data.datasets[0].data = yAxesData.slice(inicio, fin);
      chart.update();
    }
  });

  $g1.find('.js-zoomOut').on('click', function() {
    if (zoomLevel < xAxesData.length) {
      zoomLevel++;
      var inicio = xAxesData.length - zoomLevel;
      var fin = xAxesData.length;
      chart.data.labels = xAxesData.slice(inicio, fin);
      chart.data.datasets[0].data = yAxesData.slice(inicio, fin);
      chart.update();
    }
  });

  $g1.find('.js-zoomReset').on('click', function() {
    zoomLevel = xAxesData.length;
    chart.data.labels = xAxesData;
    chart.data.datasets[0].data = yAxesData;
    chart.update();
  });
</script>
<script>
  var ctx2 = document.getElementById('grafica-2').getContext('2d');

  var xAxesData2 = [
    'OCT 18', 'NOV 18', 'DIC 18', 'ENE 19', 'FEB 19', 'MAR 19', 'ABR 19', 'MAY 19', 'JUN 19', 'JUL 19', 'AGO 19', 'SEP 19'
  ];
  // var xAxesData2 = [
  //   'JUN 19', 'JUL 19', 'AGO 19', 'SEP 19'
  // ];
  var yAxesData2 = [32, 32.2, 32.35, 32.05, 32.45, 32.95, 33.25, 33.25, 33.5, 33.15, 33.30, 33.75];
  var yAxesData3 = [29, 29.2, 31.35, 28.05, 30.45, 30.95, 31.25, 31.25, 31.5, 32.15, 30.30, 31.75];
  // var yAxesData2 = [33.5, 33.15, 33.30, 33.75];
  // var yAxesData3 = [31.5, 31.15, 31.30, 31.75];

  var chart2 = new Chart(ctx2, {
    type: 'line',
    data: {
      labels: xAxesData2,
      datasets: [{
        label: 'Compra',
        // backgroundColor: 'rgb(255, 99, 132, .35)',
        backgroundColor: 'rgba(0, 0, 0, 0)',
        borderColor: 'rgb(255, 99, 132)',
        data: yAxesData2
      },
      {
        label: 'Venta',
        // backgroundColor: 'rgb(100, 99, 132, .35)',
        backgroundColor: 'rgba(0, 0, 0, 0)',
        borderColor: 'rgb(100, 99, 132)',
        data: yAxesData3
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
      aspectRatio: 1.15,
      title: {
        display: true,
        text: 'Dólar - Peso uruguayo'
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
            labelString: 'Pesos uruguayos'
          }
        }]
      }
    }
  });

  // var zoomLevel2 = xAxesData2.length;
  var zoomLevel2 = 3;

  if (zoomLevel2 < xAxesData2.length) {
    zoomLevel2++;
    var inicio = xAxesData2.length - zoomLevel2;
    var fin = xAxesData2.length;
    chart2.data.labels = xAxesData2.slice(inicio, fin);
    chart2.data.datasets[0].data = yAxesData2.slice(inicio, fin);
    chart2.update();
  }

  $g2 = $('#controls-grafica-2');

  $g2.find('.js-zoomIn').on('click', function() {
    if (zoomLevel2 > 3) {
      zoomLevel2--;
      var inicio = xAxesData2.length - zoomLevel2;
      var fin = xAxesData2.length;
      chart2.data.labels = xAxesData2.slice(inicio, fin);
      chart2.data.datasets[0].data = yAxesData2.slice(inicio, fin);
      chart2.update();
    }
  });

  $g2.find('.js-zoomOut').on('click', function() {
    if (zoomLevel2 < xAxesData2.length) {
      zoomLevel2++;
      var inicio = xAxesData2.length - zoomLevel2;
      var fin = xAxesData2.length;
      chart2.data.labels = xAxesData2.slice(inicio, fin);
      chart2.data.datasets[0].data = yAxesData2.slice(inicio, fin);
      chart2.update();
    }
  });

  $g2.find('.js-zoomReset').on('click', function() {
    zoomLevel2 = xAxesData2.length;
    chart2.data.labels = xAxesData2;
    chart2.data.datasets[0].data = yAxesData2;
    chart2.update();
  });
</script>
</body>
</html>
