<?php
  $title = 'Grilla';
?>

<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
  <div class="Container">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li>Grilla</li>
    </ul>
  </div>
</div>


<!-- Contenido -->
<main class="u-main" id="contenido">
    <div class="Container">
        <div class="Grid">
            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
                <div class="Page">
									<div class="Page-body">
										<div class="Page-document">

											<h2 class="Page-title">Grilla</h2>

											<h3>Uso de la grilla</h3>

											<p>La grilla se usa para ordenar y dividir sus elementos en 12, 10, 8, 6, 5, 4, 3, 2 y 1 parte o columnas; adaptandose a los diferentes tamaños de pantalla y sus respectivos puntos de corte.</p>

											<div class="Grid">
												<div class="Grid-item u-size10of12 Grid-item--center">
														<img class="u-border u-my2" src="img/grilla-cortes.jpg" alt="Representación de los puntos de corte de una grilla">
												</div>	
											</div>

											<h3>Reglas de funcionamiento</h3>

											<ul class="u-mb3 u-bullet">
												<li>El objecto <code>.Grid</code> tiene hijos directos únicamente del tipo <code>.Grid-item</code></li>
												<li>Cada uno de los <code>.Grid-item</code> tiene que tener al menos una clase que define su ancho <code>.u-sizeXofY</code>. Por ejemplo: <code>u-size1of8</code>, <code>u-size4of8</code> y <code>u-size3of8</code>.</li>
												<li>Por defecto, las columnas <code>.Grid-item</code> tienen espacios entre sí (24px)</li>
												<li>Para remover los espacios entre columnas se agrega la clase <code>.Grid--noGutter</code></li>
												<li>Los prefijos <code>[xs|sm|md|lg]</code> en los nombres de las clases que definen los anchos, determinan los puntos de quiebre donde tendrán efecto esas clases</li>
												<li>Por defecto las columnas ocupan el 100% del ancho, también puede usarse <code>.u-sizeFull</code> para especificarlo explícitamente</li>
												<li>Para centrar una columna dentro de una <code>.Grid</code> debe agregarse la clase modificadora <code>.Grid-item--center</code> a la columna <code>.Grid-item</code> que se desea centrar</li>
											</ul>

											<div class="Grid">
												<div class="Grid-item u-size10of12 Grid-item--center">
														<img class="u-border u-my2" src="img/grilla-ejemplo.jpg" alt="Ejemplo gráfico del uso de la grilla">
												</div>	
											</div>

										</div>
									</div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="Container">

        <h3 class="u-mt6 u-mb4">Variaciones de grillas</h3>

		<div class="Grid">
			<div class="Grid-item u-md-size2of3 u-sm-size1of2">
				<div class="Box">
					100% en móviles, <br>
					1/2 en tablets, <br>
					2/3 en escritorio.
				</div>
			</div>

			<div class="Grid-item u-md-size1of3 u-sm-size1of2">
				<div class="Box">
					100% en móviles, <br>
					1/2 en tablets, <br>
					1/3 en escritorio.
				</div>
			</div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
			<div class="Grid-item u-md-size1of12"><div class="Box">1/12</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
			<div class="Grid-item u-md-size1of10"><div class="Box">1/10</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
			<div class="Grid-item u-md-size1of8"><div class="Box">1/8</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
			<div class="Grid-item u-md-size1of6"><div class="Box">1/6</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-size1of5"><div class="Box">1/5</div></div>
			<div class="Grid-item u-size1of5"><div class="Box">1/5</div></div>
			<div class="Grid-item u-size1of5"><div class="Box">1/5</div></div>
			<div class="Grid-item u-size1of5"><div class="Box">1/5</div></div>
			<div class="Grid-item u-size1of5"><div class="Box">1/5</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-size1of4"><div class="Box">1/4</div></div>
			<div class="Grid-item u-size1of4"><div class="Box">1/4</div></div>
			<div class="Grid-item u-size1of4"><div class="Box">1/4</div></div>
			<div class="Grid-item u-size1of4"><div class="Box">1/4</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-size1of3"><div class="Box">1/3</div></div>
			<div class="Grid-item u-size1of3"><div class="Box">1/3</div></div>
			<div class="Grid-item u-size1of3"><div class="Box">1/3</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-size1of2"><div class="Box">1/2</div></div>
			<div class="Grid-item u-size1of2"><div class="Box">1/2</div></div>
		</div>
		<div class="Grid">
			<div class="Grid-item u-sizeFull"><div class="Box">Full</div></div>
			<div class="Grid-item u-size3of4"><div class="Box">3/4</div></div>
			<div class="Grid-item u-size1of4"><div class="Box">1/4</div></div>
			<div class="Grid-item u-size2of3"><div class="Box">2/3</div></div>
			<div class="Grid-item u-size1of3"><div class="Box">1/3</div></div>
			<div class="Grid-item u-size3of5"><div class="Box">3/5</div></div>
			<div class="Grid-item u-size2of5"><div class="Box">2/5</div></div>
		</div>
	</div>


</main>

<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>