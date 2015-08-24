<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
<style>
body {
     font: normal 13px/20px Arial, Helvetica, sans-serif;
     color: #969696;
     margin: 0;
     background-color: #fff;
     }
     .error-center {
     width: 800px;
     margin-left: -400px;
     position: absolute;
     top: 30%;
     left: 50%;
     text-align: center;
     }
     .error-404 {
     margin: 0;
     font-size: 200px;
     line-height: 200px;
     font-weight: bold;
     }
     .error-404 span {
     text-shadow: 1px 5px 7px rgba(150, 150, 150, 1);
     }
     h1, h2 {
     color: #616161;
     }
     h2 {
     font-size: 24px;
     line-height: 24px;
     }
     </style>
     
</head>

<body id="top">

<div class="error-center">

     <h1 class="error-404">
     <span>404</span>
     </h1>

<h2 class="title">Page non trouvée</h2>
<p class="message">
La page que vous avez demandée n'existe pas.
</p>
</div>

</body>

</html>
