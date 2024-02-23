<?php
  $title = 'Sistema de Layout para contenedores de 3x3';
?>

<?php include "inc/head.php"; ?>
<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
    <div class="Container">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li>Sistema de <span class="u-textItalic">layout</span> para contenedores de 3x3</li>
      </ul>
    </div>
</div>

<main class="u-main" id="contenido">
    <div class="Container">
        <div class="Grid">
            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
                <div class="Page">

                        <div class="Page-body">
                            <div class="Page-document">
                                <h2 class="Page-title">Sistema de <span class="u-textItalic">layout</span> para contenedores de 3x3</h2>
															
																<p class="Page-description">Sistema de <span class="u-textItalic">layout</span> para contenedores de 3x3 y definiciones de los elementos que lo componen</p>

                                <h3><code>.Container</code></h3>

                                <ul>
                                    <li>Es el componente padre de un sistema de 3x3.</li>
                                    <li>Define el ancho máximo del contenido en la pantalla en 1280px y lo centra horizontalmente.</li>
                                </ul>

                                <h3><code>.Module</code></h3>

                                <ul>
                                    <li>Se sugiere declararlo como hijo inmediato de <code>.Container</code>.</li>
                                    <li>Tiene un alto definido en píxeles.</li>
                                    <li>El alto está dado por una de las siguientes clases: <code>.Module--[xs|sm|md|lg|xl|xxl]</code> o <code>.Module--[VALOR_NUMERICO].</code></li>
                                    <li>Los valores numéricos pueden ser: 120, 240, 360, 450, 510, 615, 720, 840, 960, 1200, 1440, 1680, 1920, 2400.</li>
                                    <li>Por defecto el alto es del tamaño <code>.Module--md</code> (ver tabla 1).</li>
                                </ul>

                                <h3><code>.Module-item</code></h3>

                                <ul>
                                    <li>Son hijos de <code>.Module</code> y representan las filas.</li>
                                    <li>El alto que ocupan es relativo al alto total del módulo y se define con una de las siguientes clases: <code>.Module-item--[1of3|2of3|full]</code>.</li>
                                    <li>El caso de <code>--full</code> puede omitirse.</li>
                                    <li>Dentro de cada elemento se admite un solo contenedor.</li>
                                    <li>Incluye la separación entre filas.</li>
                                </ul>

                                <div class="Grid">
                                    <div class="Grid-item  u-md-size1of2 u-lg-size6of10">

                                    <table class="Table Table--striped">
                                            <thead>
                                                <tr>
                                                    <th>Tamaño</th>
                                                    <th>y3 (px)</th>
                                                    <th>y2 (px)</th>
                                                    <th>y1 (px)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>120</td>
                                                    <td>120</td>
                                                    <td>~68</td>
                                                    <td>~28</td>
                                                </tr>
                                                <tr>
                                                    <td>240</td>
                                                    <td>240</td>
                                                    <td>~148</td>
                                                    <td>~68</td>
                                                </tr>
                                                <tr>
                                                    <td>xs</td>
                                                    <td>282</td>
                                                    <td>176</td>
                                                    <td>82</td>
                                                </tr>
                                                <tr>
                                                    <td>360 ó sm</td>
                                                    <td>360</td>
                                                    <td>228</td>
                                                    <td>108</td>
                                                </tr>
                                                <tr>
                                                    <td>450</td>
                                                    <td>450</td>
                                                    <td>~288</td>
                                                    <td>~138</td>
                                                </tr>
                                                <tr>
                                                    <td>510 ó md</td>
                                                    <td>510</td>
                                                    <td>328</td>
                                                    <td>158</td>
                                                </tr>
                                                <tr>
                                                    <td>615 ó lg</td>
                                                    <td>615</td>
                                                    <td>398</td>
                                                    <td>193</td>
                                                </tr>
                                                <tr>
                                                    <td>720 ó xl</td>
                                                    <td>720</td>
                                                    <td>468</td>
                                                    <td>228</td>
                                                </tr>
                                                <tr>
                                                    <td>840 ó xxl</td>
                                                    <td>840</td>
                                                    <td>~548</td>
                                                    <td>~268</td>
                                                </tr>
                                                <tr>
                                                    <td>960</td>
                                                    <td>960</td>
                                                    <td>~628</td>
                                                    <td>~308</td>
                                                </tr>
                                                <tr>
                                                    <td>1200</td>
                                                    <td>1200</td>
                                                    <td>788</td>
                                                    <td>388</td>
                                                </tr>
                                                <tr>
                                                    <td>1440</td>
                                                    <td>1440</td>
                                                    <td>948</td>
                                                    <td>468</td>
                                                </tr>
                                                <tr>
                                                    <td>1680</td>
                                                    <td>1680</td>
                                                    <td>~1108</td>
                                                    <td>~548</td>
                                                </tr>
                                                <tr>
                                                    <td>1920</td>
                                                    <td>1920</td>
                                                    <td>~1268</td>
                                                    <td>~628</td>
                                                </tr>
                                                <tr>
                                                    <td>2400</td>
                                                    <td>2400</td>
                                                    <td>1588</td>
                                                    <td>788</td>
                                                </tr>
                                            </tbody>
                                        
                                        </table>

                                        <p><small>Tabla 1</small></p>

                                    </div>
                                </div>

                                <p><strong>Nota:</strong> Los altos predefinidos están sujetos a modificaciones.</p>

                                <p>Las ecuaciones que definen el alto en píxeles de cada fila o <code>.Module-item</code> son de la siguiente manera:</p>

                                <p><strong>Precaución</strong>: esta fórmula está en revisión.</p>

