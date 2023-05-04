<!DOCTYPE html>
<html lang="<?php echo SITE_LANG; ?>">
<head>
  <!-- Agregar basepath para definir a partir de donde se deben generar los enlaces y la carga de archivos -->
  <base href="<?php echo BASEPATH; ?>">

  <meta charset="UTF-8">
  
  <title><?php echo isset($d->title) ? $d->title.' - '.get_sitename() : 'Bienvenido - '.get_sitename(); ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Favicon del sitio -->
  <?php echo get_favicon(); ?>
  
  <!-- inc_styles.php -->
  <?php require_once INCLUDES.'inc_styles.php'; ?>
</head>

<body class="<?php echo isset($d->bg) && $d->bg === 'dark' ? 'bg-dark' : 'bg-light' ?>" style="<?php echo 'padding: '.(isset($d->padding) ? $d->padding : '0px 0px'); ?>">
<div class = "encabezado">
              <img class = "col-md-3" src="<?php echo IMAGES.'Logo_CDMX.png' ?>" alt="">
              <img class = "col-md-3" src="<?php echo IMAGES.'Logo_Dependencia.png' ?>" alt="">
              <?php
                      //echo "<label for=''>  " .$_SESSION['sesion']['nombre'].' '.$_SESSION['sesion']['AP']."</label>";
                  ?>

              <h6 style = "float:right;"><?php echo get_name_user(); ?></h6>
              
  </div>
<!-- ends inc_header.php -->