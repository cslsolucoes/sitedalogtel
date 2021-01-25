
<div id="home" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#0" data-slide-to="0" class="active"></li>
      <li data-target="#1" data-slide-to="1"></li>
    </ol>

    <div class="section-slide carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid d-block w-100 h-75 float-right foto" src="<?= $uri ?>/node_modules/img/slide1.jpg" alt="0">
            <div class="container carousel-caption d-none d-md-block">
                 <h1>texto</h1>
                 <p>subtexto</p>
                 <a class="btn btn-outline-primary" href="#" >ver </a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="img-fluid d-block w-100 h-75 float-right foto" src="<?= $uri ?>/node_modules/img/slide1.jpg" alt="0">
            <div class="container carousel-caption d-none d-md-block">
                 <h1>texto</h1>
                 <p>subtexto</p>
                 <a class="btn btn-outline-primary" href="#" >ver </a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#home" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>

</div>