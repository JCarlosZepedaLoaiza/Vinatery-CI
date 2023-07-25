<?= $this->include('templates\header.php')?>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col py-3 mt-4">
            <p class="border-bottom fs-3 text-muted fw-bold">PRODUCTOS DESTACADOS</p>
        </div>
    </div>
</div>
<div class="col-12 py-2 d-flex flex-wrap">
    <?php foreach($results as $item) { ?>
        <div class="card shadow p-2 mb-3 rounded col-12 col-sm-6 col-md-3 col-lg-3 mx-1">
            <img src="/assets/img/<?php echo $item['id_category'] . "/" . $item['id_sub'] . "/" . $item['image'] ?>" class="card-img-top" alt="<?php echo $item['image']; ?>">
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
<?= $this->include('templates\footer.php')?>