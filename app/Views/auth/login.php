<?= $this->include('templates\header.php')?>
<main class="form-signin col-12">
  <div class="container pt-3 col-12 col-lg-6 col-xl-6 mt-5">
    <div class="card mt-5 px-3">
        <form class="py-5" method="post" action="<?= base_url() ?>/Auth/logup">
            <figure class="col-12 text-center">
                <img class="mb-2" src="/assets/logos/Astoria_black.png" alt="AstoriaWine" width="70%">
            </figure>
            <div class="col-12 text-center">
                <h1 class="fs-1 mb-3 fw-semibold text-muted">Bienvenido</h1>
            </div>
            <?php if (session('invalid')): ?>
                <div class="alert alert-danger text-center" role="alert">
                    Las credenciales ingresadas son incorrectas, intentelo de nuevo...
                </div>
            <?php endif ?>
            <div class="col-md-12 mb-3">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= old('email');?>" placeholder="name@example.com" require>
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" min="8" max="10" value="<?= old('password');?>"  required>
            </div>
            <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recuerdame
                </label>
            </div> -->
            <div class="mb-2 mt-4 col-12 text-center">
                <button class="col-4 btn btn-lg" type="submit" style="background-color: #6C1528; color: white">
                    Ingresar
                </button>
            </div>
            <div class="col-12 text-center">
                <p>¿Aun no tienes una cuenta? <a href="<?= site_url('Auth/signin')?>">Registrate aqui.</a></p>
            </div>
        </form>
    </div>
  </div>
</main>
<?= $this->include('templates\footer.php')?>
