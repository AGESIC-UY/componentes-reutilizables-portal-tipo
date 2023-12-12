<?php
  $title = 'Acerca de';
?>

<?php include "inc/head.php"; ?>

<!-- Cabezal -->
<?php include "inc/header.php"; ?>

<!-- Breadcrumb -->
<div class="Breadcrumb">
  <div class="Container">
    <ul>
      <li><a href="index.html">Inicio</a></li>
      <li><a href="#">Acerca de</a></li>
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

                                <span class="Page-subtitle">Portal Tipo para el Estado Uruguayo</span>

                                <h2 class="Page-title">Acerca de</h2>

                                <p class="Page-description">El portal Tipo es un proyecto que acumula la experiencia de varios años en la construcción y mejora de portales por parte de Agesic. Constituye un material en permanente evolución que tiene en cuenta los lineamientos y buenas prácticas en Usabilidad y Accesibilidad, teniendo en cuenta los estándares internacionales y que intenta ser una vía de intercambio con los distintos equipos de desarrollo de portales involucrados a los largo del Estado para mejorar, corregir y evolucionar la Web estatal. </p>

                                <p>Se trata de una <a href="formatos.php">lista de formatos</a> (plantillas) que surgen del relevamiento de las necesidades de decenas de organismos, chicos medianos y de gran porte que sirven como paquete de herramientas a la hora de publicar el contenido institucional de las diferentes organizaciones.</p>

                                <p>El concepto rector de todo el portal es la idea de contenedores, de porciones de pantalla independientes que muestran contenidos. De esta forma un mismo documento puede ser representado de distintas formas en distintas secciones del portal, pero manteniendo uniforme la estructura, el lenguaje y por lo tanto la forma en que los usuarios interactúan con él.</p>

                                <p>Todas las páginas del portal están construidas sobre una <a href="grilla.php">grilla</a> de 12 columnas combinables y una serie de reglas donde los contenedores pueden colocarse. Éstas reglas traen implícitas los atributos CSS necesarios para la visualización correcta en todos los espacios de la grilla, haciendo muy sencilla la modificación de los layout dentro de estos parámetros.</p>

                                <p class=" ">En esta <a href="grilla.pdf">guía rápida para el uso de contenedores sobre la grilla</a> se puede visualizar la lógica para el control de las distintas visualizaciones de los contendores para las distintas resoluciones de pantalla</p>

                                <h3>Diseño atómico</h3>

                                <p class=" ">La metodología de diseño utilizada para este proyecto es Atomic design <a title="Ver en el sitio del autor" href="https://bradfrost.com/blog/post/atomic-web-design/">(Brad Frost)</a> en la que se definen y diseñan en el inicio los elementos mínimos e indivisibles para luego generar al combinarlos los componentes más complejos que serán utilizados a lo largo de todas las páginas, logrando así una consistencia sin fisuras tanto en el aspecto como en los modelos de interacción de cada uno de los elementos.</p>

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