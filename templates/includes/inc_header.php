<?php incluide("inc_styles.php"); ?>
<?php echo '<!DOCTYPE html>
<html>
<head>
  <!-- Agregar basepath para definir a partir de donde se deben generar los enlaces y la carga de archivos -->

  <meta charset="UTF-8">
  
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Favicon del sitio -->
  <?php echo get_favicon(); ?>
  
  <!-- inc_styles.php -->
</head>

<body class="" style="padding = "0px 0px"); ?>">
  <div class = "encabezado">
    <img  class = "col-xs-12 col-md-12" height="90" src="assets/images/logo1.jpg" alt="">          
    
    <nav class="navbar navbar-expand-lg navbar-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="paginaPrincipal">Eficiencia Energética</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="Agua">Agua</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Electro">Electromovilidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Residuo">Residuos Urbanos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Material Audiovisual
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="AudiovisualAgua">Agua</a></li>
                <li><a class="dropdown-item" href="AudiovisualElectro">Electromovilidad</a></li>
                <li><a class="dropdown-item" href="AudiovisualResiduo">Residuos Urbanos</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </div> '

 ?> 
<!-- ends inc_header.php -->