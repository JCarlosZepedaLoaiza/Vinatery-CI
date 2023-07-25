<?= $this->include('templates\header.php')?>
<main class="form-signin col-12">
  <div class="container pt-3 col-12 col-lg-8 col-xl-8 mt-5">
    <div class="card mt-5 px-3">
        <form class="row g-3 py-5" method="post" action="<?= base_url() ?>/Auth/signup">
            <figure class="col-12 text-center">
                <img class="mb-2" src="/assets/logos/Astoria_black.png" alt="AstoriaWine" width="60%">
            </figure>
            <div class="col-12 text-center">
                <h1 class="fs-1 mb-3 fw-semibold text-muted">Registrate</h1>
            </div>
            <?php if (session('duplicate')): ?>
                <div class="alert alert-danger text-center" role="alert">
                    El correo ingresado ya esta ocupado por otro usuario!!!
                </div>
            <?php endif ?>
            <?php if (session('created')): ?>
                <div class="alert alert-success text-center" role="alert">
                    El usuario se ha creado correctamente.
                </div>
            <?php endif ?>
            <div class="col-md-4">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= old('name');?>" placeholder="Javier" required>
            </div>
            <div class="col-md-4">
                <label for="lastname" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= old('lastname');?>" placeholder="Aguilar" required>
            </div>
            <div class="col-md-4">
                <label for="surname" class="form-label">Apellido Materno:</label>
                <input type="text" class="form-control" id="surname" name="surname" value="<?= old('surname');?>" placeholder="Torres" required>
            </div>
            <div class="col-md-4">
                <label for="cel" class="form-label">Celular:</label>
                <input type="tel" class="form-control" id="cel" name="cel" pattern="[0-9]{10}" value="<?= old('cel');?>" placeholder="7245350684" required>
            </div>
            <div class="col-md-8">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= old('email');?>" placeholder="name@example.com" require>
            </div>
            <div class="col-md-4">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" min="8" max="10" value="<?= old('password');?>"  required>
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Direccion</label>
                <textarea class="form-control" id="address" name="address" rows="3" value="<?= old('address');?>" required></textarea>
            </div>
            <div class="mt-5 mb-2 col-12 text-center">
                <button class="col-4 btn btn-lg" type="submit" style="background-color: #6C1528; color: white">
                    Crear
                </button>
            </div>
            <div class="col-12 text-center">
                <p>¿Ya tienes una cuenta? <a href="<?= site_url('Auth/login')?>">Ingresa aqui.</a></p>
            </div>
        </form>
    </div>
  </div>
</main>
<?= $this->include('templates\footer.php')?>

    
  

