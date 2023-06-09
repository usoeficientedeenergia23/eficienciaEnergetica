<?php require_once INCLUDES.'inc_header.php'; ?>

<div id ="titulo" class = "col-xs-12 col-md-12">
  <div class="col-xs-12 col-md-4 card-title text-center " style =  " bottom: 0;" >
    <a href = "https://forms.gle/pGnoHaFvW1ZUfZLX8" type="button" class="btn btn-success btn-lg" target="_blank" >Inscripciones</a>
  </div>
  <img  id = "imagen" class="col-xs-12 col-md-12" width="560" height="500" src="<?php echo IMAGES.'paginaP.gif' ?>" alt="">
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
                  <img src="<?php echo IMAGES.'infografiaEficienciaE.png' ?>" class="d-block w-100" alt="...">
                </a>  
                <div class="carousel-caption d-none d-md-block">
                  <h5>Quieres saber más...</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://drive.google.com/file/d/157HNhdpUzPCv-ct4u79WBnrbFeDLMTgX/view?usp=sharing" target = "_blank">
                  <img src="<?php echo IMAGES.'infografiaEficiencia.png' ?>" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Quieres saber más...</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://drive.google.com/file/d/1yrzV26gobIloSwSkPQfeftDzyQsybpj9/view?usp=share_link" target = "_blank">
                  <img src="<?php echo IMAGES.'infografia3.png' ?>" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Quieres saber más...</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="https://drive.google.com/file/d/1kqgHCnDqidfN619CbBByf2ip01pxgBzg/view?usp=share_link" target = "_blank">
                  <img src="<?php echo IMAGES.'infografia4.png' ?>" class="d-block w-100" alt="...">
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
                  <img  class="card-img-top" src="<?php echo IMAGES.'electromovilidad.jpg' ?>" alt="...">
                  <div class="card-body">
                    <p class="card-text">12 de mayo 9:00 hrs - 12:00 hrs</p>
                    <a href="Electo" class="btn  btn-success">Electromovilidad</a>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="zoom card">
                  <img  class="card-img-top" src="<?php echo IMAGES.'agua.jpg' ?>" alt="...">
                  <div class="card-body">
                    <p class="card-text">19 de mayo 10:00 hrs - 13:00 hrs </p>
                    <a href="Agua" class="btn  btn-success">Agua</a>
                  </div>
                </div>
              </div>


              <div class="col-xs-12 col-sm-4">
                <div class="zoom card">
                  <img  class="card-img-top" src="<?php echo IMAGES.'residuos.png' ?>" alt="...">
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
      
<?php require_once INCLUDES.'inc_footer.php'; ?>