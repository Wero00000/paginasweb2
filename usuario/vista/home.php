<?php require_once("./vista-header/header.php") ?>

<div class="container">
  <!-- carousel -->
  <div class="row g">
    <div id="carouselExampleFade" class="carousel slide carousel-fade col-md-12 " data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../public/imagen/imagenes-inicio/portada.jpg" class="d-block w-100 img-fluid img_portada" alt="banner1">
          <div class="carousel-caption d-none d-md-block">
            <div>
              <h5>El delivery más rápido</h5>
              <p>Nuestros plazos de entrega son cumplidos con mucha responsabilidad, contando con la mejor logística y personal calificado.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../public/imagen/imagenes-inicio/portada1.jpg" class="d-block w-100 img-fluid img_portada" alt="banner2">
          <div class="carousel-caption d-none d-md-block">
            <div >
              <h5>Los mejores precios</h5>
              <p>Somos los importadores directos, apoyando a los grandes y pequeños emprendedores de nuestro país.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../public/imagen/imagenes-inicio/portada2.jpg" class="d-block w-100 img-fluid img_portada" alt="baner3">
          <div class="carousel-caption d-none d-md-block">
            <div >
              <h5>Calidad y garantia</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

    </div>
  </div>
  <!-- tarjetas -->
  <div class="row g-1 d-flex  justify-content-evenly align-items-center my-3">
    <div class="card col-md-4 " style="width: 15rem;">
      <img src="https://ferreteriainkaforte.com/wp-content/uploads/2020/01/fierro-3-8-min.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fierros</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ir a tienda</a>
      </div>
    </div>

    <div class="card col-md-4" style="width: 15rem;">
      <img src="https://promart.vteximg.com.br/arquivos/ids/1794569-1000-1000/22662.jpg?v=637654123753470000" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cemento</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ir a tienda</a>
      </div>
    </div>

    <div class="card col-md-4" style="width: 15rem;">
      <img src="https://promart.vteximg.com.br/arquivos/ids/570434-1000-1000/17417.jpg?v=637401121986970000" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Carretilla</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ir a tienda</a>
      </div>
    </div>

    <div class="card col-md-4" style="width: 15rem;">
      <img src="https://tubospvc.com.pe/wp-content/uploads/2019/04/1513621.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tubos</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Ir a tienda</a>
      </div>
    </div>

  </div>
  <!-- bienbenida -->
  <br>
  <div class="row g" id="divbienvenida">
    <div class="col-md-6 d-none d-sm-none d-md-block d-flex justify-content-center aling-items-center">
      <img src="../public/imagen/imagenes-inicio/inicio.jpg" class="img-fluid " alt="banner4">
    </div>
    <div class="col-md-6 d-flex flex-column  justify-content-center ">
      <div>
        <h2>los precios mas bajos</h2>
        <p>al alcance de tu mano lorem</p>
        <br>
      </div>
      <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti ea quisquam consequatur iure cupiditate obcaecati incidunt neque dignissimos consequuntur, harum quod pariatur quaerat dolore quidem consectetur natus aliquid vero totam?</h3>
      <br>
      <br>
      <div >
        <a href="#" class="btn btn-primary">Ir a tienda</a>
        <a href="#" class="btn btn-primary">Servicios</a>
      </div>
    </div>

  </div>
</div>
<?php require_once("./vista-header/footer.php") ?>