<?php $title = 'Formulario Paleta de colores'; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>

<div class="u-pt4">
  <div class="Container">

    <a href="#" class="Button Button--primary" data-toggle="modal" data-target="#js-modal-nuevo-grupo">
      Personalizar paleta de colores
    </a>

    <div id="js-modal-nuevo-grupo" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="u-mt5 u-mb5">Paleta de colores</h2>

            <form class="u-mt3">
              <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>

              <fieldset>
                <legend class="u-h5">Colores predeterminados</legend>
                <ul class="form-group-list u-px0">
                  <li>
                    <span class="label label-align-top">Color 1:</span>
                    <ul class="group-list">
                      <li>
                        <label for="color_1">
                          <span><span class="muestra-color u-bgColor1" style="background: #eee;"></span>Azul gub.uy</span>
                        </label>
                      </li>
                    </ul>
                  </li>
                </ul>
              </fieldset>

              <fieldset>
                <legend class="u-h5">Colores personalizables</legend>
                <ul class="form-group-list u-px0">
                  <li>
                    <label for="color_2">Color 2:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-2'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-2" id="color_2" value="36cfc9">
                    </span>
                  </li>
                  <li>
                    <label for="color_3">Color 3:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-3'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-3" id="color_3" value="ea4aaa">
                    </span>
                  </li>
                  <li>
                    <label for="color_4">Color 4:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-4'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-4" id="color_4" value="fcd649">
                    </span>
                  </li>
                  <li>
                    <label for="color_5">Color 5:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-5'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-5" id="color_5" value="6f42c1">
                    </span>
                  </li>
                  <li>
                    <label for="color_6">Color 6:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-6'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-6" id="color_6" value="28a745">
                    </span>
                  </li>
                  <li>
                    <label for="color_7">Color 7:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-7'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-7" id="color_7" value="ee6b1f">
                    </span>
                  </li>

                  <li>
                    <hr class="u-mt1">
                    <label for="color_8">Color 8:</label>
                    <button class="ColorPicker jscolor {valueElement:'chosen-value-8'}"></button>

                    <span class="u-ml1">
                      # <input id="chosen-value-8" id="color_8" value="198580">
                    </span>
                    <span class="input-msg u-textMute u-textSmall">Debe contrastar para usarse como fondo de texto blanco.</span>
                  </li>
                </ul>
              </fieldset>


              <ul class="form-action-buttons">
                <li class="action-buttons-primary">
                  <button class="Button Button--primary u-right">Guardar</button>
                </li>
                <li class="action-buttons-second">
                  <button class="btn-lg btn-link float-left">Cancelar</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


  </div>
</div>

<script src="./js/vendor/jscolor.js"></script>
<?php include 'inc/footer.php'; ?>
<?php include 'inc/foot.php'; ?>
