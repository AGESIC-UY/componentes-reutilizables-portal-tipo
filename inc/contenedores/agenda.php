<div class="Box Box--mf Box--event">
  <div class="Box-header">
		<span class="Box-name">Contenedor agenda</span>
	</div>
	<div class="Box-inner">
		<a href="#" class="Box-subtitle">Nombre del evento</a>
    <div class="Media">
      <div class="Media-image">
         <!-- Molécula: fecha -->
				<?php include "inc/moleculas/fecha.php"; ?>
      </div>
      <div class="Media-body">
        <span class="Box-info">14:15 hs - Sala de Conferencias</span>
				<a href="#" class="Box-title">El uso de gamificación en la construcción de Ciudadanía Digital</a>
				<a href="#" class="Live Live--now"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</a>
      </div>
    </div>
		<p class="Box-text">Taller dirigido a docentes y estudiantes de formación docente de todos los niveles educativos.</p>
		<!-- Contenido para cuando no hay actividades próximas -->
		<!-- <p class="u-mt0 u-textCenter u-textMedium">No hay actividades próximas</p> -->
  </div>
	
  <div class="Box-body">
    <ul class="Box-mediaList Box-mediaList--small">
      <li class="Media">
				<div class="Media-inner">
					<!-- <a href="#" class="Box-subtitle">Nombre del evento</a>-->
					<div class="Media-image">
						 <!-- Molécula: fecha -->
						 <?php include "inc/moleculas/fecha-doble.php"; ?>
					</div>
					<div class="Media-body">
						<span class="Box-info">15:00 hs - Lugar del evento</span>
						<a href="#" class="Box-title">Curso de sensibilización en Accesibilidad Digital</a>
						<!--<a href="#" class="Live"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</a>-->
					</div>
					<p class="Box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit quam esse itaque eum maxime laboriosam atque ut integer auenean cursus.</p>
				</div>	
      </li>
      <li class="Media">
				<div class="Media-inner">
					<!-- <a href="#" class="Box-subtitle">Nombre del evento</a>-->
					<div class="Media-image">
						 <!-- Molécula: fecha -->
						 <?php include "inc/moleculas/fecha.php"; ?>
					</div>
					<div class="Media-body">
						<span class="Box-info">10:00 hs - Lugar del evento</span>
						<a href="#" class="Box-title">Datacamp 2023: transformá y construí</a>
						<a href="#" class="Live"><span class="Live-icon Icon Icon--live"></span>Transmisión en vivo</a>
					</div>
					<p class="Box-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit quam eum maxime.</p>
				</div>	
      </li>
    </ul>
  </div>
	<!-- Enlace opcional -->
	<!--
	<div class="Box-body u-textCenter u-p3 u-pt0">
		<a href="#" class="u-textSmall">4 actividades más para hoy</a>
	</div>
	-->
  <div class="Box-footer">
    <a href="#" class="Box-more">Ver calendario completo</a>
  </div>
</div>

<!--
 * Clases modificadoras
	 - De color: Box--color1, Box--color2, Box--color3, Box--color4, Box--color5, Box--color6, Box--color7, Box--color8

 * Textos (No dejar etiquetas html vacías cuando los campos opcionales quedan sin valor, se eliminan)
	 - Box-name: Óptimo 60 caracteres. Obligatorio.
	 - Box-subtitle (Nombre del evento): Óptimo 40 caracteres.
	 - Box-info (Horario y lugar): Óptimo 60 caracteres. Obligatorio
	 - Box-title (Nombre actividad): Óptimo 80 caracteres. Obligatorio.
	 - Box-text (Descripción actividad): Óptiomo 160 caracteres.
	 - Box-more: Óptimo 40 caracteres. 
-->
