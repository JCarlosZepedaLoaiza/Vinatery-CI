<?= $this->include('templates\header.php')?>
<!-- Espacio para Carrusel -->
<div class="container-fluid">
    <?= $this->renderSection('carrusel') ?>
</div>
<div class="container-fluid">
    <div class="row align-items-center">
        <h2 class="pb-2 border-bottom">PRODUCTOS DESTACADOS</h2>
    </div>
</div>

<div class="container-fluid">
    <?= $this->renderSection('destacados') ?>
</div>
<h2 class="pb-2 border-bottom">NUESTRAS PROMOCIONES</h2>
<div class="container-fluid">
    <?= $this->renderSection('promociones') ?>
</div>
<?= $this->include('templates\footer.php')?>