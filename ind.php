<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Latest compiled and minified bootstrap-select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <title>Pagina Principal</title>
</head>

<div class = "encabezado">
    <img  class = "col-xs-12 col-md-12" height="90" width = "100%" src="assets/images/logo1.jpg" alt="">          
    
    <nav class="navbar navbar-expand-lg navbar-light" >
      <div class="container-fluid">
        <a class="navbar-brand" href="templates/view/paginaPrincipal/indexView.php">Eficiencia Energética</a>
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


  </div>

<body>
    <div id ="titulo" class = "col-xs-12 col-md-12">
        <div class="col-xs-12 col-md-4 card-title text-center " style =  " bottom: 0;" >
          <a href = "https://forms.gle/pGnoHaFvW1ZUfZLX8" type="button" class="btn btn-success btn-lg" target="_blank" >Inscripciones</a>
        </div>
        <img  id = "imagen" class="col-xs-12 col-md-12" width="560" height="500" src="assets/images/paginaP.gif" alt="">
      </div>
      
      
              <div class="container">    
                
                <br><br><br><br>
      
                <h1 class="col-xs-12 col-md-12 text-center"> ¿Sabes qué es eficiencia energética?</h1>
                <hr>
                
                <br><br><br>
                
                <!-- Carrusel de infografias -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <a href="https://drive.google.com/file/d/1wd0vC9uS7aMkUWXCXo6142QvdW07EU4k/view?usp=share_link" target = "_blank">
                        <img src="assets/images/infografiaEficienciaE.PNG" class="d-block w-100" alt="...">
                      </a>  
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Quieres saber más...</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <a href="https://drive.google.com/file/d/157HNhdpUzPCv-ct4u79WBnrbFeDLMTgX/view?usp=sharing" target = "_blank">
                        <img src="assets/images/infografiaEficiencia.PNG" class="d-block w-100" alt="...">
                      </a>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Quieres saber más...</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <a href="https://drive.google.com/file/d/1yrzV26gobIloSwSkPQfeftDzyQsybpj9/view?usp=share_link" target = "_blank">
                        <img src="assets/images/infografia3.PNG" class="d-block w-100" alt="...">
                      </a>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Quieres saber más...</h5>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <a href="https://drive.google.com/file/d/1kqgHCnDqidfN619CbBByf2ip01pxgBzg/view?usp=share_link" target = "_blank">
                        <img src="assets/images/infografia4.PNG" class="d-block w-100" alt="...">
                      </a>
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Quieres saber más...</h5>
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
      
                <br><br><br>
      
                <div class="temas">
                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="zoom card">
                        <img  class="card-img-top" src="assets/images/electromovilidad.jpg" alt="...">
                        <div class="card-body">
                          <p class="card-text">12 de mayo 9:00 hrs - 12:00 hrs</p>
                          <a href="Electo" class="btn  btn-success">Electromovilidad</a>
                        </div>
                      </div>
                    </div>
      
                    <div class="col-xs-12 col-sm-4">
                      <div class="zoom card">
                        <img  class="card-img-top" src="assets/images/agua.jpg" alt="...">
                        <div class="card-body">
                          <p class="card-text">19 de mayo 10:00 hrs - 13:00 hrs </p>
                          <a href="Agua" class="btn  btn-success">Agua</a>
                        </div>
                      </div>
                    </div>
      
      
                    <div class="col-xs-12 col-sm-4">
                      <div class="zoom card">
                        <img  class="card-img-top" src="assets/images/residuos.png" alt="...">
                        <div class="card-body">
                          <p class="card-text">26 de mayo 10:00 hrs - 13:00 hrs</p>
                          <a href="Residuo" class="btn  btn-success">Residuos Urbanos</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
              <br><br>
      
              <div class="ubicacion col-xs-12 col-md-12 text-center">
                <h3>Encuentranos en... </h3>
                <hr>
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.2434766406227!2d-99.1847789256076!3d19.48815793890595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f87a5cee989f%3A0x8a05aa70b9f684f4!2sVallejo-i!5e0!3m2!1ses!2smx!4v1683226269512!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
      
                <br><br><br><br><br>
                
              </div>  


              <footer class="pt-2 text-center text-small">
                <nav class="redes-container navbar navbar-expand-lg navbar-light " style="background-color: #a31c3a;">
                  <div class="container-fluid">
                    <a class="navbar-brand" >Redes Sociales</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="https://www.facebook.com/profile.php?id=100090831654332" target = "_blank"><i class="bi bi-facebook" target = "_blanck" ></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://www.instagram.com/usoeficientedelaenergia_23/" target = "_blank"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://twitter.com/UEEAERU23" target = "_blank"><i class="bi bi-twitter"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified bootstrap-select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
</body>
</html>