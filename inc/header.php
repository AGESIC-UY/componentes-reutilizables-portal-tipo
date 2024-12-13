<header class="u-borderBottom u-bgWhite u-py2 Header--slim">
	<div class="Header-body">
		<div class="Container">
			<div>
				<h1 class="u-h5 u-mb0 u-inlineBlock u-pl2 u-md-pl0">
					<a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/componentes-reutilizables" class="u-textBlack">Componentes reutilizables</a>
				</h1>

				<div class="Header-parent u-inlineBlock">
					<a class="u-textMute" href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/">AGESIC</a>
				</div>
			</div>

			<label for="themeToggle" class="darkmode-switch">
				<input type="checkbox" id="themeToggle" name="themeToggle">
				<span class="darkmode-switch-slider"></span>
				<span class="darkmode-switch-label">Modo oscuro</span>
			</label>
		</div>
	</div>
</header>

<script>
		// Detectar el modo oscuro del sistema operativo
		const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
		const savedTheme = localStorage.getItem('theme');
		const themeToggle = document.getElementById('themeToggle');


		// Establecer el estado inicial del switch según el modo del sistema
		if (prefersDarkMode && savedTheme != 'light') {
			themeToggle.checked = true;
			document.body.classList.add('dark-mode');
			localStorage.setItem('theme', 'dark'); 
		}else if( savedTheme === 'dark'){

			themeToggle.checked = true;
			document.body.classList.add('dark-mode');
			//localStorage.setItem('theme', 'dark'); 

		}

		// Alternar entre modo oscuro y claro
		themeToggle.addEventListener('change', () => {
			if (themeToggle.checked) {
					document.body.classList.add('dark-mode');
				localStorage.setItem('theme', 'dark'); 
					//document.body.classList.remove('light-mode');
			} else {
					//document.body.classList.add('light-mode');
					document.body.classList.remove('dark-mode');
				localStorage.setItem('theme', 'light'); 
			}
		});

		// Cambiar el tema basado en los estilos del sistema cuando se modifiquen
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
			themeToggle.checked = event.matches;
			if (event.matches) {
					document.body.classList.add('dark-mode');
				localStorage.setItem('theme', 'dark'); 
				 // document.body.classList.remove('light-mode');
			} else {
					//document.body.classList.add('light-mode');
					document.body.classList.remove('dark-mode');
				localStorage.setItem('theme', 'light'); 
			}
		});


		if (savedTheme === 'dark') {
					 document.body.classList.add('dark-mode');
		 }
		else {
			document.body.classList.remove('dark-mode');
	  }
	
</script>