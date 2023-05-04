<?php require_once INCLUDES.'inc_header.php'; ?>

<div id ="titulo" class = "col-xs-12 col-md-12">
  <div class="col-xs-12 col-md-4 card-title text-center " style =  " bottom: 0;" >
    <button type="button" class="btn btn-success btn-lg">Inscripciones</button>
  </div>
  <img  id = "imagen" class="col-xs-12 col-md-12" width="560" height="500" src="<?php echo IMAGES.'paginaP.gif' ?>" alt="">
</div>


        <div class="container">    
          
          <br><br><br><br>

          <div class="temas">
            <div class="row">
              <div class="col-xs-12 col-sm-4">
                <div class="zoom card">
                  <img  class="card-img-top" src="<?php echo IMAGES.'agua.jpg' ?>" alt="...">
                  <div class="card-body">
                    <p class="card-text">Fecha.</p>
                    <a href="Agua" class="btn  btn-success">Agua</a>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="zoom card">
                  <img  class="card-img-top" src="<?php echo IMAGES.'electromovilidad.jpg' ?>" alt="...">
                  <div class="card-body">
                    <p class="card-text">Fecha.</p>
                    <a href="Electo" class="btn  btn-success">Electromovilidad</a>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="zoom card">
                  <img  class="card-img-top" src="<?php echo IMAGES.'residuos.png' ?>" alt="...">
                  <div class="card-body">
                    <p class="card-text">Fecha.</p>
                    <a href="Residuo" class="btn  btn-success">Residuos Urbanos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br><br><br><br><br>

          <div id ="titulo" class = "col-xs-12 col-md-12">
            <div class="col-xs-12 col-md-4 card-title text-center " style =  " bottom: 0;" >
              <!-- <h1 class="display-4 m-1" ><strong>Que es la eficiencia energética</strong></h1>
              <br> -->
              <button type="button" class="btn btn-success btn-lg">Inscripciones</button>
            </div>
            <img  id = "imagen" class="col-xs-12 col-md-12" src="<?php echo IMAGES.'eficiencia.jpg' ?>" alt="">
          </div>
        </div>  
      
<?php require_once INCLUDES.'inc_footer.php'; ?>