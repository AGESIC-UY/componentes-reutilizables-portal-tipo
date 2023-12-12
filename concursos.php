<?php
  $title = 'Concursos';
?>
<?php include "inc/head.php"; ?>

  <!-- Cabezal -->
  <?php include "inc/header.php"; ?>

  <!-- Contenido -->
  <main class="u-main" id="contenido">
    <div class="Container">
      <div class="Grid">
        <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size7of10">
          <div class="Page">
            <div class="Page-document">
							<span class="Page-subtitle">Fuente: Uruguay Concursa</span>
              <h2 class="Page-title">Concursos</h2>

              <p class="Page-description">El portal Uruguay Concursa brinda una opción a través de un RSS por la cual los organismos pueden poner en sus portales la lista completa de sus propios llamados, o bien de acuerdo al estado en el que se encuentren.</p>

              <h3 id="-c-mo-generar-la-url-para-mostrar-llamados-con-un-rss-">¿Cómo generar la URL para mostrar llamados con un RSS?</h3>
              <p>La URL para poder consumir la salida RSS es la siguiente:</p>
              <pre><code>https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?[Código],[Estado]</code></pre>

              <h4 id="indicaciones">Indicaciones</h4>
              <ul>
                <li>[Código] corresponde al parámetro para filtrar por organismo.</li>
                <li>[Estado] corresponde al parámetro para filtrar por estado.</li>
                <li>Si no se desea filtrar por ningún organismo, [Código] debe ser vacío.</li>
                <li>Si no se desea filtrar por ningún estado, [Estado] debe ser vacío.</li>
                <li>Si ambos [Código] y [Estado] son vacíos, no es obligatorio incluir la coma ni el signo de interrogación.</li>
                <li>Si [Estado] es vacío, pero se manda [Código], la coma de separación no es obligatoria.</li>
              </ul>

              <h4 id="estados">Estados</h4>
              <ol>
                <li><strong>Llamados abiertos:</strong> Corresponden a los llamados cuyo estado web es “Abierto”. El parámetro a pasar es ABIERTO.</li>
                <li><strong>Llamados en proceso:</strong> Corresponden a los llamados cuyo estado web es “Inscripciones Cerradas”, o cuyo estado web corresponde a alguna fase externa del llamado. El parámetro a pasar es PROCESO.</li>
                <li>
                  <p><strong>Llamados cerrados con resolución final:</strong> Corresponden a los llamados cuyo estado web es “Finalizado UC” o “Finalizado Desierto UC”. El parámetro a pasar es CERR_RES.</p>
                  <p><small><strong>Importante:</strong> Los llamados cuyo estado web sea “A Publicar”, “Suspendido”, “Cancelado” o “Finalizado Sin Efecto”, solamente van a poder ser obtenidos en la salida RSS si no se indica ningún filtro por estado. Esto se debe a tales estados no corresponden con ninguno de los descritos más arriba.</small></p>
                </li>
              </ol>

              <h3 id="ejemplos-de-url-con-rss-personalizado">Ejemplos de URL con RSS personalizado</h3>
              <ul>
                <li>Seleccionar solo los llamados en estado abierto (sin filtrar por organismo):
                  <a href="https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?,ABIERTO">https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?,ABIERTO</a></li>
                <li>Seleccionar solo los llamados de Presidencia en proceso:
                  <a href="https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02,PROCESO">https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02,PROCESO</a></li>
                <li>Seleccionar solo los llamados de ONSC cerrados con resolución final:
                  <a href="https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02.008,CERR_RES">https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02.008,CERR_RES</a></li>
                <li>Seleccionar todos los llamados (en cualquier estado), sin filtrar por organismo:
                  <a href="https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados">https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados</a></li>
                <li>Seleccionar todos los llamados de ONSC (en cualquier estado):
                  <a href="https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02.008">https://www.uruguayconcursa.gub.uy/Portal/servlet/com.si.recsel.arssllamados?02.008</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>
