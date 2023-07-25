<?= $this->include('templates\header.php')?>
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col py-3 mt-4">
            <p class="border-bottom fs-3 text-muted fw-bold">SUBCATEGORY</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php if (! empty($products) && is_array($products)): ?>
        <?php foreach ($products as $item): ?>
            <div class="col mt-6">
                <div class="card shadow-sm">
                    <?php if (! empty($products) && is_array($products)): ?>
                        <img src="/assets/img/products/<?= esc($item['image']) ?>" class="card-img-top" alt="...">
                    <?php else: ?>
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <?php endif ?>
                    <div>
                        <h5 class="card-title"> <?php echo $item['name'] ?> </h5>
                        <p class="text-muted"> <?php echo $item['description'] ?> </p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <p class="fs-5 fw-semibold " style="color: #6C1528;">$ <?php echo $item['price'] ?></p>
                            </div>
                            <div class="col-6">
                                <a href=" <?php base_url() ?>/product/<?= esc($item['id'],'url') ?>" class="btn btn-link d-flex" style="color: #6C1528;">
                                    <ion-icon name="add-outline" class="mr-3 lead fs-4"></ion-icon>
                                    Ver mas
                                </a>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <h3>Sin resultados</h3>
    <?php endif ?>
    </div>
</div>
<?= $this->include('templates\footer.php')?>