<pre class="u-p2 Group--color1 u-textBlack u-mb2"><code>y1 = (y - (m * 2)) / 3
y2 = ((y - (m * 1)) / 3) * 2
y3 = y</code></pre>

                                <p>Donde <code>y</code> es el alto total del módulo y <code>m = 24px</code> el margen inferior de cada item de módulo.</p>

                                <h3><code>.Grid</code></h3>

                                <ul>
                                    <li>Es el elemento padre del sistema de grilla.</li>
                                    <li><a href="grilla.php" rel="nofollow">Guía rápida para el uso de la Grilla de Portal Tipo</a></li>
                                </ul>

                                <h3><code>.Grid-item</code></h3>

                                <ul>
                                    <li>Son hijos inmediatos de <code>.Grid</code>.</li>
                                    <li>Deben incluir una clase con el ancho, dado por <code>.u-sizeXofY</code>.</li>
                                    <li>Incluye la separación entre columnas.</li>
                                    <li>Dentro de cada <code>.Grid-item</code> pueden existir de 1 a 3 elementos del tipo <code>.Module-item</code>.</li>
                                </ul>

                                <h3><code>.Box</code></h3>

                                <ul>
                                    <li>Son los contenedores.</li>
                                    <li>Por estar dentro de <code>.Module</code> automáticamente ajustarán el alto y ancho para ocupar el total del espacio de un <code>.Module-item</code>.</li>
                                    <li>Los contenedores que requieran centrar el contenido verticalmente lo harán automáticamente.</li>
                                </ul>



                                <h3>Ejemplo</h3>

                                <div class="u-p2 Group--color1 u-textBlack u-mb2"><pre>&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Container<span class="pl-pds">"</span></span>&gt;
  &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Module Module--sm<span class="pl-pds">"</span></span>&gt;
    &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Grid<span class="pl-pds">"</span></span>&gt;
      &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Grid-item u-size1of3<span class="pl-pds">"</span></span>&gt;
        &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Module-item Module-item--1of2<span class="pl-pds">"</span></span>&gt;
          &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Box<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">div</span>&gt;
        &lt;/<span class="pl-ent">div</span>&gt;

        &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Module-item Module-item--1of2<span class="pl-pds">"</span></span>&gt;
          &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Box<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">div</span>&gt;
        &lt;/<span class="pl-ent">div</span>&gt;
      &lt;/<span class="pl-ent">div</span>&gt;
      &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Grid-item u-size2of3<span class="pl-pds">"</span></span>&gt;
        &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Module-item Module-item--2of3<span class="pl-pds">"</span></span>&gt;
          &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Box<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">div</span>&gt;
        &lt;/<span class="pl-ent">div</span>&gt;

        &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Module-item Module-item--1of3<span class="pl-pds">"</span></span>&gt;
          &lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>Box<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">div</span>&gt;
        &lt;/<span class="pl-ent">div</span>&gt;
      &lt;/<span class="pl-ent">div</span>&gt;
    &lt;/<span class="pl-ent">div</span>&gt;
  &lt;/<span class="pl-ent">div</span>&gt;
