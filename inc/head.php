<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title><?php echo $title; ?> | Portal Base</title>

  <link rel="stylesheet" href="css/portal-unificado.css">
	<?php if (isset($form) && $form) : ?>
  <link rel="stylesheet" href="css/formulario-tipo.css">
	<?php endif; ?>
  <link rel="stylesheet" href="css/custom.css">

  <!-- favicons -->
  <link rel="shortcut icon" type="image/ico" href="./assets/favicons/favicon.ico?v=4">
  <link rel="icon" type="image/png" href="./assets/favicons/favicon.png?v=4">
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicons/favicon-192.png?v=4" />
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/favicon-180.png?v=4">

  <!-- meta -->
  <meta name="theme-color" content="#003da5">
  <meta name="description" content="">

  <meta property="og:title" content="[Titulo de la página/contenido/subhome]">
  <meta property="og:description" content="[Resumen de la página/contenido o información cargada al momento de crear subhome]">
  <meta property="og:image" content="[Logo de gubuy por defecto en todas las páginas (./assets/logo-gubuy.png) o imagen cargada al momento de crear subhome]">

  <!--[if lt IE 9]>
    <script src="js/vendor/polyfills.js"></script>
  <![endif]-->
</head>
<body<?php if (isset($bg_white) && $bg_white) : ?> class="u-bgWhite"<?php endif; ?>>
  <a class="SkipLink" href="#contenido">Ir al contenido</a>
  <a class="SkipLink" href="#menu">Ir al menú de navegación</a>
