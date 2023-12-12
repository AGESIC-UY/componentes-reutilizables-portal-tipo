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
				<?php include 'inc/filtros/form-filtros.php'?>
			</div>
		</div>
	</div>
</div>	