&lt;/<span class="pl-ent">div</span>&gt;</pre></div>




                            </div>
                        </div>

 


                </div>
            </div>
        </div>

        <h3 class="u-mt4 u-mb2">Ejemplos de uso de 3x3<h3>

        <h4 class="u-mt6 u-mb3">Ejemplo 1</h4>

            <div class="Module Module--md">
                <div class="Grid">
                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>
                    </div>

                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                    </div>

                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="u-mt6 u-mb3">Ejemplo 2</h4>

            <div class="Module Module--md">
                <div class="Grid">
                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--3of3">
                            <div class="Box"></div>
                        </div>
                    </div>

                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--2of3">
                            <div class="Box"></div>
                        </div>
                    </div>

                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>

                        <div class="Module-item Module-item--1of3">
                            <div class="Box"></div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="u-mt6 u-mb3">Ejemplo 3</h4>

            <div class="Module Module--xs">
                <div class="Grid">
                    <div class="Grid-item u-md-size2of3">
                        <div class="Module-item Module-item--3of3">
                            <div class="Box"></div>
                        </div>
                    </div>

                    <div class="Grid-item u-md-size1of3">
                        <div class="Module-item Module-item--3of3">
                            <div class="Box"></div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="u-mt4">Para ver más ejemplos aplicados de el uso de la grilla 3x3 puede ir a la sección <a href="contenedores.php">Contenedores</a></p>


            <hr />

        <h3 class="u-mt4 u-mb2">Test de alturas:</h3>
    <div  style="display: flex; justify-content: space-between;">
      <div style="width: 80px;" class="Module--120 u-bgColor1"><span data-position="sticky" class="u-textWhite">120px</span></div>
      <div style="width: 80px;" class="Module--240 u-bgColor2"><span data-position="sticky" class="u-textWhite">240px</span></div>
      <div style="width: 80px;" class="Module--xs u-bgColor3"><span data-position="sticky" class="u-textWhite">xs <br> 282px</span></div>
      <div style="width: 80px;" class="Module--sm u-bgColor4"><span data-position="sticky" class="u-textWhite">sm <br> 360px</span></div>
      <div style="width: 80px;" class="Module--450 u-bgColor1"><span data-position="sticky" class="u-textWhite">450px</span></div>
      <div style="width: 80px;" class="Module--md u-bgColor2"><span data-position="sticky" class="u-textWhite">md <br> 510px</span></div>
      <div style="width: 80px;" class="Module--lg u-bgColor3"><span data-position="sticky" class="u-textWhite">lg <br> 615px</span></div>
      <div style="width: 80px;" class="Module--xl u-bgColor4"><span data-position="sticky" class="u-textWhite">xl <br> 720px</span></div>
      <div style="width: 80px;" class="Module--840 u-bgColor1"><span data-position="sticky" class="u-textWhite">840px</span></div>
      <div style="width: 80px;" class="Module--960 u-bgColor2"><span data-position="sticky" class="u-textWhite">960px</span></div>
      <div style="width: 80px;" class="Module--1200 u-bgColor3"><span data-position="sticky" class="u-textWhite">1200px</span></div>
      <div style="width: 80px;" class="Module--1440 u-bgColor4"><span data-position="sticky" class="u-textWhite">1440px</span></div>
      <div style="width: 80px;" class="Module--1680 u-bgColor1"><span data-position="sticky" class="u-textWhite">1680px</span></div>
      <div style="width: 80px;" class="Module--1920 u-bgColor2"><span data-position="sticky" class="u-textWhite">1920px</span></div>
      <div style="width: 80px;" class="Module--2400 u-bgColor3"><span data-position="sticky" class="u-textWhite">2400px</span></div>
    </div>
  </div>

    </div>
</main>


<!-- Footer -->
<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>


