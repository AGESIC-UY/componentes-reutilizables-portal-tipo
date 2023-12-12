<?php $title = 'Suscripción a notificaciones'; ?>
<?php $logged = false; ?>
<?php $form = true; ?>
<?php include 'inc/head.php'; ?>

<div id="contenido" class="u-main">
    <div class="Container">
        <div class="Grid">
            <div class="Grid-item Grid-item--center u-md-size8of10">
                <div class="Page">
                    <h2 class="Page-title">Quiero recibir notificaciones de este organismo</h2>
                    <div class="Grid">
                        <div class="Grid-item u-md-size10of10">
                            <form action="./">
                                <p class="form-required">Los campos indicados con <span>*</span> son obligatorios</p>
                                <fieldset>
                                    <legend class="u-h5">Dónde, cuándo y qué</legend>
                                    <ul class="form-group-list">
                                        <li>
                                            <label for="titulo">Correo electrónico:*</label>
                                            <input id="titulo" name="nombre_direccion" maxlength="120" type="text"
                                                value="victorialacazette@gmail.com">
                                            <span class="input-msg">Es el correo al que llegarán las notificaciones</span>
                                        </li>
                                        <li>
                                            <span class="label label-align-top">Frecuencia:*</span>
                                            <ul class="group-list">
                                                <li>
                                                    <label for="pedido-informe">
                                                        <input type="radio" id="pedido-informe" name="tipo-pedido"
                                                            value="pedido-informe" title="Pedido de informe">
                                                        <span>Todos los días</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="pedido-informe">
                                                        <input type="radio" id="pedido-informe" name="tipo-pedido"
                                                            value="pedido-informe" title="Pedido de informe">
                                                        <span>Una vez por semana</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="pedido-informe">
                                                        <input type="radio" id="pedido-informe" name="tipo-pedido"
                                                            value="pedido-informe" title="Pedido de informe">
                                                        <span>Una vez cada 15 días</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="pedido-info">
                                                        <input type="radio" id="pedido-info" name="tipo-pedido"
                                                            value="pedido-info" title="Pedido de información pública">
                                                        <span>Una vez por mes</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <fieldset>
                                        <legend class="u-h5">Seleccionar los públicos</legend>
                                        <ul class="form-group-list">
                                            <li>
                                                <span class="label label-align-top">Público:</span>
                                                <ul class="group-list">
                                                    <li>
                                                        <label for="publico-uno">
                                                            <input type="checkbox" id="publico-uno" name="opcionesCheck"
                                                                value="opcionCheckUno" title="Opción uno checkbox">
                                                            <span>Opción uno</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="publico-dos">
                                                            <input type="checkbox" id="publico-dos" name="opcionesCheck"
                                                                value="opcionCheckDos" title="Opción dos checkbox">
                                                            <span>Opción dos</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label for="publico-tres">
                                                            <input type="checkbox" id="publico-tres"
                                                                name="opcionesCheck" value="opcionCheckDos"
                                                                title="Opción dos checkbox">
                                                            <span>Opción tres</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="u-h5">Seleccionar los temas</legend>
                                        <div class="Search Search--small u-mb3">
                                            <div>
                                                <input class="Search-input js-search-input" type="search"
                                                    title="Buscador" placeholder="Buscar temas...">
                                                <input class="Search-button" type="submit" value="Buscar">
                                                <div class="Typeahead js-typeahead">
                                                    <ul class="Typeahead-list">
                                                        <li class="Typeahead-item"><a href="#">Tema uno</a></li>
                                                        <li class="Typeahead-item"><a href="#">Tema siete</a></li>
                                                        <li class="Typeahead-item"><a href="#">Tema once</a></li>
                                                        <li class="Typeahead-item"><a href="#">Tema catorce</a></li>
                                                        <li class="Typeahead-item"><a href="#">Tema treinta y dos</a>
                                                        </li>
                                                        <li class="Typeahead-item"><a href="#">Tema cuarenta y uno</a>
                                                        </li>
                                                        <li class="Typeahead-item"><a href="#">Tema cincuenta</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="u-mb0">
                                            <thead>
                                                <tr>
                                                    <th class="u-textLeft u-size3of4">Temas seleccionados</th>
                                                    <th class="u-size1of4">Remover</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-title="Tema">Tema uno</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-title="Tema">Tema siete</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-title="Tema">Tema trece</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-title="Tema">Tema cincuenta</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-title="Tema">Tema once</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td data-title="Tema">Tema treinta y dos</td>
                                                    <td class="u-textCenter">
                                                        <button class="Button Button--primary Button--small">
                                                            <span class="u-hide u-md-show">-</span>
                                                            <span class="u-md-hide">Remover</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="u-textCenter u-textSmall u-mt2 u-textMute">
                                            6 temas seleccionados
                                        </div>
                                    </fieldset>



                                </fieldset>
                                <ul class="form-action-buttons">
                                    <li class="action-buttons-primary">
                                        <ul>
                                            <li>
                                                <button class="Button Button--primary u-right">Guardar</button>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="action-buttons-second">
                                        <ul>
                                            <li class="float-left">
                                                <button class="btn-lg btn-link">Cancelar</button>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/foot.php'; ?>