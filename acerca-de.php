<?php
  $title = 'Sobre el Portal Tipo';
?>

<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
  <div class="Container">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li>Sobre el Portal Tipo</li>
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

                                <h2 class="Page-title">Sobre el Portal Tipo</h2>
													
																<div class="Alert Alert--warning" role="alert">
																	<strong>Importante:</strong> Esta página debería estar alojada (en la arquitectura) y mantenida en el sitio de Agesic
																</div>

                                <p class="Page-description">Conjunto de elementos básicos, arquitectura de la información, modelo de interacción y diseño visual para portales del Estado uruguayo.</p>
													
																<p>El Portal Tipo constituye un material en permanente evolución que respeta los estándares internacionales y las buenas prácticas en Diseño de la interacción y Accesibilidad Web, y que intenta ser una vía de intercambio con los distintos equipos de desarrollo de portales del Estado para mejorar, corregir y evolucionar la relación entre la ciudadanía y los sitios web estatales. </p>
													
																<p>El Portal Tipo está conformado por un <a href="formatos.php">set de formatos</a> (plantillas) que surgen del relevamiento de las necesidades de decenas de organismos (pequeños, medianos y de gran porte) y que sirven como <strong>paquete de herramientas</strong> a la hora de publicar el contenido institucional de las diferentes organizaciones.</p>

																<p>El concepto rector de todo el portal es la idea de <strong>contenedores</strong>, de porciones de pantalla independientes que muestran contenidos. De esta forma un mismo documento puede ser representado de distintas formas en distintas secciones del portal, pero manteniendo uniforme la estructura, el lenguaje de interacción y, por lo tanto, la forma en que las personas interactúan con él. </p>
													
																<p>Todas las páginas del portal están construidas sobre una <a href="grilla.php">grilla</a> de 12 columnas combinables y una serie de reglas donde los contenedores pueden colocarse. Estas reglas traen implícitas los atributos CSS necesarios para la visualización correcta en todos los espacios de la grilla, haciendo muy sencilla la modificación de los layout dentro de estos parámetros.</p>
													
																<p>En esta <a href="grilla.php">guía rápida para el uso de contenedores sobre la grilla</a> se puede representar la lógica para el control de las distintas visualizaciones de los contendores para las diferentes resoluciones de pantalla.</p>
												       
                                <h3>Diseño atómico</h3>

                                <p>La metodología de diseño utilizada para este proyecto es <a title="Ver en el sitio del autor" href="https://bradfrost.com/blog/post/atomic-web-design/">Atomic design (Brad Frost)</a> en la que se definen y diseñan en el inicio los elementos mínimos e indivisibles para luego generar al combinarlos los componentes más complejos que serán utilizados a lo largo de todas las páginas, logrando así una consistencia sin fisuras tanto en el aspecto como en los modelos de interacción de cada uno de los elementos.</p>

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