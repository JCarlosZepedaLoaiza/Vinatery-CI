<?= $this->include('templates\header.php')?>
<!-- Espacio para Carrusel -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade col-12" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="8000">
            <img src="/assets/img/landpage4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-lg" href="#" role="button" style="background-color: #6C1528; color: white;">¡COMPRA AHORA!</a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            <img src="/assets/img/landpage2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-lg" href="#" role="button" style="background-color: #6C1528; color: white;">¡COMPRA AHORA!</a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            <img src="/assets/img/landpage3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-lg" href="#" role="button" style="background-color: #6C1528; color: white;">¡COMPRA AHORA!</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col py-3 mt-4">
            <p class="border-bottom fs-3 text-muted fw-bold">PRODUCTOS DESTACADOS</p>
        </div>
    </div>
</div>
<div class="col-12 py-2 d-flex no-wrap" style="overflow-x: scroll">
    <?php foreach($results as $item) { ?>
        <div class="card shadow p-2 mb-3 rounded col-12 col-sm-6 col-md-4 col-lg-3 mx-1">
            <img src="assets/img/<?php echo $item['id_category'] . "/" . $item['id_sub'] . "/" . $item['image'] ?>" class="card-img-top" alt="...">
            <div>
                <h5 class="card-title"> <?php echo $item['name'] ?> </h5>
                <p class="text-muted"> <?php echo $item['description'] ?> </p>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-6">
                        <p class="fs-5 fw-semibold text-muted">$ <?php echo $item['price'] ?></p>
                    </div>
                    <div class="col-6">
                        <a href=" <?php base_url() ?>/Shoppingcart/index" class="btn d-flex" style="background-color: #6C1528; color: white">
                            <ion-icon name="cart-outline" class="mr-3 lead fs-4"></ion-icon>
                            Agregar
                        </a>
                    </div>
                </div>                
            </div>
        </div>
    <?php }?>
</div>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col py-3 mt-4">
            <p class="border-bottom fs-3 text-muted fw-bold">NUESTRAS PROMOCIONES</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="mb-4 bg-light rounded-3" style="position:relative">
        <figure class="col-12">
            <img src="/assets/img/promo3.jpg" alt="Promo 1" style="width: 100%">
        </figure>
        <button class="btn fw-bold" style="position:absolute; left: 1.5rem; bottom: 1rem; background-color: #6C1528; color: white" type="button">
                Ir a la promocion
        </button>
    </div>
    <div class="row">
        <div class="col-md-6 mb-2" style="position:relative">
            <figure class="col-12">
                <img src="/assets/img/promo2.png" alt="Promo 2" style="width: 100%">
            </figure>
            <div class="px-1 py-1"
            style="position: absolute; bottom: 0; background-color: rgba(0,0,0,0.5); color: white"
            >
                <label class="display-5 fw-bold fs-4">2X1 en STELLA ARTOIS</label>
                <p class="fw-semibold fs-6">STELLA ARTOIS regresa a nuestra tienda a un precio especial, descubrelo solo aqui...</p>
                <button class="btn fw-bold" style="background-color: #6C1528; color: white" type="button">
                    Ir a la promocion
                </button>
            </div>
        </div>
        <div class="col-md-6 mb-2" style="position: relative">
            <figure class="col-12">
                <img src="/assets/img/promo5.jpg" alt="Promo 3" style="width: 100%">
            </figure>
            <div class="px-1 py-1"
            style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0,0,0,0.5); color: white"
            >
                <label class="display-5 fw-bold fs-4">QUINCENA DE LAS BEBIDAS</label>
                <p class="fw-semibold fs-6">Liquidacion de botellas en marcas seleccionadas.</p>
                <button class="btn fw-bold" style="background-color: #6C1528; color: white" type="button">
                    Ir a la promocion
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->include('templates\footer.php')?>