<?php require_once("./vista-header/header.php") ?>
<div class="container py-5">
    <!-- bienvenida -->
    <br>
    <div class="row g" id="divbienvenida">
        <div class="col-md-6 d-none d-sm-none d-md-block d-flex justify-content-center aling-items-center">
            <img src="https://img.freepik.com/foto-gratis/mecanico-sosteniendo-algo-sobre-fondo-blanco_1368-4047.jpg?t=st=1656435998~exp=1656436598~hmac=7b10657f032a78a26b368c14f1dd9282c0e142836142bc9af1d0ca0c645b1c50&w=740" class="img-fluid " alt="banner4">
        </div>
        <div class="col-md-6 d-flex flex-column  justify-content-center ">
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://perusupply.com/314-large_default/martillo-cabeza-conica-18-mm-una-curva-mango-de-madera-truper.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://promart.vteximg.com.br/arquivos/ids/714578-1000-1000/133755.jpg?v=637479649076870000" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://promart.vteximg.com.br/arquivos/ids/1794569-1000-1000/22662.jpg?v=637654123753470000" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

    </div>
    <!-- tarjetas -->
    <div class="row g-1 d-flex  justify-content-evenly align-items-center my-3">
        <div class="card col-md-3 " style="width: 15rem;">
            <img src="https://img.freepik.com/foto-gratis/parte-tornillo_143092-1834.jpg?w=900" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tornillos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ir a tienda</a>
            </div>
        </div>

        <div class="card col-md-3" style="width: 15rem;">
            <img src="https://fierros.com.co/wp-content/uploads/2018/06/herramientas-ferreteria-davani-o-1500x800.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pernos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ir a tienda</a>
            </div>
        </div>

        <div class="card col-md-3" style="width: 15rem;">
            <img src="https://fierros.com.co/wp-content/uploads/2018/06/herramientas-ferreteria-davani-o-1500x800.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Fierros</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ir a tienda</a>
            </div>
        </div>

        <div class="card col-md-3" style="width: 15rem;">
            <img src="https://img.freepik.com/foto-gratis/parte-tornillo_143092-1834.jpg?w=900" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">cemento</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ir a tienda</a>
            </div>
        </div>

    </div>
</div>
<?php require_once("./vista-header/footer.php") ?>