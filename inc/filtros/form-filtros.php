<form action="./" class="Form Form--stacked Form--filters" id="filters-target">						
		<fieldset>
			<legend>
				<h2 id="modalTitle" class="modal-title">Filtros</h2>
			</legend>
			<?php
				$filter_name = "Etiqueta filtro 1";
				$filter_id = "etiqueta1";
				include "./inc/filtros/filtro-select.php";
			?>
			<?php
				$filter_name = "Etiqueta filtro 2";
				$filter_id = "etiqueta2";
				include "./inc/filtros/filtro-select.php";
			?> 
			<?php
				$filter_name = "Etiqueta filtro 3";
				$filter_id = "etiqueta3";
				include "./inc/filtros/filtro-select.php";
			?>
			<?php
				$filter_name = "Etiqueta filtro 4";
				$filter_id = "etiqueta4";
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