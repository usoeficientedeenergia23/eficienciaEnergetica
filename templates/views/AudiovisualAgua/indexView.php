<?php require_once INCLUDES.'inc_header.php'; ?>

<div id ="titulo" class = "col-xs-12 col-md-12">
  <img  id = "imagen" class="col-xs-12 col-md-12" width="560" height="500" src="<?php echo IMAGES.'Aguaeficiente.gif' ?>" alt="">
</di>

<br><br><br><br><br>

      <div class="container">  

        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Vídeos
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body">
                  <br><br>
          
                  <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card">
                        <iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/gNdhaMYj-jw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                          <h5 class="card-text">El ciclo urbano del agua</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <iframe  class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/8HYVWC3396w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                          <h5 class="card-text">El agua y el cambio global</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/h54zmatn-3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                          <h5 class="card-text">Formas de ahorrar agua</h5>
                        </div>
                      </div>
                    </div>
                  </div>
          
                  <br><br>
          
                  <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/hOPsJzRqyEs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                          <h5 class="card-text">Cosecha de agua de lluvia</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <iframe  class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/nzIJZTNiJ40" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="card-body">
                          <h5 class="card-text">Hundimiento del valle de México.</h5>
                        </div>
                      </div>
                    </div>
                  </div>

                  <br><br>

              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Presentaciones
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Infografía
              </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>

        <br><br><br><br><br>

      </div>
      
      <?php require_once INCLUDES.'inc_footer.php'; ?>