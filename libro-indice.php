<?php
  $title = 'Índice Libro';
?>
    <?php include "inc/head.php"; ?>

        <!-- Cabezal -->
        <?php include "inc/header.php"; ?>

            <!-- Libro - Cabezal -->
						<?php include "inc/book-group.php"; ?>

            <!-- Contenido -->
            <main class="u-main u-nt6" id="contenido">
                <div class="Container">
                    <div class="Grid">
                        <div class="Grid-item u-md-size3of10">
													
														<div class="Box Box--mf">
															<div class="Grid">
																<div class="Grid-item u-size5of12 u-md-sizeFull u-md-mb2">
																		<img src="img/mural.jpg" class="u-sizeFull u-md-size1of2 u-imgBorderRadius" alt="Carátula del libro">
														        </div>
                                                            <div class="Grid-item u-size7of12 u-md-sizeFull">
                                                                <h3 class="u-textSmall u-mb0">Autor</h3>
                                                                <p class="u-mt0 u-mb2"><strong>Nombre Apellido</strong></p>
                                                                <h3 class="u-textSmall u-mb0">Fecha de creación</h3>
                                                                <p class="u-mt0 u-mb2"><strong>00/00/0000</strong></p>
                                                                <h3 class="u-textSmall u-mb0">Tipo de publicación</h3>
                                                                <p class="u-mt0 u-mb2"><strong>Guía práctica</strong></p>
                                                            </div>
																</div>
															
																<div>
																	<p class="u-mt0 u-mb2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
																</div>
															
                                <p class="u-my0">
																	<a class="Button Button--inverse Button--block" href="#">Descargar libro (.pdf, 000 kb)</a>
																</p>
                            </div>

                        </div>
                        <div class="Grid-item u-md-size7of10">
                            <div class="Page">
                                <div class="Page-body">
                                    <div class="Page-document">
                                        <div class="Page-index Index">
                                            <div class="Index-header">
                                                <span class="u-h3">Índice</span> <span class="Index-close">Cerrar</span>
                                            </div>
                                            <div class="Index-body">
                                                <ul class="Index-nav">
                                                    <li><a href="libro-cap-1.php">Nombre del capítulo 1</a></li>
                                                    <li><a href="libro-cap-2.php">Nombre del capítulo 2</a></li>
                                                    <li><a href="#section3">Nombre del capítulo 3</a></li>
                                                    <li><a href="#section4">Nombre del capítulo 4</a></li>
                                                    <li><a href="#section5">Nombre del capítulo 5</a></li>
                                                    <li><a href="#section6">Nombre del capítulo 6</a></li>
                                                    <li><a href="#section7">Nombre del capítulo 7</a></li>
                                                    <li><a href="#section8">Nombre del capítulo 8</a></li>
                                                    <li><a href="#section9">Nombre del capítulo 9</a></li>
                                                    <li><a href="#section10">Nombre del capítulo 10</a></li>
                                                    <li><a href="#section11">Nombre del capítulo 11</a></li>
                                                    <li><a href="#section12">Nombre del capítulo 12</a></li>
                                                    <li><a href="#section13">Nombre del capítulo 13</a></li>
                                                    <li><a href="#section14">Nombre del capítulo 14</a></li>
                                                    <li><a href="#section15">Nombre del capítulo 15</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="Pagination u-mb6 u-md-mb3">
                                            <ul class="Pagination-links">
                                                <li class="Pagination-next u-textRight"><a href="libro.php">Nombre del capítulo 1</a></li>
                                            </ul>
                                        </div>
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
